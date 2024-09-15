<?php

namespace App\Http\Controllers\Admin;

use App\Common;
use App\Http\Controllers\Controller;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    use Common;
       // when you find yourself write static code in construct
    // just assign the value to property direct

    // where to store files
    protected string $filesPath = "assets/images";
    // name of file in the frontend
    protected string $fileName = "image";
    protected string $model = '';

    //  if there is a relation with another model
    protected string $relationModel = '';
    protected string $relations = '';

    // columns to create and update
    protected array $columns = [];

    public function index(): View
    {

        $model = new $this->model;
        if($this->relations !== '') {
            $model = $model::with($this->relations);
        }

        $data = $model->get();

        return view('admin.'.$this->getViewName('index'), compact('data'));
    }

    public function create(): View
    {
        $relationData = '';

        if($this->relationModel !== '') {
            $relationData = $this->relationModel::get();
        }

        return view('admin.'.$this->getViewName('create'), compact('relationData'));
    }

    public function store(Request $request): RedirectResponse
    {
        // check if request is coming with file
        $data = $this->checkRequestForFiles($request); // if there was an image has to chick
        //no need for relation data
        // dd($data);
        $this->model::create($data); //Car::create()
        return redirect()->route($this->getViewName('index'));///lowerCase modelName.index   ex car.index
    }
    public function show(String $id): View
    {
        $model = new $this->model;

        if($this->relations !== '') {
            $model = $model::with($this->relations);  //Car::with('category')
        }
        $data = $model->findOrFail($id);  //
        return view('admin.'.$this->getViewName('show'), compact('data'));
    }
    public function edit(String $id): View
    {
        $data = $this->model::findOrFail($id);
        $relationData = '';

        if($this->relationModel !== '') {
            $relationData = $this->relationModel::get();
        }
        return view('admin.'.$this->getViewName('edit'), compact('data', 'relationData'));
    }
    public function update(Request $request, String $id): RedirectResponse
    {
        $data = $this->checkRequestForFiles($request);
        // dd($data);

        $this->model::where('id', $id)->update($data);
        return redirect()->route($this->getViewName('index'));
    }
    public function destroy(String $id): RedirectResponse
    {
        $this->model::where('id', $id)->delete();
        return redirect()->route($this->getViewName('index'));
    }

    protected function getViewName($action)
    {
        return strtolower(class_basename($this->model)) . '.' . $action;
    }

    protected function checkRequestForFiles(Request $request)
    {
        $data = $request->only($this->columns);

        if ($request->hasFile($this->fileName)) {
            $fileName = $this->upload_file($request[$this->fileName], $this->filesPath);
            $data[$this->fileName] = $fileName;
        }

        return $data;
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ServiceController extends BaseController
{

    protected string $filesPath = "assets/images/service";
    // name of file in the frontend
    protected string $model = Service::class;

    //  if there is a relation with another model
    // protected string $relationModel = '';
    // protected string $relations = '';

    /**
     * Display a listing of the resource.
     */

     public function __construct() {
        $this->columns = (new Service())->getFillable();
    }



    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'=>'required|string|unique:services,title',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=>'required|string',
        ]);
       return parent::store($request);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $data=$request->validate([
            'title'=>'required|string|unique:services,title',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=>'required|string',
            'old_image'=>'required|string',
        ]);

        return parent::update($request,$id);
    }
}

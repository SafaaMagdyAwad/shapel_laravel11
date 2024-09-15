<?php

namespace App\Http\Controllers\Admin;

use App\Common;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BlogController extends BaseController
{

    protected string $filesPath = "assets/images/blog";
    // name of file in the frontend
    protected string $model = Blog::class;

    //  if there is a relation with another model
    // protected string $relationModel = '';
    // protected string $relations = '';

    /**
     * Display a listing of the resource.
     */

     public function __construct() {
        $this->columns = (new Blog())->getFillable();
    }



    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=>'required|string',
            'like'=>'required',
        ]);
       return parent::store($request);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $data=$request->validate([
            'title'=>'required|string',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=>'required|string',
            'old_image'=>'required|string',
        ]);

        return parent::update($request,$id);
    }

}

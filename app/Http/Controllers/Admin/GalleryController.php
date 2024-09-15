<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GalleryController extends BaseController
{

    protected string $filesPath = "assets/images/gallery";
    // name of file in the frontend
    protected string $model = Gallery::class;

    //  if there is a relation with another model
    // protected string $relationModel = '';
    // protected string $relations = '';

    /**
     * Display a listing of the resource.
     */

     public function __construct() {
        $this->columns = (new Gallery())->getFillable();
    }



    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image_title'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
       return parent::store($request);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'image_title'=>'required|string',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'old_image'=>'required|string',
        ]);
        return parent::update($request,$id);
    }
}

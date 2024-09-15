<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TestimonialController extends BaseController
{

    protected string $filesPath = "assets/images/testimonial";
    // name of file in the frontend
    protected string $model = Testimonial::class;

    //  if there is a relation with another model
    // protected string $relationModel = '';
    // protected string $relations = '';

    /**
     * Display a listing of the resource.
     */

     public function __construct() {
        $this->columns = (new Testimonial())->getFillable();
    }



    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'message'=>'required|string',
        ]);
       return parent::store($request);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $data=$request->validate([
            'name'=>'required|string',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'message'=>'required|string',
            'old_image'=>'required|string',
        ]);

        return parent::update($request,$id);
    }
}

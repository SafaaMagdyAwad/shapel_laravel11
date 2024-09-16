<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseController
{
    protected string $filesPath = "assets/images/user";
    // name of file in the frontend
    protected string $model = User::class;

    //  if there is a relation with another model
    // protected string $relationModel = '';
    // protected string $relations = '';

    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->columns = (new User())->getFillable();
    }



    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $request['password']=Hash::make($request->password);
        $request['active']=1;
        return parent::store($request);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'old_password' => 'required|string',
        ]);
        $request['password']=isset($request->password)?Hash::make($request->password):$request->old_password;
        return parent::update($request, $id);
    }

}

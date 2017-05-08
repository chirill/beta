<?php

namespace App\Http\Controllers;

use App\Location;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::pluck('name','id')->all();
        $locations = Location::pluck('name','id')->all();
        return view('admin.users.create',compact('roles','locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if (empty($request->password)){
            $input = $request->all();
            $input['password'] = bcrypt('Lotus!234');
        }else{
            $input = $request->all();
        }
        User::create($input);

        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //

        return view('admin.users.show',compact('user','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $roles = Role::pluck('name','id')->all();
        $locations = Location::pluck('name','id')->all();
        return view('admin.users.edit',compact('user','roles','locations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        User::findOrFail($id)->update($request->all());
        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::findOrFail($id)->delete();
        return redirect('admin/users');
    }

    public function trashed(){
        //
        $users = User::onlyTrashed()->get();
        return view('admin.users.trash',compact('users'));
    }

    public function restore($id){
        $user = User::onlyTrashed()->whereId($id)->restore();
        return redirect('admin/users');
    }


}

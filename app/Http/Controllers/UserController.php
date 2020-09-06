<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.user.index')->with([
          'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user.create')->with([
          'roles' => Role::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'name' => ['required'],
        'email' => ['required'],
        'password' => ['required'],
        'role' => ['required'],
      ]);

        $user = User::create([
          'name' => $request['name'],
          'email' => $request['email'],
          'password' => Hash::make($request['password']),
        ]);

        $user->roles()->attach(Role::find($request['role']));

        if($user){
          Session::flash('success', $user->name.' was added with email '.$user->email.' as '.$user->roles->first()->name);
        }else{
          Session::flash('error', 'Something went wrong!');
        }
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('pages.user.edit')->with([
          'user' => $user,
          'roles' => Role::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request['name'];
        $user->email = $request['email'];

        $user->roles()->sync($request['role']);

        if($request['password'] != ''){
          $user->password = Hash::make($request['password']);
        }

        if($user->save()){
          Session::flash('success', $user->name.' was updated with email '.$user->email.' as '.$user->roles->first()->name);
        }else{
          Session::flash('error', 'Something went wrong!');
        }

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->roles()->detach();

        $name = $user->name;

        if($user->delete()){
          Session::flash('success', $name.' was deleted');
        }else{
          Session::flash('error', 'Something went wrong!');
        }

        return redirect()->route('user.index');
    }
}

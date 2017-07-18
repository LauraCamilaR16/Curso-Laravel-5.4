<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\User;
use Session;
use Redirect;


class UsuarioControler extends Controller
{
  /**
  *Display
  *
  *@return Response
  */
  public function index()
  {
    $users = \Cinema\User::All();
    return view('usuario.index',compact('users'));
  }

  public function create()
  {
    return view('usuario.create');
  }
  /**
  *Store a newly created in Store
  *
  *@return Response
  */
  public function Store(Request $request)
  {
    \Cinema\User::create([
      'name'=>$request['name'],
      'email'=>$request['email'],
      'password'=> bcrypt($request['password']),
    ]);

  return redirect('/usuario')->with('message','store');
  }

  public function edit($id)
  {
      $user = \Cinema\User::find($id);
      return view('usuario.edit',['user'=>$user]);
}

public function update($id, Request $request)
{
    $user = \Cinema\User::find($id);
    $user->fill($request->all());
    $user->save();

    Session::flash('message','Usuario editado');
    return redirect::to('/usuario');
}

public function destroy($id)
{
  User::destroy($id);

  Session::flash('message','Usuario Eliminado correctamente');
  return redirect::to('/usuario');
}

}

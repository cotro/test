<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index()
  {
    $users = User::all();
    return view('user.index', ['users' =>$users]);
  }

  public  function  toggleActive( Request $request, user $user)
  {

    if ($user->is_admin == false) {

        $user->is_admin = ($request->has('is_admin')) ? false : true;
    } else {
        $user->is_admin  = ($request->has('is_admin')) ? true : false;
    }
    $user->save();
    return redirect()->back();
  }


  public  function  delete( Request $request, user $user)
  {

    $list = user::findOrFail($user->id);
        $list->delete();
    return redirect()->back();
  }



}

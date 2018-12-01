<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
//        var_dump($user);

        return view('layouts.account',['user'=>$user]);
    }

    public function updateInfos(Request $request,user $user){

        $row = User::find($user->id);

        if($request['username'] != $user->name){
            $row->name = $request['username'];
            $row->save();
        }

        if($request['email'] != $user->email){
            $row->email = $request['email'];
            $row->save();
        }

        if($request['password'] != '' && strlen($request['password']) >= 6){
            $row->password = bcrypt($request['username']);
            $row->save();
        }

        return redirect()->back();

    }
}

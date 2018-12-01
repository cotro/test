<?php

namespace App\Http\Controllers;
use App\Forfait;
use App\Salle;
use Illuminate\Http\Request;
use  auth;
use Illuminate\Support\Facades\Input;

class SalleController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Salle $salle)
    {
        return view('layouts.salle',['salle'=> $salle]);
    }

    public  function liste()
    {
        $salles = Salle::all();

        $forfaits =  Forfait::all();

        return view('salle.index' ,['salles' =>$salles, 'forfaits' => $forfaits]);
    }

    public  function  create (Request $request)
    {
        $user =Auth::user();
        //dd($request->all());
        $salle =  new Salle;
        $salle->user_id =$user->id;
        $salle->name =$request['inputname'];
        $salle->city =$request['inputville'];
        $salle->address =$request['inputAddress'];
        $salle->postalCode =$request['inputCP'];
        $salle->prix = $request['inputprix'];
        $salle->forfait_id = $request['inputForfait'];
        $salle->nombrePlace = $request['inputPlace'];
        $salle->save();
        return redirect()->back();
    }


    public  function  delete( Request $request, Salle $salle)
    {

        $list = Salle::findOrFail($salle->id);
        $list->delete();
        return redirect()->back();
    }
    public  function  update( Request $request, Salle $salle)
    {
        $forfaits =  Forfait::all();
        return view('salle.edit' ,['salle' => $salle, 'forfaits' => $forfaits]);
    }

    public  function  updateAction ( Request $request, Salle $salle)
    {


        $list = Salle::findOrFail($request['inputid']);

        $list->name =$request['inputname'];
        $list->city =$request['inputville'];
        $list->address =$request['inputAddress'];
        $list->postalCode =$request['inputCP'];
        $list->prix = $request['inputprix'];
        $list->forfait_id = $request['inputForfait'];
        $list->nombrePlace = $request['inputPlace'];

        $list->save();
        return redirect('/AdministrationSalle');
    }


}

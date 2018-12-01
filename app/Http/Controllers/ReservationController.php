<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Reservation;
use App\Salle;
use Auth;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index(Request $request, Salle $salle)
    {
//        dd($salle->forfait_id);exit;

        $resa = new Reservation;
        if ($user = Auth::user()){
            $resa->user_id = $user->id;
        }else{
            $resa->user_id = 2;
        }
        $resa->forfait_id = $salle->forfait_id;
//        $resa->modules_id = $salle->modules_id; Ne fonctionne pas car pas de modules sellectionnable en front
        $resa->modules_id = 1;
        $resa->date_debut_location = $request['fromDate'];
        $resa->date_fin_location = $request['toDate'];
        $resa->nombre_personnes = $salle->nombrePlace;
        $resa->prix_total = $salle->prix;
        $resa->date_creation_reservation = Carbon::today();
        $resa->setCreatedAt(Carbon::today());
        $resa->setUpdatedAt(Carbon::today());
        $resa->save();
//        dd($resa);exit;


        return view('layouts.reservation',['resa'=> $resa, 'salle'=> $salle]);
    }
}

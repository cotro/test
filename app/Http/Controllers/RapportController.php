<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User as User;
use App\Reservation as Reservation;
use PDF;

class RapportController extends Controller
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

        $listeReservation = Reservation::where('user_id','=',$user->id)->get();
        $listeReservation = [
            0 => [
                "id"=>1,
                "prix"=>1500,
                "date_debut"=>"2018-08-15",
                "date_fin"=>"2018-08-20",
            ],
            1 => [
                "id"=>2,
                "prix"=>600,
                "date_debut"=>"2018-09-12",
                "date_fin"=>"2018-09-26",
            ]
        ];

        return view('rapports.rapport',['user'=>$user,'listeReservations'=>$listeReservation]);
    }


    public function generatePDF(Request $requete, Reservation $reservation){
        $reservation = Reservation::find($reservation->id);
        $reservation = [
            "prix" => 1500,
            "date_debut" => "2018-08-15",
            "date_fin" => "2018-08-20",
            "forfait" => "prolétariat",
            "modules_supplementaires" => ""
        ];

        $pdf = PDF::loadView('pdf', compact('reservation'));
        $pdf->download('reservation.pdf');

        return redirect()->back();
    }
}
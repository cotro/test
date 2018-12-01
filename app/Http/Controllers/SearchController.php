<?php

namespace App\Http\Controllers;

use App\Salle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function getDataLocation(Request $request)
    {
//        $method = Request::method();
        $salles = Salle::where('city',$request['emplacement'])
            ->orderBy('name', 'desc')
            ->take(10)
            ->get();
        return view('layouts.searchResult',['salles'=> $salles]);
    }
}

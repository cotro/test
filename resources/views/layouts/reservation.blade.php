@extends('layouts.base')
@section('title','Réservation')


@section('content')
    <div class="container">
            <div class="jumbotron">
                <h1>Récapitulatif pour votre reservation</h1>
                <div class="container">
                    <p>La salle {{ $salle->name }} situé à {{ $salle->city }} à été réservé pour le prix de {{ $salle->prix }} </p>
                    <p>Le nombre maximum de personne correspond à {{ $salle->nombrePlace }} </p>



                </div>
            </div>
    </div>

@endsection
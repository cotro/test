@extends('layouts.base')

@section('title','Descriptif salle')
@section('content')
    <div class="container">
        <div class="jumbotron jumbotron-fluid text-center">
            <h1 class="display-4">{{$salle->name}}</h1>
            <p class="lead">Serait-ce la salle de vos rêves ?</p>
            <hr class="my-4">
            <h3>Adresse</h3>
            <p>{{$salle->address}}</p>
            <p class="lead">

            </p>
            <div class=" text-center">
                <form action="{{url('salle' . "/" . $salle->id ."/reservation")}}">
                    <div class="row text-center">
                        <div class="col-lg-6 col-sm-6">
                            <label for="dateFrom">Date du début de location souhaité</label>
                            <input type="date" name="fromDate" class="form-control" id="dateFrom">
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <label for="dateTo">Date de Fin de location souhaité</label>
                            <input type="date" name="toDate" class="form-control" id="toDate">
                        </div>
                        <div class="sm-4">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Valider</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
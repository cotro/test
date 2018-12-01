@extends('layouts.base')


@section('content')
    <div class="container-fluid">
        <table>
            <thead>
            <tr>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Prix</th>
            </tr>
            </thead>
            <tbody>
        @foreach($listeReservations as $reservation)
                <tr>
                    <td style="width:30%;margin:1em;">
                        {{$reservation['date_debut']}}
                    </td>
                    <td style="width:30%;margin:1em;">
                        {{$reservation['date_fin']}}
                    </td>
                    <td style="width:30%;margin:1em;">
                        {{$reservation['prix']}}
                    </td>
                    <td><button><a href="{{ url('/'.$reservation["id"].'/generatePDF') }}">Générer une facture au format PDF</a></button></td>
                </tr>
        @endforeach
            </tbody>
        </table>
    </div>
@endsection
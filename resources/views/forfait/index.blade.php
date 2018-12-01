@extends('layouts.base')

@section('title', 'gestion de forfait')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-end " style="padding-bottom: 10px">
        <div class="col-4">
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">Ajouter un forfait
            </button>
        </div>
    </div>
    <div class="panel panel-default">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Forfait</th>
                <th>Prix</th>
                <th>Supprimer</th>
                <th>Modifier</th>
            </tr>
            </thead>
            @foreach ($forfaits as $forfait)
                <tbody>
                <tr>
                    <td>{{ $forfait->name }}</td>
                    <td>{{ $forfait->prix }}</td>
                    <td><a href="{{url('Forfait' . "/" . $forfait->id ."/delete")}}" class="btn btn-outline-danger">Supprimer</a></td>
                    <td><a href="{{url('Forfait' . "/" . $forfait->id ."/update")}}" class="btn btn-outline-warning">Changer</a></td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection

<form class="form-signin" action="{{url('/CreateForfait')}}" method="post">
    {{ csrf_field() }}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Nouveau forfait</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputname" class="col-form-label">Nom:</label>
                        <input type="text" class="form-control" id="inputname" name ="inputname" placeholder="Vacances">
                    </div>
                    <div class="form-group">
                        <label for="inputprix" class="col-form-label">prix:</label>
                        <input type="number" class="form-control" id="inputprix" name="inputprix" placeholder="120">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Créer le  forfait </button>
                </div>
            </div>
        </div>
    </div>
</form>

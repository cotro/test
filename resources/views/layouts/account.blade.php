@extends('layouts.base')


@section('content')
    <div class="container">
        <form id="username-update" method="post" action="{{ url('/'.$user->id.'/updateInfos') }}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title"><b class="fa fa-pencil"></b> Nom d'utilisateur</label>
                <input id="username" class="form-control" value="{{ $user->name }}" name="username">
            </div>

            <div class="form-group">
                <label for="title"><b class="fa fa-pencil"></b> Email du compte</label>
                <input id="email" class="form-control" value="{{ $user->email }}" name="email">
            </div>

            <div class="form-group">
                <label for="title"><b class="fa fa-pencil"></b> Changer votre mot de passe</label>
                <input id="password" class="form-control" value="" name="password" placeholder="Nouveau mot de passe">
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
@endsection
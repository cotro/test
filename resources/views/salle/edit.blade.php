@extends('layouts.base')

@section('title',"Modification Salle")
@section('content')
    <div class="container">
        <form action="{{url('/updateSalleAction')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputname">Nom:</label>
                <input type="text" class="form-control" id="inputname" name ="inputname" value={{$salle->name}} >
            </div>
            <div class="form-group">
                <label for="inputAddress">Address:</label>
                <input type="text" class="form-control" id="inputAddress" name ="inputAddress" value={{$salle->address}} >
            </div>
            <div class="form-group">
                <label for="inputville">Ville:</label>
                <input type="text" class="form-control" id="inputville" name ="inputville" value={{$salle->city}} >
            </div>
            <div class="form-group">
                <label for="inputCP">code postale:</label>
                <input type="text" class="form-control" id="inputCP" name ="inputCP" value={{$salle->postalCode}} >
            </div>
            <div class="form-group">
                <label for="inputForfait">Forfait:</label>
                <select id="inputForfait"  name="inputForfait"class="form-control">
                    <option selected>Choississez...</option>
                    @foreach($forfaits  as $forfait)
                        <option value="{{$forfait->id}}">{{$forfait->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="inputprix">Prix:</label>
                <input type="number" class="form-control" id="inputprix" name="inputprix"  value={{$salle->prix}} >
                <input type="hidden" class="form-control" id="inputid" name="inputid"  value={{$salle->id}} >
            </div>
            <div class="form-group">
            <label for="inputprix">Prix:</label>
            <input type="number" class="form-control" id="inputPlace" name="inputPlace"  value={{$salle->nombrePlace}} >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>


@endsection
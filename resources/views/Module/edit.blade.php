@extends('layouts.base')

@section('title',"Modification Modules")
@section('content')
    <div class="container">
        <form action="{{url('/updateModuleAction')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="inputname">Nom:</label>
                <input type="text" class="form-control" id="inputname" name ="inputname" value={{$module->name}} >
            </div>
            <div class="form-group">
                <label for="inputprix">Prix:</label>
                <input type="number" class="form-control" id="inputprix" name="inputprix"  value={{$module->prix}} >
                <input type="hidden" class="form-control" id="inputid" name="inputid"  value={{$module->id}} >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>


@endsection
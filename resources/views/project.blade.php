@extends('adminlte::page')
@section('title', 'AdminLTE')
    
@section('content')
<h3 style="text-align: center">Projects</h3>
    <div class="container">
        <h5>Create project :</h5>
        <form enctype="multipart/form-data" action="/projects_store" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Project's name :
                    <input type="text" name="name" value="{{old('name')}}">
                </label>
            </div>
            <div class="form-group">
                <label for="text">Project's description :</label>
                <textarea class="form-control" id="text" rows="3" name="text" value="{{old('text')}}"></textarea>
            </div>
            <label for="src">Project's Image :
                <input name="src" type="file">
            </label>
            <button type="submit">Create</button>
        </form>
    </div>
@endsection
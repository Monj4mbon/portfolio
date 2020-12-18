@extends('adminlte::page')
@section('title', 'AdminLTE')
    
@section('content')
<div class="container">
    <h5>Edit project :</h5>
    <form enctype="multipart/form-data" action="/admin/project/update/{{$editProject->id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Project's name :
                <input type="text" name="name" value="{{$editProject->name}}">
            </label>
        </div>
        <div class="form-group">
            <label for="text">Project's description :</label>
            <textarea class="form-control" id="text" rows="3" name="text">{{$editProject->text}}</textarea>
        </div>
        <label for="src">Project's Image :
            <input name="src" type="file" value="{{$editProject->src}}">
        </label>
        <button type="submit">Edit</button>
    </form>
</div>
@endsection
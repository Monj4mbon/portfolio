@extends('adminlte::page')
@section('title', 'AdminLTE')
    
@section('content')
<h3 style="text-align: center">Tags</h3>
    <div class="container">
        <h5>Edit Tag :</h5>
        <form enctype="multipart/form-data" action="/admin/tags/update/{{$editTag->id}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Tag's name :
                    <input type="text" name="name" value="{{$editTag->name}}">
                </label>
            </div>
            <div class="form-group">
                <label for="HTML">Tag's HTML class :
                    <input type="text" name="HTML" value="{{$editTag->HTML}}">
                </label>
            </div>
            <button type="submit">Edit</button>
        </form>
    </div>
@endsection
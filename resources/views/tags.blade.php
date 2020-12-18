@extends('adminlte::page')
@section('title', 'AdminLTE')
    
@section('content')
<h3 style="text-align: center">Projects</h3>
    <div class="container">
        <h5>Create project :</h5>
        <form enctype="multipart/form-data" action="/tag_store" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Tag's name :
                    <input type="text" name="name" value="{{old('name')}}">
                </label>
            </div>
            <div class="form-group">
                <label for="HTML">Tag's HTML class :
                    <input type="text" name="HTML" value="{{old('HTML')}}">
                </label>
            </div>
            <button type="submit">Create</button>
        </form>
    </div>
@endsection
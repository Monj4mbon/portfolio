@extends('adminlte::page')
@section('title', 'AdminLTE')
    
@section('content')
<h3 style="text-align: center">About</h3>
    <div class="container">
        <form enctype="multipart/form-data" action="/about_store" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title :
                    <input type="text" name="title" value="{{old('title')}}">
                </label>
            </div>
            <div class="form-group">
                <label for="content">Content :</label>
                <textarea class="form-control" id="content" rows="3" name="content" value="{{old('content')}}"></textarea>
            </div>
            <label for="src">Image :
                <input name="src" type="file">
            </label>
            <button type="submit">Create</button>
        </form>
    </div>
@endsection
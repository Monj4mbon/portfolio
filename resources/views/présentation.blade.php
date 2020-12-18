@extends('adminlte::page')
@section('title', 'AdminLTE')
    
@section('content')
<h3 style="text-align: center">Presentation</h3>
    <div class="container">
        <h5>Create presentation's subject :</h5>
        <form enctype="multipart/form-data" action="/presentation_store" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Presentation's subtitle :
                    <input type="text" name="title" value="{{old('name')}}">
                </label>
            </div>
            <div class="form-group">
                <label for="content">Presentation's content :</label>
                <textarea class="form-control" id="content" rows="3" name="content" value="{{old('content')}}"></textarea>
            </div>
            <button type="submit">Create</button>
        </form>
    </div>
@endsection
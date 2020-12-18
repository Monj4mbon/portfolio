@extends('adminlte::page')
@section('title', 'AdminLTE')
    
@section('content')
<h3 style="text-align: center">Presentation</h3>
    <div class="container">
        <h5>Edit presentation's subject :</h5>
        <form enctype="multipart/form-data" action="/admin/presentation/update/{{$editPresentation->id}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Presentation's subtitle :
                    <input type="text" name="title" value="{{$editPresentation->title}}">
                </label>
            </div>
            <div class="form-group">
                <label for="content">Presentation's content :</label>
                <textarea class="form-control" id="content" rows="3" name="content">{{$editPresentation->content}}</textarea>
            </div>
            <button type="submit">Edit</button>
        </form>
    </div>
@endsection
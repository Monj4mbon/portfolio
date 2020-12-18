@extends('adminlte::page')
@section('title', 'AdminLTE')
    
@section('content')
    <h1 style="text-align: center">All presentations :</h1>
    <div class="container bg-success">
        @foreach ($presentationData as $presentation)
            <div>
                <h4>{{$presentation->title}}</h4>
                <p class="lead mb-5">{{$presentation->content}}</p>
                <a class="btn btn-warning" href="/admin/presentation/edit/{{$presentation->id}}">Edit</a>
                <a class="btn btn-danger" href="/admin/presentation/delete/{{$presentation->id}}">Delete</a>
            </div>
        @endforeach
    </div>
@endsection
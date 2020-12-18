@extends('adminlte::page')
@section('title', 'AdminLTE')
    
@section('content')
    <h1 style="text-align: center">All abouts :</h1>
    <div class="resume-section-content">
        @foreach ($showAbout as $about)
            <div class="card mb-3">                        
                <img src="{{$about->src}}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{$about->title}}</h5>
                    <p class="card-text">{{$about->content}}</p>
                </div>
            </div>
            <a class="btn btn-warning" href="/admin/about/edit/{{$about->id}}">Edit</a>
            <a class="btn btn-danger" href="/admin/about/delete/{{$about->id}}">Delete</a>
        @endforeach
    </div>
@endsection
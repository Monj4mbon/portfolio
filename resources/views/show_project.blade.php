@extends('adminlte::page')
@section('title', 'AdminLTE')
    
@section('content')
<h3 style="text-align: center">Projects</h3>
<div class="row">
    @foreach ($showProject as $project)
        <div class="col-4">
            <div class="card text-white bg-info mb-3" style="width: 18rem;">
                <img width="200px" height="200px" src="{{asset('images/' .$project->src)}}" class="card-img-top">
                <div class="card-header">
                    <h5 class="card-title">{{$project->name}}</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">{{$project->text}}</p>
                </div>
                <div>
                    <a class="btn btn-warning" href="/admin/project/edit/{{$project->id}}">Edit</a>
                    <a class="btn btn-danger" href="/admin/project/delete/{{$project->id}}">Delete</a>
                </div>
            </div>
        </div>
        @if ($loop->iteration % 3 == 0)
            </div>
            <div class="row">
        @endif
    @endforeach
</div>
@endsection
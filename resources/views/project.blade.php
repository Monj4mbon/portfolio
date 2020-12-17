@extends('adminlte::page')
@section('title', 'AdminLTE')

@section('content')
    
@section('content')
<h3 style="text-align: center">Projects</h3>
@auth
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
                <textarea class="form-control" id="text" rows="3" name="text" value="{{old('name')}}"></textarea>
            </div>
            <label for="src">Project's Image :
                <input name="src" type="file">
            </label>
            <button type="submit">Create</button>
        </form>
    </div>
@endauth
<div class="row">
    @foreach ($projectData as $project)
        <div class="col-4">
            <div class="card text-white bg-info mb-3" style="width: 18rem;">
                <img width="200px" height="200px" src="{{asset('images/' .$project->src)}}" class="card-img-top">
                <div class="card-header">
                    <h5 class="card-title">{{$project->name}}</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">{{$project->text}}</p>
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
@stop
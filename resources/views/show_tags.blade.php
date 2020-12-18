@extends('adminlte::page')
@section('title', 'AdminLTE')
    
@section('content')
<h2 class="mb-5">Tags :</h2>
    @foreach ($showTag as $tag)
        <div>
            <i class="{{$tag->HTML}}"></i>
            <a class="btn btn-warning" href="/admin/tags/edit/{{$tag->id}}">Edit</a>
            <a class="btn btn-danger" href="/admin/tags/delete/{{$tag->id}}">Delete</a>
        </div>
        <br>
    @endforeach
@endsection
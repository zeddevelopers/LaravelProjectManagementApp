@extends('layout')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <br/>
      <h1>Edit Project</h1>
      <form action="/project/{{ $project->id }}" method="POST">
        @method('PATCH')
        @csrf
        <input value="{{ $project->title }}" type="text" name="title" placeholder="Title" class="form-control input-lg" /><br/>
        <textarea name="description" placeholder="Desciption" class="form-control input-lg">{{ $project->description }}</textarea><br/>
        <button class="btn btn-warning btn-lg">Edit</button>
      </form>

      <hr />

      <form action="/project/{{ $project->id }}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger btn-sm">Delete</button>
      </form>


    </div>
    <div class="col-md-3"></div>

  </div>
</div>
@endsection

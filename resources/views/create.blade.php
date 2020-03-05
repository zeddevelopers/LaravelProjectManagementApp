@extends('layout')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <br/>

      <h1>Create a brand new project !</h1>

      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
      @endif

      <form action="/project" method="POST">
        @csrf
        <input required value="{{ old('title') }}" type="text" name="title" placeholder="Title" class="form-control input-lg {{ $errors->has('title') ? 'error_field' : '' }}" /><br/>
        <textarea required name="description" placeholder="Desciption" class="form-control input-lg {{ $errors->has('description') ? 'error_field' : '' }}" >{{ old('description') }}</textarea><br/>
        <button class="btn btn-success btn-lg">Create</button>
      </form>

    </div>
    <div class="col-md-3"></div>

  </div>
</div>
@endsection

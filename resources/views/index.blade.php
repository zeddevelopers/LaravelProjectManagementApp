@extends('layout')


@section('content')

<div class="container">
  <div class="row">
    <br/>
    <ul class="list-group">

      @foreach($projects as $project)
        <li class="list-group-item">
          <a href="/project/{{ $project->id }}">{{ $project->title }}</a>
          <a class="btn btn-xs btn-warning pull-right" href="/project/{{ $project->id }}/edit">
            Edit
          </a>
        </li>
      @endforeach

      <li class="list-group-item">
        <a href="/project/create">
          Create New Project
        </a>
      </li>

    </ul>

  </div>
</div>
@endsection

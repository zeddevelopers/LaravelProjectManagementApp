@extends('layout')


@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-12">
              <h1>{{  $project->title }}</h1>
              <p>{{  $project->description }}</p>
            </div>

            <div class="col-md-12">
              <ul class="list-group">
                @if($project->tasks->count())
                  @foreach ($project->tasks as $task)
                    <li class="list-group-item">

                      <form method="POST" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        @csrf
                        <label>
                          <input {{ $task->completed ? 'checked' : '' }} onchange="this.form.submit()" name="completed" type="checkbox" /> {{ $task->description }}
                        </label>
                      </form>

                    </li>
                  @endforeach
                @endif
                <li class="list-group-item">

                  <form method="POST" action="/project/{{$project->id}}/task">
                    @csrf
                    <input placeholder="Add Sub Task.." name="description" class="form-control" type="text" />
                  </form>

                </li>
              </ul>


            </div>

        </div>
    </div>


@endsection

@extends("layouts.layout")

@section('content')

    <h1>Edit Task</h1>
    <hr>

    <form action="{{ route('tasks.update', $task->id) }}" method="post">

        {{ csrf_field() }}
        {{ method_field('put') }}

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$task->name}}" >
        </div>

        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea class="form-control" id="notes" name="notes" >{{$task->notes}}</textarea>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="{{$task->status}}">
        </div>

        <input type="submit"  class="btn btn-primary" value="Save" />

        @include('layouts.errors')

    </form>

@endsection
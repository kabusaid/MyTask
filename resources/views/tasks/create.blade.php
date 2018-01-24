@extends("layouts.layout")

@section('content')

    <h1>Add Task</h1>
    <hr>

    <form action="/tasks" method="post">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
        </div>

        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea class="form-control" id="notes" name="notes">{{old('notes')}}</textarea>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" value="{{old('status')}}">
        </div>

        <input type="submit"  class="btn btn-primary" value="Add Task" />

        @include('layouts.errors')

    </form>

@endsection
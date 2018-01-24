@extends("layouts.layout")

@section('content')

    <div class="element-box">
    <a class="btn btn-primary" href="{{ route('tasks.index') }}"> Back </a>

    <h1>Task Detail</h1>

    <div class="jumbotron">
        <p>
            <strong>Name:</strong> {{ $task->name }} <br>
            <strong>Notes:</strong> {{ $task->notes }} <br>
            <strong>Status:</strong> {{ $task->status }} <br>
            <strong>Name:</strong> {{ $task->created_at->toFormattedDateString() }} <br>
        </p>
    </div>
    </div>

@endsection
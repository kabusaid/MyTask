@extends("layouts.layout")
@section("content")

    <div class="element-box">
        <a class="btn btn-primary" href="/tasks/create"> Add Task </a> <br/><br/>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Notes</th>
                <th>Date</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Show</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td> {{ $task->name  }} </td>
                    <td> {{ $task->notes }} </td>
                    <td> {{ $task->created_at->toFormattedDateString()  }} </td>
                    <td> {{ $task->status }} </td>
                    <td><a class="btn btn-xs btn-info" href="/tasks/{{$task->id }}/edit/"> Edit </a></td>
                    <td><a class="btn btn-xs btn-success" href="/tasks/{{$task->id }}"> Show </a></td>
                    <td>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <input class="btn btn-xs btn-danger" type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
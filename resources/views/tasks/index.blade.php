@extends('Layouts/MainLayout')

@section('pageTitle','Index page')

@section('content')

    <div>
        <a href="{{route('tasks.create')}}">Task create</a>
    </div>


@foreach($tasks as $key=> $task)
    <div>{{$task->id}}:{{$task->title}}
        <div>
            <a href="{{route('tasks.edit', $task->id)}}">Edit task</a>
        </div>

        <div>
            <form method="POST" action="{{route('tasks.toggle-complete', ['task'=>$task->id])}}">
                @method('PUT')
                @csrf
                <button class="{{$task->completed ? 'bg-green' : 'bg-red'}}" type="submit">Mark as {{$task->completed ? 'not completed' : 'completed'}}</button>
            </form>
        </div>

        <div>
            <form method="POST" action="{{route('tasks.destroy', ['task'=>$task->id])}}">
                @method('DELETE')
                @csrf
                <button type="submit">Delete task</button>
            </form>
        </div>
    </div>
@endforeach

<x-pagination :data="$tasks"/>

@endsection()


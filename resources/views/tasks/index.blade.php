@extends('Layouts/MainLayout')
@section('pageTitle','All tasks')
@section('content')
    <div class="mb-4 mt-4">
        <a class="base-btn" href="{{route('tasks.create')}}">Task create</a>
    </div>
@foreach($tasks as $key=> $task)
    <div class="border border-lightgrey-500 mb-4 p-2">
        <div>
            <a class="text-blue-500 font-medium" href="{{route('tasks.show', $task->id)}}">{{$task->title}}</a>
        </div>
        <div class="flex gap-2">
            <a class="base-btn-small" href="{{route('tasks.edit', $task->id)}}">Edit task</a>
            <form method="POST" action="{{route('tasks.toggle-complete', ['task'=>$task->id])}}">
                @method('PUT')
                @csrf
                <button class="{{$task->completed ? 'base-btn-small-green' : 'base-btn-small-red'}}" type="submit">Mark as {{$task->completed ? 'not completed' : 'completed'}}</button>
            </form>

            <form method="POST" action="{{route('tasks.destroy', ['task'=>$task->id])}}">
                @method('DELETE')
                @csrf
                <button class="base-btn-small-red" type="submit">Delete task</button>
            </form>
        </div>
    </div>
@endforeach
<x-pagination :data="$tasks"/>
@endsection()

@extends('Layouts/MainLayout')

@section('pageTitle','All tasks')

@section('content')
    <div class="mb-4 mt-4">
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block" href="{{route('tasks.create')}}">Task create</a>
    </div>

@foreach($tasks as $key=> $task)
    <div class="border border-lightgrey-500 mb-4 p-2">
        <div>
            <a class="text-blue-500 font-medium" href="{{route('tasks.show', $task->id)}}">{{$task->title}}</a>
        </div>
        <div class="flex gap-2">
            <a class="text-sm bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-1 rounded" href="{{route('tasks.edit', $task->id)}}">Edit task</a>

            <form method="POST" action="{{route('tasks.toggle-complete', ['task'=>$task->id])}}">
                @method('PUT')
                @csrf
                <button class="text-sm text-white font-bold py-1 px-1 rounded {{$task->completed ? 'bg-green-500 hover:bg-green-700' : 'bg-red-500 hover:bg-red-700'}}" type="submit">Mark as {{$task->completed ? 'not completed' : 'completed'}}</button>
            </form>

            <form method="POST" action="{{route('tasks.destroy', ['task'=>$task->id])}}">
                @method('DELETE')
                @csrf
                <button class="text-sm bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-1 rounded" type="submit">Delete task</button>
            </form>

        </div>
    </div>
@endforeach

<x-pagination :data="$tasks"/>

@endsection()

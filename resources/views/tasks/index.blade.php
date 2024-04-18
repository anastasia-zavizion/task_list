@extends('Layouts/MainLayout')

@section('pageTitle','Index page')

@section('content')

@foreach($tasks as $key=> $task)
    <div>{{$task->id}}:{{$task->title}}
        <form method="POST" action="{{route('tasks.destroy', ['task'=>$task->id])}}">
            @method('DELETE')
            @csrf
            <button type="submit">Delete task</button>
        </form>
    </div>
@endforeach

<x-pagination :data="$tasks"/>

@endsection()


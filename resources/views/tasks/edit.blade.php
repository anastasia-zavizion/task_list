@extends('Layouts/MainLayout')

@section('pageTitle','Edit task')

@section('content')
    <x-tasks.form method="PUT" :task="$task"  :action="route('tasks.update', ['task'=>$task->id])"/>
    <x-errors/>
@endsection()

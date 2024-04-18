@extends('Layouts/MainLayout')

@section('pageTitle','Create task')

@section('content')
    <x-tasks.form method="POST" :action="route('tasks.store')"/>
    <x-errors/>
@endsection()

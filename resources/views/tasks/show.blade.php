@extends('Layouts/MainLayout')

@section('pageTitle','Show task')

@section('content')
    <div>{{$task->title}}</div>
    <div>{{$task->created_at}}</div>
@endsection()


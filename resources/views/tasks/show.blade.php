@extends('Layouts/MainLayout')

@section('pageTitle','Show task')

@section('content')

    {{$task->id}}:{{$task->title}}


@endsection()


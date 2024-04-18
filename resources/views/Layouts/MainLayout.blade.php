<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task List Laravel 10</title>

    <style>
        .errorMessage{
            color: red;
        }
        ul{
            list-style: none;
            padding-left: 0;
        }

        @yield('styles')
    </style>

</head>
<body>

<h1>@yield('pageTitle')</h1>

@include('components.success')

<div>@yield('content')</div>

</body>
</html>

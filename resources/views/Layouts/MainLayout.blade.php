<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task List Laravel 10</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
<div class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class="title">@yield('pageTitle')</h1>
    <x-success/>
    <div>@yield('content')</div>
</div>
</body>
</html>

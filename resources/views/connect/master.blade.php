<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/static/css/connect.css?v=.time()') }}">
    
    <script src="https://kit.fontawesome.com/b0d8aefb17.js" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
</head>
<body>

    @section('content')
    @show
    
</body>
</html>
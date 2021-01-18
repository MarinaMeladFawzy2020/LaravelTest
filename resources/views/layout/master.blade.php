
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title' , 'Default Page' )</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
    @include('layout.navbar')
    @yield('content')

   @include('layout.sidebar')
</body>
</html>
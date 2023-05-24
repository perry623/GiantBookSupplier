<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@vite(['resources/js/app.js'])
<body class=" d-flex justify-content-between flex-column" style="min-height: 100vh">
    @yield('header')

    @yield('content')
    
    @yield('footer')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{assets{'css/style.css'}}}">
    @yield('style')
</head>
<body>
    {{-- add menu --}}
    @include('layouts.menu')
    {{-- end menu --}}


    <main>
        <img src="{{asset{'image/logo.png'}}}" alt="">
    </main>
    <script src="{{asset{'build/assets/app.024077bb.js'}}}"></script>
    @yield('script')
    

</body>
</html>
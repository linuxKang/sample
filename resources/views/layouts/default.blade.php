<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('layouts._header')

<div class="container">
    @yield('content')
    @include('layouts._footer')
    {{--@include 是 Blade 提供的视图引用方法，可通过传参一个具体的文件路径名称来引用视图。--}}
</div>
</body>
</html>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li>{{link_to_route('tasks.index','Список задач')}}</li>
                <li>{{link_to_route('tasks.create','Добавить задачу')}}</li>
            </ul>
        </div>
    </div>
</nav>

<body>

@include('tasks.part.msg')

<section id="blog-section">
    <div class="container">
        <div class="row">
            <div class="">
                <div class="row" id="list">

                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>
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

<body>


<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <ul class="nav navbar-nav">
        <li>{{link_to_route('tasks.index','Список задач', null,['class' => 'nav-link'])}}</li>
        <li>{{link_to_route('tasks.create','Добавить задачу', null,['class' => 'nav-link'])}}</li>
    </ul>
</nav>

@include('tasks.part.msg')

<section id="blog-section">
    <div class="container">
        <div class="row">


            @yield('content')

        </div>
    </div>
</section>


</body>
</html>
@extends('tasks.tasks-pattern')

@section('title', "Просмотр задачи")


@section('content')

    <h1><b>{{ $task->title }}</b></h1>
    <p>Обновлено: {{Carbon\Carbon::parse($task->updated_at)->format('d.m.Y') }}</p>
    <h3>{{$task->content}}</h3>
    <p>Автор: {{ $task->author }}</p>

{{link_to_route('tasks.edit','Редактировать',['id' => $task->id],['class' => 'btn btn-primary'])}}


@endsection




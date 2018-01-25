@extends('tasks.tasks-pattern')

@section('title', "Просмотр задачи")


@section('content')


    {!! Form::model($task, [
        'route' => ['tasks.update', $task->id],
        'method' => 'PUT'
    ])  !!}

    <div class="form-group">
        {{ Form::label('title', 'Наименование задачи') }}
        {{ Form::text('title', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('content', 'Описание задачи') }}
        {{ Form::textarea('content', null, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::submit('Редактировать задачу', ['class' => 'btn btn-primary'])}}
    </div>

    {!! Form::close() !!}

@endsection




@extends('tasks.tasks-pattern')

@section('title','Добавление задачи')


@section('content')

    {!! Form::open(['route' => 'tasks.store']) !!}

        <div class="form-group">
            {{ Form::label('title', 'Наименование задачи') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('content', 'Описание задачи') }}
            {{ Form::textarea('content', null, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::submit('Добавить задачу', ['class' => 'btn btn-primary'])}}
        </div>

        {!! Form::close() !!}

@endsection


@extends('tasks.tasks-pattern')

@section('title','Отправленить сообщение')


@section('content')
    <div class="form-group">
        {!! Form::open(['route' => 'sendmail']) !!}


        {{ Form::label('mail', 'Адресат') }}
        {{ Form::email('mail', null, [
            'class' => 'form-control',
            'placeholder' => 'example@mail.com'
        ]) }}

        {{ Form::label('title', 'Текст сообщения') }}
        {{ Form::textarea('title', null, ['class' => 'form-control'])}}

        {{Form::submit('Отправить', ['class' => 'btn btn-primary'])}}

        {{ csrf_field() }}
        {!! Form::close() !!}
    </div>
@endsection


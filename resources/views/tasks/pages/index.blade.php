@extends('tasks.tasks-pattern')

@section('title','Список задач')


@section('content')

    @foreach($tasks as $task)
    <div class="col-lg-4 col-md-4 article">
        <aside>
            <div class="content-title">
                <div class="text-center">
                    <h3>
                        {{ link_to_route('tasks.show',"{$task->title}", ['id' => $task->id], ['class' => 'previewArticle']) }}
                    </h3>
                    Автор: {{ $task->author }}
                </div>
            </div>
            <div class="content-footer">
                <div style="float: left;" >
                    {{ link_to_route('tasks.edit', 'Ред.', ['id' => $task->id]) }}
                    {{ link_to_route('tasks.destroy', 'Удал.', ['id' => $task->id]) }}

                </div>
                <div style="float: right;">
                    <span style="font-size: 12px;color: #fff;">
                        Дата обновления: {{Carbon\Carbon::parse($task->updated_at)->format('d.m.Y') }}
                    </span>
                </div>
            </div>

        </aside>
    </div>
    @endforeach


    <div class="glyphicons glyphicons-dog"></div>
@endsection


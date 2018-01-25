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
                </div>
            </div>
            <div class="content-footer">
                <div style="float: left;" class="actionArticle">
                    {{ link_to_route('tasks.edit', null, ['id' => $task->id], ['class' => 'btn glyphicon glyphicon-pencil edit']) }}
                    {{ link_to_route('tasks.destroy', null, ['id' => $task->id], ['class' => 'btn glyphicon glyphicon-remove delete']) }}

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

@endsection


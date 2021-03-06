@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-4">
                <nav class="panel panel-default">
                    <div class="panel-heading">フォルダ</div>
                    <div class="panel-body">
                        <a href="{{ route('folders.create') }}" class="btn btn-default btn-block">
                            フォルダを追加する
                        </a>
                    </div>
                    <div class="list-group">
                        @foreach ($folders as $folder)
                        <a href="{{ route('tasks.index', ['id' => $folder->id]) }}"
                            class="list-group-item {{ $current_folder_id === $folder->id ? 'active' : ''  }}" >
                            {{$folder->title}}
                        </a>
                        @endforeach
                    </div>
                </nav>
            </div>

            <div class="column col-md-8">
                <div class="panel panel-default">
                    <div class="panel panel-heading">
                        <div class="panel panel-body">
                            <div class="text-right">
                                <a href="#" class="btn btn-default btn-block">
                                    タスクを追加する
                                </a>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>タイトル</th>
                                    <th>状態</th>
                                    <th>期限</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                <tr>
                                    <th>{{ $task->title }}</th>
                                    <th>
                                        <span class="{{ $task->status_class }}">{{ $task->status_label }}</span>
                                    </th>
                                    <th>{{ $task->formatted_due_date }}</th>
                                    <th>
                                        <a herf="#">編集</a>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

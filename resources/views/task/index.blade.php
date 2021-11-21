@extends('index')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Список завдань</h3>
                    <a href="{{ route('task.create') }}" type="button" class="btn btn-danger btn-icon-text mb-3">
                        <i class="ti-upload btn-icon-prepend" ></i>
                        Створити завдання
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="example1" class="display expandable-table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Назва</th>
                                        <th>Дата створення</th>
                                        <th>Термін виконання</th>
                                        <th>Статус виконання</th>
                                        <th>Дії</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tasks as $task)
                                        <tr>
                                            <td>
                                                {{ ($tasks->currentpage()-1) * $tasks->perpage() + $loop->index+1 }}
                                            </td>
                                            <td>{{$task->name}}</td>
                                            <td>{{$task->created_at}}</td>
                                            <td>{{$task->term}}</td>
                                            <td>{{$task->status_id}}</td>``
                                            <td><a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary btn-sm"><i class="mdi mdi-lead-pencil"></i></a>
                                                <a href="{{ route('task.delete', $task->id) }}" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></a></td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

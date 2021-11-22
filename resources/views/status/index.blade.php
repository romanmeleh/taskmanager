@extends('index')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Список статусів</h3>
                    <a href="{{ route('status.create') }}" type="button" class="btn btn-danger btn-icon-text mb-3">
                        <i class="ti-upload btn-icon-prepend" ></i>
                        Добавити статус
                    </a>

                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="example1" class="display expandable-table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Назва</th>
                                        <th>Сортування</th>
                                        <th>Дії</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($statuses as $status)
                                    <tr>
                                        <td>
                                            {{ ($statuses->currentpage()-1) * $statuses->perpage() + $loop->index+1 }}
                                        </td>
                                        <td>
                                            {{ $status->name }}
                                        </td>
                                        <td>{{ $status->sort }}</td>
                                         <td>
                                        <a href="{{ route('status.edit', $status->id) }}" class="btn btn-primary btn-sm"><i class="mdi mdi-lead-pencil"></i></a>
                                        <a href="{{ route('status.delete', $status->id) }}" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></a>
                                         </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $tasks->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


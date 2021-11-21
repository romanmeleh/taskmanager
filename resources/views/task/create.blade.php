@extends('index')
@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Створення завдання</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="forms-sample" action="{{route('task.save')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Завдання</label>
                        <input type="text" name="name" class="form-control" id="exampleInputUsername1"
                            >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Опис</label>
                        <textarea rows="8" type="text" name="description" class="form-control" >

                        </textarea>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Термін виконання</label>
                        <input type="datetime-local" name="term" class="form-control" id="exampleInputUsername1"
                        >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Статус</label>
                        <select name="status_id" class="form-control">
                            @foreach($statuses as $status)
                            <option value="{{$status->id}}">{{$status->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary mr-2">Додати</button>
                    <a href="{{ route('tasks') }}" class="btn btn-danger">Відміна</a>
                </form>
            </div>
        </div>
    </div>
@endsection

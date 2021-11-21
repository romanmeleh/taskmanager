@extends('index')
@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Створення статусу</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="forms-sample" action="{{route('status.save')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Статус</label>
                        <input type="text" name="name" class="form-control" id="exampleInputUsername1" placeholder="Очікується">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSort">Сортування</label>
                        <input type="number" name="sort" class="form-control" id="exampleInputSort" placeholder="Пріорітет виконання">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Додати</button>
                    <a href="{{ route('statuses') }}" class="btn btn-danger">Відміна</a>
                </form>
            </div>
        </div>
    </div>
@endsection


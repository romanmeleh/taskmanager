<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">

    <link rel="stylesheet" type="{{ asset('text/css" href="js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}"/>
</head>

<body>
<div class="container-scroller">

    <!-- partial -->

    <!-- partial:../../partials/_settings-panel.html -->


    <div class="container-fluid">
        <div class="col-12 text-center mb-3 mt-3">
            <a href="{{ route('tasks') }}" class="btn btn-primary">Адмін панель</a>
        </div>
        <div class="content-wrapper">
            <div class="row">

                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3>Получити завдання по id: <b>api/tasks/{id}</b></h3>
                            <h3>Фільтр по полях завдання: <b>api//tasks?{parameter}</b></h3>
                            <h3> Команда для створення дефолтного адміністратора: <b><i>php artisan create:admin</i></b>
                            </h3>
                            <p>Email: <b>admin@gmail.com</b></p>
                            <p>Password: <b>admin2221</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Зміна статусу в POST API</h4>
                            <div class="table-responsive">
                                <table id="example1" class="display expandable-table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Назва</th>
                                        <th>Статус</th>
                                        <th>Дії</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tasks as $task)
                                        <tr>
                                            <td>{{$task->id}}</td>
                                            <td>{{$task->name}}</td>
                                            <form class="forms-sample" method="post"
                                                  action="{{ route('api.changeStatus', $task->id)  }}">
                                                <td>
                                                    <div class="form-group row">
                                                        <select name="status_id" class="form-control">
                                                            @foreach($statuses as $status)
                                                                @if($status->id == $task->status_id)
                                                                    <option selected
                                                                            value="{{$status->id}}">{{$status->name}}</option>
                                                                @else
                                                                    <option
                                                                        value="{{$status->id}}">{{$status->name}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary mr-2">Перевірити
                                                    </button>
                                                </td>

                                            </form>


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
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->

<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->

<script src="{{asset('vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>


<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('js/off-canvas.js')}}"></script>
<script src="{{asset('js/hoverable-collapse.js')}}"></script>
<script src="{{asset('js/template.js')}}"></script>
<script src="{{asset('js/settings.js')}}"></script>

<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('js/dashboard.js')}}"></script>
<!-- End custom js for this page-->
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>INDEX</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 1px;
        }
        .task-table tbody tr td:nth-child(2){
            width: 120px;
        }
        .task-table tbody tr td:nth-child(3){
            width: 100px;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                INDEX
            </a>
        </div>

    </div>
</nav>

<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Thêm công việc mới
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->

            <!-- New Task Form -->
                <form action="{{ route('task.store') }}" method="POST" class="form-horizontal">
                @csrf
                {{ csrf_field() }}
                {{-- {{ method_field('PUT') }} --}}
                <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Tên công việc</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Ngày hoàn thành</label>
                        <div class="col-sm-6">
                            <input type="date" name="deadline" id="task-name" class="form-control" value="">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Thêm công việc
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách công việc hiện tại
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>Tên công việc</th>
                    <th>Deadline</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach ($tasks as $value)
                        <tr>
                        <td class="table-text"><div>{{ $value['name']  }}</div></td>
                        <!-- Task Complete Button -->
                        <td>{{ $value['deadline'] }}</td>
                        @if ($value['status'] == 1)
                            <td>
                            <form action="{{ route('task.complete' , $value['id']) }}" method="get">    
                                @csrf
                                {{ csrf_field() }}
                                {{-- {{ method_field('PUT') }} --}}

                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i> Hoan thanh

                                </button>
                            </form>
                            </td>
                        @else
                            <td>
                                <form action="{{ route('task.reComplete' , $value['id']) }}" method="get">
                                    @csrf
                                    {{ csrf_field() }}
                                    {{-- {{ method_field('PUT') }} --}}
    
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i> <u> Lam lai</u>
                                    </button>
                                </form>
                            </td>
                        @endif
                        

                        <!-- Task Delete Button -->
                        <td>
                            <form action="{{ route('task.destroy' , $value['id'])}}" method="post">
                                @csrf
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-btn fa-trash"></i>Xoá
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
               
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
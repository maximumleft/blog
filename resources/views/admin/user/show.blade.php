@extends('admin.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{asset('dist/css/admin.css')}}">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 d-flex align-items-center">
                    <h1 class='m-0 mr-2'>{{$user->name}}</h1>
                    <a href="{{route('admin.user.edit',$user)}}" class="text-success"><i
                            class="fa-solid fa-pen"></i></a>
                    <form action="{{route('admin.user.destroy',$user)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">
                            <i class="fa-solid fa-trash-can text-danger" role="button"></i>
                        </button>
                    </form>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class='col-6'>
            <div class="card">

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tbody>
                        <tr>
                            <td>ID</td>
                            <td>{{$user->id}}</td>
                        </tr>
                        <tr>
                            <td>Имя</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <td>Почта</td>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <td>Пароль</td>
                            <td>{{$user->password}}</td>
                        </tr>
                        <tr>
                            <td>Создан:</td>
                            <td>{{$user->created_at}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class='col-2 pt-3'>
            <a href="{{route('admin.user.index')}}" class="btn btn-secondary">Назад</a>
        </div>

@endsection

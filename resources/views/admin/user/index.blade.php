@extends('admin.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{asset('dist/css/admin.css')}}">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <h1 class='m-0'>Список пользователей</h1>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class='col-6'>
            <div class="card">

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th colspan="3" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>@if($user->role == 0)
                                        <b style="color:purple">Admin</b>
                                    @else
                                        <b style="color:darkgreen">Reader</b>
                                @endif</td>
                                <td class="text-center"><a href="{{route('admin.user.show',$user)}}"><i
                                            class="fa-regular fa-eye"></i></a></td>
                                <td class="text-center"><a href="{{route('admin.user.edit',$user)}}" class="text-success"><i
                                            class="fa-solid fa-pen"></i></a></td>
                                <td class="text-center">
                                    <form action="{{route('admin.user.destroy',$user)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="border-0 bg-transparent">
                                        <i class="fa-solid fa-trash-can text-danger" role="button"></i>
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
        <div class='col-2 pt-3'>
            <a href="{{route('admin.user.create')}}" class="btn btn-block btn-primary">Добавить</a>
        </div>

@endsection

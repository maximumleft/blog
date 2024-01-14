@extends('admin.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{asset('dist/css/admin.css')}}">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <h1 class='m-0'>Редактирование пользователя</h1>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="col-12">
            <form action="{{route('admin.user.update',$user)}}" method="POST" class="w-50">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label>
                        <input type="text" class="form-control" name="name" placeholder="Имя пользователя"
                               value="{{$user->name}}">
                    </label>
                    @error('name')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>
                        <input type="text" class="form-control" name="email" placeholder="Email"
                               value="{{$user->email}}">
                    </label>
                    @error('email')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Выберите роль</label>
                    <label>
                        <select name="role" class="form-control">
                            @foreach($roles as $id => $role)
                                <option value="{{$id}}">{{$role}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>

                <div class="form-group">
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                </div>

                <div class="form-group ml-3">
                    <a href="{{route('admin.user.index')}}" class="btn btn-secondary">Назад</a>
                    <input type="submit" class="btn btn-primary" value="Обновить">
                </div>
            </form>
        </div>

@endsection

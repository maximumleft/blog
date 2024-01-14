@extends('admin.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{asset('dist/css/admin.css')}}">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <h1 class='m-0'>Добавление пользователя</h1>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="col-12">
            <form action="{{route('admin.user.store')}}" method="POST">
                @csrf

                <div class="form-group w-25">
                    <label>
                        <input type="text" class="form-control" name="name" placeholder="Имя пользователя"
                               value="{{old('name')}}">
                    </label>
                    @error('name')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group w-25">
                    <label>
                        <input type="text" class="form-control" name="password" placeholder="Пароль"
                               value="{{old('password')}}">
                    </label>
                    @error('password')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group w-25">
                    <label>
                        <input type="text" class="form-control" name="email" placeholder="Почта"
                               value="{{old('email')}}">
                    </label>
                    @error('email')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group w-50">
                    <label>Выберите роль</label>
                    <label>
                        <select name="role" class="form-control">
                            @foreach($roles as $id => $role)
                                <option value="{{$id}}">{{$role}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>

                <div class="form-group ml-3">
                    <a href="{{route('admin.user.index')}}" class="btn btn-secondary">Назад</a>
                    <input type="submit" class="btn btn-primary" value="Добавить">
                </div>
            </form>
        </div>

@endsection

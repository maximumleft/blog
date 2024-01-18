@extends('personal.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{asset('dist/css/admin.css')}}">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <h1 class='m-0'>Редактирование комментария</h1>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="col-12">
            <form action="{{route('personal.comment.update',$comment)}}" method="POST" class="w-50">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label>
                        <textarea class="form-control" name="message" cols="30" rows="10">{{$comment->message}}</textarea>
                    </label>
                    @error('message')
                    <div class="text-danger">Необходимо заполнить</div>
                    @enderror
                </div>
                <a href="{{route('personal.comment.index')}}" class="btn btn-secondary">Назад</a>
                <input type="submit" class="btn btn-primary" value="Обновить">
            </form>
        </div>

@endsection

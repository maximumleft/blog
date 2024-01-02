@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <h1 class = 'm-0'>Редактирование категории</h1>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="col-12">
            <form action="{{route('admin.category.update',$category)}}" method="POST" class="w-25">
                @method('PATCH')
                @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="title" value="{{$category->title}}">
                @error('title')
                <div class="text-danger">Необходимо заполнить</div>
                @enderror
            </div>
                <a href="{{route('admin.category.index')}}" class="btn btn-secondary">Назад</a>
                <input type="submit" class="btn btn-primary" value="Обновить">
            </form>
        </div>


@endsection

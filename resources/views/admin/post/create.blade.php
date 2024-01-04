@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <h1 class = 'm-0'>Добавление поста</h1>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="col-12">
            <form action="{{route('admin.post.store')}}" method="POST">
                @csrf

            <div class="form-group w-25">
                <label>
                    <input type="text" class="form-control" name="title" placeholder="Название поста" value="{{old('title')}}">
                </label>
                @error('title')
                <div class="text-danger">Необходимо заполнить</div>
                @enderror
            </div>

            <div class="form-group">
                <textarea id="summernote" name="content" value="{{old('content')}}"></textarea>
                @error('content')
                <div class="text-danger">Необходимо заполнить</div>
                @enderror
            </div>

            <div class="form-group">
                <a href="{{route('admin.tag.index')}}" class="btn btn-secondary">Назад</a>
                <input type="submit" class="btn btn-primary" value="Добавить">
            </div>

            </form>
        </div>


@endsection

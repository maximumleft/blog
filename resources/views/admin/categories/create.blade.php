@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <h1 class = 'm-0'>Добавление категорий</h1>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="col-12">
            <form action="#" class="w-25">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Название категории">
            </div>
                <input type="submit" class="btn btn-primary" value="Добавить">
            </form>
        </div>


@endsection

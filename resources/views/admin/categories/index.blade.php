@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <h1 class = 'm-0'>Список категорий</h1>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
   <div class = 'col-12'>
       Категории
   </div>
   <div class = 'col-2 pt-3'>
       <a href="{{route('admin.category.create')}}" class="btn btn-block btn-primary">Добавить</a>
   </div>

@endsection

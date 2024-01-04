@extends('admin.layouts.main')
@section('content')
    <style>
        h1{
            color:white;
        }
    </style>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <h1 class='m-0'>Список постов</h1>
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
                            <th>Title</th>
                            <th colspan="3" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td class="text-center"><a href="{{route('admin.post.show',$post)}}"><i
                                            class="fa-regular fa-eye"></i></a></td>
                                <td class="text-center"><a href="{{route('admin.post.edit',$post)}}" class="text-success"><i
                                            class="fa-solid fa-pen"></i></a></td>
                                <td class="text-center">
                                    <form action="{{route('admin.post.destroy',$post)}}" method="POST">
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
            <a href="{{route('admin.post.create')}}" class="btn btn-block btn-primary">Добавить</a>
        </div>

@endsection

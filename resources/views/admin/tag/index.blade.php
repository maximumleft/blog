@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <h1 class='m-0'>Список тегов</h1>
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
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{$tag->id}}</td>
                                <td>{{$tag->title}}</td>
                                <td class="text-center"><a href="{{route('admin.tag.show',$tag)}}"><i
                                            class="fa-regular fa-eye"></i></a></td>
                                <td class="text-center"><a href="{{route('admin.tag.edit',$tag)}}" class="text-success"><i
                                            class="fa-solid fa-pen"></i></a></td>
                                <td class="text-center">
                                    <form action="{{route('admin.tag.destroy',$tag)}}" method="POST">
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
            <a href="{{route('admin.tag.create')}}" class="btn btn-block btn-primary">Добавить</a>
        </div>

@endsection

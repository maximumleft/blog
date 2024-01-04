@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 d-flex align-items-center">
                    <h1 class = 'm-0 mr-2'>{{$post->title}}</h1>
                    <a href="{{route('admin.postF.edit',$post)}}" class="text-success"><i class="fa-solid fa-pen"></i></a>
                    <form action="{{route('admin.postF.destroy',$post)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">
                            <i class="fa-solid fa-trash-can text-danger" role="button"></i>
                        </button>
                    </form>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

   <div class = 'col-6'>
       <div class="card">

           <div class="card-body table-responsive p-0">
               <table class="table table-hover text-nowrap">
                   <tbody>
                       <tr>
                           <td>ID</td>
                           <td>{{$post->id}}</td>
                       </tr>
                       <tr>
                           <td>Название</td>
                           <td>{{$post->title}}</td>
                       </tr>
                   </tbody>
               </table>
           </div>

       </div>
   </div>
        <div class = 'col-2 pt-3'>
            <a href="{{route('admin.postF.index')}}" class="btn btn-secondary">Назад</a>
        </div>

@endsection

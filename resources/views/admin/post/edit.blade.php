@extends('admin.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{asset('dist/css/admin.css')}}">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <h1 class='m-0'>Редактирование поста</h1>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="col-12">
            <form action="{{route('admin.post.update',$post)}}" method="POST" class="w-50" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label>
                        <input type="text" class="form-control" name="title" placeholder="Название поста"
                               value="{{$post->title}}">
                    </label>
                    @error('title')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <textarea id="summernote" name="content">{{$post->content}}</textarea>
                    @error('content')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Добавить превью</label>
                    <div class="mb-3">
                        <img src="{{url("storage/" . $post->preview_image)}}" width="100" height="100" alt="preview_image">
                    </div>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="preview_image">
                            <label class="custom-file-label">{{$post->preview_image}}</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Загрузка</span>
                        </div>
                    </div>
                    @error('preview_image')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Добавить главное изображение</label>
                    <div class="mb-3">
                        <img src="{{url("storage/" . $post->main_image)}}" width="100" height="100" alt="main_image">
                    </div>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="main_image">
                            <label class="custom-file-label">{{$post->main_image}}</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Загрузка</span>
                        </div>
                    </div>
                    @error('main_image')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Выберите категорию</label>
                    <label>
                        <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
                <div class="form-group" data-select2-id="42">
                    <label>Выберите теги</label>
                    <div class="select2-purple" data-select2-id="41">
                        <select name="tag_ids[]" class="select2 select2-hidden-accessible" multiple="" data-placeholder="Выберите тег"
                                data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15"
                                tabindex="-1" aria-hidden="true">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->title}}</option>
                            @endforeach
                        </select><span class="dropdown-wrapper" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group ml-3">
                    <a href="{{route('admin.post.index')}}" class="btn btn-secondary">Назад</a>
                    <input type="submit" class="btn btn-primary" value="Обновить">
                </div>
            </form>
        </div>

@endsection

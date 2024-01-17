@extends('admin.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{asset('dist/css/admin.css')}}">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-3 col-6  mt-3">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$usersCount}}</h3>
                        <p>Count users</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <a href="{{route('admin.user.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6  mt-3">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$postsCount}}</h3>
                        <p>Count posts</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-table-list"></i>
                    </div>
                    <a href="{{route('admin.post.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6  mt-3">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{$categoriesCount}}</h3>
                        <p>Count categories</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-list"></i>
                    </div>
                    <a href="{{route('admin.category.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6  mt-3">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$tagsCount}}</h3>
                        <p>Count tags</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-hashtag"></i>
                    </div>
                    <a href="{{route('admin.tag.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
    </div>


@endsection

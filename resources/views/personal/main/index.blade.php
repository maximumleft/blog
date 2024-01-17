@extends('personal.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{asset('dist/css/admin.css')}}">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-3 col-6  mt-3">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>1</h3>
                        <p>Понравившиеся посты</p>
                    </div>
                    <div class="icon">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <a href="{{route('admin.user.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6  mt-3">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>1</h3>
                        <p>Коментарии</p>
                    </div>
                    <div class="icon">
                        <i class="fa-regular fa-comment"></i>
                    </div>
                    <a href="{{route('admin.post.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>
    </div>


@endsection

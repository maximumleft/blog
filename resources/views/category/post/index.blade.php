@extends('layouts.main')
@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Блог</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{asset('storage/'. $post->preview_image) }}" alt="blog post">
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="blog-post-category">{{$post->category->title}}</p>
                                <form action="{{route('post.like.store',$post)}}" method="post">
                                    @csrf
                                    @auth()
                                        <span>
                                        {{$post->licked_users_count}}
                                    </span>
                                        <button type="submit" class="border-0 bg-transparent">
                                            @if(auth()->user()->lickedPosts->contains($post))
                                                <i class="fa-solid fa-heart"></i>
                                            @else
                                                <i class="fa-regular fa-heart"></i>
                                            @endif
                                        </button>
                                </form>
                                @endauth
                                @guest()
                                    <div>
                                            <span>
                                                     {{$post->licked_users_count}}
                                            </span>
                                        <i class="fa-regular fa-heart"></i>
                                    </div>
                                @endguest
                            </div>
                            <a href="{{route('post.show',$post)}}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{$post->title}}</h6>
                            </a>
                        </div>
                    @endforeach
                    <div class="m-auto">
                        {{$posts->links()}}
                    </div>
                </div>
            </section>
        </div>

    </main>
@endsection

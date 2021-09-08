@extends('layouts.app')

@section('title', 'Blog')

@section('content')

    @include('layouts.dark_navbar')

    <div class="blog_page">
    <div class="container-md sub-pages-top">
        <section class="sub-page-inner">
            <!-- recent post -->
            <div class="row">
                 <p style="float: right; margin-left: 20px">recent</p>
                        <a href="{{ route('category_posts') }}?category={{ $recent_post->category->name }}">{{ $recent_post->category->name }}</a>
            </div>
           
            <a href="{{ route('blog_post',$recent_post->key_word) }}">
                <div class="row">
                    <div class="col-md-6">
                        
                        <p class="main-title">{{ $recent_post->title }}</p>
                        <div class="description">{!! Str::limit(strip_tags($recent_post->content), 100, $end=' ...') !!}</div>
                        <p  style="color: #707070; direction: ltr; font-size: 15px">{{ $recent_post->created_at->format("m/d/Y ") }}</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('images/blogs/'.$recent_post->image ) }}" class="post-img" alt="">
                    </div>
                </div>
            </a>

            <!-- space -->
            <section class="space">

            </section>

            <!-- navigation menu -->

            <div class="row">
                <div class="col-md-12">
                <nav class="navbar navbar-expand-md navbar-light bg-none">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <form class="form-inline" action="{{ route('blog') }}" method="GET" style="margin-left: 30px">
                                <button class="btn btn-md btn-outline-primary" type="submit">All categories</button>
                            </form>

                            <!-- all categories should be listed here-->
                            <!--li class="nav-item active">
                                <a class="nav-link" href="#">cat 1 <span class="sr-only">(current)</span></a>
                            </li-->

                            @foreach($categories as $category)
                            <form action="{{ route('category_posts') }}" method="GET">
                                <li class="nav-item">
                                    <input type="text" name="category" value="{{ $category->name }}" hidden>
                                    <button class="nav-link btn btn-link" name="" type="submit">{{ $category->name }}</button>
                                </li>
                            </form>
                            @endforeach

                            <!-- all categories should be listed here-->
                        </ul>

                        <section id="expandable-search">
                        <form id="search-form" class="form-inline" action="{{ route('search_posts') }}" method="GET">
                            <input type="search" name="search">
                            <i onclick="search_blog()" class="fa fa-search"></i>
                        </form>
                        </section>

                    </div>
                </nav>
                </div>
            </div>

            <script>
                function search_blog(){
                    var form = document.getElementById("search-form");
                    form.submit();
                }
            </script>

            <!-- navigation menu -->

            <div class="row">
            <div class="col-md-12">
            <div class="container blog_posts_cards">

                @if($posts->isNotEmpty())
                    @foreach($posts as $post)
                    <!-- blog post -->
                        <a href="/blog/{{$post->key_word}}">
                    <div class="item hvr-grow">
                        <img src="{{ asset('images/blogs/'.$post->image) }}" style="
                            width: 100%; height: auto;
                            height: 200px;
                            width: 100%;
                            border-radius: 10px;
                            position: relative;
                            object-fit: cover;" alt="">
                        <p class="category">{{ $post->category->name }}</p>
                        <p class="title">{{ $post->title }}</p>
                        <p class="date" style="color: #707070; direction: ltr; font-size: 15px">{{ $post->created_at->format("m/d/Y") }}</p>
                    </div>
                        </a>
                    <!-- blog post-->
                    @endforeach
                @else
                    <p class="alert alert-info" role="alert" style="margin-left: 45%; margin-top: 50px; direction: ltr; display: inline-block">
                        No posts to be appeared !
                    </p>
                @endif

            </div>
            </div>
            </div>
        </section>
    </div>
    </div>

    @include('layouts.footer')

@endsection


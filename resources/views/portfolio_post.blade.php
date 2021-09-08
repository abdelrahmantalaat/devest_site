@extends('layouts.app')

@section('title', 'Our Business')

@section('content')

    @include('layouts.dark_navbar')

        <div class="container-md portfolio_post">
        <!--<a href="{{ route('portfolio_post.show',['portfolio'=>$portfolio->id-1]) }}">-->
        <!--    <img class="left-image" src="{{ asset('images/icons/left.svg') }}" alt="">-->
        <!--</a>-->
        <!--<a href="{{ route('portfolio_post.show',['portfolio'=>$portfolio->id+1]) }}">-->
        <!--    <img class="right-image" src="{{ asset('images/icons/right.svg') }}" alt="">-->
        <!--</a>-->
        <section class="section-1">

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <a href="{{ route('portfolio') }}"><button type="button" style="float: left" class="btn btn-outline-danger btn-sm">Back to portfolio</button></a>
                    @foreach(json_decode($portfolio->platforms) as $platform)
                        <a href="{{$platform->url}}" style="text-align:right; margin-right: 10px; margin-bottom: 40px">{!! $platform->name !!}</a>
                    @endforeach
                    <!--portfolio title-->
                    <p class="main-title">{{ $portfolio->title }}</p>

                    <!-- portfolio post -->
                    

                    <p class="description">{!! $portfolio->content !!}</p>

                </div>
                <div class="col-md-2"></div>
            </div>
        </section>
    </div>
    @include('layouts.footer')

@endsection


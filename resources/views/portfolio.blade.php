@extends('layouts.app')

@section('title', 'Our Business')

@section('content')
@include('layouts.dark_navbar')
<section class="portfolio_flex">
<div class="container sub-pages-top">
    <section class="sub-page-inner">
        <img id="bg-common-image" src="{{ asset('images/ourwork-vector.svg') }}" style="position:absolute; width: 50%; top: 120px; left: 0px; margin-left: -10px" alt="">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 align-items-end">
                <div class="main-title">نحول الأفكار الى واقع ملموس</div>
                <div class="description">قصص نجاح من أرض الواقع نعرض لك بعض الأعمال السابقة التي قدمناها لعملائنا المميزين 
نعمل بجهد لتقديم استراتيجية عمل تناسب شركتك ومجالك .. نتطلع دائماً لنجاحات أكبر
<br>
نقوم في ديفست  بتقديم جميع الخدمات التي تُسرع من الانتقال للسوق الإلكتروني باحترافية وقوة بداية من برمجة المواقع وحتى التسويق لها  </div>
                <button type="submit" style="margin-top: 30px;width:180px;" class="btn btn-danger btn-lg">ابدأ مشروعك</button>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="row">
            <div class="col-md-12">
                <div class="container portfolio_posts_cards" style="position:relative">
                @foreach($portfolios as $portfolio)
                    <!-- blog post -->
                        <div class="item hvr-grow">
                            <a href="{{ route('portfolio_post.show',$portfolio) }}">
                            <div class="card mb-2" style="border: 0px">
                                <img class="card-img-top"
                                     src="{{ asset('images/portfolio/'.$portfolio->image) }}" alt="Card image cap">
                                <div class="card-body">
                                   
                                    <h4 class="card-title">{{ $portfolio->title }}</h4>
                                    <p class="card-text card-text">{!! Str::limit(strip_tags($portfolio->content), 90, $end=' ...') !!}</p>
                                </div>
                            </div>
                            </a>
                            <div style="position:absolute;left:10px;bottom:67px;width:70px">
                                @foreach(json_decode($portfolio->platforms) as $platform)
                                    <a href="{{$platform->url}}" style="float:left;margin-right:5px;">{!! $platform->name !!}</a>
                                @endforeach
                            </div>
                        </div>
                        <!-- blog post-->
                    @endforeach

                </div>
            </div>
        </div>

    </section>
</div>
</section>

<div class="container-fluid" style="position: absolute; background-color: #0A0945">
    @include('layouts.footer')
</div>


@endsection

@extends('layouts.app2')
@section('title', 'Blog')
@section('content')
{{View::make('layouts.dark_navbar')}}
    <div class="container blog_post">
        <section class="section-1" style="line-height:2;">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <span>
                        <a href="{{ route('blog') }}"><button type="button" style="float: left" class="btn btn-outline-danger btn-sm">Back to Blog</button></a>
                        <ul id="menu" style="text-align: right">
                          <li><a href="{{ route('category_posts') }}?category={{ $blog->category->name }}">{{ $blog->category->name }}</a></li>
                        </ul>
                    </span>
                    <span>
                        <p style="direction: ltr" class="main-title">{{ $blog->title }}</p>
                    </span>
                    <span>
                        <ul id="menu" style="text-align: left; float: left; margin-left: -20px">
                            <div class="addthis_inline_share_toolbox"></div>
                        </ul>
                        <p class="description">{{ $blog->created_at->format("m/d/Y") }}</p>
                    </span>
                        <p style="opacity:0" id=window_href>{{ $blog->key_word }}</p>
                    <span>
                        <img src="{{ asset('images/blogs/'.$blog->image) }}" style="width: 100%; margin-bottom: 30px" alt="">
                    </span>
                        {!! $blog->content !!}
                </div>
                <div class="col-md-2"></div>
            </div>
        </section>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script>
    
        window_href.innerHTML = 'https://devest.co/blog/' + window_href.innerHTML
        document.dblclick = CopyToClipboard('window_href');
        
        function CopyToClipboard(id){
            var r = document.createRange();
            r.selectNode(document.getElementById(id));
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(r);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
        }

    </script>
   
   @endsection
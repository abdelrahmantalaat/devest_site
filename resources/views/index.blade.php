@extends('layouts.app')
@section('title','Your Growth Partner')
@section('script')
    <!-- Event snippet for Contact_Devest conversion page In your html page, 
    add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. --> 
    <script> 
        function gtag_report_conversion(url) { 
            // var callback = function () {
            //     if (typeof(url) != 'undefined') { 
            //         window.location = url; 
            //     }
            // };
            gtag('event', 'conversion', { 'send_to': 'AW-431993351/0nC1CPbR5OQCEIfk_s0B', 'event_callback': callback });
            // return false;
        }
    </script>
@endsection
@section('content')

    @include('layouts/navbar')
<style>
    .special-text{
        text-align: right;
    font-size: 44px;
    letter-spacing: 0px;
    color: #141414;
    opacity: 1;
    margin-top: 0px;
    line-height: 1.2;
    font-family: 'Cairo', sans-serif;
    font-weight: 500;
    font-style: normal;
    padding:10px 0 ;
}
@media screen and (max-width: 600px) {
    .special-text{
        font-size: 22px !important;
        font-weight:bold;   
    } 
}

   
</style>
<!--header-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-md-4" ><div class="left_text">{!! $pages[1]->value !!}</div></div>
            <div class="col-md-4 text-center"> <div class="main_text">{!! $pages[0]->value !!}</div></div>
            <div class="col-md-4 text-right"><div class="right_text">{!! $pages[2]->value !!}</div></div>
        </div>

    </div>
   
</header>
 
        <div class="whatsapp-icon" id="whatsapp_icon">
            <a href="{{ url($settings[11]->value) }}" > 
          <img src="{{ asset('images/icons/mainwhatsapp.svg') }}">  
          </a>
        </div>
        

    
    <!--div class="container-md" style="background-color: black; padding-top: 100px; padding-bottom: 100px">

    </div-->



<!--services-->
<div id="services" class="services">
<div class="container h-100">
    <!--img class="bg-image" src="{{ asset('images/home/vector-services.svg') }}"-->
    <div class="row align-items-end service-title" style="height: 100px; ">
        <div class="col"><h5 class="sub-title">خدماتنا</h5></div>
    </div>
    <div class="row align-items-end" style=" height: auto">
        <div class="col-md-3"><a href="{{ route('contact') }}"><button id="service-top-btn" type="button" class="btn btn-danger">ابدأ مشروعك</button></a></div>
        <div class="col-md-4"></div>
        <div class="col-md-5"><h1 class="main-title">{!! $pages[3]->value !!}</h1></div>
    </div>
    <div class="row align-items-center service-icon" style="margin-top: 7vw; height: auto;">
        <div class="col-md-3 icons-set">
            <img class="hvr-pop" src="{{ asset('storage/images/pages/'.$pages[4]->value) }}" alt="">
            <p>{{ $pages[5]->value }}</p>
        </div>
        <div class="col-md-3 icons-set">
            <img class="hvr-pop" src="{{ asset('storage/images/pages/'.$pages[6]->value) }}" alt="">
            <p>{{ $pages[7]->value }}</p>
        </div>
        <div class="col-md-3 icons-set">
            <img class="hvr-pop" src="{{ asset('storage/images/pages/'.$pages[8]->value) }}" alt="">
            <p>{{ $pages[9]->value }}</p>
        </div>
        <div class="col-md-3 icons-set">
            <img class="hvr-pop" src="{{ asset('storage/images/pages/'.$pages[10]->value) }}" alt="">
            <p>{{ $pages[11]->value }}</p>
        </div>
    </div>
    <div class="row align-items-center service-btn" style="height: 100px;">
        <div class="col-md-10"></div>
        <div class="col-md-2">
            <a href="{{ route('contact') }}"><button id="service-bottom-btn" type="button" class="btn btn-danger">ابدأ مشروعك</button></a></div>
    </div>
</div>
</div>
<!--services-->


<!--about us-->
<div id="about" class="about_us">
    <img src="{{ asset('images/BG1.svg') }}" class="bg-image-left1" alt="" >
    <div class="container align-items-center" style=" position: relative">

        <div class="row" style="height: auto;padding-bottom: 30px;">

            <div class="col-md-6 align-items-start">
                <h5 class="sub-title">عن الشركة</h5>
                <h1 class="main-title">{{ $pages[12]->value }}</h1>
                <p class="description" style="font-size:18px; padding:10px 0;">{!! $pages[13]->value !!}</p>
                <a href="{{ route('about') }}">
                <button type="button" id="about-top-btn" class="btn btn-outline-danger">عرض المزيد</button>
                </a>
            </div>
            <div class="col-md-6 align-items-center">
                <img id="bg-common-image" class="about_image" src="{{ asset('images/home/vedio-bg.svg') }}" style="display:none;" >
                <div class="video_thumbnail">
                    <!--img class="img-responsive"  src="{{ asset('images/pages/'.$pages[15]->value) }}" alt="">
                    <span class=""><i class="fas fa-play-circle fa-4x"></i></span-->
                        <div class="embed-responsive embed-responsive-16by9" style="border-radius: 20px;box-shadow: 0px 4px 10px #005cfb1a;height: auto;
    width: 539px;">
                          <lite-youtube videoid="5eodpXqiK_c"></lite-youtube>
                        </div>
                </div>

            </div>
            <div class="col-md-6 pt-2">
                <a href="{{ route('about') }}">
                <button type="button" id="about-bottom-btn" class="btn btn-outline-danger" style="color:#EF3230;border-color:#EF3230;">عرض المزيد</button>
                </a>
            </div>
        </div>
        <div class="container-fluid " id="projects_counter">
            <div class="container-md" style="position:relative; ">
                <img id="bg-common-image" class="img-1" src="{{ asset('images/bg2.svg') }}">
                <img id="bg-common-image" class="img-2" src="{{ asset('images/bg3.svg') }}">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3 stats">
                        <div class="system_mang">
                            <span class="count-mark">+</span><br><br><p class="timer count-title count-number" data-to="{{ $pages[17]->value }}" data-speed="5000"></p>
                            <p>{{ $pages[18]->value }}</p>
                        </div>
                    </div>
                    <div class="col-md-3 stats">
                        <div class="mobile_app">
                            <span class="count-mark">+</span><br><br><p class="timer count-title count-number" data-to="{{ $pages[19]->value }}" data-speed="5000"></p>
                            <p>{{ $pages[20]->value }}</p>
                        </div>
                    </div>
                    <div class="col-md-3 stats">
                        <div class="website">
                            <span class="count-mark">+</span><br><br><p class="timer count-title count-number" data-to="{{ $pages[21]->value }}" data-speed="5000"></p>
                            <p>{{ $pages[22]->value }}</p>
                        </div>
                    </div>
                    <div class="col-md-2"></div>

                </div>
            </div>
        </div>
    </div>

</div>

<!--about us-->

<!--portfolio-->
<div id="portfolio" class="portfolio">
    <div class="container" style="padding-top: 90px;">
        <div class="row">
            <div class="col-md-6 align-items-end"><a href="{{ route('portfolio') }}"><button id="portfolio-btn-top" type="button" class="btn btn-outline-danger" style="float: left">عرض الكل</button></a></div>
            <div class="col-md-6 align-items-end">
                <p class="sub-title">اعمالنا</p>
                <p class="main-title">{!! $pages[23]->value !!}</p>
            </div>
        </div>

        <div class="row portfolio_content justify-content-center align-items-center">
            <div class="col-md-12 slider">

                <div class="owl-carousel owl-theme owl-loaded" id="works_slider">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">

                        @foreach($portfolios as $portfolio)
                            <div class="owl-item" style="position:relative">
                                <a href="{{ route('portfolio_post.show',$portfolio) }}">
                                    <div class="card hvr-float d-flex justify-content-center">
                                        <img class="card-img-top" src="{{ asset('images/portfolio/'.$portfolio->image ) }}" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $portfolio->title }}</h4>
                                            <p class="card-text card-text">{!! Str::limit(strip_tags($portfolio->content), 90, $end=' ...') !!}</p>
                                        </div>
                                    </div>
                                </a>
                                <div style="position:absolute;left:40px;bottom:80px;width:70px">
                                    @foreach(json_decode($portfolio->platforms) as $platform)
                                        <a href="{{$platform->url}}" style="float:left;margin-right:5px;">{!! $platform->name !!}</a>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                        </div>
                    </div>
                </div>



                </div>


            </div>
        <div class="col-md-12 text-center">
            <a href="{{ route('portfolio') }}">
            <button id="portfolio-btn-bottom" type="button" class="btn btn-outline-danger">عرض الكل</button>
            </a>
        </div>
    </div>
</div>

<!--portfolio-->


<!--blog-->
<div id="blog" class="blog" >
    <div class="container" style="padding-top: 90px;">
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2 align-items-end"></div>
        </div>
        <div class="row">
            <div class="col-md-6 align-items-end">
                <a href="{{ route('blog') }}">
                <button id="blog-btn-top" type="button" class="btn btn-outline-danger" style="float: left">عرض الكل</button>
                </a>
            </div>
            <div class="col-md-6 align-items-end">
                <p class="sub-title">مدونتنا</p>
                <p class="main-title">{!! $pages[25]->value !!}</p>
            </div>
        </div>
        <div class="row blog_content">
            <div class="col-md-12 align-items-center">

                <div class="owl-carousel owl-theme owl-loaded" id="blog_slider">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">

                            @foreach($blogs as $blog)
                                <div class="owl-item">
                                    <a href="{{ route('blog_post',$blog->key_word) }}">
                                        <div class="card hvr-float" style="border: 0px">
                                            <div class="card-body">
                                                <img class="card-img-top" src="{{ asset('images/blogs/'.$blog->image) }}">
                                                <p class="category">{{ $blog->category->name }}</p>
                                                <p class="title">{{ $blog->title }}</p>
                                                <p class="date">{{ $blog->created_at->format('Y/m/d | H:i')}}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <a href="{{ route('blog') }}">
                <button id="blog-btn-bottom" type="button" class="btn btn-outline-danger">عرض الكل</button>
                </a>
            </div>
        </div>



    </div>
</div>
<!--blog-->

<div id="feedbacks" class="footer">
<!--feedbacks-->

    <!--<div class="container-fluid feedback">-->
    <!--    <div class="container">-->

    <!--    <div class="row flex-column-reverse flex-md-row" style="position: relative">-->
    <!--        <div class="col-md-6 order-md-first order-xs-last left_side">-->

    <!--            <div class="owl-carousel owl-theme owl-loaded" id="footer_slider">-->
    <!--                <div class="owl-stage-outer">-->
    <!--                    <div class="owl-stage">-->

    <!--                        @foreach($clients as $client)-->

    <!--                            <div class="owl-item">-->

    <!--                                <div class="card fb-card">-->
    <!--                                    <img class="quote" src="{{ asset('images/icons/quote.png') }}" alt="">-->
    <!--                                    <div class="card-body">-->
    <!--                                        <p class="description">{!! $client->content !!}</p>-->
    <!--                                        <button class="btn btn-light" style="box-shadow: 0px 3px 8px #3A3A3A1A; border-radius: 30px;" disabled>{{ $client->name }}</button>-->
    <!--                                    </div>-->
    <!--                                </div>-->

    <!--                            </div>-->

    <!--                        @endforeach-->

    <!--                    </div>-->
    <!--                </div>-->
    <!--                   <div class="owl-dots">-->
    <!--    <div class="owl-dot active"><span></span></div>-->
    <!--    <div class="owl-dot"><span></span></div>-->
    <!--    <div class="owl-dot"><span></span></div>-->
    <!--</div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-md-6 order-md-last order-xs-first right_side">-->
    <!--            <p class="sub-title">اراء عملائنا</p>-->
    <!--            <p class=" special-text ">{!! $pages[26]->value !!}</p>-->
    <!--        </div>-->

    <!--    </div>-->
    <!--    </div>-->

    <!--</div>-->

    <!--<div>-->
    <!--footer part-->
    <div class="container-fluid bottom-part" style="height: auto;">
        <img class="right-image" id="bg-common-image" src="{{ asset('images/bgfooterright.svg') }}" alt="">
        <img class="left-image" id="bg-common-image" src="{{ asset('images/bgfooterleft.svg') }}" alt="">

            <div class="container">
            <div class="row justify-content-center flex-column-reverse flex-md-row">
                <div class="col-md-6">


                        @include('layouts.contact_form')

                 


                </div>
                <div class="col-md-6">
                    <p class="sub-title">تواصل معنا</p>
                    <p class="main-title ">{{ $pages[27]->value }}</p>
                    <ul type="none">
                        <li><a href="tel:{{ $settings[7]->value }}">{{ $settings[7]->value }}<i class="fas fa-phone"></i></a> </li>
                        <li><a href="mailto:{{ $settings[8]->value }}">{{ $settings[8]->value }} <i class="fas fa-envelope"></i></a></li>
                        <li>{{ $settings[9]->value }}<i class="fas fa-map-marker-alt"></i></li>
                    </ul>
                </div>

            </div>
            </div>
    </div>
    <!--footer part-->
    <!--footer-->
    <div class="container-fluid" style="position: absolute; background-color: #0A0945">
        <div class="container" style="position: relative;">

            <hr style="background-color: #98BFFF"/>
            <div class="row" style="padding-bottom: 10px">
                <div class="col-md-6 align-items-start">
                    <div class="social-media justify-content-center">
                        <a style="color: #98BFFF" href="{{ $settings[3]->value }}" class="fab fa-linkedin"></a>
                        <a style="color: #98BFFF" href="{{ $settings[4]->value }}" class="fab fa-twitter"></a>
                        <a style="color: #98BFFF" href="{{ $settings[5]->value }}" class="fab fa-facebook" ></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="copyrights">
                        <p style="color: #98BFFF">{{ $settings[10]->value }}</p>
                        <img src="{{asset('images/settings/'.$settings[0]->value)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
<!--feedbacks-->
</div>
</div>
<script>
    let countNumber = document.getElementsByClassName('count-number');
let num1 = 1;
let num2 = 1;
let num3 = 1;
let dataCount0 = countNumber[0].getAttribute("data-to");
let dataCount1 = countNumber[1].getAttribute("data-to");
let dataCount2 = countNumber[2].getAttribute("data-to");

window.onscroll = function () {
    if (this.scrollY >= projects_counter.offsetTop) {
        if (num1 > 1 || num2 > 1 || num3 > 1) {

        } else {
            let interval = setInterval(function () {
                countNumber[0].innerHTML = num1++;
                countNumber[1].innerHTML = num2++;
                countNumber[2].innerHTML = num3++;
                if (num1 > dataCount0 || num2 > dataCount1 || num3 > dataCount2) {
                    countNumber[0].innerHTML = dataCount0;
                    countNumber[1].innerHTML = dataCount1;
                    countNumber[2].innerHTML = dataCount2;
                    clearInterval(interval);
                }
            }, 20);
        }
    }
}


</script>
@endsection





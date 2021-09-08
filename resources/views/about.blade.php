@extends('layouts.app')
@section('title', 'About Us')

@section('content')

    @include('layouts.dark_navbar')

    <div class="container about_page">
            <section class="section-1"style="padding-bottom:20px;">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-md-6 order-sm-first">
                        <a href="#">
                            <div class="video_thumbnail">
                                <div class="embed-responsive embed-responsive-16by9" style="border-radius:20px;height:auto;width:539px;">
                                    <lite-youtube videoid="5eodpXqiK_c"></lite-youtube>
                                </div>
                                
                            </div>
                        </a>

                    </div>

                    <div class="col-md-6 order-sm-last align-items-end">
                        <p class="main-title">{{ $pages[12]->value }}</p>
                        <p class="description" style="padding:20px 0;">
                            ديفست هي واحدة من الشركات المميزة في مجال تطوير وتنفيذ التطبيقات والمواقع الإلكترونية
يشرف على مشاريعنا التقنية نخبة من المحترفين المتمكنين من اختيار أفضل التقنيات لتنفيذ أعمالنا
وخلق أفكار تمكننا  من  دعم العديد من العملاء في صناعة نجاحاتهم
ولأن غايتنا تقديم الأفضل لك 
فإننا نستخدم أعلى التقنيات كفاءة  لنساهم في إنتاج تقنية ذكية تناسب العصر

                        </p>
                        <a href="{{ route('contact') }}">
                        <button type="submit" class="btn btn-danger btn-sm" style="width:128px; height:40px;border-radius:10px;">ابدأ مشروك الأن</button>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section-2">
                <div class="row">
                    <div class="col-md-7 align-items-end">
                        <div class="list-group">
                            <li class="list-group-item border-0">
                                <img src="{{ asset('images/icons/1.png') }}" alt="">
                                {!! $pages[28]->value !!}
                            </li>
                            <li class="list-group-item border-0">
                                <img src="{{ asset('images/icons/2.png') }}"  alt="">
                                {!! $pages[29]->value !!}
                            </li>
                            <li class="list-group-item border-0">
                                <img src="{{ asset('images/icons/3.png') }}"   alt="">
                                {!! $pages[30]->value !!}
                            </li>
                            <li class="list-group-item border-0">
                                <img src="{{ asset('images/icons/4.png') }}"  alt="">
                                {!! $pages[31]->value !!}
                            </li>
                        </div>

                    </div>

                    <div class="col-md-5 align-items-center" style="position: relative">
                        <img id="bg-common-image" src="{{ asset('images/aboutus-vector.svg') }}" style="width: 70%; position: relative; margin-right: 20%;" alt="">
                    </div>
                </div>
            </section>


    </div>

        @include('layouts.footer')

@endsection

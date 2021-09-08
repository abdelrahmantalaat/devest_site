@extends('layouts.app')

@section('title', 'Contact Us')
@section('script')
    <!-- Event snippet for Contact_Devest conversion page In your html page, 
    add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. --> 
    <script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; 
    gtag('event', 'conversion', { 'send_to': 'AW-431993351/0nC1CPbR5OQCEIfk_s0B', 'event_callback': callback }); return false; }
    </script>
@endsection
@section('content')

    @include('layouts.dark_navbar')

    <div class="container-md contact_page">
        <img id="bg-common-image" src="{{ 'images/contactvector.svg' }}" style="width: 35%; position: absolute; top: 150px; left: 0px"  alt="">
        <section class="section-1">
            <div class="row">
                <div class="col-md-8 align-items-end">
                    <p class="main-title">تواصل معنا</p>
                    <p class="description">نساعدك على الحصول على الخدمة التي ترضيك من خلال فريق من المتخصصين</p>
                    <!--contact us form-->
                    @include('layouts.contact_form')
                </div>
                <div class="col-md-4"></div>
            </div>

        </section>
    </div>

    <div class="space"></div>
    <div class="space"></div>
<style>
    .form-floating .form-control{
        color:black !important;
    }
</style>
    @include('layouts.footer')


@endsection

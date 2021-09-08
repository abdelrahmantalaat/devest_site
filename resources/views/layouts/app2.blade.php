<!DOCTYPE html>
   <head>
       
        <!-- Global site tag (gtag.js) - Google Ads: 431993351 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-431993351"></script> 
        <script> 
            window.dataLayer = window.dataLayer || []; 
            function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); 
            gtag('config', 'AW-431993351'); 
        </script>
    <!-- Global site tag (gtag.js) - Google Ads: 431993351 -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DEVEST | @yield('title')</title>

    <!-- Favicon-->
    {!! Html::favicon('images/favicon.png') !!}


    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    {!! Html::style('css/home.css') !!}


    <!--Boostrap CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- css animations-->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!-- hover effects-->
    {!! Html::style('css/hover.css') !!}

    <!--boostrap js-->
    <!-- jQuery and JS bundle w/ Popper.js
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-40ix5a3dj6/qaC7tfz0Yr+p9fqWLzzAXiwxVLt9dw7UjQzGYw6rWRhFAnRapuQyK" crossorigin="anonymous"></script>
    -->

    <!--font awesome library-->
    <!--{!! Html::style('css/all.css') !!}-->
    {!! Html::style('css/all.min.css') !!}

    {!! Html::script('js/script.js') !!}

    <!--owl caresoul-->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    {!! Html::style('css/home.css') !!}
     {!! Html::style('css/custom-font.css') !!}

    <!--AOS library for animations-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--expandable search bar-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    


</head>
<body>
    
    @yield('content')
    
     <!--owl caresoul-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

<!--{!! Html::script('js/all.js') !!}-->
{!! Html::script('js/all.min.js') !!}

<script>
    $(function () {
        $(document).scroll(function () {
            var $nav = $(".fixed-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    });

    $(document).ready(function(){
        $('#works_slider').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            navText:
                ["<img class='hvr-pop' src='{{ asset('images/icons/left.svg') }}' style='float: left'>",
                "<img class='hvr-pop' src='{{ asset('images/icons/right.svg') }}' style='float: right'>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 2
                }
            } })
            //$( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
           // $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');
    });


    $(document).ready(function(){
        $('#blog_slider').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            navText:
                ["<img class='hvr-pop' src='{{ asset('images/icons/left.svg') }}' style='float: left'>",
                    "<img class='hvr-pop' src='{{ asset('images/icons/right.svg') }}' style='float: right'>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            } })
        //$( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
        // $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');
    });

    $(document).ready(function(){
        $('#footer_slider').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay: 500,
            dots: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    });
</script>

<!-- Social media icons -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61012e7450c64b8b" async="async"></script>

<!--AOS library-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<!-- data counter -->
<!--{!! Html::script('js/data-counter.js') !!}-->

<!-- whatsapp plugin -->
<!--Div where the WhatsApp will be rendered-->  



</body>
</html>
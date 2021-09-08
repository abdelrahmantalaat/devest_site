{!! Html::style('css/navbar.css') !!}

<!--navigation bar-->
<navigation>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" >
    <div class="container-md">
        <a class="navbar-brand" href="{{ route('/') }}"><img src="{{ asset('images/settings/'.$settings[0]->value) }}"></a>
        <button class="navbar-toggler" id="navbar_toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" style="outline:none;">
            <span class="navbar-toggler-icon" id="navbar_toggler_icon"></span>
        </button>
        <div class="collapse navbar-collapse"  id="navbarResponsive">
            <ul class="navbar-nav ml-auto dark-nav" style="">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/') }}#services">خدماتنا</a>
                   
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">عن الشركة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('portfolio') }}">اعمالنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">مدونتنا</a>
                </li>
                <li class="nav-item" active>
                    <a class="nav-link" href="{{ route('contact') }}" style="margin-left: 155px">اتصل بنا</a>
                </li>
                <li class="nav-item nav-num" style="padding-left:0;">
                    <a class="nav-link" href="tel:{{ $settings[7]->value }}">
                        {{ $settings[7]->value }}<i style="margin-right: 10px" class="fas fa-phone-alt"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</navigation>

<script>
$(function () {
    $(document).scroll(function () {
        var $nav = $(".fixed-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
    
});
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoPlay: 1000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

window.onclick = function(e){
//     if(e.target.id == 'navbar' || e.target.id == 'navbar_toggler' || e.target.id == 'navbar_toggler_icon'){
//         return;
//     }else{
//         let num = navbarResponsive.offsetHeight;
//         let heightInterval = setInterval(function(){
//             navbarResponsive.style.overflow = 'hidden';
//             navbarResponsive.style.height = num-- + 'px';

//             if(navbarResponsive.offsetHeight = 0){
//                 clearInterval(heightInterval);
                navbarResponsive.classList.remove('show')
//             }
//         },1);
//     }
}
</script>

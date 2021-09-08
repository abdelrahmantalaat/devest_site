<?php 
    use App\Models\Setting;
    $settings = Setting::all();
?>
{!! Html::style('css/navbar.css') !!}
<!--navigation bar-->
<navigation_dark>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:#ffffff;height:80px">
    <div class="container-md" style="margin-top:60px">
        <a class="navbar-brand" href="{{ route('/') }}"><img src="{{ asset('images/settings/'.$settings[1]->value) }}" style="width: 145px; height: 40px"></a>
        <button class="navbar-toggler" id = 'navbar_toggler' type="button" data-toggle="collapse" data-target="#navbarResponsive" style="outline: none;">
            <span class="navbar-toggler-icon" id = 'navbar_toggler_icon'></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
            <ul class="navbar-nav ml-auto " id="nav-light">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/') }}#services">خدماتنا</a>
                   
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">عن الشركة</a>
                     <img src="{{ asset('images/icons/nav-line.png') }}" class="nav-line <?php echo isset($pageTitle) && $pageTitle == 'About Us' ? 'show' : ''; ?>" >
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="portfolio" href="{{ route('portfolio') }}">اعمالنا</a>
                    <img src="{{ asset('images/icons/nav-line.png') }}" class="nav-line <?php echo isset($pageTitle) && $pageTitle == 'Our Business' ? 'show' : ''; ?>" > 
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="blog" href="{{ route('blog') }}">مدونتنا</a>
                    <img src="{{ asset('images/icons/nav-line.png') }}" class="nav-line <?php echo isset($pageTitle) && $pageTitle == 'Blog' ? 'show' : ''; ?>" > 
                </li>
                <li class="nav-item" active>
                    <a class="nav-link" href="{{ route('contact') }}" style="margin-left: 155px">اتصل بنا</a>
                    <img  src="{{ asset('images/icons/nav-line.png') }}" class="nav-line <?php echo isset($pageTitle) && $pageTitle == 'Contact Us' ? 'show' : ''; ?>" > 
                </li>

                <li class="nav-item nav-num"  style="padding-left:0;">
                    <a class="nav-link" href="tel:{{ $settings[7]->value }}">
                        {{ $settings[7]->value }}<i style="margin-right: 10px" class="fas fa-phone-alt"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</navigation_dark>
<style>
    .navbar-light .navbar-toggler{
        border-color:#fff !important;
        
    }
    .navbar-light .navbar-toggler-icon{
        background-image:url(/public/images/dark-menu-icon.png) !important;
    }
</style>
<script>
if(document.title == "DEVEST | Blog"){
    blog.nextElementSibling.classList.add('show');
    
}else if(document.title == "DEVEST | Our Business"){
    portfolio.nextElementSibling.classList.add('show');
    
}

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
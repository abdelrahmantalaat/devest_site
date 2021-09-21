
<!--footer-->
<div class="container-fluid " style=" background-color: #0A0945; position:fixed;bottom:0">
<div class="container" style="position: relative; background-color: #0A0945; padding: 20px 0px 10px 0px;">
    <div class="row" style="padding-bottom: 10px">
        <div class="col-md-6 align-items-start">
            <div class="social-media">
                <a style="color: #98BFFF" href="{{ $settings[3]->value }}" class="fab fa-linkedin-in"></a>
                <a style="color: #98BFFF" href="{{ $settings[4]->value }}" class="fab fa-twitter"></a>
                <a style="color: #98BFFF" href="{{ $settings[5]->value }}" class="fab fa-facebook-f" ></a>
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

<style>

</style>

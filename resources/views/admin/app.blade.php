<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>DEVEST ADMIN DASHBOARD</title>
    
    <!-- Favicon-->
    {!! Html::favicon('images/favicon.png') !!}

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('css/themes/all-themes.css') }}" rel="stylesheet" />
    <!--summernote Editor -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css"
          rel="stylesheet">
    

    <!-- dropzone -->
    {!! Html::script('js/dropzone.js') !!}
    {!! Html::style('css/dropzone.css') !!}
    {!! Html::style('css/basic.css') !!}

    <!--font awesome library-->
    {!! Html::style('css/all.css') !!}

    {!! Html::script('js/script.js') !!}
<style>
    .swal2-select{
        display:none !important;
    }
</style>

</head>

<body class="theme-red">

<!--sweet alerts-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@include('admin.partials._page_loader')
@include('admin.partials._top_bar')


@if ($message = Session::get('success'))
    <script>
        Swal.fire(
            'Good job!',
            '{{ $message }}',
            'success'
        )
    </script>
@endif


@yield('content')

<!-- Jquery Core Js -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

<!-- Select Plugin Js -->
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('plugins/node-waves/waves.js') }}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{ asset('plugins/jquery-countto/jquery.countTo.js') }}"></script>

<!-- Morris Plugin Js -->
<script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('plugins/morrisjs/morris.js') }}"></script>

<!-- ChartJs -->
<script src="{{ asset('plugins/chartjs/Chart.bundle.js') }}"></script>

<!-- Flot Charts Plugin Js -->
<script src="{{ asset('plugins/flot-charts/jquery.flot.js') }}"></script>
<script src="{{ asset('plugins/flot-charts/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('plugins/flot-charts/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('plugins/flot-charts/jquery.flot.time.js') }}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('js/admin.js') }}"></script>
<script src="{{ asset('js/Pages/index.js') }}"></script>

<!-- Demo Js -->
<script src="{{ asset('js/demo.js') }}"></script>


<!-- Image preview Js -->
<script src="{{ asset('js/image_view.js') }}"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<script>
    $('.my-select').selectpicker();
</script>
<!--summernote Editor -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.summernote').summernote();
        });
    </script>
<!-- CK Editor -->
<!--<script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>-->
<!--<script>-->
<!--    $(document).ready(function() {-->
<!--        $('.ckeditor').ckeditor();-->
<!--    });-->
<!--</script>-->

</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('/assets/back/') }}/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('/assets/back/') }}/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('/assets/back/') }}/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('/assets/back/') }}/plugins/morrisjs/morris.css" rel="stylesheet" />

    <link href="{{ asset('/assets/back/') }}/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="{{ asset('/assets/back/') }}/css/style.css" rel="stylesheet">

    <link href="{{ asset('/assets/back/') }}/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="{{ asset('/assets/back/') }}/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('/assets/back/') }}/css/themes/all-themes.css" rel="stylesheet" />
    <link href="{{ asset('/assets/back/') }}/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
</head>

<body class="theme-red">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
@include('back.header.header')
<!-- #Top Bar -->
@include('back.navbar.navbar')

@yield('content')

<!-- Jquery Core Js -->
<script src="{{ asset('/assets/back/') }}/plugins/jquery/jquery.min.js"></script>


<!-- Bootstrap Core Js -->
<script src="{{ asset('/assets/back/') }}/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="{{ asset('/assets/back/') }}/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset('/assets/back/') }}/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="{{ asset('/assets/back/') }}/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="{{ asset('/assets/back/') }}/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="{{ asset('/assets/back/') }}/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="{{ asset('/assets/back/') }}/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="{{ asset('/assets/back/') }}/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="{{ asset('/assets/back/') }}/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="{{ asset('/assets/back/') }}/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="{{ asset('/assets/back/') }}/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ asset('/assets/back/') }}/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('/assets/back/') }}/plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{ asset('/assets/back/') }}/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Morris Plugin Js -->
<script src="{{ asset('/assets/back/') }}/plugins/raphael/raphael.min.js"></script>
<script src="{{ asset('/assets/back/') }}/plugins/morrisjs/morris.js"></script>

<!-- ChartJs -->
<script src="{{ asset('/assets/back/') }}/plugins/chartjs/Chart.bundle.js"></script>

<!-- Flot Charts Plugin Js -->
<script src="{{ asset('/assets/back/') }}/plugins/flot-charts/jquery.flot.js"></script>
<script src="{{ asset('/assets/back/') }}/plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="{{ asset('/assets/back/') }}/plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="{{ asset('/assets/back/') }}/plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="{{ asset('/assets/back/') }}/plugins/flot-charts/jquery.flot.time.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{ asset('/assets/back/') }}/plugins/jquery-sparkline/jquery.sparkline.js"></script>

<script src="{{ asset('/assets/back/') }}/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<!-- Bootstrap Datepicker Plugin Js -->
<script src="{{ asset('/assets/back/') }}/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<!-- Custom Js -->
<script src="{{ asset('/assets/back/') }}/js/admin.js"></script>
<script src="{{ asset('/assets/back/') }}/js/pages/tables/jquery-datatable.js"></script>
<script src="{{ asset('/assets/back/') }}/js/pages/index.js"></script>
<script src="{{ asset('/assets/back/') }}/plugins/bootstrap-select/js/bootstrap-select.js"></script>
<!-- Demo Js -->
<script src="{{ asset('/assets/back/') }}/js/demo.js"></script>




</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Carta Porte - Panel Principal </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="VictorGil" />
<!-- Favicon icon -->
<link rel="icon" href="assets/images/ContinoAzul.png" type="image/x-icon">
<!-- Google font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
<!-- waves.css -->
<link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
<!-- Required Fremwork -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
<!-- waves.css -->
<link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
<!-- themify icon -->
<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
<!-- Font Awesome -->
<link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
<!-- scrollbar.css -->
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
<!-- am chart export.css -->
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<!-- Style.css -->
<link rel="stylesheet" type="text/css" href="assets/css/tabla.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
<div class="loader-track">
<div class="preloader-wrapper">
<div class="spinner-layer spinner-blue">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
<div class="spinner-layer spinner-red">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>

<div class="spinner-layer spinner-yellow">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>

<div class="spinner-layer spinner-green">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Pre-loader end -->

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">
<nav class="navbar header-navbar pcoded-header">
<div class="navbar-wrapper">
<div class="navbar-logo">
<a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
<i class="ti-menu"></i>
</a>
<div class="mobile-search waves-effect waves-light">
<div class="header-search">
<div class="main-search morphsearch-search">
<div class="input-group">
<span class="input-group-addon search-close"><i class="ti-close"></i></span>
<input type="text" class="form-control" placeholder="Enter Keyword">
<span class="input-group-addon search-btn"><i class="ti-search"></i></span>
</div>
</div>
</div>
</div>
<a href="Panel">
<img class="img-fluid" src="https://contino.com.mx/contenido_demo/uploads/2020/03/logocontiweb.png" alt="Theme-Logo" />
</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;  
<a class="mobile-options waves-effect waves-light">
<i class="ti-more"></i>
</a>
</div> 

<div class="navbar-container container-fluid">
<ul class="nav-left">
<li>
<div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
</li>
<li>
<a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
<i class="ti-fullscreen"></i>
</a>
</li>
</ul>
<ul class="nav-right">
<li class="user-profile header-notification">
<a href="#!" class="waves-effect waves-light">
<img src="assets/images/AvatarUsuario.png" class="img-radius" alt="User-Profile-Image">
<span>Nombre Usuario</span>
<i class="ti-angle-down"></i>
</a>
<ul class="show-notification profile-notification">
<li class="waves-effect waves-light">
<a href="#!">
<i class="ti-settings"></i> Configuración
</a>
</li>
<li class="waves-effect waves-light">
<a href="user-profile.html">
<i class="ti-user"></i> Perfil
</a>
</li>
<li class="waves-effect waves-light">
<a href="Login">
<i class="ti-layout-sidebar-left"></i> Cerrar Sesión
</a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</nav>

<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<nav class="pcoded-navbar">
<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
<div class="pcoded-inner-navbar main-menu">
<div class="">
<div class="main-menu-header">
<img class="img-80 img-radius" src="assets/images/AvatarUsuario.png" alt="User-Profile-Image">
<div class="user-details">
<span id="more-details">Nombre Usuario<i class="fa fa-caret-down"></i></span>
</div>
</div>

<div class="main-menu-content">
<ul>
<li class="more-details">
<a href="user-profile.html"><i class="ti-user"></i>Perfil</a>
<a href="#!"><i class="ti-settings"></i>Configuración</a>
<a href="Login"><i class="ti-layout-sidebar-left"></i>Cerrar Sesión</a>
</li>
</ul>
</div>
</div>

 <!-- Inicio De La Barra Menu  -->

<div class="pcoded-navigation-label" data-i18n="nav.category.navigation"></div>
<ul class="pcoded-item pcoded-left-item">
<li class="active">
<a href="{{route('Panel')}}" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="ti-write"></i><b></b></span>
<span class="pcoded-mtext" data-i18n="nav.dash.main" style="font-size: 0.8em;">PROCESO CARTA PORTE</span>
<span class="pcoded-mcaret"></span>
</a>
</li>

<div class="pcoded-navigation-label" data-i18n="nav.category.forms" style="font-size: 0.8em;">PDF &amp; XML CARTA PORTE</div>
<ul class="pcoded-item pcoded-left-item">
<li>
<a href="{{route('Consulta-Descarga')}}" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="ti-cloud-down"></i><b>FC</b></span>
<span class="pcoded-mtext" data-i18n="nav.form-components.main" style="font-size: 0.8em;">CONSULTA Y DESCARGA </span>
<span class="pcoded-mcaret"></span>
</a>
</li>

</ul>

<div class="pcoded-navigation-label" data-i18n="nav.category.forms" style="font-size: 0.8em;">CONFIGURACIÓN</div>
<ul class="pcoded-item pcoded-left-item">
<li>
<a href="chart.html" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="ti-user"></i></span>
<span class="pcoded-mtext" data-i18n="nav.form-components.main" style="font-size: 0.8em;">GESTIÓN DE USUARIOS</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
<li>
<a href="{{route('Gestion-Domicilio')}}" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
<span class="pcoded-mtext" data-i18n="nav.form-components.main" style="font-size: 0.8em;">GESTIÓN DE DOMICILIOS</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
<li>
<a href="{{route('Gestion-Autotransporte')}}" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="ti-truck"></i></span>
<span class="pcoded-mtext" data-i18n="nav.form-components.main" style="font-size: 0.8em;">GESTIÓN AUTOTRANSPORTE</span>
<span class="pcoded-mcaret"></span>
</a>
</li>
<li>
<a href="{{route('Gestion-Operador')}}" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="fa fa-id-card"></i></span>
<span class="pcoded-mtext" data-i18n="nav.form-components.main" style="font-size: 0.8em;">GESTIÓN OPERADOR</span>
<span class="pcoded-mcaret"></span>
</a>
</li>

</ul>
</li>

</ul>
 <!-- Fin De La Barra Menu  -->
</nav>

<div class="pcoded-content">
<!-- Page-header start -->
<div class="page-header">
<div class="page-block">
<div class="row align-items-center">
<div class="col-md-8">
<div class="page-header-title">
<h5 class="text3d"></h5>
<p class="m-b-0"></p>
</div>
</div>
<div class="col-md-4">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
</li>
</ul>
</div>
</div>
</div>
</div>
<!-- Page-header end -->
<div class="pcoded-inner-content">
<!-- Main-body start -->
<div class="main-body">
<div class="page-wrapper">
<!-- Page-body start -->
<div class="datagrid">
<!-- Basic table card start -->
<div class="card">
    <div class="card-header">
        <span class="waves-effect waves-light btn-grd-primary"><h4>Proceso Carta Porte</h4></span>
        <span></span>
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><i class="fa fa fa-wrench open-card-option" style="color: white"></i></li>
                <li><i class="fa fa-window-maximize full-card" style="color: white"></i></li>
                <li><i class="fa fa-minus minimize-card" style="color: white"></i></li>
                <li><i class="fa fa-refresh reload-card" style="color: white"></i></li>
            </ul>
        </div>
    </div>
    <div class="p-15 p-b-0">
        <form class="form-material">
        <div class="form-group form-primary">
        <input class="form-control " type="text" name="search" autocomplete="off">
        <span class="form-bar"></span>
        <label class="float-label"><i class="fa fa-search m-r-10"></i>BUSCAR ENVIO NUM</label>
        <button class="btn-block waves-effect waves-light btn-grd-primary" type="submit">Buscar</button> 
    </div> 
    </form>
</div> 

    <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ENVIO NUM</th>
                        <th>ORIGEN NUM</th>
                        <th>ORIGEN NOMBRE</th>
                        <th>DESTINO NUM</th>
                        <th>DESTINO NOMBRE</th>
                        <th>GENERAR PROCESO</th>
            
                    </tr>
                </thead>
                <tbody>
                    @foreach($panel_proceso as $data)
                    <tr>
                        <td style="text-align: center;">{{$data->envio_num}}</td>
                        <td style="text-align: center;">{{$data->origen_num}}</td>
                        <td style="text-align: center;">{{$data->origen_nombre}}</td>
                        <td style="text-align: center;">{{$data->destino_num}}</td>
                        <td style="text-align: center;">{{$data->destino_nombre}}</td>
                        <td style="text-align: center;"><a  href="{{route('procesocp', $data->envio_num)}}" class="btn-block waves-effect waves-light btn-grd-primary" ><i class="ti-write"></i></a></td>
             </tr>
                    @endforeach()
                </tbody>
            </table>
            
            </div>
            <ul class="pagination justify-content-center">{{$panel_proceso->links("pagination::bootstrap-4")}}</ul>
            </div>
<!-- Basic table card end -->
</div>
<!-- Page-body end -->
</div>
</div>
<!-- Main-body end -->
</div>
</div>
</div>
</div>
</div>
</div>
<!--  project and team member end --> 
</div>
</div>
<!-- Page-body end -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<script type="text/javascript" src="assets/pages/widget/excanvas.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js "></script>
<!-- slimscroll js -->
<script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- Chart js -->
<script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
<!-- amchart js -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="assets/pages/widget/amchart/gauge.js"></script>
<script src="assets/pages/widget/amchart/serial.js"></script>
<script src="assets/pages/widget/amchart/light.js"></script>
<script src="assets/pages/widget/amchart/pie.min.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<!-- menu js -->
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vertical-layout.min.js "></script>
<!-- custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js "></script>
@include('sweetalert::alert')
</body>
</html>

<!DOCTYPE html>
<html lang="es">

<head>
<title>Carta Porte - Gestión De Domicilios </title>

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
<!-- Datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/datatables.css">

<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Sweetalert2 -->
<link rel="stylesheet" href="sweetalert2.min.css">

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

<!-- Inicio De La Barra Menu -->

<div class="pcoded-navigation-label" data-i18n="nav.category.navigation"></div>
<ul class="pcoded-item pcoded-left-item">
<li>
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
<li class="active">
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
        <span class="waves-effect waves-light btn-grd-primary"><h4>Gestión De Domicilios</h4></span>
        <span></span>
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><i class="fa fa fa-wrench open-card-option" style="color: white"></i></li>
                <li><i class="fa fa-window-maximize full-card" style="color: white"></i></li>
                <li><i class="fa fa-refresh reload-card" style="color: white"></i></li>
            </ul>
        </div>
    </div>
    
    <!-- Inicio Modal Crear Registro -->
    <div class="p-15 p-b-0">
<button type="button" class="btn-block waves-effect waves-light btn-grd-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar Domicilio</button>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="cerrarModal" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Domicilio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="gestionDomicilio-guardado" class="gestionDomicilio-guardado">
        <label for="message-text" class="col-form-label" >Tipo De Domicilio*</label>

        <div>
                    <label class="btn btn-primary">
                        <input type="radio" name="tipo_domicilio" id="tipo_domicilio" value="TIENDA" autocomplete="off"> TIENDA
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="tipo_domicilio" id="tipo_domicilio" value="ALMACEN" autocomplete="off"> ALMACEN
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="tipo_domicilio" id="tipo_domicilio" value="MAYOREO" autocomplete="off"> MAYOREO
                    </label>
                </div> 
                <br>
          
             <div class="form-row">
          <div class="form-group col-md-3">
          <label for="message-text" class="col-form-label">ID* <small>(Número De Sucursal)</small></label>
          <input type="text"
              class="form-control" name="id_enlace_domicilio" id="id_enlace_domicilio" aria-describedby="helpId" placeholder="ID" style="border-radius: 11px;" autocomplete="off">
          </div>
          <div class="form-group col-md-8">
            <label for="message-text" class="col-form-label">Nombre* <small>(Sucursal)</small></label>
            <input type="text"
              class="form-control" name="nombre_domicilio" id="nombre_domicilio" aria-describedby="helpId" placeholder="Nombre" style="border-radius: 11px;" onkeyup="mayusculas(this);" autocomplete="off">
          </div>
          <div class="form-group col-md-8">
            <label for="message-text" class="col-form-label">Dirección* <small>(Completa)</small></label>
            <input type="text"
              class="form-control" name="calle_domicilio" id="calle_domicilio" aria-describedby="helpId" placeholder="Calle" style="border-radius: 11px;" onkeyup="mayusculas(this);" autocomplete="off">
          </div>
          <div class="form-group col-md-3">
            <label for="message-text" class="col-form-label">No. Exterior*</label>
            <input type="text"
              class="form-control" name="numero_ext_domicilio" id="numero_ext_domicilio" aria-describedby="helpId" placeholder="No. Exterior" style="border-radius: 11px;" autocomplete="off">
          </div>
          <div class="form-group col-md-3">
            <label for="message-text" class="col-form-label">No. Interior o Locales</label>
            <input type="text"
              class="form-control" name="numero_int_domicilio" id="numero_int_domicilio" aria-describedby="helpId" placeholder="No. Interior o Locales" style="border-radius: 11px;" onkeyup="mayusculas(this);" autocomplete="off">
          </div>
          <div class="form-group col-md-5">
            <label for="message-text" class="col-form-label">Referencias</label>
            <input type="text"
              class="form-control" name="referencia_domicilio" id="referencia_domicilio" aria-describedby="helpId" placeholder="Referencias" style="border-radius: 11px;" onkeyup="mayusculas(this);" autocomplete="off">
          </div>
          <div class="form-group col-md-3">
            <label for="message-text" class="col-form-label">Código Postal*</label>
            <input type="text"
              class="form-control" name="cp_domicilio" id="cp_domicilio" aria-describedby="helpId" placeholder="Código Postal" style="border-radius: 11px;" autocomplete="nope">
          </div>
          <hr width="100%">
          <div class="row">
							<div class="col-sm-12">
								<h5 class="info-text"> Claves SAT</h5>
							</div>
          <br> 
          <br>
          <div class="form-group col-md-3">
            <label for="message-text" class="col-form-label">Clave Colonia*</label>
            <input type="text"
              class="form-control" name="clave_colonia_domicilio" id="clave_colonia_domicilio" aria-describedby="helpId" placeholder="Clave Colonia" style="border-radius: 11px;" autocomplete="off">
          </div>
          <div class="form-group col-md-3">
            <label for="message-text" class="col-form-label">Clave Localidad</label>
            <input type="text"
              class="form-control" name="clave_localidad_domicilio" id="clave_localidad_domicilio" aria-describedby="helpId" placeholder="Clave Localidad" style="border-radius: 11px;" autocomplete="nope">
          </div>
          <div class="form-group col-md-3">
            <label for="message-text" class="col-form-label">Clave Municipio*</label>
            <input type="text"
              class="form-control" name="clave_municipio_domicilio" id="clave_municipio_domicilio" aria-describedby="helpId" placeholder="Clave Municipio" style="border-radius: 11px;" autocomplete="off">
          </div>
          <div class="form-group col-md-3">
            <label for="message-text" class="col-form-label">Clave Estado*</label>
            <input type="text"
              class="form-control" name="clave_estado_domicilio" id="clave_estado_domicilio" aria-describedby="helpId" placeholder="Clave Estado" style="border-radius: 11px;" onkeyup="mayusculas(this);" autocomplete="nope">
          </div>
          <div class="form-group col-md-3">
            <label for="message-text" class="col-form-label">Clave País*</label>
            <input type="text"
              class="form-control" name="clave_pais_domicilio" id="clave_pais_domicilio" aria-describedby="helpId" placeholder="Clave País" style="border-radius: 11px;" onkeyup="mayusculas(this);" autocomplete="nope">
          </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      </form>
      ...
    </div>
  </div>
</div>
<!-- Fin Modal -->

<!-- Inicio Modal Actualizar Registro -->
<div class="modal fade bd-actualizar-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="cerrarModalActualizar" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Domicilio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="gestionDomicilio-actualizar" class="gestionDomicilio-actualizar">
        <label for="message-text" class="col-form-label" >Tipo De Domicilio*</label>

        <div>
                    <label class="btn btn-primary">
                        <input type="radio" name="tipo_domicilio_actualizar" id="tipo_domicilio_actualizar" value="TIENDA" autocomplete="off"> TIENDA
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="tipo_domicilio_actualizar" id="tipo_domicilio_actualizar" value="ALMACEN" autocomplete="off"> ALMACEN
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="tipo_domicilio_actualizar" id="tipo_domicilio_actualizar" value="MAYOREO" autocomplete="off"> MAYOREO
                    </label>
                </div> 
                <br>
          
             <div class="form-row">
          <div class="form-group col-md-3">
          <label for="message-text" class="col-form-label">ID* <small>(Número De Sucursal)</small></label>
          <input type="text"
              class="form-control" name="id_enlace_domicilio_actualizar" id="id_enlace_domicilio_actualizar" aria-describedby="helpId" placeholder="ID" style="border-radius: 11px;" autocomplete="off">
          </div>
          <div class="form-group col-md-8">
            <label for="message-text" class="col-form-label">Nombre* <small>(Sucursal)</small></label>
            <input type="text"
              class="form-control" name="nombre_domicilio_actualizar" id="nombre_domicilio_actualizar" aria-describedby="helpId" placeholder="Nombre" style="border-radius: 11px;" onkeyup="mayusculas(this);" autocomplete="off">
          </div>
          <div class="form-group col-md-8">
            <label for="message-text" class="col-form-label">Dirección* <small>(Completa)</small></label>
            <input type="text"
              class="form-control" name="calle_domicilio_actualizar" id="calle_domicilio_actualizar" aria-describedby="helpId" placeholder="Calle" style="border-radius: 11px;" onkeyup="mayusculas(this);" autocomplete="off">
          </div>
          <div class="form-group col-md-3">
            <label for="message-text" class="col-form-label">No. Exterior*</label>
            <input type="text"
              class="form-control" name="numero_ext_domicilio_actualizar" id="numero_ext_domicilio_actualizar" aria-describedby="helpId" placeholder="No. Exterior" style="border-radius: 11px;" autocomplete="off">
          </div>
          <div class="form-group col-md-3">
            <label for="message-text" class="col-form-label">No. Interior o Locales</label>
            <input type="text"
              class="form-control" name="numero_int_domicilio_actualizar" id="numero_int_domicilio_actualizar" aria-describedby="helpId" placeholder="No. Interior o Locales" style="border-radius: 11px;" onkeyup="mayusculas(this);" autocomplete="off">
          </div>
          <div class="form-group col-md-5">
            <label for="message-text" class="col-form-label">Referencias</label>
            <input type="text"
              class="form-control" name="referencia_domicilio_actualizar" id="referencia_domicilio_actualizar" aria-describedby="helpId" placeholder="Referencias" style="border-radius: 11px;" onkeyup="mayusculas(this);" autocomplete="off">
          </div>
          <div class="form-group col-md-3">
            <label for="message-text" class="col-form-label">Código Postal*</label>
            <input type="text"
              class="form-control" name="cp_domicilio_actualizar" id="cp_domicilio_actualizar" aria-describedby="helpId" placeholder="Código Postal" style="border-radius: 11px;" autocomplete="nope">
          </div>
          <hr width="100%">
          <div class="row">
							<div class="col-sm-12">
								<h5 class="info-text"> Claves SAT</h5>
							</div>
          <br> 
          <br>
          <div class="form-group col-md-3">
            <label for="message-text" class="col-form-label">Clave Colonia*</label>
            <input type="text"
              class="form-control" name="clave_colonia_domicilio_actualizar" id="clave_colonia_domicilio_actualizar" aria-describedby="helpId" placeholder="Clave Colonia" style="border-radius: 11px;" autocomplete="off">
          </div>
          <div class="form-group col-md-3">
            <label for="message-text" class="col-form-label">Clave Localidad</label>
            <input type="text"
              class="form-control" name="clave_localidad_domicilio_actualizar" id="clave_localidad_domicilio_actualizar" aria-describedby="helpId" placeholder="Clave Localidad" style="border-radius: 11px;" autocomplete="nope">
          </div>
          <div class="form-group col-md-3">
            <label for="message-text" class="col-form-label">Clave Municipio*</label>
            <input type="text"
              class="form-control" name="clave_municipio_domicilio_actualizar" id="clave_municipio_domicilio_actualizar" aria-describedby="helpId" placeholder="Clave Municipio" style="border-radius: 11px;" autocomplete="off">
          </div>
          <div class="form-group col-md-3">
            <label for="message-text" class="col-form-label">Clave Estado*</label>
            <input type="text"
              class="form-control" name="clave_estado_domicilio_actualizar" id="clave_estado_domicilio_actualizar" aria-describedby="helpId" placeholder="Clave Estado" style="border-radius: 11px;" onkeyup="mayusculas(this);" autocomplete="nope">
          </div>
          <div class="form-group col-md-3">
            <label for="message-text" class="col-form-label">Clave País*</label>
            <input type="text"
              class="form-control" name="clave_pais_domicilio_actualizar" id="clave_pais_domicilio_actualizar" aria-describedby="helpId" placeholder="Clave País" style="border-radius: 11px;" onkeyup="mayusculas(this);" autocomplete="nope">
          </div>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      </form>
      ...
    </div>
  </div>
</div>
<!-- Fin Modal -->


<br>

         
            <table class="display nowrap" id="gestionDomicilio-listado" style="width:100%">
                <thead>
                    <tr>
                        <th style="text-align: center;">NÚMERO DE SUCURSAL</th>
                        <th style="text-align: center;">TIPO</th>
                        <th style="text-align: center;">NOMBRE</th>
                        <th style="text-align: center;">CALLE</th>
                        <th style="text-align: center;">NO. EXTERIOR</th>
                        <th style="text-align: center;">CÓDIGO POSTAL</th>
                        <th style="text-align: center;">CLAVE COLONIA</th>
                        <th style="text-align: center;">CLAVE LOCALIDAD</th>
                        <th style="text-align: center;">CLAVE MUNICIPIO</th>
                        <th style="text-align: center;">CLAVE ESTADO</th>
                        <th style="text-align: center;">CLAVE PAÍS</th>
                        <th style="text-align: center;">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                  
                </tbody>
            </table>        
            
            
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

    <style>
       
    </style>
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
<!-- sweetalert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js "></script>
<!-- DataTable js  -->
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<!-- validaciones -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="{{ asset('assets/js/validation.js') }}" type="text/javascript"></script>

</body>
</html>

<script>
   //Peticion ajax GET Datatables
jQuery(document).ready(function() {
    $('#gestionDomicilio-listado').DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        type: 'GET',
        ajax: "{{ url('api/Gestion-Domicilio-Listado') }}",
        columnDefs: [{ 
          "defaultContent": "-", 
          "targets": "_all",
          // className: "text-center"
           }
         ],
        columns: [
            { data: 'id_enlace_domicilio', name: 'id_enlace_domicilio' },
            { data: 'tipo_domicilio', name: 'tipo_domicilio' },
            { data: 'nombre_domicilio', name: 'nombre_domicilio' },
            { data: 'calle_domicilio', name: 'calle_domicilio' },
            { data: 'numero_ext_domicilio', name: 'numero_ext_domicilio' },
            { data: 'cp_domicilio', name: 'cp_domicilio' },
            { data: 'clave_colonia_domicilio', name: 'clave_colonia_domicilio' },
            { data: 'clave_localidad_domicilio', name: 'clave_localidad_domicilio' },
            { data: 'clave_municipio_domicilio', name: 'clave_municipio_domicilio' },
            { data: 'clave_estado_domicilio', name: 'clave_estado_domicilio' },
            { data: 'clave_pais_domicilio', name: 'clave_pais_domicilio' },
            {mRender: function ( data, type, row, meta ) {
            return '<a href="javascript:void(0);" class="btn waves-effect waves-light btn-grd-primary btn-sm fa fa-pencil-square-o" data-toggle="modal" data-target=".bd-actualizar-modal-lg"  onClick="updateDomicilio('+row.id_gestion_domicilio+')"> Editar </a>  <a href="javascript:void(0);" onClick="alertaDomicilio('+row.id_gestion_domicilio+')" class="btn waves-effect waves-light btn-grd-danger btn-sm fa fa-trash-o"> Eliminar </a>';
            }
          }
        ],
        language: {
        "info": "_TOTAL_ Registros",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "search": "Buscador:",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente »",
            "previous": "« Anterior",
        },
        "lengthMenu": "Mostrar _MENU_ Registros",
        "processing": "Cargando...",
        "emptyTable": "No Hay Datos",
        "zeroRecords": "No Se Encontraron Resultados",
        }
    });
    $('[type=search]').each(function () {
        $(this).attr("placeholder", "Inserte Busqueda");
        $(this).before('<span class="fa fa-search"></span>');
    });
});

  //Peticion ajax POST 
  jQuery(document).ready(function() {
  
  jQuery('#gestionDomicilio-guardado').submit(function(e) {
    e.preventDefault();

    const id_enlace_domicilio = $('#id_enlace_domicilio').val();
    const tipo_domicilio = $('input[name="tipo_domicilio"]:checked').val();
    const nombre_domicilio = $('#nombre_domicilio').val();
    const calle_domicilio = $('#calle_domicilio').val();
    const numero_ext_domicilio = $('#numero_ext_domicilio').val();
    const numero_int_domicilio = $('#numero_int_domicilio').val();
    const referencia_domicilio = $('#referencia_domicilio').val();
    const cp_domicilio = $('#cp_domicilio').val();
    const clave_colonia_domicilio = $('#clave_colonia_domicilio').val();
    const clave_localidad_domicilio = $('#clave_localidad_domicilio').val();
    const clave_municipio_domicilio = $('#clave_municipio_domicilio').val();
    const clave_estado_domicilio = $('#clave_estado_domicilio').val();
    const clave_pais_domicilio = $('#clave_pais_domicilio').val();

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

  $.ajax({
    
    url: "{{ url('api/Gestion-Domicilio') }}",
    type: "POST", 
    data:{
      id_enlace_domicilio,
      tipo_domicilio,
      nombre_domicilio,
      calle_domicilio,
      numero_ext_domicilio,
      numero_int_domicilio,
      referencia_domicilio,
      cp_domicilio,
      clave_colonia_domicilio,
      clave_localidad_domicilio,
      clave_municipio_domicilio,
      clave_estado_domicilio,
      clave_pais_domicilio
    },
    dataType: "json",
    success: function(response){
      if (response) {
        $('#gestionDomicilio-guardado')[0].reset();
        $('#gestionDomicilio-listado').DataTable().ajax.reload();
        $('#cerrarModal').modal('hide');
       
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '¡Registro Exitoso! ',
            showConfirmButton: false,
            timer: 3000,
            toast: true,
            position: 'top-end'
          })
      }
    }
  });
 });
});// Fin petición Ajax POST

//Peticion ajax PUT
function updateDomicilio(id_gestion_domicilio){

  $.ajax({
			type: 'GET', 
      url: "{{ url('api/Gestion-Domicilio-Editar') }}/"+id_gestion_domicilio,
      dataType: 'json',
			success: function(response){
     
				$.each(response.data.attributes, function (key, item){

          if (item.tipo_domicilio == "TIENDA") {
            $('input[name=tipo_domicilio_actualizar][value="TIENDA"]').prop('checked', true);
          } 
          else if  (item.tipo_domicilio == "ALMACEN") {
            $('input[name=tipo_domicilio_actualizar][value="ALMACEN"]').prop('checked', true); 
          }
          else if  (item.tipo_domicilio == "MAYOREO") {
            $('input[name=tipo_domicilio_actualizar][value="MAYOREO"]').prop('checked', true); 
          }

					$('#id_enlace_domicilio_actualizar').val(item.id_enlace_domicilio);
          $('#nombre_domicilio_actualizar').val(item.nombre_domicilio);
          $('#calle_domicilio_actualizar').val(item.calle_domicilio);
          $('#numero_ext_domicilio_actualizar').val(item.numero_ext_domicilio);
          $('#numero_int_domicilio_actualizar').val(item.numero_int_domicilio);
          $('#referencia_domicilio_actualizar').val(item.referencia_domicilio);
          $('#cp_domicilio_actualizar').val(item.cp_domicilio);
          $('#clave_colonia_domicilio_actualizar').val(item.clave_colonia_domicilio);
          $('#clave_localidad_domicilio_actualizar').val(item.clave_localidad_domicilio);
          $('#clave_municipio_domicilio_actualizar').val(item.clave_municipio_domicilio);
          $('#clave_estado_domicilio_actualizar').val(item.clave_estado_domicilio);
          $('#clave_pais_domicilio_actualizar').val(item.clave_pais_domicilio);

              });   
			}
		});

    jQuery('#gestionDomicilio-actualizar').submit(function(e) {
    e.preventDefault();

    const id_enlace_domicilio = $('#id_enlace_domicilio_actualizar').val();
    const tipo_domicilio = $('input[name="tipo_domicilio_actualizar"]:checked').val();
    const nombre_domicilio = $('#nombre_domicilio_actualizar').val();
    const calle_domicilio = $('#calle_domicilio_actualizar').val();
    const numero_ext_domicilio = $('#numero_ext_domicilio_actualizar').val();
    const numero_int_domicilio = $('#numero_int_domicilio_actualizar').val();
    const referencia_domicilio = $('#referencia_domicilio_actualizar').val();
    const cp_domicilio = $('#cp_domicilio_actualizar').val();
    const clave_colonia_domicilio = $('#clave_colonia_domicilio_actualizar').val();
    const clave_localidad_domicilio = $('#clave_localidad_domicilio_actualizar').val();
    const clave_municipio_domicilio = $('#clave_municipio_domicilio_actualizar').val();
    const clave_estado_domicilio = $('#clave_estado_domicilio_actualizar').val();
    const clave_pais_domicilio = $('#clave_pais_domicilio_actualizar').val();

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

  $.ajax({
    
    url: "{{ url('api/Gestion-Domicilio') }}/"+id_gestion_domicilio,
    type: "PUT", 
    data:{
      id_enlace_domicilio,
      tipo_domicilio,
      nombre_domicilio,
      calle_domicilio,
      numero_ext_domicilio,
      numero_int_domicilio,
      referencia_domicilio,
      cp_domicilio,
      clave_colonia_domicilio,
      clave_localidad_domicilio,
      clave_municipio_domicilio,
      clave_estado_domicilio,
      clave_pais_domicilio
    },
    dataType: "json",
    success: function(response){
      if (response) {
        $('#gestionDomicilio-actualizar')[0].reset();
        $('#gestionDomicilio-listado').DataTable().ajax.reload();
        $('#cerrarModalActualizar').modal('hide');
       
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '¡Registro Actualizado Con Exitoso! ',
            showConfirmButton: false,
            timer: 3000,
            toast: true,
            position: 'top-end'
          })
      }
    }
  });
 });
}// Fin petición Ajax PUT

// Alerta para eliminar los domicilios
function alertaDomicilio(id_gestion_domicilio){
  
          Swal.fire({
          title: '¿Estás Seguro Que Deseas Eliminar El Registro?',
          text: "¡No podrás revertir esto!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: '¡Si, Eliminarlo!'
        }).then((result) => {
          if (result.isConfirmed) {
            deleteDomicilio(id_gestion_domicilio);
          }
        })
}

//Peticion ajax DELETE 
function deleteDomicilio(id_gestion_domicilio){

        $.ajax({
          url: "{{ url('api/Gestion-Domicilio-Eliminar') }}/"+id_gestion_domicilio,
          type:"DELETE",
          success: function(response){
            $('#gestionDomicilio-listado').DataTable().ajax.reload();
          
            Swal.fire(
              '¡Eliminado!',
              'El Registro Fue Eliminado.',
              'success'
            )
          }
      });
}
</script>

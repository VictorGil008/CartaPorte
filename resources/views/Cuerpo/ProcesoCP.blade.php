<!doctype html>
<html lang="en">

<head>
<title>Carta Porte - Proceso CP </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="VictorGil" />
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Favicon icon -->
<link rel="icon" href="{{ asset('assets/images/ContinoAzul.png') }}" type="image/x-icon">
<!-- Google font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
<!-- waves.css -->
<link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
<!-- themify icon -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">
<!-- Font Awesome -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/font-awesome/css/font-awesome.min.css') }}">
<!-- Style.css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

<!-- Componentes Del Formulario -->
<!-- CSS Files -->
<link href="{{ asset('assetsForm/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assetsForm/css/paper-bootstrap-wizard.css') }}" rel="stylesheet" />

<!-- Fonts and Icons -->
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<link href="{{ asset('assetsForm/css/themify-icons.css') }}"" rel=" stylesheet">

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
<a href="{{route('Panel')}}">
	<img class="img-fluid" src="https://contino.com.mx/contenido_demo/uploads/2020/03/logocontiweb.png" alt="Theme-Logo" />
</a>
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
		<a href="#!" class="waves-effect waves-light" style="text-decoration: none;">
			<img src="{{ asset('assets/images/AvatarUsuario.png') }}" class="img-radius" alt="User-Profile-Image">
			<span>Nombre Usuario</span>
			<i class="ti-angle-down"></i>
		</a>
		<ul class="show-notification profile-notification">
			<li class="waves-effect waves-light">
				<a href="#!" style="text-decoration: none;">
					<i class="ti-settings"></i> Configuración
				</a>
			</li>
			<li class="waves-effect waves-light">
				<a href="user-profile.html" style="text-decoration: none;">
					<i class="ti-user"></i> Perfil
				</a>
			</li>
			<li class="waves-effect waves-light">
				<a href="Login" style="text-decoration: none;">
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
			<img class="img-80 img-radius" src="{{ asset('assets/images/AvatarUsuario.png') }}" alt="User-Profile-Image">
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

	<!--  Inicio De La Barra Menu  -->

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
					<span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
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
	<!--  Fin De La Barra Menu  -->
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

<!-- Inicio Form -->
<!--   Big container   -->
<div class="container">

	<!--      Wizard container        -->
	<div class="">

		<div class="card wizard-card" data-color="blue" id="wizardProfile">
			<form action="" method="" id="registro-cartaporte">
				<!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

				<div class="wizard-header text-center">
					<h3 class="wizard-title">Solicitud Proceso Carta Porte</h3>
					<p class="category">LLenado de datos para Carta Porte.</p>
				</div>

				<div class="wizard-navigation">
					<div class="progress-with-circle">
						<div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
					</div>
					<ul>
						<li>
							<a href="#Seccion-Comprobante" data-toggle="tab">
								<div class="icon-circle">
									<i class="ti-receipt"></i>
								</div>
								Sección Comprobante
							</a>
						</li>
						<li>
							<a href="#Seccion-Ubicacion" data-toggle="tab" style=" cursor: not-allowed; pointer-events: none;">
								<div class="icon-circle">
									<i class="ti-map-alt"></i>
								</div>
								Sección Ubicación
							</a>
						</li>
						<li>
							<a href="#Seccion-Domicilio" data-toggle="tab" style=" cursor: not-allowed; pointer-events: none;">
								<div class="icon-circle">
									<i class="ti-home"></i>
								</div>
								Sección Domicilio
							</a>
						</li>
						<li>
							<a href="#Seccion-Mercancias" data-toggle="tab" style=" cursor: not-allowed; pointer-events: none;">
								<div class="icon-circle">
									<i class="ti-shopping-cart-full"></i>
								</div>
								Sección Mercancía
							</a>
						</li>
						<li>
							<a href="#Seccion-Autotransporte" data-toggle="tab" style=" cursor: not-allowed; pointer-events: none;">
								<div class="icon-circle">
									<i class="ti-truck"></i>
								</div>
								Sección Autotransporte
							</a>
						</li>
						<li>
							<a href="#Seccion-TiposFigura" data-toggle="tab" style=" cursor: not-allowed; pointer-events: none;">
								<div class="icon-circle">
									<i class="ti-user"></i>
								</div>
								Sección Tipos Figura
							</a>
						</li>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane" id="Seccion-Comprobante" style="text-align: center;">
						<div class="row">
							<h5 class="info-text"> Sección Comprobante</h5>
							<div class="col-sm-2 col-sm-offset-1">
								<div class="form-group">
									<label>Versión <small></small></label>
									<input name="version_comprobante" id="version_comprobante" type="text" class="form-control" placeholder="Versión" value="3.3" readonly>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Fecha <small></small></label>
									<input name="fecha_comprobante" id="fecha_comprobante" type="datetime-local" class="form-control" value="{{ date('Y-m-d\TH:i:s') }}" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Tipo De Comprobante <small></small></label>
									<input name="tipo_comprobante" id="tipo_comprobante" type="text" class="form-control" placeholder="Tipo De Comprobante" value="T" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>SubTotal <small></small></label>
									<input name="subtotal_comprobante" id="subtotal_comprobante" type="text" class="form-control" placeholder="SubTotal" value="0" readonly>
								</div>
							</div>
							<div class="col-sm-2 col-sm-offset-4">
								<div class="form-group">
									<label>Moneda <small></small></label>
									<input name="moneda_comprobante" id="moneda_comprobante" type="text" class="form-control" placeholder="SubTotal" value="XXX" readonly>
								</div>
							</div>
							<div class="col-sm-2 col-sm-offset">
								<div class="form-group">
									<label>Total <small></small></label>
									<input name="total_comprobante" id="total_comprobante" type="text" class="form-control" placeholder="SubTotal" value="0" readonly>
								</div>
							</div>
						</div>
						<div class="row">
							<h5 class="info-text"> Sección Receptor</h5>
							<div class="col-sm-2 col-sm-offset-4">
								<div class="form-group">
									<label>RFC <small></small></label>
									<input name="rfc_receptor" id="rfc_receptor" type="text" class="form-control" placeholder="RFC" value="FCV8305187XA" readonly>
								</div>
							</div>
							<div class="col-sm-2 col-sm-offset">
								<div class="form-group">
									<label>UsoCFDI <small></small></label>
									<input name="usocfdi_receptor" id="usocfdi_receptor" type="text" class="form-control" placeholder="UsoCFDI" value="P01" readonly>
								</div>
							</div>
					    </div>
						<div class="row">
							<h5 class="info-text"> Sección Conceptos</h5>
							<div class="col-sm-10 col-sm-offset-1">
							<table class="table-responsive" style="border: solid #1E76C9;" BORDER>
                              <thead>
                                <tr width="100" height="40">
                                  <th scope="col" style="text-align: center;" width="210"><input type="checkbox" onClick="toggle(this); CheckboxMercancia()"  /> Seleccionar Todo</th>
                                  <th scope="col" style="text-align: center;" width="200">Clave del Producto*</th>
                                  <th scope="col" style="text-align: center;" width="200">Clave Unidad*</th>
                                  <th scope="col" style="text-align: center;" width="200">Descripción*</th>
                                </tr>
                              </thead>
                              <tbody id="tbody" height="40">
                                 <!-- Peticion ajax cargada del script  -->
                                </tbody>
                              </table>
							</div>
					     </div>
						 <div class="row">
							<h5 class="info-text"> Sección Carta Porte</h5>
							<div class="col-sm-3 col-sm-offset-1">
								<div class="form-group">
									<label>Versión <small></small></label>
									<input name="version_carta_porte" id="version_carta_porte" type="text" class="form-control" placeholder="Versión" value="2.0" readonly>
								</div>
							</div>
							<div class="col-sm-3 col-sm-offset">
								<div class="form-group">
									<label>Transporte Internacional <small></small></label>
									<input name="transpInternac_carta_porte" id="transpInternac_carta_porte" type="text" class="form-control" placeholder="Transporte Internacional" value="No" readonly>
								</div>
							</div>
							<div class="col-sm-3 col-sm-offset">
								<div class="form-group">
									<label>Total Distancia Recorrida <small></small></label>
									<input name="totaldistrec_carta_porte" id="totaldistrec_carta_porte" type="text" class="form-control" placeholder="Total Distancia Recorrida KM">
								</div>
							</div>
							<!-- Datos Ocultos -->
							<input type="text" name="envio_id" id="envio_id" type="text" hidden="true" readonly>
							<input type="text" name="envio_num" id="envio_num" type="text" hidden="true" readonly>
					  </div>
					</div>
					<div class="tab-pane" id="Seccion-Ubicacion" style="text-align: center;">
						<h5 class="info-text"> Sección  Ubicación Origen</h5>
						<div class="row">
							<div class="col-sm-2 col-sm-offset-1">
							<div class="form-group">
									<label>Tipo Ubicación <small></small></label>
									<input name="tipo_origen_ubicacion" id="tipo_origen_ubicacion" type="text" class="form-control" placeholder="Tipo Ubicación" value="ORIGEN" readonly>
								</div>
							</div>
							<div class="col-sm-2 col-sm-offset">
							<div class="form-group">
									<label>ID Ubicación <small></small></label>
									<input name="id_origen_ubicacion" id="id_origen_ubicacion" type="text" class="form-control" placeholder="ID Ubicación" readonly>
								</div>
							</div>
							<div class="col-sm-2 col-sm-offset">
							<div class="form-group">
									<label>RFC <small></small></label>
									<input name="rfc_origen_ubicacion" id="rfc_origen_ubicacion" type="text" class="form-control" placeholder="RFC" value="FCV8305187XA" readonly>
								</div>
							</div>
							<div class="col-sm-4 col-sm-offset">
							<div class="form-group">
									<label>Nombre del Remitente <small></small></label>
									<input name="nomb_remit_origen_ubicacion" id="nomb_remit_origen_ubicacion" type="text" class="form-control" placeholder="Nombre del Remitente" readonly>
								</div>
							</div>
							<div class="col-sm-4 col-sm-offset-4">
							<div class="form-group">
									<label>Fecha y Hora de Salida <small></small></label>
									<input name="fecha_origen_ubicacion" id="fecha_origen_ubicacion" type="text" class="form-control" value="{{ date('Y-m-d\TH:i:s') }}" readonly>
								</div>
							</div>
						</div>
						<h5 class="info-text"> Sección  Ubicación Destino</h5>
						<div class="row">
							<div class="col-sm-2 col-sm-offset-1">
							<div class="form-group">
									<label>Tipo Ubicación <small></small></label>
									<input name="tipo_destino_ubicacion" id="tipo_destino_ubicacion" type="text" class="form-control" placeholder="Tipo Ubicación" value="DESTINO" readonly>
								</div>
							</div>
							<div class="col-sm-2 col-sm-offset">
							<div class="form-group">
									<label>ID Ubicacion <small></small></label>
									<input name="id_destino_ubicacion" id="id_destino_ubicacion" type="text" class="form-control" placeholder="ID Ubicacion" readonly>
								</div>
							</div>
							<div class="col-sm-2 col-sm-offset">
							<div class="form-group">
									<label>RFC <small></small></label>
									<input name="rfc_destino_ubicacion" id="rfc_destino_ubicacion" type="text" class="form-control" placeholder="RFC" value="FCV8305187XA" readonly>
								</div>
							</div>
							<div class="col-sm-4 col-sm-offset">
							<div class="form-group">
									<label>Nombre del Remitente <small></small></label>
									<input name="nomb_remit_destino_ubicacion" id="nomb_remit_destino_ubicacion" type="text" class="form-control" placeholder="Nombre del Remitente" readonly>
								</div>
							</div>
							<div class="col-sm-3 col-sm-offset-3">
							<div class="form-group">
									<label>Fecha y Hora de Entrada* <small></small></label>
									<input name="fecha_destino_ubicacion" id="fecha_destino_ubicacion" type="datetime-local" class="form-control">
								</div>
							</div>
							<div class="col-sm-3 col-sm-offset">
							<div class="form-group">
									<label>Distancia Recorrida <small></small></label>
									<input name="dist_recorr_destino_ubicacion" id="dist_recorr_destino_ubicacion" type="text" class="form-control" placeholder="Distancia Recorrida">
								</div>
							</div>
					   </div>
					</div>

					<div class="tab-pane" id="Seccion-Domicilio" style="text-align: center;">
						<div class="row">
							<div class="col-sm-12">
								<h5 class="info-text"> Sección Domicilio Origen</h5>
							</div>
							<div class="col-sm-4 col-sm-offset-1">
								<div class="form-group">
									<label>Calle</label>
									<input name="calle_origen_domicilio" id="calle_origen_domicilio" type="text" class="form-control" placeholder="Calle" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Número Exterior</label>
									<input name="numero_ext_origen_domicilio" id="numero_ext_origen_domicilio" type="text" class="form-control" placeholder="Número Exterior" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Número Interior</label>
									<input name="numero_int_origen_domicilio" id="numero_int_origen_domicilio" type="text" class="form-control" placeholder="Número Interior" >
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Clave Colonia</label>
									<input name="colonia_origen_domicilio" id="colonia_origen_domicilio" type="text" class="form-control" placeholder="Colonia" readonly>
								</div>
							</div>
							<div class="col-sm-2 col-sm-offset-1">
								<div class="form-group">
									<label>Clave Localidad</label>
									<input name="localidad_origen_domicilio" id="localidad_origen_domicilio" type="text" class="form-control" placeholder="Localidad" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Clave Municipio</label>
									<input name="municipio_origen_domicilio" id="municipio_origen_domicilio" type="text" class="form-control" placeholder="Municipio" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Clave Estado</label>
									<input name="estado_origen_domicilio" id="estado_origen_domicilio" type="text" class="form-control" placeholder="Estado" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Clave País</label>
									<input name="pais_origen_domicilio" id="pais_origen_domicilio" type="text" class="form-control" placeholder="País" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Código Postal</label>
									<input name="cp_origen_domicilio" id="cp_origen_domicilio" type="text" class="form-control" placeholder="Código Postal" readonly>
								</div>
							</div>
							<div class="col-sm-4 col-sm-offset-4">
								<div class="form-group">
									<label>Referencia</label>
									<input name="referencia_origen_domicilio" id="referencia_origen_domicilio" type="text" class="form-control" placeholder="Referencia" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<h5 class="info-text"> Sección Domicilio Destino</h5>
							</div>
							<div class="col-sm-4 col-sm-offset-1">
								<div class="form-group">
									<label>Calle</label>
									<input name="calle_destino_domicilio" id="calle_destino_domicilio" type="text" class="form-control" placeholder="Calle" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Número Exterior</label>
									<input name="numero_ext_destino_domicilio" id="numero_ext_destino_domicilio" type="text" class="form-control" placeholder="Número Exterior" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Número Interior</label>
									<input name="numero_int_destino_domicilio" id="numero_int_destino_domicilio" type="text" class="form-control" placeholder="Número Interior" >
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Clave Colonia</label>
									<input name="colonia_destino_domicilio" id="colonia_destino_domicilio" type="text" class="form-control" placeholder="Colonia" readonly>
								</div>
							</div>
							<div class="col-sm-2 col-sm-offset-1">
								<div class="form-group">
									<label>Clave Localidad</label>
									<input name="localidad_destino_domicilio" id="localidad_destino_domicilio" type="text" class="form-control" placeholder="Localidad" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Clave Municipio</label>
									<input name="municipio_destino_domicilio" id="municipio_destino_domicilio" type="text" class="form-control" placeholder="Municipio" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Clave Estado</label>
									<input name="estado_destino_domicilio" id="estado_destino_domicilio" type="text" class="form-control" placeholder="Estado" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Clave País</label>
									<input name="pais_destino_domicilio" id="pais_destino_domicilio" type="text" class="form-control" placeholder="País" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Código Postal</label>
									<input name="cp_destino_domicilio" id="cp_destino_domicilio" type="text" class="form-control" placeholder="Código Postal" readonly>
								</div>
							</div>
							<div class="col-sm-4 col-sm-offset-4">
								<div class="form-group">
									<label>Referencia</label>
									<input name="referencia_destino_domicilio" id="referencia_destino_domicilio" type="text" class="form-control" placeholder="Referencia" >
								</div>
							</div>
						</div>
					</div>
					
					<div class="tab-pane" id="Seccion-Mercancias" style="text-align: center;">
						<div class="row">
							<div class="col-sm-12">
								<h5 class="info-text"> Sección Mercancías</h5>
							</div>
							<div class="col-sm-4 col-sm-offset-1">
								<div class="form-group">
									<label>Peso Bruto Total</label>
									<input name="peso_bruto_total_mercancia" id="peso_bruto_total_mercancia" type="text" class="form-control" placeholder="Peso Bruto Total" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Unidad Peso</label>
									<input name="unidad_peso_mercancia" id="unidad_peso_mercancia" type="text" class="form-control" placeholder="Unidad Peso" value="KG" readonly>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Número Total de Mercancias</label>
									<input name="num_total_mercancia" id="num_total_mercancia" type="text" class="form-control" placeholder="Número Total de Mercancias" readonly>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<h5 class="info-text"> Subsección Mercancía</h5>
							</div>
							<div class="col-sm-10 col-sm-offset-1">
							<table class="table-responsive" style="border: solid #1E76C9;" BORDER>
                              <thead>
                                <tr width="100" height="40">
                                  <th scope="col" style="text-align: center;" width="210">Bienes Transportados*</th>
                                  <th scope="col" style="text-align: center;" width="200">Descripción*</th>
                                  <th scope="col" style="text-align: center;" width="200">Cantidad*</th>
                                  <th scope="col" style="text-align: center;" width="200">Clave Unidad*</th>
                                  <th scope="col" style="text-align: center;" width="200">Unidad*</th>
                                  <th scope="col" style="text-align: center;" width="200">Dimensiones*</th>
                                  <th scope="col" style="text-align: center;" width="200">Material Peligros*</th>
                                  <th scope="col" style="text-align: center;" width="200">Peso En Kg*</th>
                                  <th scope="col" style="text-align: center;" width="200">Valor Mercancia*</th>
                                  <th scope="col" style="text-align: center;" width="200">Moneda*</th>
                                </tr>
                              </thead>
                              <tbody id="tbody-mercancia" height="40">
                                 <!-- Peticion ajax cargada del script para retornar los datos a sección mercancía  -->
                                </tbody>
                              </table>
							</div>
						 </div>
						<div class="row">
							<div class="col-sm-12">
								<h5 class="info-text"> Subsección Cantidad Transportada</h5>
							</div>
							<div class="col-sm-3 col-sm-offset-1">
								<div class="form-group">
									<label>Cantidad</label>
									<input name="cant_transporta" id="cant_transporta" type="text" class="form-control" placeholder="Cantidad" readonly>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>ID Origen</label>
									<input name="id_origen_transporta" id="id_origen_transporta" type="text" class="form-control" placeholder="ID Origen" readonly>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>ID Destino</label>
									<input name="id_destino_transporta" id="id_destino_transporta" type="text" class="form-control" placeholder="ID Destino" readonly>
								 </div>
							</div>
							<!-- Datos Ocultos -->
							<input type="text" name="partida_id" id="partida_id" type="text" hidden="true" readonly>
					     </div>
					 </div>
						<div class="tab-pane" id="Seccion-Autotransporte" style="text-align: center;">
						<div class="row">
							<div class="col-sm-12">	
								<h5 class="info-text"> Sección Autotransporte</h5>
							</div>
						   <div class="col-sm-3 col-sm-offset-1">
							   <div class="form-group">
							        <label>Placa del V.M.*</label>
									<select id="placa_envio" name="placa_envio" class="form-control" style="border: 1px solid #66615b;">
										<option value="">SELECCIONA UNA PLACA</option>
								  </select>
								  <input type="text" id="placa_vm_at" name="placa_vm_at" hidden="true" readonly>
							   </div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<label>Permiso SCT</label>
									<input name="permiso_sct_at" id="permiso_sct_at" type="text" class="form-control" placeholder="Número Permiso SCT" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Número Permiso SCT</label>
									<input name="num_permiso_sct_at" id="num_permiso_sct_at" type="text" class="form-control" placeholder="Número Permiso SCT" readonly>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<h5 class="info-text"> Subsección Identificacion Vehicular</h5>
							</div>
							<div class="col-sm-8 col-sm-offset-1">
								<div class="form-group">
									<label>Configuración Vehicular</label>
									<input name="config_vehicular_at" id="config_vehicular_at" type="text" class="form-control" placeholder="Configuración Vehicular" readonly>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Año del Modelo del V.M.</label>
									<input name="ano_modelo_vm_at" id="ano_modelo_vm_at" type="text" class="form-control" placeholder="Año del Modelo del V.M." readonly>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<h5 class="info-text"> Subsección Seguros</h5>
							</div>
							<div class="col-sm-5 col-sm-offset-1">
								<div class="form-group">
									<label>Nombre de la Aseguradora de Responsabilidad Civil</label>
									<input name="nombre_aseg_resp_at" id="nombre_aseg_resp_at" type="text" class="form-control" placeholder="Nombre de la Aseguradora de Responsabilidad Civil" readonly>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<label>Número de Póliza de la Aseguradora de Resp. Civil</label>
									<input name="poliza_resp_at" id="poliza_resp_at" type="text" class="form-control" placeholder="Número de Póliza de la Aseguradora de Resp. Civil" readonly>
								</div>
							</div>
							<div class="col-sm-5 col-sm-offset-1">
								<div class="form-group">
									<label>Nombre de la Aseguradora Responsable de la Carga</label>
									<input name="nombre_aseg_carga_at" id="nombre_aseg_carga_at" type="text" class="form-control" placeholder="Nombre de la Aseguradora Responsable de la Carga" readonly>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<label>Número de Póliza de la Aseguradora Resp. de la Carga</label>
									<input name="poliza_carga_at" id="poliza_carga_at" type="text" class="form-control" placeholder="Número de Póliza de la Aseguradora Resp. de la Carga" readonly>
								</div>
							</div>
						</div>
						<!-- <div class="row">
							<div class="col-sm-12">
								<h5 class="info-text"> Subsección Remolques</h5>
							</div>
							<div class="col-sm-4 col-sm-offset-1">
								<div class="form-group">
									<label>Clave del Remolque</label>
									<input name="subtipo_remolque_at" id="subtipo_remolque_at" type="text" class="form-control" placeholder="Clave del Remolque" >
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Placa del Remolque (sin guiones/sin espacios)</label>
									<input name="subtipo_remolque_at" id="subtipo_remolque_at" type="text" class="form-control" placeholder="Placa del Remolque " >
								</div>
							</div>
						</div> -->
					</div>
					<div class="tab-pane" id="Seccion-TiposFigura" style="text-align: center;">
						<div class="row">
							<div class="col-sm-12">
								<h5 class="info-text"> Sección Tipos Figura</h5>
							</div>
							<div class="col-sm-3 col-sm-offset-1">
								<div class="form-group">
									<label>Tipo Figura</label>
									<input name="tipofigura_tpf" id="tipofigura_tpf" type="text" class="form-control" placeholder="Tipo Figura" value="01" readonly>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>RFC del Operador</label>
									<input name="rfc_tpf" id="rfc_tpf" type="text" class="form-control" placeholder="TRFC del Operador" readonly>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Número de Licencia del Operador</label>
									<input name="num_licencia_tpf" id="num_licencia_tpf" type="text" class="form-control" placeholder="Número de Licencia del Operador" readonly>
								</div>
							</div>
							<div class="col-sm-8 col-sm-offset-1">
								<div class="form-group">
									<label>Nombre Completo del Operador</label>
									<select id="nombre_operador" name="nombre_operador" class="form-control" style="border: 1px solid #66615b;">
										<option value="">SELECCIONA UN NOMBRE*</option>
								  </select>
								  <input type="text" id="nombre_operador_tpf" name="nombre_operador_tpf" hidden="true" readonly>
								</div>
							</div>
							<!-- <div class="col-sm-4">
								<div class="form-group">
									<label>Núm. de Identificación Fiscal del Operador</label>
									<input name="num_ident_fiscal_tpf" id="num_ident_fiscal_tpf" type="text" class="form-control" placeholder="Núm. de Identificación Fiscal del Operador" >
								</div>
							</div> -->
							<div class="col-sm-2">
								<div class="form-group">
									<label>País del Operador</label>
									<input name="residencia_fiscal_tpf" id="residencia_fiscal_tpf" type="text" class="form-control" placeholder="País del Operador" value="MEX" readonly>
								</div>
							</div>

						  </div>
					   </div>

				</div>
				<div class="wizard-footer">
					<div class="pull-right">
						<input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Siguiente' />
						<input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Enviar' />
					</div>

					<div class="pull-left">
						<input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Anterior' />
					</div>
					<div class="clearfix"></div>
				</div>
			</form>
		</div>
	</div> <!-- wizard container -->
</div>
</div><!-- end row -->
</div> <!--  big container -->

<!--  Footer -->
<div class="footer" style="background-color: #1E76C9;">
<div class="container text-center">

</div>
</div>

</div>
</div>

</body>
<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('assets/js/modernizr/modernizr.js ') }}"></script>
<!-- menu js -->
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('assets/js/vertical-layout.min.js') }} "></script>
<!-- custom js -->
<script type="text/javascript" src="{{ asset('assets/pages/dashboard/custom-dashboard.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/script.js ') }}"></script>
<!-- sweetalert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Componentes Del Formulario -->
<!--   Core JS Files   -->
<script src="{{ asset('assetsForm/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assetsForm/js/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="{{ asset('assetsForm/js/demo.js') }}" type="text/javascript"></script>
<script src="{{ asset('assetsForm/js/paper-bootstrap-wizard.js') }}" type="text/javascript"></script>

<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
<script src="{{ asset('assetsForm/js/jquery.validate.min.js') }}" type="text/javascript"></script>

</html>
<script>
	//Peticion ajax GET para traerme los datos de las vistas de oracle
	$(document).ready(function(){
    ebs_cp_transf_union();
    });

    const ebs_cp_transf_union = function()
    {
      const id = '{{$vistaDB[0]->envio_num}}'
        $.ajax({
            type: 'GET', 
            url: "{{ url('api/DatosCP') }}/"+id,
            dataType: 'json',
            success: function(response){
                console.log("Datos_Union", "Status", response.status, response.data);

                //Recorremos los datos de la peticion con each para la tabla ebs_cp_transf_v 
                $.each(response.data.attributes, function (key, item){

                //Captura y envio de datos de Sección Ubicación
                  //Origen
                  $('#id_origen_ubicacion').val("OR000" +item.origen_num);
                  $('#nomb_remit_origen_ubicacion').val(item.origen_nombre);
                  $('#calle_origen_domicilio').val(item.origen_calle);
                  $('#numero_ext_origen_domicilio').val(item.origen_numero);
                  //Destino
                  $('#id_destino_ubicacion').val("DE000" +item.destino_num);
                  $('#nomb_remit_destino_ubicacion').val(item.destino_nombre);
                  $('#calle_destino_domicilio').val(item.destino_calle);
                  $('#numero_ext_destino_domicilio').val(item.destino_numero);

                  //Captura y envio de datos de Sección Mercancia
                  $('#id_origen_transporta').val("OR000" +item.origen_num);
                  $('#id_destino_transporta').val("DE000" +item.destino_num);

                });   

                //Recorremos los datos de la peticion con each para la tabla ebs_cp_transf_lines
                $.each(response.data.attributes2, function (key, item){

                  //Captura y envio de datos ocultos Comprobante
                  $('#envio_id').val(item.envio_id);
                  $('#envio_num').val(item.envio_num); 
				  //Captura y envio de datos ocultos Mercancia
				  $('#partida_id').val(item.partida_id); 
                  
                  //Checkbox de Comprobante
                  $('#tbody').append('<tr>\
                  <td style="text-align: center;"><input type="checkbox" class="cbx" / name ="codigo_sat" onclick="CheckboxMercancia()"></td>\
                  <td style="text-align: center;"><label class="opcion-label" for="' + item.codigo_sat + '" style="color: black;">' + item.codigo_sat + '</label></td>\
                  <td style="text-align: center;"><label class="opcion-label" for="H87" style="color: black;" >H87</label></td>\
                  <td style="text-align: center;"><label class="opcion-label" for="' + item.producto_descripcion + '" style="color: black;" >' + item.producto_descripcion + '</label></td>\
				  <td style="display:none;"><label class="opcion-label" for="' + item.cantidad + '" style="color: black;" >' + item.cantidad + '</label></td>\
				  <td style="display:none;"><label class="opcion-label" for="PIEZA" style="color: black;" >PIEZA</label></td>\
				  <td style="display:none;"><label class="opcion-label" for="' + item.dimensiones + '" style="color: black;" >' + item.dimensiones + '</label></td>\
				  <td style="display:none;"><label class="opcion-label" for="NO" style="color: black;" >NO</label></td>\
				  <td style="display:none;"><label class="opcion-label" for="' + item.peso + '" style="color: black;" >' + item.peso + '</label></td>\
				  <td style="display:none;"><label class="opcion-label" for="' + item.costo_total + '" style="color: black;" >' + item.costo_total + '</label></td>\
				  <td style="display:none;"><label class="opcion-label" for="MXN" style="color: black;" >MXN</label></td>\
                  </tr>');
				
                }); 
            }
        });// Fin Petición Ajax GET Para ebs_cp_transf_union

        //  Peticion Ajax GET Para la conexion de la seción Domicilio (Origen)
		const id_enlace_origen = '{{$vistaDB[0]->origen_num}}'
		$.ajax({
			type: 'GET', 
            url: "{{ url('api/Gestion-Domicilio-Listado') }}/"+id_enlace_origen,
            dataType: 'json',
			success: function(response){
                console.log("Gestion_Domicilio_Origen", response.data);

				$.each(response.data.attributes, function (key, item){
					$('#colonia_origen_domicilio').val( item.clave_colonia_domicilio);
					$('#localidad_origen_domicilio').val( item.clave_localidad_domicilio);
					$('#municipio_origen_domicilio').val( item.clave_municipio_domicilio);
					$('#estado_origen_domicilio').val( item.clave_estado_domicilio);
					$('#pais_origen_domicilio').val( item.clave_pais_domicilio);
					$('#cp_origen_domicilio').val( item.cp_domicilio);

              });   
			}

		});

        //  Peticion Ajax GET Para la conexion de la Sección Domicilio (Destino)
		const id_enlace_destino = '{{$vistaDB[0]->destino_num}}'
		$.ajax({
			type: 'GET', 
            url: "{{ url('api/Gestion-Domicilio-Listado') }}/"+id_enlace_destino,
            dataType: 'json',
			success: function(response){
                console.log("Gestion_Domicilio_Destino", response.data);

				$.each(response.data.attributes, function (key, item){
					$('#colonia_destino_domicilio').val(item.clave_colonia_domicilio);
					$('#localidad_destino_domicilio').val( item.clave_localidad_domicilio);
					$('#municipio_destino_domicilio').val( item.clave_municipio_domicilio);
					$('#estado_destino_domicilio').val( item.clave_estado_domicilio);
					$('#pais_destino_domicilio').val( item.clave_pais_domicilio);
					$('#cp_destino_domicilio').val( item.cp_domicilio);

              });   
			}

		});

		 //  Peticion Ajax GET Para la conexion de la Sección Autotransporte
		$.ajax({
			type: 'GET', 
            url: "{{ url('api/Gestion-Autotransporte-Listado') }}",
            dataType: 'json',
			success: function(response){
                console.log("Gestion_Autotransporte", response.data);
                
				$.each(response.data, function (key, item){
					$("#placa_envio").append('<option value='+item.placa.placa+'>'+item.placa.placa+'</option>');
              });   
			}
		});
		$('#placa_envio').on('change', onSelectDatosChange);

		 //  Peticion Ajax GET Para la conexion de la Sección Operador
		 $.ajax({
			type: 'GET', 
            url: "{{ url('api/Gestion-Operador-Listado') }}",
            dataType: 'json',
			success: function(response){
                console.log("Gestion_Operador", response.data);
                
				$.each(response.data, function (key, item){
					$("#nombre_operador").append('<option value='+item.numero_operador+'>'+item.nombre_completo_operador+'</option>');
              });   
			}
		});
		$('#nombre_operador').on('change', onSelectDatosOperador);
    } 

       //cargar datos a partir de un select con ajax y laravel
	   //Funcion LLenado de datos de Autotransporte por select con ajax GET
	    function onSelectDatosChange(){
			const clave_placa = $(this).val();
			
			if (! clave_placa) {
				    $('#placa_vm_at').val("");
				    $('#permiso_sct_at').val("");
					$('#num_permiso_sct_at').val("");
					$('#config_vehicular_at').val("");
					$('#ano_modelo_vm_at').val("");
					$('#nombre_aseg_resp_at').val("");
					$('#poliza_resp_at').val("");
					$('#nombre_aseg_carga_at').val("");
					$('#poliza_carga_at').val("");
			}

			$.get( "{{ url('api/Gestion-Autotransporte-Listado') }}/"+clave_placa, function (data){
				for (let index = 0; index < data.data.attributes.length; index++) {
					$('#placa_vm_at').val(data.data.attributes[index].placa);
					$('#permiso_sct_at').val(data.data.attributes[index].permiso_sct);
					$('#num_permiso_sct_at').val(data.data.attributes[index].numero_permiso_sct);
					$('#config_vehicular_at').val(data.data.attributes[index].clave_configuracion_vehicular);
					$('#ano_modelo_vm_at').val(data.data.attributes[index].ano_modelo);
					$('#nombre_aseg_resp_at').val(data.data.attributes[index].poliza_civil.nombre_aseguradora_civil);
					$('#poliza_resp_at').val(data.data.attributes[index].poliza_civil.numero_poliza_civil);
					$('#nombre_aseg_carga_at').val(data.data.attributes[index].poliza_carga.nombre_aseguradora_carga);
					$('#poliza_carga_at').val(data.data.attributes[index].poliza_carga.numero_poliza_carga);
					
					// console.log(data.data.attributes[index]);	
				}		
			});
		}

		 //cargar datos a partir de un select con ajax y laravel
	   //Funcion LLenado de datos de Operador por select con ajax GET
	   function onSelectDatosOperador(){
			const clave_operador = $(this).val();
			
			if (! clave_operador) {
				    $('#rfc_tpf').val("");
					$('#num_licencia_tpf').val("");
					$('#nombre_operador_tpf').val("");
			}
			
			$.get( "{{ url('api/Gestion-Operador-Listado') }}/"+clave_operador, function (data){
				for (let index = 0; index < data.data.attributes.length; index++) {
					$('#nombre_operador_tpf').val(data.data.attributes[index].nombre_completo_operador);
					$('#rfc_tpf').val(data.data.attributes[index].rfc_operador);
					$('#num_licencia_tpf').val(data.data.attributes[index].licencia.numero_licencia);
					//  console.log(data.data.attributes[index]);	
				}		
			});
		}

       //Funcion para el seleccionado total de los checkbox de los productos
        function toggle(source) {
        checkboxes = document.getElementsByName('codigo_sat');

        for(var i=0, n=checkboxes.length;i<n;i++) {
          checkboxes[i].checked = source.checked;
      }
    } //Fin función selección total de checkbox  

	//Funcion que recorrer Checkbox & armadado de la captura del arreglo de datos de la merancia.
function CheckboxMercancia () {
	//Llamar mis chechbox 	
	const checks = document.querySelectorAll('.cbx');
		//Llamar el tbody de mi tabla para mercancias 
		let cuerpoMercancia = document.getElementById('tbody-mercancia');
		//Fragmentar los datos del DOM
		let fragment = '';

			let arr = [];
			let arr2 = [];
			checks.forEach(cbx => {
			if (cbx.checked) {
				let cveProd = cbx.parentElement.nextElementSibling.textContent;
				let cveUnidad = cbx.parentElement.nextElementSibling.nextElementSibling.textContent;
				let descProd = cbx.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.textContent;
				let merCantidad = cbx.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.textContent;
				let merPieza = cbx.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.textContent;
				let merDimensiones = cbx.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.textContent;
				let merMaterialP = cbx.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.textContent;
				let merPesoKG = cbx.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.textContent;
				let merValorM= cbx.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.textContent;
				let merMoneda= cbx.parentElement.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.nextElementSibling.textContent;
				arr.push({ cveProd, cveUnidad, descProd });
				arr2.push({ cveProd, descProd, merCantidad, cveUnidad, merPieza, merDimensiones, merMaterialP, merPesoKG, merValorM, merMoneda});

			    fragment += `<tr>
				<td><input type="text"  value="${cveProd}" style="text-align: center;" readonly></td>
				<td><input type="text"  value="${descProd}" style="text-align: center;" readonly></td>
				<td><input type="text"  value="${merCantidad}" style="text-align: center;" readonly></td>
				<td><input type="text"  value="${cveUnidad}" style="text-align: center;" readonly></td>
				<td><input type="text"  value="${merPieza}" style="text-align: center;" readonly></td>
				<td><input type="text"  value="${merDimensiones}" style="text-align: center;" readonly></td>
				<td><input type="text"  value="${merMaterialP}" style="text-align: center;" readonly></td>
				<td><input type="text"  value="${merPesoKG}" style="text-align: center;" readonly></td>
				<td><input type="text"  value="${merValorM}" style="text-align: center;" readonly></td>
				<td><input type="text"  value="${merMoneda}" style="text-align: center;" readonly></td>
				</tr>`
			    
				cuerpoMercancia.innerHTML = fragment;
			} 

			 //Captura y envio de total de mercancia y cantidad para la Sección Mercancia
			 let numero_total_mercancias = $("#tbody-mercancia tr").length;
				$('#num_total_mercancia').val(numero_total_mercancias);

				
				numero_total_cantidad_mercancia = arr2;
				const sumall = numero_total_cantidad_mercancia.map(item => parseInt(item.merCantidad)).reduce((prev, curr) => prev + curr, 0);
				$('#cant_transporta').val(sumall);

			
				numero_total_peeso_mercancia = arr2;
				const sumall_peso = numero_total_peeso_mercancia.map(item => parseInt(item.merPesoKG)).reduce((prev, curr) => prev + curr, 0);
				$('#peso_bruto_total_mercancia').val(sumall_peso);
            
			});

		//   console.log("Comprobante: ",arr);
		//  console.log("Mercancia: ",arr2);
    
	//Arreglo para Comprobante
	let comprobante = [];
    let body = {};
    arr.forEach(comp => {
       //Parametros de datos ocultos
      const envio_id = document.querySelector('#envio_id');
      const envio_num = document.querySelector('#envio_num');
      //Sección Comprobante
      const version_comprobante = document.querySelector('#version_comprobante');
      const fecha_comprobante = document.querySelector('#fecha_comprobante');
      const tipo_comprobante = document.querySelector('#tipo_comprobante');
      const subtotal_comprobante = document.querySelector('#subtotal_comprobante');
      const moneda_comprobante = document.querySelector('#moneda_comprobante');
      const total_comprobante = document.querySelector('#total_comprobante');
      // Sección receptor
      const rfc_receptor = document.querySelector('#rfc_receptor');
      const usocfdi_receptor = document.querySelector('#usocfdi_receptor');
      // Sección carta porte
      const version_carta_porte = document.querySelector('#version_carta_porte');
      const transpInternac_carta_porte = document.querySelector('#transpInternac_carta_porte');
      const totaldistrec_carta_porte = document.querySelector('#dist_recorr_destino_ubicacion');

      body = {
        envio_id: envio_id.value,
        envio_num: envio_num.value,
        version_comprobante: version_comprobante.value,
        fecha_comprobante: fecha_comprobante.value,
        tipo_comprobante: tipo_comprobante.value,
        subtotal_comprobante: subtotal_comprobante.value,
        moneda_comprobante: moneda_comprobante.value,
        total_comprobante: total_comprobante.value,
        rfc_receptor: rfc_receptor.value,
        usocfdi_receptor: usocfdi_receptor.value,

        clave_producto_concepto: comp.cveProd,
        clave_unidad_concepto: comp.cveUnidad,
        descripcion_concepto: comp.descProd,

        version_carta_porte: version_carta_porte.value,
        transpInternac_carta_porte: transpInternac_carta_porte.value,
        totaldistrec_carta_porte: totaldistrec_carta_porte.value,
         
	        }
		comprobante.push(body);
		
		});
		
		console.log(comprobante)
        

	//Arreglo para Mercancia
	let mercancia = [];
    let body2 = {};
    arr2.forEach(comp => {
       //Parametros de datos ocultos
      const envio_id = document.querySelector('#envio_id');
      const partida_id = document.querySelector('#partida_id');
      //Sección Mercancia
      const peso_bruto_total_mercancia = document.querySelector('#peso_bruto_total_mercancia');
      const unidad_peso_mercancia = document.querySelector('#unidad_peso_mercancia');
      const num_total_mercancia = document.querySelector('#num_total_mercancia');
      const cantidad_transporta = document.querySelector('#cant_transporta');
      const id_origen_transporta = document.querySelector('#id_origen_transporta');
      const id_destino_transporta = document.querySelector('#id_destino_transporta');

      body2 = {
        envio_id: envio_id.value,
        partida_id: partida_id.value,
        peso_bruto_total_mercancia: peso_bruto_total_mercancia.value,
        unidad_peso_mercancia: unidad_peso_mercancia.value,
        num_total_mercancia: num_total_mercancia.value,
		bienes_transp_mercancia: comp.cveProd,
		descripción_mercancia: comp.descProd,
		cantidad_mercancia: comp.merCantidad,
		clave_unidad_mercancia: comp.cveUnidad,
		unidad_mercancia: comp.merPieza,
		dimensiones_mercancia: comp.merDimensiones,
		material_peligroso_mercancia: comp.merMaterialP,
		peso_kg_mercancia: comp.merPesoKG,
		valor_mercancia: comp.merValorM,
		moneda_mercancia: comp.merMoneda,
        cantidad_transporta: cantidad_transporta.value,
        id_origen_transporta: id_origen_transporta.value,
        id_destino_transporta: id_destino_transporta.value,
         
	        }
		mercancia.push(body2);
		});	
		
		console.log(mercancia)
		return {comprobante, mercancia};
	}
	
	//Peticion ajax POST 
	jQuery(document).ready(function() {
	jQuery('#registro-cartaporte').submit(function(e) {
		e.preventDefault();

	const {comprobante, mercancia} = CheckboxMercancia();
	//Ubicación
	const tipo_origen_ubicacion = $('#tipo_origen_ubicacion').val();
	const id_origen_ubicacion = $('#id_origen_ubicacion').val();
	const rfc_origen_ubicacion = $('#rfc_origen_ubicacion').val();
	const nomb_remit_origen_ubicacion = $('#nomb_remit_origen_ubicacion').val();
	const fecha_origen_ubicacion = $('#fecha_origen_ubicacion').val();
	const tipo_destino_ubicacion = $('#tipo_destino_ubicacion').val();
	const id_destino_ubicacion = $('#id_destino_ubicacion').val();
	const rfc_destino_ubicacion = $('#rfc_destino_ubicacion').val();
	const nomb_remit_destino_ubicacion = $('#nomb_remit_destino_ubicacion').val();
	const fecha_destino_ubicacion = $('#fecha_destino_ubicacion').val();
	const dist_recorr_destino_ubicacion = $('#dist_recorr_destino_ubicacion').val();
	const calle_origen_domicilio = $('#calle_origen_domicilio').val();
	const numero_ext_origen_domicilio = $('#numero_ext_origen_domicilio').val();
	const numero_int_origen_domicilio = $('#numero_int_origen_domicilio').val();
	const colonia_origen_domicilio = $('#colonia_origen_domicilio').val();
	const localidad_origen_domicilio = $('#localidad_origen_domicilio').val();
	const referencia_origen_domicilio = $('#referencia_origen_domicilio').val();
	const municipio_origen_domicilio = $('#municipio_origen_domicilio').val();
	const estado_origen_domicilio = $('#estado_origen_domicilio').val();
	const pais_origen_domicilio = $('#pais_origen_domicilio').val();
	const cp_origen_domicilio = $('#cp_origen_domicilio').val();
	const calle_destino_domicilio = $('#calle_destino_domicilio').val();
	const numero_ext_destino_domicilio = $('#numero_ext_destino_domicilio').val();
	const numero_int_destino_domicilio = $('#numero_int_destino_domicilio').val();
	const colonia_destino_domicilio = $('#colonia_destino_domicilio').val();
	const localidad_destino_domicilio = $('#localidad_destino_domicilio').val();
	const referencia_destino_domicilio = $('#referencia_destino_domicilio').val();
	const municipio_destino_domicilio = $('#municipio_destino_domicilio').val();
	const estado_destino_domicilio = $('#estado_destino_domicilio').val();
	const pais_destino_domicilio = $('#pais_destino_domicilio').val();
	const cp_destino_domicilio = $('#cp_destino_domicilio').val();

	//Autotransporte
    const perm_sct_at = $('#permiso_sct_at').val();
    const num_permiso_sct_at = $('#num_permiso_sct_at').val();
    const config_vehicular_at = $('#config_vehicular_at').val();
    const placa_vm_at = $('#placa_vm_at').val();
    const ano_modelo_vm_at = $('#ano_modelo_vm_at').val();
    const nombre_aseg_resp_at = $('#nombre_aseg_resp_at').val();
    const poliza_resp_at = $('#poliza_resp_at').val();
    const nombre_aseg_carga_at = $('#nombre_aseg_carga_at').val();
    const poliza_carga_at = $('#poliza_carga_at').val();
	//Se pueden agregar despues el remolque tanto como para captura como para envio
	// const subtipo_remolque_at = $('#subtipo_remolque_at').val();
	// const placa_remolque_at = $('#subtipo_remolque_at').val();

	//Tipofigura
	const tipofigura_tpf = $('#tipofigura_tpf').val();
	const rfc_tpf = $('#rfc_tpf').val();
	const num_licencia_tpf = $('#num_licencia_tpf').val();
	const nombre_operador_tpf = $('#nombre_operador_tpf').val();
	const residencia_fiscal_tpf = $('#residencia_fiscal_tpf').val();

	let datos = {};

	datos = {
		ubicacion: {
			tipo_origen_ubicacion,
			id_origen_ubicacion,
			rfc_origen_ubicacion,
			nomb_remit_origen_ubicacion,
			fecha_origen_ubicacion,
			tipo_destino_ubicacion,
			id_destino_ubicacion,
			rfc_destino_ubicacion,
			nomb_remit_destino_ubicacion,
			fecha_destino_ubicacion,
			dist_recorr_destino_ubicacion,
			calle_origen_domicilio,
			numero_ext_origen_domicilio,
			numero_int_origen_domicilio,
			colonia_origen_domicilio,
			localidad_origen_domicilio,
			referencia_origen_domicilio,
			municipio_origen_domicilio,
			estado_origen_domicilio,
			pais_origen_domicilio,
			cp_origen_domicilio,
			calle_destino_domicilio,
			numero_ext_destino_domicilio,
			numero_int_destino_domicilio,
			colonia_destino_domicilio,
			localidad_destino_domicilio,
			referencia_destino_domicilio,
			municipio_destino_domicilio,
			estado_destino_domicilio,
			pais_destino_domicilio,
			cp_destino_domicilio
		},
		comprobante,
		mercancia,
		autotransporte: {
			perm_sct_at,
			num_permiso_sct_at,
			config_vehicular_at,
			placa_vm_at,
			ano_modelo_vm_at,
			nombre_aseg_resp_at,
			poliza_resp_at,
			nombre_aseg_carga_at,
			poliza_carga_at,
		},
		tipofigura: {
			tipofigura_tpf,
			rfc_tpf,
			num_licencia_tpf,
			nombre_operador_tpf,
			residencia_fiscal_tpf
		}
	}

	console.log(datos)

		$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

	$.ajax({
		
		url: "{{ url('api/DatosCP') }}",
		type: "POST", 
		data:datos,
		dataType: "json",
		error: function(err){
			Swal.fire({
			icon: 'error',
			title: 'Error...',
			text: 'Datos faltates, peticion envio denegada!',
			footer: 'Revise los campos no editables...'
			})
       console.log("Status", err.status, "detail", err);
            },   
			success: function(response){
        if (response.status == "OK") {
          Swal.fire({
            position: 'center',
            icon: 'success',
            title: '¡Registro Carta Porte Exitoso! Se redireccionara en Automatico',
            showConfirmButton: false,
            timer: 1500
          }).then(function() {                    
            location.href ="{{ url('Consulta-Descarga') }}";
                  });
                } 
              }     
	});
  });
});
// Fin petición Ajax POST
</script>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Proyecto para el manejo de ambientes de formacion">
    <meta name="keywords" content="Proyecto Ambientes CTGI - GIAITEQ">
    <meta name="author" content="SENNOVA CTGI">
    <title>Sistema Gestion de Ambientes de Formacion y Programacion Instructores - CTGI - GIAITEQ</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/themes/semi-dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

        <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
                </ul>
            
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#" data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i>{{--<span class="badge rounded-pill bg-danger badge-up">3</span>--}}</a>                    
                {{-- NOTIFICACIONES --}}
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">Nombre Apellido</span><span class="user-status">Coordinador</span></div><span class="avatar"><img class="round" src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="#"><i class="me-50" data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="me-50" data-feather="mail"></i> Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="me-50" data-feather="settings"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="me-50" data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="#"><span class="brand-logo">
                        <img src="{{asset('images/logo/logo.png')}}" alt="">
                            </span>
                        <h2 style="color:rgb(248, 109, 23);" class="brand-text">GAFP - CTGI</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>



        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">--Etapa Practica--</span><i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Pais</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ViewInsert') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar Pais</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ViewPais') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado de Pais</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Departamento</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ViewInsertDepartamento') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar Departamento</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ViewDepartamento') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado de Departamentos</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Municipio</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ViewInsertMunicipio') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar Municipio</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ViewMunicipio') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado de Municipios</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Regional</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ViewInsertRegional') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar Regional</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ViewRegional') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado de Regionales</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Centro</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ViewInsertCentro') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar Centro</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ViewCentro') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado de Centros</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Sector</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ViewInsertSector') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar Sector</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ViewSector') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado de Sectores</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Programa de formacion </span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ViewInsertPrograma') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar programa de formacion </span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ViewPrograma') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado de programas de formacion </span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Programa especial</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ViewInsertEspecial') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar programa especial</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ViewEspecial') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado de programa especial</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Curso</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ViewInsertCurso') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar curso</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ViewCurso') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Listado de cursos</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Convenio</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ViewInsertConvenio') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar convenio</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ViewConvenio') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado de convenios</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Empresa</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ViewInsertEmpresa') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar empresa</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ViewEmpresa') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado de empresas</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Jornada</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ViewInsertJornada') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar jornada</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ViewJornada') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado de jornadas</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Ficha</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ViewInsertFicha') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar ficha</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ViewFicha') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado de fichas</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Aprendiz</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ViewInsertAprendiz') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar aprendiz</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ViewAprendiz') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado de aprendices</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Ocupacion</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ViewInsertOcupacion') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar ocupacion</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ViewOcupacion') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado de ocupaciones</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Horas</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ route('ViewInsertHora') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Registrar horas</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ route('ViewHora') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Listado de horas</span></a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
@yield('content')

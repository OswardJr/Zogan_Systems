<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Gandocam, C.A</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap/css/my.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel='stylesheet'  />
        <link href="{{asset('assets/global/plugins/fullcalendar/fullcalendar.print.css')}}" rel='stylesheet'  media="print"  />        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{asset('assets/layouts/layout/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/layouts/layout/css/easy-autocomplete.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/layouts/layout/css/easy-autocomplete.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/layouts/layout/css/themes/light.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{asset('assets/layouts/layout/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/fileinput/css/fileinput.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        <style type="text/css">
            .panel-primary>.panel-heading{
                color: rgba(0, 0, 0, 0.80);
                background-color:#D0D2D3;
                border-color:#BDBFC1;
            }
            .panel-primary{
                border-color:#BDBFC1;
            }
            .page-header.navbar {
                background-color: #5C666F;
            }
        </style>
        </head>
    <!-- END HEAD -->


<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-sidebar-mobile-offcanvas">
  <div class="page-wrapper">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
      <!-- BEGIN HEADER INNER -->
      <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
          <a href="{{ url('index') }}">
            <img src="{{asset('assets/layouts/layout/img/gandocam.png')}}" alt="logo" style="height:50px; width:100px; margin-top:-1px" class="logo-default" /> </a>
            <div class="menu-toggler sidebar-toggler">
              <span></span>
            </div>
          </div>
          <!-- END LOGO -->
          <!-- BEGIN RESPONSIVE MENU TOGGLER -->
          <a href="javascript:;" class="menu-toggler responsive-toggler" data-target=".navbar-collapse" data-target="page-sidebar">
            <span></span>
          </a>
          <!-- END RESPONSIVE MENU TOGGLER -->
          <!-- BEGIN TOP NAVIGATION MENU -->
          <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
              <!-- BEGIN NOTIFICATION DROPDOWN -->
              <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
              <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
<!--                 <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                  <i class="icon-bell"></i>
                  <span class="badge badge-default"> 2 </span>
                </a> -->
                <ul class="dropdown-menu">
                  <li class="external">
<!--                     <h3>
                      <a href="{{url('home_ruta')}}"><span class="bold">2 órdenes</span> pendientes
                      </a></h3> -->
                    </li>
                                    </ul>
                                  </li>

                                  <li class="dropdown dropdown-user">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                      
                                      <span class="username username-hide-on-mobile">{{ Auth::user()->name }} </span>
                                      <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-default">
                                      <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesión
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        </li>
                                      </ul>
                                    </li>
                                    <!-- END USER LOGIN DROPDOWN -->
                                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                                    <!-- END QUICK SIDEBAR TOGGLER -->
                                  </ul>
                                </div>
                                <!-- END TOP NAVIGATION MENU -->
                              </div>
                              <!-- END HEADER INNER -->
                            </div>
                            <!-- END HEADER -->
                            <!-- BEGIN HEADER & CONTENT DIVIDER -->
                            <div class="clearfix"> </div>
                            <!-- END HEADER & CONTENT DIVIDER -->
                            <!-- BEGIN CONTAINER -->
                            <div class="page-container">
                              <!-- BEGIN SIDEBAR -->
                              <div class="page-sidebar-wrapper">
                                <!-- BEGIN SIDEBAR -->
                                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                                <div class="page-sidebar">
                                  <!-- BEGIN SIDEBAR MENU -->
                                  <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                                  <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                                  <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                                  <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                                  <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                                  <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                                  <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                                    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                           <!--  <li class="sidebar-toggler-wrapper">
                                <div class="menu-toggler sidebar-toggler">
                                    <span></span>
                                </div>
                              </li> -->
                              <!-- END SIDEBAR TOGGLER BUTTON -->
                              <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                              <li class="sidebar-search-wrapper">
                                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                              </li>
                            <li class="nav-item start active open">
                                <a href="{{url('home_repuestos')}}" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Área de Repuestos</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-plus"></i>
                                    <span class="title">Registros</span>
                                    <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">

                                    <li class="nav-item">
                                        <a href="{{url('/listareas')}}" class="nav-link">
                                            <i class="fa fa-building"></i>  Áreas del Álmacen
                                        </a>
                                    </li>                                    
                                    
                                    <li class="nav-item">
                                        <a href="{{url('/listrepuesto')}}" class="nav-link">
                                            <i class="fa fa-suitcase"></i>  Respuestos
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-file-text-o"></i>
                                    <span class="title">Reportes</span>
                                    <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">

                                    <li class="nav-item">
                                        <a href="{{ url('/areas') }}" class="nav-link">
                                            <i class="fa fa-suitcase"></i>  Áreas
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ url('/repuestos') }}" class="nav-link">
                                            <i class="fa fa-suitcase"></i>  Repuestos
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-clone"></i>
                                    <span class="title">Módulos</span>
                                    <span class="arrow "></span>
                                </a>
                                <ul class="sub-menu">

                                    <li class="nav-item">
                                        <a href="{{url('home_services')}}" class="nav-link">
                                            <i class="fa fa-truck"></i>  Servicios
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{url('home_ruta')}}" class="nav-link">
                                            <i class="fa fa-refresh"></i>  Ruta
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{url('home_repuestos')}}" class="nav-link">
                                            <i class="fa fa-wrench"></i>  Repuestos
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fa fa-line-chart"></i>  Estadísticas
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fa fa-sign-out"></i>  Web
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            </ul>
                            <!-- END SIDEBAR MENU -->
                            <!-- END SIDEBAR MENU -->
                          </div>
                          <!-- END SIDEBAR -->
                        </div>
                        <!-- END SIDEBAR -->
                        <!-- BEGIN CONTENT -->
                        <!-- END CONTENT -->
                        <!-- BEGIN QUICK SIDEBAR -->

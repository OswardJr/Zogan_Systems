<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
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
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                  <i class="icon-bell"></i>
                  <span class="badge badge-default"><?php echo $dash; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li class="external">
                    <h3>
                      <a href="{{url('home_ruta')}}"><span class="bold"><?php echo $dash; ?> Órdenes</span> pendientes.
                      </a></h3>
                    </li>
                    <li>
<!--                       <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                        <li>
                          <a href="javascript:;">
                            <span class="time">just now</span>
                            <span class="details">
                              <span class="label label-sm label-icon label-success">
                                <i class="fa fa-plus"></i>
                              </span> New user registered. </span>
                            </a>
                          </li>
                          <li>
                            <a href="javascript:;">
                              <span class="time">3 mins</span>
                              <span class="details">
                                <span class="label label-sm label-icon label-danger">
                                  <i class="fa fa-bolt"></i>
                                </span> Server #12 overloaded. </span>
                              </a>
                            </li>
                            <li>
                              <a href="javascript:;">
                                <span class="time">10 mins</span>
                                <span class="details">
                                  <span class="label label-sm label-icon label-warning">
                                    <i class="fa fa-bell-o"></i>
                                  </span> Server #2 not responding. </span>
                                </a>
                              </li> Horses
                              <li>
                                <a href="javascript:;">
                                  <span class="time">14 hrs</span>
                                  <span class="details">
                                    <span class="label label-sm label-icon label-info">
                                      <i class="fa fa-bullhorn"></i>
                                    </span> Application error. </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="javascript:;">
                                    <span class="time">2 days</span>
                                    <span class="details">
                                      <span class="label label-sm label-icon label-danger">
                                        <i class="fa fa-bolt"></i>
                                      </span> Database overloaded 68%. </span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="javascript:;">
                                      <span class="time">3 days</span>
                                      <span class="details">
                                        <span class="label label-sm label-icon label-danger">
                                          <i class="fa fa-bolt"></i>
                                        </span> A user IP blocked. </span>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="javascript:;">
                                        <span class="time">4 days</span>
                                        <span class="details">
                                          <span class="label label-sm label-icon label-warning">
                                            <i class="fa fa-bell-o"></i>
                                          </span> Storage Server #4 not responding dfdfdfd. </span>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="javascript:;">
                                          <span class="time">5 days</span>
                                          <span class="details">
                                            <span class="label label-sm label-icon label-info">
                                              <i class="fa fa-bullhorn"></i>
                                            </span> System Error. </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="javascript:;">
                                            <span class="time">9 days</span>
                                            <span class="details">
                                              <span class="label label-sm label-icon label-danger">
                                                <i class="fa fa-bolt"></i>
                                              </span> Storage server failed. </span>
                                            </a>
                                          </li>
                                        </ul> -->
                                      </li>
                                    </ul>
                                  </li>

                                  <li class="dropdown dropdown-user">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                      <img alt="" class="img-circle" src="{{asset('assets/layouts/layout/img/avatar3_small.jpg')}}" />
                                      <span class="username username-hide-on-mobile"> {{ Auth::user()->name }}  </span>
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
                                <div class="page-sidebar page-sidebar">
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
                                    <li class="sidebar-toggler-wrapper hide">
                                      <div class="sidebar-toggler">
                                        <span></span>
                                      </div>
                                    </li>
                                    <!-- END SIDEBAR TOGGLER BUTTON -->
                                    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                                    <li class="sidebar-search-wrapper">
                                      <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                      <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                                      <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                                      <!-- END RESPONSIVE QUICK SEARCH FORM -->
                                    </li>
                                    <li class="nav-item start active open">
                                      <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="icon-home"></i>
                                        <span class="title">Home</span>
                                        <span class="selected"></span>
                                      </a>
                                    </li>
                                    <li class="heading">
                                      <h3 class="uppercase"></h3>
                                    </li>
                                    <li class="nav-item">
                                      <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="fa fa-plus"></i>
                                        <span class="title">Perfil de Usuario</span>
                                        <span class="arrow "></span>
                                      </a>
                                      <ul class="sub-menu">
                                        <li class="nav-item">
                                          <a href="{{ url('/listusers') }}" target="" class="nav-link">
                                            <i class="icon-user"></i>  Listado
                                          </a>
                                        </li>
                                      </ul>
                                    </li>


                                    <li class="nav-item">
                                      <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="fa fa-gears"></i>
                                        <span class="title">Configuración</span>
                                        <span class="arrow "></span>
                                      </a>
                                      <ul class="sub-menu">
                                        <li class="nav-item">
                                          <a href="resp" class="nav-link">
                                            <i class="fa fa-user"></i>  Respaldo de Información
                                          </a>
                                        </li>                                        

                                        <li class="nav-item">
                                          <a href="#" class="nav-link">
                                            <i class="fa fa-unlock-alt"></i>  Seguridad
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
                              <div class="page-content-wrapper">
                                <!-- BEGIN CONTENT BODY -->
                                <div class="page-content" style="min-height:270px; background:#f5f5f5">
                                  <!-- BEGIN PAGE HEADER-->
                                  <!-- BEGIN THEME PANEL -->
                                  <!-- END THEME PANEL -->
                                  <!-- BEGIN PAGE BAR -->
                                  <!-- END PAGE BAR -->
                                  <!-- BEGIN PAGE TITLE-->

                                  <div class="container-fluid">
                                    <div class="row">
                                      <div class="col-lg-12">
                                        <h2><strong>Bienvenido a Zogan Systems</strong></h2>
                                        <ul><h3>Sistema de Gestion Operativa.</h3></ul>                <hr>
                                      </div>
                                      <div class="col-lg-3 col-md-6 col-xs-6">
                                        <div class="panel panel-primary">
                                          <div class="panel-heading">
                                          <a href="{{ url('home_services') }}" style="color:#000">
                                            <div class="row">
                                              <div class="col-xs-3">
                                                <i class="fa  fa-truck fa-5x"></i>
                                              </div>
                                              <div class="col-xs-9 text-right">
                                                <div class="huge">&nbsp;</div>
                                                <div></div>
                                              </div>
                                            </div>
                                          </div>
                                            <div class="panel-footer" style="background:white">
                                              <span class="pull-left" style="color:black"><strong>Servicios</strong></span>
                                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                              <div class="clearfix"></div>
                                            </div>
                                          </a>
                                        </div>
                                      </div><div class="col-lg-3 col-md-6 col-xs-6">
                                        <div class="panel panel-primary">
                                          <div class="panel-heading">
                                          <a href="{{ url('/home_ruta') }}" style="color:#000">
                                            <div class="row">
                                              <div class="col-xs-3">
                                                <i class="fa  fa-refresh fa-5x"></i>
                                              </div>
                                              <div class="col-xs-9 text-right">
                                                <div class="huge">&nbsp;</div>
                                                <div></div>
                                              </div>
                                            </div>
                                          </div>
                                            <div class="panel-footer" style="background:white">
                                              <span class="pull-left" style="color:black"><strong>Ruta</strong></span>
                                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                              <div class="clearfix"></div>
                                            </div>
                                          </a>
                                        </div>
                                      </div>
                                      <div class="col-lg-3 col-md-6 col-xs-6 ">
                                        <div class="panel panel-primary">
                                          <div class="panel-heading">
                                          <a href="{{ url('/home_repuestos') }}" style="color:#000">
                                            <div class="row">
                                              <div class="col-xs-3">
                                                <i class="fa fa-wrench fa-5x"></i>
                                              </div>
                                              <div class="col-xs-9 text-right">
                                                <div class="huge">&nbsp;</div>
                                                <div></div>
                                              </div>
                                            </div>
                                          </div>

                                            <div class="panel-footer" style="background:white">
                                              <span class="pull-left" style="color:black"><strong>Repuestos</strong></span>
                                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                              <div class="clearfix"></div>
                                            </div>
                                          </a>
                                        </div>
                                      </div>
<!--                                       <div class="col-lg-3 col-md-6 col-xs-6 ">
                                        <div class="panel panel-primary">
                                          <div class="panel-heading">
                                            <a href="#" style="color:#000">
                                            <div class="row">
                                              <div class="col-xs-3">
                                                <i class="fa fa-briefcase fa-5x"></i>
                                              </div>
                                              <div class="col-xs-9 text-right">
                                                <div class="huge">&nbsp;</div>
                                                <div></div>
                                              </div>
                                            </div>
                                          </div>

                                            <div class="panel-footer" style="background:white">
                                              <span class="pull-left" style="color:black"><strong>Materiales</strong></span>
                                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                              <div class="clearfix"></div>
                                            </div>
                                          </a>
                                        </div>
                                      </div>

                                      <div class="col-lg-3 col-md-6 col-xs-6 ">
                                        <div class="panel panel-primary">
                                          <div class="panel-heading">
                                            <a href="#" style="color:#000">
                                            <div class="row">
                                              <div class="col-xs-3">
                                                <i class="fa fa-briefcase fa-5x"></i>
                                              </div>
                                              <div class="col-xs-9 text-right">
                                                <div class="huge">&nbsp;</div>
                                                <div></div>
                                              </div>
                                            </div>
                                          </div>
                                            <div class="panel-footer" style="background:white">
                                              <span class="pull-left" style="color:black"><strong>Almacén</strong></span>
                                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                              <div class="clearfix"></div>
                                            </div>
                                          </a>
                                        </div>
                                      </div>

                                      <div class="col-lg-3 col-md-6 col-xs-6 ">
                                        <div class="panel panel-primary">
                                          <div class="panel-heading">
                                          <a href="#" style="color:#000">
                                            <div class="row">
                                              <div class="col-xs-3">
                                                <i class="fa fa-money fa-5x"></i>
                                              </div>
                                              <div class="col-xs-9 text-right">
                                                <div class="huge">&nbsp;</div>
                                                <div></div>
                                              </div>
                                            </div>
                                          </div>
                                            <div class="panel-footer" style="background:white">
                                              <span class="pull-left" style="color:black"><strong>Facturación</strong></span>
                                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                              <div class="clearfix"></div>
                                            </div>
                                          </a>
                                        </div>
                                      </div>
 -->
                                      <div class="col-lg-3 col-md-6 col-xs-6 ">
                                        <div class="panel panel-primary">
                                          <div class="panel-heading">
                                          <a href="#" style="color:#000">
                                            <div class="row">
                                              <div class="col-xs-3">
                                                <i class="fa fa-line-chart fa-5x"></i>
                                              </div>
                                              <div class="col-xs-9 text-right">
                                                <div class="huge">&nbsp;</div>
                                                <div></div>
                                              </div>
                                            </div>
                                          </div>
                                            <div class="panel-footer" style="background:white">
                                              <span class="pull-left" style="color:black"><strong>Estadísticas</strong></span>
                                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                              <div class="clearfix"></div>
                                            </div>
                                          </a>
                                        </div>
                                      </div>

                                      <div class="col-lg-3 col-md-6 col-xs-6">
                                        <div class="panel panel-primary">
                                          <div class="panel-heading">
                                          <a href="#" style="color:#000">
                                            <div class="row">
                                              <div class="col-xs-3">
                                                <i class="fa fa-sign-out fa-5x"></i>
                                              </div>
                                              <div class="col-xs-9 text-right">
                                                <div class="huge">&nbsp;</div>
                                                <div></div>
                                              </div>
                                            </div>
                                          </div>
                                            <div class="panel-footer" style="background:white">
                                              <span class="pull-left" style="color:black"><strong>Web</strong></span>
                                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                              <div class="clearfix"></div>
                                            </div>
                                          </a>
                                        </div>
                                      </div>

                                      <!-- /.row -->
                                    </div>
                                    <div class="clearfix"></div>
                                    <!-- END DASHBOARD STATS 1-->
                                  </div>
                                  <!-- END CONTENT BODY -->
                                </div>
                                <!-- END CONTENT -->
                                <!-- BEGIN QUICK SIDEBAR -->
                                <a href="javascript:;" class="page-quick-sidebar-toggler">
                                  <i class="icon-login"></i>
                                </a>
                                <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                                  <div class="page-quick-sidebar">
                                    <ul class="nav nav-tabs">
                                      <li class="active">
                                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                          <span class="badge badge-danger">2</span>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                                          <span class="badge badge-success">7</span>
                                        </a>
                                      </li>
                                      <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                                          <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                          <li>
                                            <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                              <i class="icon-bell"></i> Alerts </a>
                                            </li>
                                            <li>
                                              <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                <i class="icon-info"></i> Notifications </a>
                                              </li>
                                              <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                  <i class="icon-speech"></i> Activities </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                  <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-settings"></i> Settings </a>
                                                  </li>
                                                </ul>
                                              </li>
                                            </ul>
                                          </div>
                                        </div>
                                        <!-- END QUICK SIDEBAR -->
                                      </div>
                                      <!-- END CONTAINER -->
                                      <!-- BEGIN FOOTER -->
                                      <div class="page-footer">
                                        <div class="page-footer-inner"> Gandocam, C.A 2016
                                        </div>
                                        <div class="scroll-to-top">
                                          <i class="icon-arrow-up"></i>
                                        </div>
                                      </div>
                                      <!-- END FOOTER -->
                                    </div>

</body>

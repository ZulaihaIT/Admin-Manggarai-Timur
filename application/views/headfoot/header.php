<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin Kabupaten Manggarai Timur</title>
        <link rel="icon" href="<?php echo base_url('assets/') ?>images/icon.png" type="image/x-icon">

        <!-- Bootstrap -->
        <link href="<?php echo base_url('assets/') ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fondamento|Open+Sans&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url('assets/') ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo base_url('assets/') ?>vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?php echo base_url('assets/') ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-wysiwyg -->
        <link href="<?php echo base_url('assets/') ?>vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
        <!-- Select2 -->
        <link href="<?php echo base_url('assets/') ?>vendors/select2/dist/css/select2.min.css" rel="stylesheet">
        <!-- Switchery -->
        <link href="<?php echo base_url('assets/') ?>vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <!-- starrr -->
        <link href="<?php echo base_url('assets/') ?>vendors/starrr/dist/starrr.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="<?php echo base_url('assets/') ?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Datatables -->
        <link href="<?php echo base_url('assets/') ?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/') ?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/') ?>vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/') ?>vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/') ?>vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?php echo base_url('assets/') ?>build/css/custom.min.css" rel="stylesheet">
        <!-- include libraries(jQuery, bootstrap) -->
        <!-- jQuery -->
        <script src="<?php echo base_url('assets/') ?>vendors/jquery/dist/jquery.min.js"></script>
        <!-- include summernote css/js -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?php Echo site_url('welcome') ?>" class="site_title">
                                <img src="<?php echo base_url('assets/') ?>images/icon.png" style="width:40px">&nbsp;<span>Manggarai Timur</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="<?php echo base_url('assets/') ?>images/5.PNG" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2>Siti Zulaiha</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>Menu</h3>
                                <ul class="nav side-menu">
                                    <li><a href="<?php echo site_url('welcome'); ?>"><i class="fa fa-home"></i> Home <span></span></a>
                                    </li>
                                    <!-- <li><a><i class="fa fa-sitemap"></i> Berita <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li class="fa-sort-amount-asc"><a  href="<?php echo site_url('daftar-berita') ?>">Daftar Berita</a></li>
                                            <li class="fa-sort-amount-asc"><a href="<?php echo site_url('news') ?>">Tambah Berita</a>
                                            </li>
                                        </ul>
                                    </li>  -->
                                    <li><a href="<?php echo site_url('sub'); ?>"><i class="fa fa-desktop"></i> Berita <span></span></a>
                                    </li>
                                    <li><a href="<?php echo site_url('kategori'); ?>"><i class="fa fa-bar-chart-o"></i>Kategori Berita <span></span></a>
                                    </li>
                                    
                                    <li><a href="<?php echo site_url('gambar'); ?>"><i class="fa fa-clone"></i>Galery<span></span></a>

                                    </li>
                            </div>

                        </div>
                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <nav class="nav navbar-nav">
                            <ul class=" navbar-right">
                                <li class="nav-item dropdown open" style="padding-left: 15px;">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                        <img src="<?php echo base_url('assets/') ?>images/4.png" alt="">Siti Zulaiha ADM
                                    </a>
                                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
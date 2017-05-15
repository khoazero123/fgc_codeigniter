<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="<?php echo base_url(); ?>">
        <meta charset="utf-8">
        <title><?=isset($title) ? $title : 'Training E-commerce Templates'?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
        <!-- bootstrap -->
        <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Css for @media screen -->
        <link href="public/themes/css/bootstrappage.css" rel="stylesheet"/>
        <!-- global styles -->
        <link href="public/themes/css/flexslider.css" rel="stylesheet"/>
        <link href="public/themes/css/lienhe.css" rel="stylesheet"/>
        <link href="public/themes/css/main.css" rel="stylesheet"/>
        <!-- scripts -->
        <script src="public/themes/js/jquery-1.7.2.min.js"></script>
        <script src="public/bootstrap/js/bootstrap.min.js"></script>
        <script src="public/themes/js/superfish.js"></script>
        <script src="public/themes/js/jquery.scrolltotop.js"></script>
        <script src="public/themes/js/jquery.flexslider-min.js"></script>
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <script src="public/themes/js/jquery.elevateZoom-3.0.8.min.js"></script>
        <script type="text/javascript" src="public/themes/js/main.js"></script>
        <script src="public/themes/js/common.js"></script>

    </head>
    <body>
        <div id="wrapper">
            <!-- Begin Header -->
            <div class="header container">
				<div id="Icon_search">
                    <a href="<?php echo base_url(); ?>"><img src="public/images/header.png" alt="Home"></a>
                </div>
                <ul id='top-menu'>
                    <li class='item<?=(isset($active) && $active == 'home') ? ' current' : '' ?>' id="lintrangchu"><a href='home'>Trang chủ</a></li>
                    <li class='item_separator'><img  class = "anhmenu" src="public/images/anhmenu.png" alt="đường viền cách giữa menu" /> </li>
                    <li class='item<?=(isset($active) && $active == 'sanpham') ? ' current' : '' ?>' id="lintrangchu"><a href='sanpham'>Sản phẩm</a></li><li class='item_separator'><img  class = "anhmenu" src="public/images/anhmenu.png" alt="đường viền cách giữa menu" /> </li>
                    <li class='item<?=(isset($active) && $active == 'gioithieu') ? ' current' : '' ?>' id="lintrangchu"><a href='gioithieu/view'>Giới thiệu</a></li>
                    <li class='item_separator'><img  class = "anhmenu" src="public/images/anhmenu.png" alt="đường viền cách giữa menu" /> </li>
                    <li <?php echo (isset($active) && $active == 'tintuc') ? 'class = "item current"' : 'class="item"' ?>><a href='tintuc'>Tin tức</a>
                    </li>
                    <li class='item_separator'><img  class = "anhmenu" src="public/images/anhmenu.png" alt="đường viền cách giữa menu" /> </li>
                    <li <?php echo (isset($active) && $active == 'lienhe') ? 'class = "item current"' : 'class="item"' ?>><a href='lienhe'>Liên hệ</a></li>
                    <li class='item_separator'><img  class = "anhmenu" src="public/images/anhmenu.png" alt="đường viền cách giữa menu" /> </li>

                </ul>
            </div>
            <!-- End Header -->
            <!-- Begin main content -->
            <div id="main-content">
                <div class="container">

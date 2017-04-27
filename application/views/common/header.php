<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="http://localhost/MVC/">
		<meta charset="utf-8">
		<title>Training E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="public/bootstrap/css/bootstrap.css" rel="stylesheet">
		<!-- Css for @media screen -->
		<link href="public/themes/css/bootstrappage.css" rel="stylesheet"/>		
		<!-- global styles -->
		<link href="public/themes/css/flexslider.css" rel="stylesheet"/>
		<link href="public/themes/css/main.css" rel="stylesheet"/>
		<link href="public/themes/css/lienhe.css" rel="stylesheet"/>
	</head>
    <body>
	    <div id="wrapper" class="container">
	    <!-- Begin Header -->
			<div class="header">

<!-- 				<img src="public/images/header.png" alt=""> -->
				<div class="row">
					<div class="col-xs-4">
						<div class="logo"><a href=""><img src="public/themes/images/logo.jpg" alt=""></a></div>
					</div>
					
				</div>
				<div id="top-menu">
					<ul >
						<li <?php echo (isset($active) && $active == 'gioithieu')?'class = "item current"' :'class="item"'?>><a href='index.php/gioithieu/view'>Giới thiệu</a></li>
						<li <?php echo (isset($active) && $active == 'tintuc')?'class = "item current"' :'class="item"'?>><a href='index.php/tintuc/list'>Tin tức</a></li>
						<li  <?php echo (isset($active) && $active == 'lienhe')?'class = "item current"' :'class="item"'?>><a href='index.php/lienhe/view'>Liên hệ</a></li>
					</ul>	
				</div>		
			</div>
		<!-- End Header -->
		<!-- Begin main content -->
		<div id="main-content">
			<div class="container">
		      	<div class="row">
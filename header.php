<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package freecircle
 */
 
 $home_a			= get_field('home_a');
 $home_service		= get_field('home_service');
 $home_portfolio	= get_field('home_portfolio');
 $home_about		= get_field('home_about');	
 $home_team			= get_field('home_team');
 $home_contact		= get_field('home_contact');
 $home_leadin		= get_field('home_leadin');
 $home_heading		= get_field('home_heading');
 $home_services		= get_field('home_services');
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Bootstrap core CSS -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Google Fonts -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	
 <!-- Theme CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/agency.min.css" rel="stylesheet">
	
	<style type="text/css"> 
	header { background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/header-bg.jpg); } 
	#services {background: white;}
	.section-heading { color: black;}
	.service-heading { color: black;}
	</style>
	
	

<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body id="page-top" class="index">
<!-- HEADER
	================================================== -->
	<header class="site-header" role="banner">
		
		<!-- NAVBAR
		================================================== -->
		<!-- Navigation -->
			
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><?php echo $home_a;?></a>
            </div>
			
        <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services"><?php echo $home_service;?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio"><?php echo $home_portfolio;?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about"><?php echo $home_about;?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team"><?php echo $home_team;?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact"><?php echo $home_contact;?></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><?php echo $home_leadin; ?></div>
                <div class="intro-heading"><?php echo $home_heading; ?></div>
                <a href="#services" class="page-scroll btn btn-xl"><?php echo $home_services?></a>
            </div>
        </div>
    </header>
		
		<!-- service -->
		<?php get_template_part('content','service'); ?>
		<!-- portfolio -->
		<?php get_template_part('content','portfolio'); ?>
		
		
		
		
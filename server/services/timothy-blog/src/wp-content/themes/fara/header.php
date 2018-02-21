<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Fara
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://timothylock.ca/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://timothylock.ca/assets/css/styles.css">
	<script src="https://timothylock.ca/assets/js/jquery.min.js"></script>
	<script src="https://timothylock.ca/assets/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100" rel="stylesheet" type="text/css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://timothylock.ca">Timothy Lock</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="nav-item" href="https://timothylock.ca">Home</a></li>
                <li><a class="nav-item" href="https://timothylock.ca/portfolio.php">Portfolio</a></li>
                <li><a class="nav-item" href="https://blog.timothylock.ca">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br><br>



	<div id="main" class="site-main">
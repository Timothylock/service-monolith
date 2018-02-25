<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Pblog
 * @since P Blog 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="https://timothylock.ca/assets/css/nav.css">
	<link rel="stylesheet" type="text/css" href="https://timothylock.ca/assets/css/body.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

		<?php $page = 3; ?>
	<?php 
	   $path = $_SERVER['DOCUMENT_ROOT'];
	   $path .= "https://timothylock.ca/assets/header.php";
	   include_once($path);
	?>



	<div id="main" class="site-main">

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="page-wrapper">
    <?php get_template_part(WC_PART . '/header/header') ?>
    <main id="main" class="main">

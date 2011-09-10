<?php
    include_once(ABSPATH . WPINC . '/feed.php');
    include_once(ABSPATH . WPINC . '/rss.php');
?>
<!DOCTYPE html>
<!--[if IE 6]><meta HTTP-EQUIV="REFRESH" content="0; url=<?php bloginfo('template_directory'); ?>/ie6"><![endif]-->
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" manifest="default.appcache?v=1" lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
<meta name="description" content="">
<meta name="author" content="">

<!-- http://t.co/dKP3o1e -->
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1">

<!-- For less capable mobile browsers
<link rel="stylesheet" media="handheld" href="<?php bloginfo('template_directory'); ?>/styles/handheld.css?v=1">  -->

<!-- For all browsers -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/style.css?v=1">

<!-- JavaScript at bottom except for Modernizr -->
<script src="<?php bloginfo('template_directory'); ?>/scripts/libs/modernizr-1.7.min.js"></script>

<!-- For iPhone 4 -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/h/apple-touch-icon.png">
<!-- For iPad 1-->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/images/m/apple-touch-icon.png">
<!-- For iPhone 3G, iPod Touch and Android -->
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory'); ?>/images/l/apple-touch-icon-precomposed.png">
<!-- For Nokia -->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/l/apple-touch-icon.png">
<!-- For everything else -->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">

<!--iOS. Delete if not required -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="apple-touch-startup-image" href="<?php bloginfo('template_directory'); ?>/images/splash.png">

<!--Microsoft. Delete if not required -->
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- http://t.co/y1jPVnT -->
<link rel="canonical" href="/">
</head>

<body <?php body_class(); ?>>
    <div id="top"></div>
    <div id="page_wrap">
            <div id="page_content">
                <div class="before_header">
                    <div class="before_header_inner">
                        <p class="charter"><strong>Tom Wahlin</strong>&mdash;Creative Thinker &amp; Problem Solver</p>
                        <?php include "includes/snippets/links-social.php" ?>
                    </div>    
                </div> 
                <header>
                    <div class="logo_wrap">
                        <div class="logo_inner_wrap">
                            <h1><a href="<?php bloginfo('url'); ?>"><span>Creative Thinker &amp; Problem Solver&mdash;Tom Wahlin</span></a></h1>
                        </div>
                    </div>    
                    <div class="navigation">
                        <div class="max_width">
                            <nav>
                                <ul class="left">
                                   <li class="nav_1"><a href="<?php bloginfo('url'); ?>">Home</a></li>
                                   <li class="nav_2"><a href="<?php bloginfo('url'); ?>/about">About</a></li>
                                   <li class="nav_3"><a href="<?php bloginfo('url'); ?>/work">Work</a></li>
                                </ul>
                                <ul class="right">   
                                   <li class="nav_4"><a href="<?php bloginfo('url'); ?>/goods">Goods</a></li>
                                   <li class="nav_5"><a href="<?php bloginfo('url'); ?>/blog">Blog</a></li>
                                   <li class="nav_6"><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>    
                    </div> 
                </header>
                <div class="main_content_outer max_width">
                    <div class="main_content">
                        <div class="main_content_inner" id="main_content_inner">
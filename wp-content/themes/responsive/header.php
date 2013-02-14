<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
<!doctype html>
<!--[if !IE]>      <html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

<title><?php wp_title('&#124;', true, 'right'); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php
// ini bagian style default

//wp_enqueue_style('responsive-style', get_stylesheet_uri(), false, '1.8.7');

// begin style

wp_enqueue_style('config-themes', get_stylesheet_directory_uri().'/css/config.css', false, false);

// tool for media_queries
wp_enqueue_style('visual-media-queries', get_stylesheet_directory_uri().'/css/visual-media-queries.css', false, false);
wp_enqueue_script('visual_browser', get_template_directory_uri() . '/js/visual-browser-size.js', array('jquery'), false , true);

// begin script
wp_enqueue_script('preloadify', get_template_directory_uri() . '/js/jquery.preloadify.js', array('jquery'), false , true);
wp_enqueue_script('top_script', get_template_directory_uri() . '/js/scripts-top.js', array('jquery'), false , true);
?>
	
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>  
                 
<?php responsive_container(); // before container hook ?>

<?php responsive_header(); // before header hook ?>
<div class="head-wrapper clearfix">
    <?php responsive_in_header(); // header hook ?>
	<div class="main_header clearfix">
        <div class="container_header clearfix"> <!-- wrapper biar 1100px -->
            <div class="main_menu_place clearfix ">
                    <div class="container_12 clearfix">
                            <div class="grid_12 clearfix">
                                    <!-- logo layer -->
                                    <div id="logo-header">
                                        <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri().'/images/kuassa_logo.png'; ?> " alt="<?php echo bloginfo('name') ?>" /></a>
                                    </div>
                                    <!-- end of logo layer -->
                                    <!--================== BEGIN main menu -->
                                    <div id="horizontal" >
					<p class="mobile-nav">Dropdown <span>+</span></p>
						    
							    <?php wp_nav_menu(array(
								'container'       => '',
								    'theme_location'  => 'header-menu')
								    ); 
							    ?>
								
							    <?php if (has_nav_menu('sub-header-menu', 'responsive')) { ?>
								    <?php wp_nav_menu(array(
										    'container'       => '',
											'menu_class'      => 'sub-header-menu',
											'theme_location'  => 'sub-header-menu')
											); 
										?>
							    <?php } ?>
						    <!-- end of #bagian menu -->
						    <div class="clear"></div>
                                    </div><!-- End of menu nav#horizontal -->
                                    
                                    <!--/================= END main menu -->
                                    <!-- right panel column -->
                                    <div id="right-panel">
                                        <ul id="right-list">
                                            <li class="search">
                                                <a class="ss-icon" href="#"></a>
                                                <div class="openbox">
                                                    <form action="" method="get">
                                                        <input type="text" id="search-input" name="search" placeholder="type to search" autocomplete="off">
                                                        <button class="top-button" type="submit"> &#10004;</button>
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="subcribe">
                                                <a class="sc-icon" href="#"></a>
                                                <div class="openbox">
                                                    <form action="" method="get">
                                                        <input type="text" id="subcribe-input" name="search" placeholder="Enter your email to subcribe" autocomplete="off">
                                                        <button class="top-button" type="submit"> &#10004;</button>
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="login"><a class="login-icon" href="#"></a></li>
                                        </ul>
                                    </div>
                                    <div class="clear"></div>
                                    <!-- end of right panel column -->
                            </div><!-- End / .clearfix -->
                    </div><!-- end / .container_12 -->
            </div><!-- end / .main_menu_place -->
        </div>

	</div>
    </div>
<?php responsive_header_end(); // after header hook ?>
<?php responsive_wrapper(); // before wrapper ?>
<div id="main_template" class="layout_boxed clearfix line">
    <?php responsive_in_wrapper(); // wrapper hook ?>
    
    <div id="wrapper" class="clearfix">
    <?php responsive_in_wrapper(); // wrapper hook ?>
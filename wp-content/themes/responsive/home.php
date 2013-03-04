<?php
// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

/**
 * Home Page
 *
 * Note: You can overwrite home.php as well as any other Template in Child Theme.
 * Create the same file (name) include in /responsive-child-theme/ and you're all set to go!
 * @see            http://codex.wordpress.org/Child_Themes
 *
 * @file           home.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/home.php
 * @link           http://codex.wordpress.org/Template_Hierarchy
 * @since          available since Release 1.0
 */
?>
<?php
get_header();

// nyoba get header

get_header('special');
?>
<!--== FLex slider style ==-->
<?php
//wp_enqueue_style('flexslider_style', get_stylesheet_directory_uri().'/css/flexslider/flexslider.css', false, false);
?>



<!-- bagian tengah -->
<div class="container_banner clearfix">
    <div class="banner_top">
        <a href="">
            <?php

            function lists($query, $wpdb) {
                return $wpdb->get_var($wpdb->prepare($query, $meta_key));
            }
            $a = lists("select dig_banner.banner_image from dig_banner where dig_banner.banner_status = 1 and dig_banner.banner_onpage = 'home'",$wpdb);
            
            ?>
            <img src="http://<?php echo  $a ?>">
            <div class="caption_img">
                <div id="content_fill">
                    <h1 style="color:yellow">KUASSA AMPLIFIKATION VERMILION</h1>
                    <h2>CLASSIC GUITAR COMBO<br /> AMP WITH</h2>
                    <h3>Spring Reverb & Tremolo</h3>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="heading">
    <h2 class="list-heading">Latest News</h2>
</div>
<div class="container_12 line">
    <div class="slider clearfix">
        <ul class="carousel" id="my-carousel">
            <li class="ic_container">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() . '/images/slider_1.png'; ?>">
                    <div class="overlay"></div>
                    <div class="ic_caption">
                        <span class="category">Article</span>
                        <span class="comments">1 Comments</span>
                        <h2>AMPLIFIKATION CREME PATCH 1.66 RELEASED.</h2>
                    </div>
                </a>
            </li>
            <li class="ic_container">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() . '/images/slider_2.png'; ?>">
                </a>
            </li>
            <li class="ic_container">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() . '/images/slider_3.png'; ?>">
                    <div class="overlay"></div>
                    <div class="ic_caption">
                        <span class="category"></span>
                        <span class="comments"></span>
                        <h2>AMPLIFIKATION CREME RELEASED.</h2>
                    </div>
                </a>
            <li class="ic_container">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() . '/images/slider_1.png'; ?>">
                    <div class="overlay"></div>
                    <div class="ic_caption">
                        <span class="category">Article</span>
                        <span class="comments">1 Comments</span>
                        <h2>AMPLIFIKATION CREME PATCH 1.66 RELEASED.</h2>
                    </div>
                </a>
            </li>
            <li class="ic_container">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() . '/images/slider_2.png'; ?>">
                </a>
            </li>
            <li class="ic_container">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() . '/images/slider_3.png'; ?>">
                    <div class="overlay"></div>
                    <div class="ic_caption">
                        <span class="category"></span>
                        <span class="comments"></span>
                        <h2>AMPLIFIKATION CREME RELEASED.</h2>
                    </div>
                </a>
            </li>
            <li class="ic_container">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() . '/images/slider_1.png'; ?>">
                    <div class="overlay"></div>
                    <div class="ic_caption">
                        <span class="category">Article</span>
                        <span class="comments">1 Comments</span>
                        <h2>AMPLIFIKATION CREME PATCH 1.66 RELEASED.</h2>
                    </div>
                </a>
            </li>
            <li class="ic_container">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() . '/images/slider_2.png'; ?>">
                </a>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
</div>
<div class="heading">
    <h2 class="list-heading">Kuassa Community</h2>
</div>
<div class="container_12 clearfix line">
    <div class="community-wrapper line clearfix">
        <ul class="community">
            <li class="list_container line">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() . '/images/community_03.png'; ?>">

                    <div class="list_caption">
                        <div class="top">
                            <span class="category">Interview</span>
                            <span class="comments">1 Comments</span>
                        </div>
			<div class="bottom">
			    <h2>Ludovico Reale</h2>
			</div>
                    </div>
                </a>
            </li>
            <li class="list_container line">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() . '/images/community_04.png'; ?>">					
                    <div class="list_caption">
                        <div class="top">
                            <span class="category">Interview</span>
                            <span class="comments">1 Comments</span>
                        </div>
			<div class="bottom">
			    <h2>Dimitar Berbatov</h2>
			</div>
                    </div>
                </a>
            </li>
            <li class="list_container line">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() . '/images/community_05.png'; ?>">

                    <div class="list_caption">
                        <div class="top">
                            <span class="category">Interview</span>
                            <span class="comments">1 Comments</span>
                        </div>
			<div class="bottom">
			    <h2>Tim Carter</h2>
			</div>
                    </div>
                </a>
            </li>
            <li class="list_container line ">
                <a href="">
                    <img src="<?php echo get_template_directory_uri() . '/images/community_07.png'; ?>">

                    <div class="list_caption">
                        <div class="top">
                            <span class="category">Interview</span>
                            <span class="comments">1 Comments</span>
                        </div>
			<div class="bottom">
			    <h2>Ludovico Reale</h2>
			</div>
                    </div>
                </a>
            </li>
            <div class="clear"></div>
        </ul>
        <ul class="social line">
            <li class="fb list">
                <div class="wrap_it clearfix">
                    <span class="logo"><img src="<?php echo get_template_directory_uri() . '/images/fb.png'; ?>"></span>
                    <span class="iframe"><img src="<?php echo get_template_directory_uri() . '/images/like.png'; ?>"></span>
                    <span class="count">13</span>
                </div>
            </li>
            <li class="twitter list">
                <div class="wrap_it clearfix">
                    <span class="logo"><img src="<?php echo get_template_directory_uri() . '/images/twitter.png'; ?>"></span>
                    <span class="iframe"><img src="<?php echo get_template_directory_uri() . '/images/follow.png'; ?>"></span>
                    <span class="count">13</span>
                </div>
            </li>
            <li class="youtube">
                <!-- nothing -->
                <div class="wrap_it clearfix">
                    <img src="<?php echo get_template_directory_uri() . '/images/youtube.png'; ?>">
                </div>
            </li>
            <li class="linked_in">
                <!-- nothing -->
                <div class="wrap_it clearfix">
                    <img src="<?php echo get_template_directory_uri() . '/images/linkedin.png'; ?>">
                </div>
            </li>
            <li class="gplus">
                <!-- nothing -->
                <div class="wrap_it clearfix">
                    <img src="<?php echo get_template_directory_uri() . '/images/gplus.png'; ?>">
                </div>
            </li>
        </ul>
    </div>
</div>
<div id="featured" class="grid col-940">

    <div class="grid col-460">

    </div><!-- end of .col-460 -->

    <div id="featured-image" class="grid col-460 fit"> 


    </div><!-- end of #featured-image --> 




</div><!-- end of #featured -->

<!-- script for home page -->
<?php
// include responsive carousel
//wp_enqueue_style('responsive-carousel', get_stylesheet_directory_uri().'/js/carousel/responsive-carousel.css', false, true);
wp_enqueue_style('my-carousel', get_stylesheet_directory_uri() . '/css/my-carousel.css', false, true);
?>
<?php
// include Carousel
wp_enqueue_script('myCarousel-min', get_template_directory_uri() . '/js/myCarousel-min.js', array('jquery'), false, true);
//wp_enqueue_script('responsive-carousel.touch', get_template_directory_uri() . '/js/carousel/responsive-carousel.touch.js', array('jquery'), false , true);
//wp_enqueue_script('responsive-carousel.drag', get_template_directory_uri() . '/js/carousel/responsive-carousel.drag.js', array('jquery'), false , true);
//wp_enqueue_script('responsive-carousel.dynamic-containers', get_template_directory_uri() . '/js/carousel/responsive-carousel.dynamic-containers.js', array('jquery'), false , true);
// include Optional FlexSlider Additions
//wp_enqueue_script('jquery_easing', get_template_directory_uri() . '/js/flexslider/jquery.easing.js', array('jquery'), false , true);
//wp_enqueue_script('jquery_mousewheel', get_template_directory_uri() . '/js/flexslider/jquery.mousewheel.js', array('jquery'), false , true);
//wp_enqueue_script('jquery_flexslider_demo', get_template_directory_uri() . '/js/flexslider/demo.js', array('jquery'), false , true);
?>
<script>
    $(function () {
        $("#my-carousel").myCarousel({
            numberVisibleItems:   '3',
            animationSpeed: 700,
            carouselSpeed: 500,
            automaticPlay: false,
            pauseOnHover: true,
            easing: "swing"	
        });
	
    });
</script>

<?php get_sidebar('home'); ?>
<?php get_footer(); ?>
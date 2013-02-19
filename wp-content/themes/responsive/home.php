<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

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
	    wp_enqueue_style('flexslider_style', get_stylesheet_directory_uri().'/css/flexslider/flexslider.css', false, false);
	?>
	
	
	
	<!-- bagian tengah -->
        <div class="container_banner clearfix">
		<div class="banner_top">
			<a href="">
				<img src="<?php echo get_template_directory_uri().'/images/banner.png'; ?>">
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
		<div class="slider">
			<div class="flexslider carousel">
				<div class="flex-viewport">
					<ul class="slides">
					    <li class="ic_container">
						<a href="">
							<img src="<?php echo get_template_directory_uri().'/images/slider_1.png'; ?>">
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
							<img src="<?php echo get_template_directory_uri().'/images/slider_2.png'; ?>">
						</a>
					    </li>
					    <li class="ic_container">
						<a href="">
							<img src="<?php echo get_template_directory_uri().'/images/slider_3.png'; ?>">
							<div class="overlay"></div>
							<div class="ic_caption">
								<span class="category"></span>
								<span class="comments"></span>
								<h2>AMPLIFIKATION CREME RELEASED.</h2>
							</div>
						</a>
						<li class="ic_container">
						<a href="">
							<img src="<?php echo get_template_directory_uri().'/images/slider_1.png'; ?>">
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
							<img src="<?php echo get_template_directory_uri().'/images/slider_2.png'; ?>">
						</a>
					    </li>
					    <li class="ic_container">
						<a href="">
							<img src="<?php echo get_template_directory_uri().'/images/slider_3.png'; ?>">
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
							<img src="<?php echo get_template_directory_uri().'/images/slider_1.png'; ?>">
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
							<img src="<?php echo get_template_directory_uri().'/images/slider_2.png'; ?>">
						</a>
					    </li>
					</ul>
				</div>
				<ul class="flex-direction-nav">
					<li><a class="flex-prev" href="#">Previous</a></li>
					<li><a class="flex-next" href="#">Next</a></li>
				</ul>
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
						<img src="<?php echo get_template_directory_uri().'/images/community_03.png'; ?>">
					
					<div class="list_caption">
						<div class="top">
							<span class="category">Interview</span>
							<span class="comments">1 Comments</span>
						</div>
						<h2>Ludovico Reale</h2>
					</div>
					</a>
				</li>
				<li class="list_container line">
					<a href="">
						<img src="<?php echo get_template_directory_uri().'/images/community_04.png'; ?>">					
					<div class="list_caption">
						<div class="top">
							<span class="category">Interview</span>
							<span class="comments">1 Comments</span>
						</div>
						<h2>Dimitar Berbatov</h2>
					</div>
					</a>
				</li>
				<li class="list_container line">
					<a href="">
						<img src="<?php echo get_template_directory_uri().'/images/community_05.png'; ?>">
					
					<div class="list_caption">
						<div class="top">
							<span class="category">Interview</span>
							<span class="comments">1 Comments</span>
						</div>
						<h2>Tim Carter</h2>
					</div>
					</a>
				</li>
				<li class="list_container line ">
					<a href="">
						<img src="<?php echo get_template_directory_uri().'/images/community_07.png'; ?>">
					
					<div class="list_caption">
						<div class="top">
							<span class="category">Interview</span>
							<span class="comments">1 Comments</span>
						</div>
						<h2>Ludovico Reale</h2>
					</div>
					</a>
				</li>
				<div class="clear"></div>
			</ul>
			<ul class="social line">
				<li class="fb list">
					<div class="wrap_it clearfix">
						<span class="logo"><img src="<?php echo get_template_directory_uri().'/images/fb.png'; ?>"></span>
						<span class="iframe"><img src="<?php echo get_template_directory_uri().'/images/like.png'; ?>"></span>
						<span class="count">13</span>
					</div>
				</li>
				<li class="twitter list">
					<div class="wrap_it clearfix">
						<span class="logo"><img src="<?php echo get_template_directory_uri().'/images/twitter.png'; ?>"></span>
						<span class="iframe"><img src="<?php echo get_template_directory_uri().'/images/follow.png'; ?>"></span>
						<span class="count">13</span>
					</div>
				</li>
				<li class="youtube">
					<!-- nothing -->
					<div class="wrap_it clearfix">
						<img src="<?php echo get_template_directory_uri().'/images/youtube.png'; ?>">
					</div>
				</li>
				<li class="linked_in">
					<!-- nothing -->
					<div class="wrap_it clearfix">
						<img src="<?php echo get_template_directory_uri().'/images/linkedin.png'; ?>">
					</div>
				</li>
				<li class="gplus">
					<!-- nothing -->
					<div class="wrap_it clearfix">
						<img src="<?php echo get_template_directory_uri().'/images/gplus.png'; ?>">
					</div>
				</li>
			</ul>
		</div>
	</div>
        <div id="featured" class="grid col-940">
        
        <div class="grid col-460">

            <?php $options = get_option('responsive_theme_options');
			// First let's check if headline was set
			    if ($options['home_headline']) {
                    echo '<h1 class="featured-title">'; 
				    echo $options['home_headline'];
				    echo '</h1>'; 
			// If not display dummy headline for preview purposes
			      } else { 
			        echo '<h1 class="featured-title">';
				    echo __('Hello, World!','responsive');
				    echo '</h1>';
				  }
			?>
                    
            <?php $options = get_option('responsive_theme_options');
			// First let's check if headline was set
			    if ($options['home_subheadline']) {
                    echo '<h2 class="featured-subtitle">'; 
				    echo $options['home_subheadline'];
				    echo '</h2>'; 
			// If not display dummy headline for preview purposes
			      } else { 
			        echo '<h2 class="featured-subtitle">';
				    echo __('Your H2 subheadline here','responsive');
				    echo '</h2>';
				  }
			?>
            
            <?php $options = get_option('responsive_theme_options');
			// First let's check if content is in place
			    if (!empty($options['home_content_area'])) {
                    echo '<p>'; 
					echo do_shortcode($options['home_content_area']);
				    echo '</p>'; 
			// If not let's show dummy content for demo purposes
			      } else { 
			        echo '<p>';
				    echo __('Your title, subtitle and this very content is editable from Theme Option. Call to Action button and its destination link as well. Image on your right can be an image or even YouTube video if you like.','responsive');
				    echo '</p>';
				  }
			?>
            
            <?php $options = get_option('responsive_theme_options'); ?>
		    <?php if ($options['cta_button'] == 0): ?>     
            <div class="call-to-action">

            <?php $options = get_option('responsive_theme_options');
			// First let's check if headline was set
			    if (!empty($options['cta_url']) && $options['cta_text']) {
					echo '<a href="'.$options['cta_url'].'" class="blue button">'; 
					echo $options['cta_text'];
				    echo '</a>';
			// If not display dummy headline for preview purposes
			      } else { 
					echo '<a href="#nogo" class="blue button">'; 
					echo __('Call to Action','responsive');
				    echo '</a>';
				  }
			?>  
            
            </div><!-- end of .call-to-action -->
            <?php endif; ?>         
            
        </div><!-- end of .col-460 -->

        <div id="featured-image" class="grid col-460 fit"> 
                           
            <?php $options = get_option('responsive_theme_options');
			// First let's check if image was set
			    if (!empty($options['featured_content'])) {
					echo do_shortcode($options['featured_content']);
		    // If not display dummy image for preview purposes
			      } else {             
                    echo '<img class="aligncenter" src="'.get_stylesheet_directory_uri().'/images/featured-image.png" width="440" height="300" alt="" />'; 
 				  }
			?> 
                                   
        </div><!-- end of #featured-image --> 
        
	 <?php
	 $posts_array = query_posts( 'cat=5,6,7,8' );
	 ;echo '<pre>';
	 print_r($posts_array);
	 ?>
	 
	 
	 
        </div><!-- end of #featured --> 
<!-- script for home page -->
<?php
    // include flexslider
    wp_enqueue_script('jquery_flexslider', get_template_directory_uri() . '/js/flexslider/jquery.flexslider.js', array('jquery'), false , true);
    wp_enqueue_style('demo-flexslider', get_stylesheet_directory_uri().'/css/flexslider/demo.css', false, true);
    
?>
    <script type="text/javascript">
	  $(window).load(function(){
	    $('.flexslider').flexslider({
	      animation: "slide",
	      direction: "horizontal",
	      animationLoop: false,
	      itemWidth: 325,
	      itemMargin: 1,
	      start: function(slider){
		$('body').removeClass('loading');
	      }
	    });
	  });
    </script>
<?php
    // include Syntax Highlighter
    wp_enqueue_script('addFlexshCore', get_template_directory_uri() . '/js/flexslider/shCore.js', array('jquery'), false , true);
    wp_enqueue_script('addFlexshBrushXml', get_template_directory_uri() . '/js/flexslider/shBrushXml.js', array('jquery'), false , true);
    wp_enqueue_script('addFlexshBrushJScript', get_template_directory_uri() . '/js/flexslider/shBrushJScript.js', array('jquery'), false , true);
    
    // include Optional FlexSlider Additions
    wp_enqueue_script('jquery_easing', get_template_directory_uri() . '/js/flexslider/jquery.easing.js', array('jquery'), false , true);
    wp_enqueue_script('jquery_mousewheel', get_template_directory_uri() . '/js/flexslider/jquery.mousewheel.js', array('jquery'), false , true);
    wp_enqueue_script('jquery_flexslider_demo', get_template_directory_uri() . '/js/flexslider/demo.js', array('jquery'), false , true);

?>


<?php get_sidebar('home'); ?>
<?php get_footer(); ?>
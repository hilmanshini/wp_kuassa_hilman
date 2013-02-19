<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Pages Template
 *
 *
 * @file           page.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

        <div id="content" class="grid col-620">
	    <!-- halaman about-us -->
	    <?php if (is_page('about-us')) : ?>
		ini halaman about us
	    <?php endif; ?>
	    <!-- end of halaman about-us -->
	    
	    <!-- halaman community -->
	    <?php if (is_page('community')) : ?>
		ini halaman communityt
	    <?php endif; ?>
	    <!-- end of halaman community -->
	    
	    <!-- halaman download -->
	    <?php if (is_page('downloads')) : ?>
		<h1>Downloads</h1>
		<div class="heading">
		<h2 class="list-heading">Trial Versions</h2>
		</div>
		<div class="list_download clearfix line">
			<div class="grid_12 line">
				<div class="download_wrapper">
					<ul class="list_downloads">
						<li class="grid_4 line">
							<a href="">
								<div class="thumbnail">
									<img src="<?php echo get_template_directory_uri().'/images/product_1.png'; ?>">
								</div>
								<div class="description">
									<span class="trademark">KUASSA</span>
									<span class="type">Amplifikation One</span>
								</div>
							</a>
						</li>
						<li class="grid_4 line">
							<a href="">
								<div class="thumbnail">
									<img src="<?php echo get_template_directory_uri().'/images/product_2.png'; ?>">
								</div>
								<div class="description">
									<span class="trademark">KUASSA</span>
									<span class="type">Amplifikation One</span>
								</div>
							</a>
						</li>
						<li class="grid_4 line">
							<a href="">
								<div class="thumbnail">
									<img src="<?php echo get_template_directory_uri().'/images/product_1.png'; ?>">
								</div>
								<div class="description">
									<span class="trademark">KUASSA</span>
									<span class="type">Amplifikation One</span>
								</div>
							</a>
						</li>
						<li class="grid_4 line">
							<a href="">
								<div class="thumbnail">
									<img src="<?php echo get_template_directory_uri().'/images/product_3.png'; ?>">
								</div>
								<div class="description">
									<span class="trademark">KUASSA</span>
									<span class="type">Amplifikation One</span>
								</div>
							</a>
						</li>
						<li class="grid_4 line">
							<a href="">
								<div class="thumbnail">
									<img src="<?php echo get_template_directory_uri().'/images/product_1.png'; ?>">
								</div>
								<div class="description">
									<span class="trademark">KUASSA</span>
									<span class="type">Amplifikation One</span>
								</div>
							</a>
						</li>
						<li class="grid_4 line">
							<a href="">
								<div class="thumbnail">
									<img src="<?php echo get_template_directory_uri().'/images/product_3.png'; ?>">
								</div>
								<div class="description">
									<span class="trademark">KUASSA</span>
									<span class="type">Amplifikation One</span>
								</div>
							</a>
						</li>
						<li class="grid_4 line">
							<a href="">
								<div class="thumbnail">
									<img src="<?php echo get_template_directory_uri().'/images/product_1.png'; ?>">
								</div>
								<div class="description">
									<span class="trademark">KUASSA</span>
									<span class="type">Amplifikation One</span>
								</div>
							</a>
						</li>
						<li class="grid_4 line">
							<a href="">
								<div class="thumbnail">
									<img src="<?php echo get_template_directory_uri().'/images/product_2.png'; ?>">
								</div>
								<div class="description">
									<span class="trademark">KUASSA</span>
									<span class="type">Amplifikation One</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="heading">
		<h2 class="list-heading">Free Versions</h2>
		</div>
		<div class="list_download clearfix line">
			<div class="grid_12 line">
				<div class="download_wrapper">
					<ul class="list_downloads">
						<li class="grid_4 line">
							<a href="">
								<div class="thumbnail">
									<img src="<?php echo get_template_directory_uri().'/images/product_1.png'; ?>">
								</div>
								<div class="description">
									<span class="trademark">KUASSA</span>
									<span class="type">Amplifikation One</span>
								</div>
							</a>
						</li>
						<li class="grid_4 line">
							<a href="">
								<div class="thumbnail">
									<img src="<?php echo get_template_directory_uri().'/images/product_2.png'; ?>">
								</div>
								<div class="description">
									<span class="trademark">KUASSA</span>
									<span class="type">Amplifikation One</span>
								</div>
							</a>
						</li>
						<li class="grid_4 line">
							<a href="">
								<div class="thumbnail">
									<img src="<?php echo get_template_directory_uri().'/images/product_1.png'; ?>">
								</div>
								<div class="description">
									<span class="trademark">KUASSA</span>
									<span class="type">Amplifikation One</span>
								</div>
							</a>
						</li>
						<li class="grid_4 line">
							<a href="">
								<div class="thumbnail">
									<img src="<?php echo get_template_directory_uri().'/images/product_3.png'; ?>">
								</div>
								<div class="description">
									<span class="trademark">KUASSA</span>
									<span class="type">Amplifikation One</span>
								</div>
							</a>
						</li>
						<li class="grid_4 line">
							<a href="">
								<div class="thumbnail">
									<img src="<?php echo get_template_directory_uri().'/images/product_1.png'; ?>">
								</div>
								<div class="description">
									<span class="trademark">KUASSA</span>
									<span class="type">Amplifikation One</span>
								</div>
							</a>
						</li>
						<li class="grid_4 line">
							<a href="">
								<div class="thumbnail">
									<img src="<?php echo get_template_directory_uri().'/images/product_3.png'; ?>">
								</div>
								<div class="description">
									<span class="trademark">KUASSA</span>
									<span class="type">Amplifikation One</span>
								</div>
							</a>
						</li>
						<li class="grid_4 line">
							<a href="">
								<div class="thumbnail">
									<img src="<?php echo get_template_directory_uri().'/images/product_1.png'; ?>">
								</div>
								<div class="description">
									<span class="trademark">KUASSA</span>
									<span class="type">Amplifikation One</span>
								</div>
							</a>
						</li>
						<li class="grid_4 line">
							<a href="">
								<div class="thumbnail">
									<img src="<?php echo get_template_directory_uri().'/images/product_2.png'; ?>">
								</div>
								<div class="description">
									<span class="trademark">KUASSA</span>
									<span class="type">Amplifikation One</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	    <?php endif; ?>
	    <!-- end of halaman download -->
	    
	    <!-- halaman blog -->
	    <?php if(is_page('blog')) : ?>
	    <?php
		wp_enqueue_style('flexslider_style', get_stylesheet_directory_uri().'/css/flexslider/flexslider.css', false, false);
	    ?>
	    
	    <?php
		// include flexslider
		wp_enqueue_script('jquery_flexslider', get_template_directory_uri() . '/js/flexslider/jquery.flexslider.js', array('jquery'), false , true);
		
	    ?>
		<script type="text/javascript">
		      $(function(){
			SyntaxHighlighter.all();
		      });
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
	    <!-- bagian category blog -->
	    <div class="category_blog clearfix line ">
		    <ul class="categories">
			    <li class="first"><a href="">Blog</a></li>
			    <li class="second"><a href="">News</a></li>
			    <li class="second"><a href="">Events</a></li>
			    <li class="last"><a href="">Videos</a></li>
		    </ul>
	    </div>
	    <!-- end of category list -->
	    <!-- bagian blog list-->
	    <div class="container_blog clearfix line">
			    <div class="left_column line ">
				    <div class="grid_6 left_nav line">
					    <a href="" class="navlist">Newer Article </a>
				    </div>
				    <div class="grid_6 right_nav line ">
					    <a href="" class="navlist">Older Article </a>
				    </div>
				    <div class="main_list clearfix line">
					    <ul class="list_blog">
						    <li class="line grid_6">
							    <a href="" class="blog_content">
								    <div class="thumbnail">
									    <img src="<?php echo get_template_directory_uri().'/images/blog_dummy_img.png'; ?>" alt="thumbnail blog">
								    
									    <div class="ic_caption">
										    <span class="category">Interviews</span>
										    <span class="comments">1 Comment</span>
										    <h3>Tim Carter</h3>
									    </div>
								    </div>
							    </a>
							    <div class="description">
								    <p>
									    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
								    </p>
							    </div>
						    </li>
						    <li class="line grid_6">
							    <a href="" class="blog_content">
								    <div class="thumbnail">
									    <img src="<?php echo get_template_directory_uri().'/images/blog_dummy_img2.png'; ?>" alt="thumbnail blog">
								    
									    <div class="ic_caption">
										    <span class="category">Interviews</span>
										    <span class="comments">1 Comment</span>
										    <h3>Tim Carter</h3>
									    </div>
								    </div>
							    </a>
							    <div class="description">
								    <p>
									    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
								    </p>
							    </div>
							    
						    </li>
						    <li class="line grid_6">
							    <a href="" class="blog_content">
								    <div class="thumbnail">
									    <img src="<?php echo get_template_directory_uri().'/images/blog_dummy_img2.png'; ?>" alt="thumbnail blog">
								    
									    <div class="ic_caption">
										    <span class="category">Interviews</span>
										    <span class="comments">1 Comment</span>
										    <h3>Tim Carter</h3>
									    </div>
								    </div>
							    </a>
							    <div class="description">
								    <p>
									    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
								    </p>
							    </div>
							    
						    </li>
						    <li class="line grid_6">
							    <a href="" class="blog_content">
								    <div class="thumbnail">
									    <img src="<?php echo get_template_directory_uri().'/images/blog_dummy_img.png'; ?>" alt="thumbnail blog">
								    
									    <div class="ic_caption">
										    <span class="category">Interviews</span>
										    <span class="comments">1 Comment</span>
										    <h3>Tim Carter</h3>
									    </div>
								    </div>
							    </a>
							    <div class="description">
								    <p>
									    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
								    </p>
							    </div>
						    </li>
						    <li class="line grid_6">
							    <a href="" class="blog_content">
								    <div class="thumbnail">
									    <img src="<?php echo get_template_directory_uri().'/images/blog_dummy_img.png'; ?>" alt="thumbnail blog">
								    
									    <div class="ic_caption">
										    <span class="category">Interviews</span>
										    <span class="comments">1 Comment</span>
										    <h3>Tim Carter</h3>
									    </div>
								    </div>
							    </a>
							    <div class="description">
								    <p>
									    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
								    </p>
							    </div>
						    </li>
						    
					    </ul>
				    </div>
				    <div class="grid_6 left_nav line">
					    <a href="" class="navlist">Newer Article </a>
				    </div>
				    <div class="grid_6 right_nav line ">
					    <a href="" class="navlist">Older Article </a>
				    </div>
			    </div>
			    <div class="grid_4 right_column ">
				    <div class="archive clearfix line">
					    <h3> Archieve</h3>
					    <ul class="archieve_column grid_12 line">
						    <li>
							    <a href="">2010</a>
						    </li>
						    <li>
							    <a href="">2011</a>
						    </li>
						    <li>
							    <a href="">2012</a>
						    </li>
						    <li>
							    <a href="">2013</a>
						    </li>
					    </ul>
				    </div>
				    <div class="note_column line">
					    <ul class="banner">
						    <li><a href=""><img src="<?php echo get_template_directory_uri().'/images/right_column_blog.png'; ?>" alt="new updates"></a></li>
						    <li><a href=""><img src="<?php echo get_template_directory_uri().'/images/right_column_blog_2.png'; ?>" alt="new updates"></a></li>
					    </ul>
					    <div class="clear"></div>
				    </div>
				    <div class="stories_column line">
					    <h3> Recomended Stories</h3>
					    <ul class="recommended">
						    <li>
							    <a href="" class="clearfix">
								    <div class="thumb">
									    <img src="<?php echo get_template_directory_uri().'/images/blog_comunity.png'; ?>">
								    </div>
								    <div class="description">
									    <h4>Interview</h4>
									    <span class="desc">
										    dimitar berbatov
									    </span>
								    </div>
							    </a>
						    </li>
						    <li>
							    <a href="" class="clearfix">
								    <div class="thumb">
									    <img src="<?php echo get_template_directory_uri().'/images/blog_comunity.png'; ?>">
								    </div>
								    <div class="description">
									    <h4>Interview</h4>
									    <span class="desc">
										    dimitar berbatov
									    </span>
								    </div>
							    </a>
						    </li>
						    <li>
							    <a href="" class="clearfix">
								    <div class="thumb">
									    <img src="<?php echo get_template_directory_uri().'/images/blog_comunity.png'; ?>">
								    </div>
								    <div class="description">
									    <h4>Interview</h4>
									    <span class="desc">
										    dimitar berbatov
									    </span>
								    </div>
							    </a>
						    </li>
						    <li>
							    <a href="" class="clearfix">
								    <div class="thumb">
									    <img src="<?php echo get_template_directory_uri().'/images/blog_comunity.png'; ?>">
								    </div>
								    <div class="description">
									    <h4>Interview</h4>
									    <span class="desc">
										    dimitar berbatov
									    </span>
								    </div>
							    </a>
						    </li>
						    <li>
							    <a href="" class="clearfix">
								    <div class="thumb">
									    <img src="<?php echo get_template_directory_uri().'/images/blog_comunity.png'; ?>">
								    </div>
								    <div class="description">
									    <h4>Interview</h4>
									    <span class="desc">
										    dimitar berbatov
									    </span>
								    </div>
							    </a>
						    </li>
					    </ul>
				    </div>
			    </div>
	    </div>
	    <!-- you may like this -->
	    <div class="heading">
	    <h2 class="list-heading">You May Also Intersted to </h2>
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
	    <?php endif; ?>
	    <!-- end of halaman blog -->
	    
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
        
        <?php $options = get_option('responsive_theme_options'); ?>
		<?php if ($options['breadcrumb'] == 0): ?>
		<?php echo responsive_breadcrumb_lists(); ?>
        <?php endif; ?>
        
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="post-title"><?php the_title(); ?></h1>
 
                <?php if ( comments_open() ) : ?>               
                <div class="post-meta">
                <?php responsive_post_meta_data(); ?>
                
				    <?php if ( comments_open() ) : ?>
                        <span class="comments-link">
                        <span class="mdash">&mdash;</span>
                    <?php comments_popup_link(__('No Comments &darr;', 'responsive'), __('1 Comment &darr;', 'responsive'), __('% Comments &darr;', 'responsive')); ?>
                        </span>
                    <?php endif; ?> 
                </div><!-- end of .post-meta -->
                <?php endif; ?> 
                
                <div class="post-entry">
                    <?php the_content(__('Read more &#8250;', 'responsive')); ?>
                    <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>
                </div><!-- end of .post-entry -->
                
                <?php if ( comments_open() ) : ?>
                <div class="post-data">
				    <?php the_tags(__('Tagged with:', 'responsive') . ' ', ', ', '<br />'); ?> 
                    <?php the_category(__('Posted in %s', 'responsive') . ', '); ?> 
                </div><!-- end of .post-data -->
                <?php endif; ?>             
            
            <div class="post-edit"><?php edit_post_link(__('Edit', 'responsive')); ?></div> 
            </div><!-- end of #post-<?php the_ID(); ?> -->
            
            <?php comments_template( '', true ); ?>
            
        <?php endwhile; ?> 
        
        <?php if (  $wp_query->max_num_pages > 1 ) : ?>
        <div class="navigation">
			<div class="previous"><?php next_posts_link( __( '&#8249; Older posts', 'responsive' ) ); ?></div>
            <div class="next"><?php previous_posts_link( __( 'Newer posts &#8250;', 'responsive' ) ); ?></div>
		</div><!-- end of .navigation -->
        <?php endif; ?>

	    <?php else : ?>

        <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'responsive'); ?></h1>
                    
        <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'responsive'); ?></p>
                    
        <h6><?php printf( __('You can return %s or search for the page you were looking for.', 'responsive'),
	            sprintf( '<a href="%1$s" title="%2$s">%3$s</a>',
		            esc_url( get_home_url() ),
		            esc_attr__('Home', 'responsive'),
		            esc_attr__('&larr; Home', 'responsive')
	                )); 
			 ?></h6>
                    
        <?php get_search_form(); ?>

<?php endif; ?>  
      
        </div><!-- end of #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

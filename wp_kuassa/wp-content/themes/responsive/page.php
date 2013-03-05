<?php
// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

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
		<h1 class="heading-title">About Us</h1>
		<div class="content-about">
		<div class="desc-about">
		<p> <b>Kuassa</b> is a software developer specializing on guitar amplification and audio processing. Our root is coming from passion to create great tools for every musician's creative process. As musicians ourselves, we believe that straight outstanding tonal quality are more important than anything else, including tons of features that might won't be that useful or may distracts you from your main objective: creating great music. 
	The name <b>"Kuassa"</b>, are derived from Indonesian word: kuasa, which means power, might, or authority. We simply took this word, and use it as our brand to always remind us that a right mixture between left and right part of human brain can create something that emotionally sings to your soul, while logically effective.
	</p>
	      </div>
	      <div class="teams">
		<div class="wrapper-teams">
		<div class="list-people">
		  <div class="profile">
		    <div class="photo">
		    <img src="<?php echo get_template_directory_uri().'/images/team/photo1.gif';?>" alt"Arie Ardiansyah">
		    </div>
		    <div class="desc">
		      <p>
			<span class="name">Arie Ardiansyah:</span> Our CTO, responsible for DSP algorithms, product development, and R&D for Kuassa.Playing guitars, sing, and write songs for Bandung's Synth-Punk Band: <i>Disconnected</i>. Maker of <a href="http://aradaz.blogspot.com/" target="blank"><i>Aradaz Amp</i></a> free plugins.
		      </p>
		    </div>
		    </div>
		</div>
		
		<div class="list-people">
		  <div class="profile">
		    <div class="photo">
		    <img src="<?php echo get_template_directory_uri().'/images/team/photo2.gif';?>" alt"Arie Ardiansyah">
		    </div>
		    <div class="desc">
		      <p>
			<span class="name">Grahadea Kusuf:</span> Our CEO, responsible for all business related and corporate stuff. Playing synths, composing, and producing for Bandung's electronic-pop band called <i>Homogenic</i>.
		      </p>
		    </div>
		    </div>
		</div>
		
		<div class="list-people">
		  <div class="profile">
		    <div class="photo">
		    <img src="<?php echo get_template_directory_uri().'/images/team/photo3.gif';?>" alt"Arie Ardiansyah">
		    </div>
		    <div class="desc">
		      <p>
			<span class="name">Adhitya Wibisana:</span> Our Engineering Director, responsible for detailed product concept, audio engineering, technical related stuff, and support. Head engineer and producer for Infinitelabs Studio. Playing Bass for Industrial rock band: Helmproyek.
		      </p>
		    </div>
		    </div>
		</div>
		
		<div class="list-people">
		  <div class="profile">
		    <div class="photo">
		    <img src="<?php echo get_template_directory_uri().'/images/team/photo4.gif';?>" alt"Arie Ardiansyah">
		    </div>
		    <div class="desc">
		      <p>
			<span class="name">Edwin Yudayana:</span> Our IT Director, lead developer, responsible for back-end technology, and roadmap development.
		      </p>
		    </div>
		    </div>
		</div>
		
		<div class="list-people">
		  <div class="profile">
		    <div class="photo">
		    <img src="<?php echo get_template_directory_uri().'/images/team/photo5.gif';?>" alt"Arie Ardiansyah">
		    </div>
		    <div class="desc">
		      <p>
			<span class="name">Rendy Fajar:</span> Our Creative Director, Responsible for design and visual elements for the company, e.g. corporate identity, visual communications, UI designs, and Marketing tools. Playing drums for Bandung's Indie Pop band called Olive Tree, and Industrial Rock band, Helmproyek.
		      </p>
		    </div>
		    </div>
		</div>
		
		<div class="list-people">
		  <div class="profile">
		    <div class="photo">
		    <img src="<?php echo get_template_directory_uri().'/images/team/photo6.gif';?>" alt"Arie Ardiansyah">
		    </div>
		    <div class="desc">
		      <p>
			<span class="name">Rizky Syafani:</span> Marketing and Communications manager, responsible for marketing, promotion, and brand campaign.
		      </p>
		    </div>
		    </div>
		</div>
		<div class="clear"></div>
	      </div>
	      </div>
	      <div class="clear"></div>
	      <div class="desc-value">
	      <h2>Our Values</h2>
		<p>
		<ol>
		  <li>We prefers quality over quantity. On most occasions, having 100 amp, 80 FXs, and 90 Cabinets won't guarantee you for making good guitar tracks.</li>
		  <li>We focused everything we've got on something that matters the most: the TONE!</li>
		  <li>We make everything as easy and accessible as possible. We want you to immediately start playing and forget the user manual. (Even though we're still making one  <span class="emoticon"><img src="<?php echo get_template_directory_uri().'/images/emoticon/bigsmile.png';?>" alt":D" style="vertical-align: bottom;"></span>)</li>
		  <li>Putting low price tag doesn't mean our products are inferior (and vice-versa). We're just trying to be fair with our pricing.</li>
		  <li>Using Guitar Amp Software means you are being Eco-Friendly. Less power consumption, less waste, and therefore reduces your carbon footprint when compared with real hardware.</li>
		</ol>
		</p>
	      </div>
		    <div class="address">
			<div class="header">PT. Kuassa <br/>R&D Studio and Office</div>
			<div class="full-description">
			    <p>Jl. Sukasenang V no.14<br>
			       Bandung, 40134<br>
			       West Java, INDONESIA</p>
			    <p><a href="http://www.kuassa.com">http://www.kuassa.com</a></p>
			    <p>
				General Inquires: <a href="info@kuassa.com">info@kuassa.com</a><br>
				Technical Support: <a href="support@kuassa.com">support@kuassa.com</a>
			    </p>
			</div>
		    </div>
	      </div>
	    </div>
	    <div class="clear"></div>
	    <?php endif; ?>
	    <!-- end of halaman about-us -->
	    
	    <!-- halaman community -->
	    <?php if (is_page('community')) : ?>
            <?php
		wp_enqueue_style('my-carousel', get_stylesheet_directory_uri().'/css/my-carousel.css', false, true);
	    ?>
	    
	    <?php
		// include flexslider
		wp_enqueue_script('myCarousel-min', get_template_directory_uri() . '/js/myCarousel-min.js', array('jquery'), false , true);
		
	    ?>
		<script>
		$(function () {
			$("#my-carousel").myCarousel({
				numberVisibleItems:   '4',
				animationSpeed: 700,
				carouselSpeed: 500,
				automaticPlay: false,
				pauseOnHover: true,
				easing: "swing"	
			});
			
		});
		</script>
	    <!-- bagian category blog -->
	    <div class="category_blog clearfix line ">
		    <ul class="categories">
			    <li class="first"><a href="http://localhost/open_kuassa/index.php?route=information/community&amp;category_id=8">ARTISTS</a></li>
                            <li class="otlist"><a href="http://localhost/open_kuassa/index.php?route=information/community&amp;category_id=9">STUDIOS</a></li>
                            <li class="otlist"><a href="http://localhost/open_kuassa/index.php?route=information/community&amp;category_id=10">MEDIA</a></li>
                            <li class="last"><a href="http://localhost/open_kuassa/index.php?route=information/community&amp;category_id=11">RESOURCES</a></li>
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
			    <div class="slider clearfix">
					<ul class="carousel" id="my-carousel">
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
					<div class="clear"></div>
			</div>
		    </div>
	    </div>
	    <?php endif; ?>
	    <!-- end of halaman community -->
	    
	    <!-- halaman support -->
	    <?php if(is_page('support')): ?>
	    <?php
	    // include accordion css
		wp_enqueue_style('accordion-support', get_stylesheet_directory_uri().'/css/accordion.css', false, true);
	    ?>
	    <script  type="text/javascript" language="javascript">
		    $(document).ready(function(){
			    
			    $('.adCntnr div.acco2:eq(0)').find('div.expand:eq(0)').addClass('openAd').end()
			    .find('div.collapse-content:gt(0)').hide().end()
			    
			    .find('div.expand').click(function() {
			    $(this).toggleClass('openAd').siblings().removeClass('openAd').end()
			    .next('div.collapse-content').slideToggle().siblings('div.collapse-content:visible').slideUp();
			    return false;
			     });
		    })
	    </script>
	    
	    <div id="content">
	    <h1 class="heading-title">TECHNICAL SUPPORT</h1>
	      <!-- support-->
	      <div class="content-support">
		  <div class="left-column">
		      <div class="faq">
			  <div class="header">
			      <h2>FREQUENTLY ASKED QUESTIONS</h2>
			  </div>
			  <div class="list-faq">
			      <div class="adCntnr" >
				  <div class="acco2">
				      <div class="expand">
					  <a title="expand/collapse" href="#">SALES SUPPORT >></a>
				      </div>
				      <div class="collapse-content">
				      <div class="accCntnt">
					  <p>
					    <ul>
						    <li>
							    Q : fdasfasfas</li>
						    <li>
							    A : fdasfasf</li>
						    <li>
							    Q : fdafasf</li>
						    <li>
							    A : fdfasf</li>
					    </ul>
					  </p>
				      </div>
				      </div>
				  </div>
			  </div>
			  </div>
		      </div>
		  </div>
		  <div class="right-column">
		      <div class="visit-forum">
			  <div class="subhead-visit">
			      <h2>VISIT OUR FORUM</h2>
			  </div>
			  <div class="kvr-img">
			     <a href="http://www.kvraudio.com/forum/viewforum.php?f=160">
				  <img src="<?php echo get_template_directory_uri().'/images/kvr.jpg';?>" alt="kvr-forum">
			     </a>
			  </div>
			  <div class="link-forum">
			      <a href="http://www.kvraudio.com/forum/viewforum.php?f=160">http://www.kvraudio.com/forum/viewforum.php?f=160</a>
			  </div>
			  <div class="subhead-visit">
			      <h2>EMAIL US</h2>
			  </div>
			  <div class="text">
			      <p>Can't find the answer you are looking for ?<br>
			      Don't hesistate to drop us a message at:<br>
			      </p>
			      <p><b>General & Sales : info@kuassa.com</b><br><br>
			      <b>Tech.Support : support@kuassa.com</b>
			      </p>
			  </div>
		      </div>
		      
		      <div class="featured">
			  <a href=""><img src="<?php echo get_template_directory_uri().'/images/featured.jpg';?>" title="featured"></a>
		      </div>
		  </div>
		  <div class="clear"></div>
	      </div>
	      <div class="clear"></div>
	    <?php endif; ?>
	    <!-- end of halaman support -->
            
	    <!-- halaman product_list -->
            <?php if (is_page('product')): ?>
            <!-- product list -->
            <div class="heading">
		<h1 class="heading-title">Product List</h1>
	    </div>
            <div class="content-product-list">
                <div class="all-product">
                                <div class="list-product">
                                    <div class="box-preview">
                                        <!--  button panel float -->
                                        <div class="button-panel">
                                            <a href="http://localhost/wp_kuassa/product/product_detail/"><input id="buy" type="button" class="small" value="Free" /></a>
                                            <a href="http://localhost/wp_kuassa/product/product_detail/"><input id="try" type="button" class="small" value="TRY" /> </a>
                                        </div>
                                        <div class="imageproduct">
                                            <img src="<?php echo $product['thumb']; ?>" />
                                        </div>
                                    </div>
                                    <div class="brand">
                                        <a href="http://localhost/wp_kuassa/product/product_detail/" >
                                            <div class="brand-box">
                                                    <img src="<?php echo $row['thumb']; ?>" alt="brand-img">
                                            </div>
                                            <div class="note">
                                                AMPLIFIKATION VERMILION
                                            </div>
                                        </a>
                                    </div>
                                    </a>
                                </div>
                    
                                <div class="list-product">
                                    <div class="box-preview">
                                        <!--  button panel float -->
                                        <div class="button-panel">
                                            <a href="http://localhost/wp_kuassa/product/product_detail/"><input id="buy" type="button" class="small" value="BUY" /></a>
                                            <a href="http://localhost/wp_kuassa/product/product_detail/"><input id="try" type="button" class="small" value="TRY" /> </a>
                                        </div>
                                        <div class="imageproduct">
                                            <img src="<?php echo $product['thumb']; ?>" />
                                        </div>
                                    </div>
                                    <div class="brand">
                                        <a href="http://localhost/wp_kuassa/product/product_detail/" >
                                            <div class="brand-box">
                                                    <img src="<?php echo $row['thumb']; ?>" alt="brand-img">
                                            </div>
                                            <div class="note">
                                                AMPLIFIKATION ONE
                                            </div>
                                        </a>
                                    </div>
                                    </a>
                                </div>
                                <div class="list-product">
                                    <div class="box-preview">
                                        <!--  button panel float -->
                                        <div class="button-panel">
                                            <a href="http://localhost/wp_kuassa/product/product_detail/"><input id="buy" type="button" class="small" value="Free" /></a>
                                            <a href="http://localhost/wp_kuassa/product/product_detail/"><input id="try" type="button" class="small" value="TRY" /> </a>
                                        </div>
                                        <div class="imageproduct">
                                            <img src="<?php echo $product['thumb']; ?>" />
                                        </div>
                                    </div>
                                    <div class="brand">
                                        <a href="http://localhost/wp_kuassa/product/product_detail/" >
                                            <div class="brand-box">
                                                    <img src="<?php echo $row['thumb']; ?>" alt="brand-img">
                                            </div>
                                            <div class="note">
                                                AMPLIFIKATION VERMILION
                                            </div>
                                        </a>
                                    </div>
                                    </a>
                                </div>
                    
                                <div class="list-product">
                                    <div class="box-preview">
                                        <!--  button panel float -->
                                        <div class="button-panel">
                                            <a href="http://localhost/wp_kuassa/product/product_detail/"><input id="buy" type="button" class="small" value="BUY" /></a>
                                            <a href="http://localhost/wp_kuassa/product/product_detail/"><input id="try" type="button" class="small" value="TRY" /> </a>
                                        </div>
                                        <div class="imageproduct">
                                            <img src="<?php echo $product['thumb']; ?>" />
                                        </div>
                                    </div>
                                    <div class="brand">
                                        <a href="http://localhost/wp_kuassa/product/product_detail/" >
                                            <div class="brand-box">
                                                    <img src="<?php echo $row['thumb']; ?>" alt="brand-img">
                                            </div>
                                            <div class="note">
                                                AMPLIFIKATION ONE
                                            </div>
                                        </a>
                                    </div>
                                    </a>
                                </div>
                                <div class="list-product">
                                    <div class="box-preview">
                                        <!--  button panel float -->
                                        <div class="button-panel">
                                            <a href="http://localhost/wp_kuassa/product/product_detail/"><input id="buy" type="button" class="small" value="Free" /></a>
                                            <a href="http://localhost/wp_kuassa/product/product_detail/"><input id="try" type="button" class="small" value="TRY" /> </a>
                                        </div>
                                        <div class="imageproduct">
                                            <img src="<?php echo $product['thumb']; ?>" />
                                        </div>
                                    </div>
                                    <div class="brand">
                                        <a href="http://localhost/wp_kuassa/product/product_detail/" >
                                            <div class="brand-box">
                                                    <img src="<?php echo $row['thumb']; ?>" alt="brand-img">
                                            </div>
                                            <div class="note">
                                                AMPLIFIKATION VERMILION
                                            </div>
                                        </a>
                                    </div>
                                    </a>
                                </div>
                    
                                <div class="list-product">
                                    <div class="box-preview">
                                        <!--  button panel float -->
                                        <div class="button-panel">
                                            <a href="http://localhost/wp_kuassa/product/product_detail/"><input id="buy" type="button" class="small" value="BUY" /></a>
                                            <a href="http://localhost/wp_kuassa/product/product_detail/"><input id="try" type="button" class="small" value="TRY" /> </a>
                                        </div>
                                        <div class="imageproduct">
                                            <img src="<?php echo $product['thumb']; ?>" />
                                        </div>
                                    </div>
                                    <div class="brand">
                                        <a href="http://localhost/wp_kuassa/product/product_detail/" >
                                            <div class="brand-box">
                                                    <img src="<?php echo $row['thumb']; ?>" alt="brand-img">
                                            </div>
                                            <div class="note">
                                                AMPLIFIKATION ONE
                                            </div>
                                        </a>
                                    </div>
                                    </a>
                                </div>
                                <!-- cek data -->

                                <div class="product-info" id="product-info-<?php echo $list; ?>" style="display:none;">
                                <div class="right">
                                <div class="cart">
                                    <div>
                                      <input type="text" name="quantity" size="2" value="<?php echo $minimum; ?>" />
                                      <input type="hidden" name="product_id" size="2" value="<?php echo $product['product_id']; ?>" />                    
                                    </div>
                                  </div>
                                </div>
                                <div class="clear"></div>
                                </div>
                </div>
            </div>
            <?php endif; ?>
            <!-- end of halaman product list -->
            
            <!-- halaman product detail -->
            <?php if(is_page('product_detail')): ?>
                <?php
                    wp_enqueue_style('my-carousel', get_stylesheet_directory_uri().'/css/my-carousel.css', false, true);
                ?>

                <?php
                    // include flexslider
                    wp_enqueue_script('myCarousel-min', get_template_directory_uri() . '/js/myCarousel-min.js', array('jquery'), false , true);
		    wp_enqueue_script('swiffy', "https://www.gstatic.com/swiffy/v5.0/runtime.js", array('jquery'), false, true);

                ?>
		<script>
		$(function () {
			$("#my-carousel").myCarousel({
				numberVisibleItems:   '4',
				animationSpeed: 700,
				carouselSpeed: 500,
				automaticPlay: false,
				pauseOnHover: true,
				easing: "swing"	
			});
			
		});
		</script>
                <div class=" product_detail clearfix">
                <div class="social_share line clearfix">
                        <ul class="listing line">
                                <li class="fb list">
                                                <span class="logo"><img src="<?php echo get_template_directory_uri().'/images/icon/mini_share/mini_fb.png'; ?>"></span>
                                                <span class="iframe"><a href=""><img src="<?php echo get_template_directory_uri().'/images/icon/mini_share/mini_share.png'; ?>"></a></span>
                                                <span class="count">13</span>
                                </li>
                                <li class="twitter list">
                                                <span class="logo"><img src="<?php echo get_template_directory_uri().'/images/icon/mini_share/mini_twitter.png'; ?>"></span>
                                                <span class="iframe"><a href=""><img src="<?php echo get_template_directory_uri().'/images/icon/mini_share/mini_tweet.png'; ?>"></a></span>
                                                <span class="count">13</span>
                                </li>
                                <li class="gplus">
                                        <!-- nothing -->
                                                <span class="logo"><img src="<?php echo get_template_directory_uri().'/images/icon/mini_share/mini_gplus.png'; ?>"></span>
                                                <span class="iframe"><a href=""><img src="<?php echo get_template_directory_uri().'/images/icon/mini_share/mini_plus.png'; ?>"></a></span>
                                                <span class="count">13</span>
                                </li>
                        </ul>
                </div>
                <div class="product_title left-only">
                    <div class="black_box clearfix">
                        <h1>AMPLIFICATION VERMILION</h1>
                        <span class="prod_description">PRODUCT DESCRIPTION</span>
                        <div class="bottom_column">
                            <span class="price">$139.00</span>
                            <button class="button try ">TRY</button>
                            <button class="button buy">BUY</button>
                        </div>
                    </div>
		    <div class="clearfix"></div>
                </div>
		<div class="clearfix"></div>
                <div class="overview_wrapper clearfix">
                    <div class="compatible clearfix">
                        <p>
                            <span>compatible with :</span>
			    <img src="<?php echo get_template_directory_uri().'/images/product_detail_30.png'; ?>"/>
			    <img src="<?php echo get_template_directory_uri().'/images/product_detail_31.png'; ?>"/>
			    <img src="<?php echo get_template_directory_uri().'/images/product_detail_32.png'; ?>"/>
			    <img src="<?php echo get_template_directory_uri().'/images/product_detail_33.png'; ?>"/>
			    <img src="<?php echo get_template_directory_uri().'/images/product_detail_34.png'; ?>"/>
                        </p>
                    </div>
                    <div class="overview_detail" id="block_column">
                        <h2>Overview</h2>
                        <p>
                            Kuassa, Inc. has once again entered the world of guitar amplification software with Kuassa Amplifikation Creme, featuring ultra-precise digitally engineered head and matching cabinets with built-in overdrive section consisting three kinds of legendary overdrive pedals built right to the amp giving you a full control of harmonically-rich distortion crammed with intense dynamics.
                        </p>
                        <p>
                            Kuassa Amplifikation Creme are truly a must-have addition for all Amplifikation One fans. Distinguished by its darker, fuller, and heavier tonal character discovered on High-Gain or Metal guitar amplifiers, Kuassa Amplifikation Creme‘s three amp types and channels can give you a sonic arsenal from sparkling clean tones to searing guitar riffs, able to match the sound quality of high-end tube powered guitar amplifiers.
                        </p>
                        <h2>Requirements</h2>
                        <p></p>
                        <h2>Key Features</h2>
                        <p>Kuassa, Inc. has once again entered the world of guitar amplification software with Kuassa Amplifikation Creme, featuring ultra-precise digitally engineered head and matching cabinets with built-in overdrive section consisting three kinds of legendary overdrive pedals built right to the amp giving you a full control of harmonically-rich distortion crammed with intense dynamics.</p>
                    </div>
                    <div class="interface" id="block_column">
                        <h2>Interface </h2><span class="description_heading">hover on image for descriptions</span>
                        <div class="simulator">
                            ini bagian simulator
                        </div>
                    </div>
                    <div class="video_product" id="block_column">
		      <h2>Video </h2>
                        <div class="post_video">
                            <iframe width="560" height="315" src="http://www.youtube.com/embed/UFvCriG2wTM" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="audio_sample" id="block_column">
		      <h2>Audio Samples</h2>
                        <div class="sound_cloud post_audio">
                            <iframe width="100%" class="clearfix" scrolling="no" height="350" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fplaylists%2F543627&amp;color=951E25&amp;auto_play=false&amp;show_artwork=true"></iframe>
			    <div class="clear"></div>
                        </div>
                    </div>
                    <div class="what_the_say" id="block_column">
		      <h2>What They Say </h2>
                        <ul class="fade">
                            <li>
                                <span>Keren</span>
                                <p>- Balloteli</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                <div class="clearfix"></div>
            <!-- featured works -->
            <div class="heading">
                <h2 class="list-heading">Featured Works</h2>
            </div>
            <div class="container_12 line">
                <div class="slider">
                    <div class="slider clearfix">
                        <ul class="carousel" id="my-carousel">
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
                        <div class="clear"></div>
                    </div>
                </div>
            </div> 
            <?php endif; ?>
            <!-- end of halaman product detail -->
            
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
							<a href="http://localhost/wp_kuassa/downloads/download-detail/">
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
							<a href="http://localhost/wp_kuassa/downloads/download-detail/">
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
							<a href="http://localhost/wp_kuassa/downloads/download-detail/">
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
							<a href="http://localhost/wp_kuassa/downloads/download-detail/">
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
							<a href="http://localhost/wp_kuassa/downloads/download-detail/">
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
							<a href="http://localhost/wp_kuassa/downloads/download-detail/">
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
							<a href="http://localhost/wp_kuassa/downloads/download-detail/">
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
							<a href="http://localhost/wp_kuassa/downloads/download-detail/">
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
							<a href="http://localhost/wp_kuassa/downloads/download-detail/">
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
							<a href="http://localhost/wp_kuassa/downloads/download-detail/">
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
							<a href="http://localhost/wp_kuassa/downloads/download-detail/">
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
							<a href="http://localhost/wp_kuassa/downloads/download-detail/">
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
							<a href="http://localhost/wp_kuassa/downloads/download-detail/">
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
							<a href="http://localhost/wp_kuassa/downloads/download-detail/">
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
							<a href="http://localhost/wp_kuassa/downloads/download-detail/">
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
							<a href="http://localhost/wp_kuassa/downloads/download-detail/">
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
	    <!-- halaman download detail -->
            <?php if (is_page('download-detail')) : ?>
                <h1>Downloads \ Amplifikation One</h1>
                <div class="download_detail line">
                                <div class="left_content line ">
                                                <div class="header_img line">
                                                        <img src="<?php echo get_template_directory_uri().'/images/product_dummy.png'; ?>" alt="">
                                                </div>
                                                <div class="wrap_product">
                                                <div class="title clearfix"><h2>Amplifikation One</h2></div>
                                                <div class="link_layer">
                                                        <button>Go to Product Page</button>
                                                        <div class="iframe"><img src="<?php echo get_template_directory_uri().'/images/like_13.png'; ?>" alt=""></div>
                                                </div>
                                                <div class="description_product">
                                                        <h1>System Requirements</h1>
                                                        <ul>
                                                                <li>Thank you for your interest in evaluating</li>
                                                                <li>Adobe Creative Suite 6 Design</li>
                                                                <li>Thank you for your evaluating</li>
                                                                <li>Creative Suite 6 Design</li>
                                                        </ul>
                                                        <ul>
                                                                <li>Thank you for your interest in evaluating</li>
                                                                <li>Adobe Creative Suite 6 Design</li>
                                                                <li>Thank you for your evaluating</li>
                                                                <li>Creative Suite 6 Design</li>
                                                        </ul>

                                                        <h1>Terms And Agreements</h1>
                                                        <p>Thank you for your interest in evaluating Adobe Creative Suite 6 Design & Web Premium software. The trial versions offers almost every feature of the product for you to test-drive</p>
                                                        <p>Adobe Creative Suite 6 Design & Web Premium software is the ultimate toolkit for professional design. Deliver eye-catching digital images and craft graphics
                                                        that remain cript when scaled. Lay out high-impact print pages with exquisite typography, build HTML 5/CSS3 websiters that look great on any
                                                        screen, and design applications for tablets and smartphones.</p>
                                                </div>
                                        </div>
                                </div>
                                <div class="right_content line">
                                        <div class="grid_12 download_column line">
                                                <h2>Download Version</h2>
                                                <span class="note">By downloading the file you agree to the terms and agreements.</span>
                                        </div>
                                        <ul class="installer">
                                                <li><a href="">Windows 32 Bit Installer</a></li>
                                                <li><a href="">Mac 32 Bit Installer</a></li>
                                        </ul>
                                        <ul class="preset">
                                                <li><a href="">Default Presets<span> By Aradaz</span></a></li>
                                        </ul>
                                </div>
                <div class="clear"></div>
                </div>
                <div class="clearfix"></div>
            <?php endif; ?>
            <!-- end of halaman detail -->
	    <!-- halaman blog -->
	    <?php if(is_page('blog')) : ?>
	    <?php
		wp_enqueue_style('my-carousel', get_stylesheet_directory_uri().'/css/my-carousel.css', false, true);
	    ?>
	    
	    <?php
		// include flexslider
		wp_enqueue_script('myCarousel-min', get_template_directory_uri() . '/js/myCarousel-min.js', array('jquery'), false , true);
		
	    ?>
		<script>
		$(function () {
			$("#my-carousel").myCarousel({
				numberVisibleItems:   '4',
				animationSpeed: 700,
				carouselSpeed: 500,
				automaticPlay: false,
				pauseOnHover: true,
				easing: "swing"	
			});
			
		});
		</script>
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
							    <a href="http://localhost/wp_kuassa/2013/02/15/dummy-for-blog-page/" class="blog_content">
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
							    <a href="http://localhost/wp_kuassa/2013/02/15/dummy-for-blog-page/" class="blog_content">
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
							    <a href="http://localhost/wp_kuassa/2013/02/15/dummy-for-blog-page/" class="blog_content">
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
							    <a href="http://localhost/wp_kuassa/2013/02/15/dummy-for-blog-page/" class="blog_content">
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
							    <a href="http://localhost/wp_kuassa/2013/02/15/dummy-for-blog-page/" class="blog_content">
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
			    <div class="slider clearfix">
					<ul class="carousel" id="my-carousel">
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
					<div class="clear"></div>
			</div>
		    </div>
	    </div>
	    <?php endif; ?>
	    <!-- end of halaman blog -->      
        </div><!-- end of #content -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>

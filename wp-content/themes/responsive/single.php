<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Single Posts Template
 *
 *
 * @file           single.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/single.php
 * @link           http://codex.wordpress.org/Theme_Development#Single_Post_.28single.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>
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
	<div class="container_blog clearfix line">
			<div class="left_column line">
				<div class="grid_6 left_nav clearfix line">
					<a href="" class="navlist">Newer Article </a>
				</div>
				<div class="grid_6 right_nav clearfix line ">
					<a href="" class="navlist">Older Article </a>
				</div>
				<div class="article_view clearfix  line">
					<div class="article_header clearfix ">
						<div class="image_header clearfix line">
							<img src="<?php echo get_template_directory_uri().'/images/articles_dummy.jpg'; ?>" alt="dummmy">
							<div class="ic_caption line">
								<span class="category">Interviews</span>
								<span class="comments">1 Comments</span>
								<h1><span class="artist">Dimitar Berbatov,</span> Creative Mind Behind Critically Acclaimed
								works of proffesssor layton's musical engineering</h1>
							</div>
						</div>
						<div class="content clearfix">
							<div class="top"> <!-- ini buat bagian tanggal sama twitter-->
							<div class="social_share line grid_1">
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
							<p class="sign">By <span class="author"><a href="">Dave Tech</a> on Jan 26, 2013 at 6.00pm</span>
								<span class="twitter">@teulbujur</span>
							</p>
							</div>
							<div class="full_content">
								<p>
									It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. <a href="">Various versions have evolved over the years, sometimes by accident, sometimes on purpose </a>(injected humour and the like).
								</p>
								<p>
									There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this <a href="">the first true generator on the Internet</a>. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
								</p>
									<img src="<?php echo get_template_directory_uri().'/images/article_dummy_image.png'; ?>"><br /><br />
								<p>
									Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
								</p>
								<p>
									The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
								</p>
							</div>
							<div class="comment-form clearfix line">
									<div id="respond">
									
									<div class="sign_fb">
										<h3 id="reply-title">POST A NEW COMMENT</h3><span class="button">Sign in with Facebook</span>
									</div>
									<form id="commentform" method="post" action="http://localhost/wordpress-3.5.1/wp-comments-post.php">
									    <div class="image_comment">
										<img src="<?php echo get_template_directory_uri().'/images/no_pic.gif'; ?>">
									    </div>
									    <p class="comment-form-comment">
										<textarea aria-required="true" rows="8" cols="45" name="comment" id="comment"></textarea>
									    </p>
									    <p class="form-allowed-tags">
										<p class="form-submit">
										<button type="submit" id="submit" name="submit">POST</button>
									    </p>
									</form>
								    </div>
								
								<div class="comment_viewer">
									<div class="counter_comment clearfix">13 COMMENTS</div>
									<ul class="list_commenter">
										<li>
											<div class="pic"><img src="<?php echo get_template_directory_uri().'/images/no_pic.gif'; ?>"></div>
											<div class="comment_full">
												<span class="name">Crazy Frog</span>
												<span class="time">36 minutes ago</span>
												<div class="comment_text">
													<p>If Roma plays exactly like how they played against Inter, there's no way Bologna will win this. FORZA ROMA !</p>
												</div>
											</div>
										</li>
										<li>
											<div class="pic"><img src="<?php echo get_template_directory_uri().'/images/no_pic.gif'; ?>"></div>
											<div class="comment_full">
												<span class="name">SimKuring</span>
												<span class="time">36 minutes ago</span>
												<div class="comment_text">
													<p>You'll never walk alone. Ends !!</p>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
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

<?php //get_sidebar(); ?>
<?php get_footer(); ?>

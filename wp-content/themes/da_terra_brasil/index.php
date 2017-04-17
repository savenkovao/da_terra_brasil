<?php get_header(); ?>

<main>
	<section class="last-news_dec">
		<div class="wrapper">

			<?php $posts = get_posts ("category_name=stories&orderby=date&numberposts=1"); ?> 
			<?php if ($posts) : ?>
			<?php foreach ($posts as $post) : setup_postdata ($post); ?>
					 
				<div class="last-news">
					<div class="last-news-dscr">

					<div class="last-news-dscr__hdr-cnt">
						<h2 class="last-news-txt__hdr"><?php the_title(); ?></h2>
					</div>

					<div class="last-news-dscr__txt-cnt">
						
						<?php the_excerpt(); ?>

					</div>

					<div class="last-news-dscr__btn-cnt">
						<a href="<?php the_permalink() ?>" class="last-news-dscr__btn">Learn More</a> 

					 	<div class="last-news-dscr__btn-dd">
					 		<ul>
								<li><a href="#">Item 1</a></li>
								<li><a href="#">Item 2</a></li>
								<li><a href="#">Item 3</a></li>
							</ul>
					 	</div>								 
					</div>
					</div><!-- 
				 --><div class="last-news-pic">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>

				<?php endforeach; else:	?>

					<div class="last-news-dscr__txt-cnt">
						<p>Sorry, but there is no posts yet</p>
					</div>

				<?php 
				wp_reset_postdata();
				endif; ?>
			
		</div>
	</section>

	<section>
		<div class="wrapper">
			<div class="quote quote-1">
				<blockquote class="quote__txt-cnt">

					<?php $posts = get_posts ("category_name=quotes&orderby=date&numberposts=1&offset=0"); ?> 
					<?php if ($posts) : ?>
					<?php foreach ($posts as $post) : setup_postdata ($post); ?>					 
						
						<?php the_content(); ?>

					<?php endforeach; else:	?>

						<p><?php _e('“We believe that every human being deserves love, respect, and a chance to live a dignified life.”'); ?></p>

					<?php 
					wp_reset_postdata();
					endif; ?>

			</blockquote>
			</div>
		</div>
	</section>

	<section>
		<div class="wrapper">

			<div id="about-us" class="team">

					<?php $posts = get_posts ("category_name=about-us&orderby=date&numberposts=1"); ?> 
					<?php if ($posts) : ?>
					<?php foreach ($posts as $post) : setup_postdata ($post); ?> 
							
						<div class="about-us">
							<h2 class="about-us__hdr"><?php the_title(); ?></h2>
							<div class="about-us__txt"><?php the_content(); ?></div>

							<a href="<?php the_permalink() ?>	" class="team__read-more">Read More</a>
						</div>

					<?php endforeach; else:	?>

						<h2 class="about-us__hdr">About us</h2>
						<p><?php _e('The Da Terra Brasil Foundation is a nonprofit organization dedicated to supporting and improving the lives of poor and disabled in Brazil.'); ?></p>

					<?php 
					wp_reset_postdata();
					endif; ?>
				
				
				<div class="our-team">

					<?php $posts = get_posts ("category_name=our-team&orderby=date&numberposts=1"); ?> 
					<?php if ($posts) : ?>
					<?php foreach ($posts as $post) : setup_postdata ($post); ?> 
							
							<h2 class="our-team__hdr"><?php the_title(); ?></h2>
							
							<div class="our-team__img-cnt">
								<figure>
									<?php the_post_thumbnail(); ?>
									<figcaption>
										<h3 class="our-team__capt">Maria Ines Moraes, CEO</h3>
									</figcaption>
								</figure>
							</div><!-- 
						
							 --><div class="our-team__txt-cnt"><?php the_content(); ?></div>

							<a href="<?php the_permalink() ?>	" class="team__read-more">Read More</a>
						</div>

					<?php endforeach; else:	?>

						<h2 class="our-team__hdr">Our Team</h2>
						<p><?php _e('With motherhood, Maria discovered a genuine love for young children’s learning and development, as well as deep caring for those less fortunate. After receiving a master’s degree in Early Childhood Education from Bank Street Graduate School, Maria taught preschool children for many years. Maria is now dedicated to the growth of The Da Terra Brasil Foundation and the enriching the lives of the people it serves.'); ?></p>

					<?php 
					wp_reset_postdata();
					endif; ?>

				</div>

			</div>
			


		</div>
	</section>

	<section>
		<div class="wrapper">
			<div class="quote quote-2">
				<blockquote class="quote__txt-cnt">

					<?php $posts = get_posts ("category_name=quotes&orderby=date&numberposts=1&offset=1"); ?> 
					<?php if ($posts) : ?>
					<?php foreach ($posts as $post) : setup_postdata ($post); ?>					 
						
						<?php the_content(); ?>

					<?php endforeach; else:	?>

						<p><?php _e('“We believe that every human being deserves love, respect, and a chance to live a dignified life.”'); ?></p>

					<?php 
					wp_reset_postdata();
					endif; ?>

				</blockquote>
			</div>
		</div>
	</section>

	<section>
		<div class="wrapper">
			<div id="our-work" class="our-work">
				<div class="our-work-block our-work-block_yellow">

					<?php $posts = get_posts ("category_name=our-work&orderby=date&numberposts=1&offset=0"); ?> 
					<?php if ($posts) : ?>
					<?php foreach ($posts as $post) : setup_postdata ($post); ?> 
						
						<h2 class="our-work-block__hdr"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></h2>
						<h3 class="our-block__title"><?php the_title(); ?></h3>
						<div class="our-block__txt"><?php the_excerpt(); ?></div>

						<div class="our-block__btn-cnt">
							<a href="<?php the_permalink(); ?>" class="our-block__btn">Learn More</a> 

						 	<div class="our-block__btn-dd">
						 		<ul>
									<li><a href="#">Item 1</a></li>
									<li><a href="#">Item 2</a></li>
									<li><a href="#">Item 3</a></li>
								</ul>
						 	</div>

						</div>


					<?php endforeach; else:	?>
						<h2 class="our-work-block__hdr">Our Work</h2>
						<div class="our-block__txt">Sorry, but there is no posts yet</div>

					<?php 
					wp_reset_postdata();
					endif; ?>

				

				</div><!-- 
				 --><div class="our-work-block our-work-block_green">
				
					<?php $posts = get_posts ("category_name=our-work&orderby=date&numberposts=1&offset=1"); ?> 
					<?php if ($posts) : ?>
					<?php foreach ($posts as $post) : setup_postdata ($post); ?> 
						
						<h2 class="our-work-block__hdr"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></h2>
						<h3 class="our-block__title"><?php the_title(); ?></h3>
						<div class="our-block__txt"><?php the_excerpt(); ?></div>

						<div class="our-block__btn-cnt">
							<a href="<?php the_permalink(); ?>" class="our-block__btn">Learn More</a> 

						 	<div class="our-block__btn-dd">
						 		<ul>
									<li><a href="#">Item 1</a></li>
									<li><a href="#">Item 2</a></li>
									<li><a href="#">Item 3</a></li>
								</ul>
						 	</div>

						</div>

					<?php endforeach; else:	?>
						<h2 class="our-work-block__hdr">Our Work</h2>
						<div class="our-block__txt">Sorry, but there is no posts yet</div>

					<?php 
					wp_reset_postdata();
					endif; ?>

			 </div>
			</div>
		</div>
	</section>

	<section>
		<div class="wrapper">
			<div class="quote quote-3">
				<blockquote class="quote__txt-cnt">

					<?php $posts = get_posts ("category_name=quotes&orderby=date&numberposts=1&offset=2"); ?> 
					<?php if ($posts) : ?>
					<?php foreach ($posts as $post) : setup_postdata ($post); ?>					 
						
						<?php the_content(); ?>

					<?php endforeach; else:	?>

						<p><?php _e('“We believe that every human being deserves love, respect, and a chance to live a dignified life.”'); ?></p>

					<?php 
					wp_reset_postdata();
					endif; ?>

				</blockquote>
			</div>
		</div>
	</section>

	<section>
		<div class="wrapper">
			<div id="stories" class="stories">
				<h2 class="stories__hdr">Stories</h2>

				<div id="stories-slider" class="stories-slider clearfix">
					<div id="stories-slider__inner" class="stories-slider__inner">

					<?php $posts = get_posts ("category_name=stories&orderby=date&numberposts=10"); ?> 
					<?php if ($posts) : ?>
					<?php foreach ($posts as $post) : setup_postdata ($post); ?>					 
				
						<div class="stories-slider-item">
							<h3 class="storeies-slider-item__hdr"><?php the_title(); ?></h3>
					
							<div class="storeies-slider-item__cont clearfix">
					
								<div class="storeies-slider-item__img-cnt">									
									<?php the_post_thumbnail(); ?>
								</div>
					
								<div class="storeies-slider-item__txt">
									<?php the_excerpt(); ?>
								</div>
							</div>
					
							<div class="stories-slider__btn-cnt">
								<a href="<?php the_permalink() ?>" class="stories-slider__btn">Learn More</a> 		
							 	<div class="stories-slider__btn-dd">
							 		<ul>
										<li><a href="#">Item 1</a></li>
										<li><a href="#">Item 2</a></li>
										<li><a href="#">Item 3</a></li>
									</ul>
							 	</div>
							</div>							
						</div>

					<?php endforeach; else:	?>

						<p>Sorry, but there is no posts yet</p>

					<?php 
					wp_reset_postdata();
					endif; ?>

					</div>

					<div id="stories-slider__arr-l" data-direct='left' class="stories-slider__arr stories-slider__arr-l"></div>
					<div id="stories-slider__arr-r" data-direct='right' class="stories-slider__arr stories-slider__arr-r"></div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="wrapper">
			<div class="quote quote-4">
				<blockquote class="quote__txt-cnt">

					<?php $posts = get_posts ("category_name=quotes&orderby=date&numberposts=1&offset=3"); ?> 
					<?php if ($posts) : ?>
					<?php foreach ($posts as $post) : setup_postdata ($post); ?>					 
						
						<?php the_content(); ?>

					<?php endforeach; else:	?>

						<p><?php _e('“We believe that every human being deserves love, respect, and a chance to live a dignified life.”'); ?></p>

					<?php 
					wp_reset_postdata();
					endif; ?>

				</blockquote>
			</div>
		</div>
	</section>

	<section>
		<div id="ways" class="ways">
			<div class="wrapper">
			
				<h1 class="ways-hdr">Ways to help</h1>

				<div class="ways-block clearfix">

					<?php $posts = get_posts ("category_name=ways&orderby=date&numberposts=6"); ?> 
					<?php if ($posts) : ?>
					<?php foreach ($posts as $post) : setup_postdata ($post); ?>					 
						<div class="ways-block__item">
							<a href="#">
								<?php the_post_thumbnail(); ?>
								<div class="ways-block__txt-cnt">
									<div class="ways-block__txt"><?php the_title(); ?></div>
								</div>
							</a>
						</div>
						

					<?php endforeach; else:	?>

						<div class="ways-block__item">
							<a href="#">
								<img class="ways-block__img" src="<?php echo esc_url( get_template_directory_uri()) ?>/src/img/cnt/ways/item-2.jpg" alt="photo-2">
								<div class="ways-block__txt-cnt">
									<p class="ways-block__txt">Become a Volunteer</p>
								</div>
							</a>
						</div>

					<?php 
					wp_reset_postdata();
					endif; ?>
					
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="wrapper">
			<div class="quote quote-5">
				<blockquote class="quote__txt-cnt">

					<?php $posts = get_posts ("category_name=quotes&orderby=date&numberposts=1&offset=4"); ?> 
					<?php if ($posts) : ?>
					<?php foreach ($posts as $post) : setup_postdata ($post); ?>					 
						
						<?php the_content(); ?>

					<?php endforeach; else:	?>

						<p><?php _e('“We believe that every human being deserves love, respect, and a chance to live a dignified life.”'); ?></p>

					<?php 
					wp_reset_postdata();
					endif; ?>

				</blockquote>
			</div>
		</div>
	</section>

	<section>
		<div id="#news" class="news">
			<div class="wrapper">

				<div class="news__cnt">
					<h1 class="news-hdr">News</h1>
					<a class="news-lk" href="#">Show all news</a>
					
					<div class="news-block clearfix">

						<?php $posts = get_posts ("category_name=news&orderby=date&numberposts=2"); ?> 
						<?php if ($posts) : ?>
						<?php foreach ($posts as $post) : setup_postdata ($post); ?>					 
							
							<div class="news-item">							
								<div class="news-item__cnt">
									<a class="news-item__date" href="<?php the_permalink(); ?>"> <?php the_time('M j'); ?> </a>															
									
									<div class="news-item__cont">
										<h2 class="news-item__hdr"><?php the_title(); ?></h2>

										<div class="news-item__txt"><?php the_excerpt(); ?></div>
																	 	
										<div class="news-item__btn-cnt">
											<a href="<?php the_permalink(); ?>" class="news-item__btn">Learn More</a> 	
										 	<div class="news-item__btn-dd">
										 		<ul>
													<li><a href="#">Item 1</a></li>
													<li><a href="#">Item 2</a></li>
													<li><a href="#">Item 3</a></li>
												</ul>
										 	</div>
										</div>

									</div>
								</div>							
							</div>

						<?php endforeach; else:	?>

							<div class="news-item">							
								<div class="news-item__cnt">
									<a class="news-item__date" href="#"> <?php echo current_time('M j'); ?> </a>	
									<div class="news-item__cont">
										<div class="news-item__txt">
											<p>Sorry, but there is no posts yet</p>
										</div>
									</div>
								</div>							
							</div>

						<?php 
						wp_reset_postdata();
						endif; ?>

					</div>
				</div>

			</div>
		</div>
	</section>


	<section>
		<div class="wrapper">
			<div class="quote quote-6">
				<blockquote class="quote__txt-cnt">

					<?php $posts = get_posts ("category_name=quotes&orderby=date&numberposts=1&offset=5"); ?> 
					<?php if ($posts) : ?>
					<?php foreach ($posts as $post) : setup_postdata ($post); ?>					 
						
						<?php the_content(); ?>

					<?php endforeach; else:	?>

						<p><?php _e('“We believe that every human being deserves love, respect, and a chance to live a dignified life.”'); ?></p>

					<?php 
					wp_reset_postdata();
					endif; ?>

				</blockquote>
			</div>
		</div>
	</section>

	<aside>
		<a href="#">
			<div class="banner">
			</div>
		</a>
	</aside>

	<section>
		<div class="wrapper">
			<div id="contact" class="contact">

				<div class="contact-hdr__cnt">
					<h1 class="contact-hdr__hdr">Contact Us</h1>
					<p class="contact-hdr__txt-1">We welcome your questions and comments!</p>
					<p class="contact-hdr__txt-2">You may contact Da Terra Brasil Foundation at <a href="mailto:info@daterrabrasil.org">info@daterrabrasil.org</a> or submit a comment:</p>
				</div>

				<div class="contact-form">

					<?php $posts = get_posts ("category_name=contact&orderby=date&numberposts=1"); ?> 
					<?php if ($posts) : ?>
					<?php foreach ($posts as $post) : setup_postdata ($post); ?>					 
						
						<?php the_content(); ?>

					<?php endforeach; else:	?>

					<?php 
					wp_reset_postdata();
					endif; ?>		

				</div>

				<adress>
					<div class="contact-adr">
						<h2 class="contact-adr__hdr">Adress</h2>
						<p class="contact-adr__txt-1">New York</p>
						<p class="contact-adr__txt-2">255 E 74ths St # 12 A / corner of 2nd</p>
					</div>
				</adress>
			</div>
		</div>
	</section>

	<?php get_sidebar(); ?>

	<div id="map" class="map"></div>
	
</main>		
<?php get_footer(); ?>

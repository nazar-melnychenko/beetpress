<?php get_header(); ?>

<div class="hero-wrap js-fullheight"
     style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg_1.jpg);"
     data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
		     data-scrollax-parent="true">
			<div class="col-md-12 ftco-animate">
				<h2 class="subheading"><?php the_field('subtitle', 'options'); ?></h2>
				<h1 class="mb-4 mb-md-0"><?php the_field('title', 'options'); ?></h1>
				<div class="row">
					<div class="col-md-7">
						<div class="text">
							<p><?php the_field('description', 'options'); ?></p>
							<div class="mouse">
								<a href="#" class="mouse-icon">
									<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				 <?php if (have_posts()):
				while (have_posts()): the_post(); ?>

					<div class="case">
						<div class="row">
							<div class="col-md-6 col-lg-6 col-xl-8 d-flex">
								<a href="<?php the_permalink(); ?>"
								   class="img w-100 mb-3 mb-md-0"><?php the_post_thumbnail('large'); ?></a>
							</div>
							<div class="col-md-6 col-lg-6 col-xl-4 d-flex">
								<div class="text w-100 pl-md-3">
									<span class="subheading"><?php the_category(); ?></span>
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<ul class="media-social list-unstyled">
										<li class="ftco-animate"><a href="https://twitter.com/home?status=<?php the_permalink(); ?>"
										                            target="_blank"><span class="icon-twitter"></span></a></li>
										<li class="ftco-animate"><a
															href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"
															target="_blank"><span class="icon-facebook"></span></a></li>
										<li class="ftco-animate"><a
															href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>"
															target="_blank"><span class="icon-instagram"></span></a></li>
									</ul>
									<div class="meta">
										<p class="mb-0"><?php echo get_the_date(); ?> | <?php time_to_read() ?> min read</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php else: ?>
					 Зиписів немає!
			<?php endif; ?>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col text-center">
				<div class="block-27">
			  <?php the_posts_pagination([
				  'end_size' => 1,
				  'mid_size' => 1,
				  'prev_text' => '<',
				  'next_text' => '>',
				  'screen_reader_text' => ' '
			  ]); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

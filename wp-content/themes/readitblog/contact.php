<?php
/*Template Name: Contact Template*/
get_header();
?>

<div class="hero-wrap js-fullheight" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/bg_1.jpg);"
     data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-12 ftco-animate text-center">
				<h1 class="mb-4 mb-md-0"><?php wp_title(null); ?></h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo home_url();?>">Home <i class="ion-ios-arrow-forward"></i></a></span>
					<span>Contact <i class="ion-ios-arrow-forward"></i></span>
				</p>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section contact-section">
	<div class="container">
		<div class="row d-flex mb-5 contact-info">
			<div class="col-md-12 mb-4">
				<h2 class="h3"><?php the_field('contacts_title', 'options');?></h2>
			</div>
			<div class="w-100"></div>
			<div class="col-md-3">
				<p><span>Address:</span><?php the_field('contacts_address', 'options');?></p>
			</div>
			<div class="col-md-3">
				<p><span>Phone:</span> <a href="tel://<?php the_field('contacts_phone', 'options');?>"><?php the_field('contacts_phone', 'options');?></a></p>
			</div>
			<div class="col-md-3">
				<p><span>Email:</span> <a href="mailto:<?php the_field('contacts_email', 'options');?>"><?php the_field('contacts_email', 'options');?></a></p>
			</div>
			<div class="col-md-3">
				<p><span>Website</span> <a href="<?php the_field('contacts_website', 'options');?>" target="_blank"><?php the_field('contacts_website', 'options');?></a></p>
			</div>
		</div>
		<div class="row block-9 no-gutters">
			<div class="col-lg-6 order-md-last d-flex">
			<?php the_post(); ?>
				<div class="bg-light p-4 p-md-5 contact-form">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="col-lg-6 d-flex">
				<div id="map" class="bg-white"><?php the_field('contacts_map', 'options');?></div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

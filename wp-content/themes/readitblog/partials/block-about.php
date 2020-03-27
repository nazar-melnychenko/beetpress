<div class="col-md-6 d-flex">
	<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end"
	     style="background-image:url(<?php the_field( 'about_img' ); ?>)">
		<a href="https://vimeo.com/45830194"
		   class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
			<span class="icon-play"></span>
		</a>
	</div>
</div>
<div class="col-md-6 pl-md-5 py-md-5">
	<div class="row justify-content-start pt-3 pb-3">
		<div class="col-md-12 heading-section ftco-animate">
			<span class="subheading"><?php the_field( 'about_small_discription' ); ?></span>
			<h2 class="mb-4"><?php the_field( 'about_title' ); ?></h2>
			<p><?php the_field( 'about_description' ); ?></p>
			<div class="tabulation-2 mt-4">
				<ul class="nav nav-pills nav-fill d-md-flex d-block">
					<li class="nav-item mb-md-0 mb-2">
						<a class="nav-link active py-2" data-toggle="tab" href="#home1"><?php the_field( 'about_tab_1' ); ?></a>
					</li>
					<li class="nav-item px-lg-2 mb-md-0 mb-2">
						<a class="nav-link py-2" data-toggle="tab" href="#home2"><?php the_field( 'about_tab_2' ); ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab"
						   href="#home3"><?php the_field( 'about_tab_3' ); ?></a>
					</li>
				</ul>
				<div class="tab-content bg-light rounded mt-2">
					<div class="tab-pane container p-0 active" id="home1">
						<p><?php the_field( 'about_text_1' ); ?></p>
					</div>
					<div class="tab-pane container p-0 fade" id="home2">
						<p><?php the_field( 'about_text_2' ); ?></p>
					</div>
					<div class="tab-pane container p-0 fade" id="home3">
						<p><?php the_field( 'about_text_3' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

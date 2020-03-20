
<?php get_header();?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate pb-5 text-center">
				<h1 class="mb-3 bread">Blog Single</h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-degree-bg">
	<div class="container">
		<div class="row">
			<?php the_post(); ?>
				<div class="col-lg-8 ftco-animate">
					<p class="mb-5">
					<div class="img-fluid"><?php the_post_thumbnail( 'large' ); ?></div>
					</p>
					<h2 class="mb-3"><?php the_title(); ?></h2>
					<div><?php the_content(); ?></div>
					<div class="tag-widget post-tag-container mb-5 mt-5">
						<div class="tagcloud">
							<?php the_tags('',null, null);?>
						</div>
					</div>

					<div class="pt-5 mt-5">
						<h3 class="mb-5"><?php echo get_comments_number();?> Comments</h3>
						<ul class="comment-list">
							<li class="comment">
								<div class="vcard bio">
									<img src="images/person_1.jpg" alt="Image placeholder">
								</div>
								<div class="comment-body">
									<h3>John Doe</h3>
									<div class="meta mb-3">November 13, 2019 at 2:21pm</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
									<p><a href="#" class="reply">Reply</a></p>
								</div>
							</li>

							<li class="comment">
								<div class="vcard bio">
									<img src="images/person_1.jpg" alt="Image placeholder">
								</div>
								<div class="comment-body">
									<h3>John Doe</h3>
									<div class="meta mb-3">November 13, 2019 at 2:21pm</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
									<p><a href="#" class="reply">Reply</a></p>
								</div>

								<ul class="children">
									<li class="comment">
										<div class="vcard bio">
											<img src="images/person_1.jpg" alt="Image placeholder">
										</div>
										<div class="comment-body">
											<h3>John Doe</h3>
											<div class="meta mb-3">November 13, 2019 at 2:21pm</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
											<p><a href="#" class="reply">Reply</a></p>
										</div>


										<ul class="children">
											<li class="comment">
												<div class="vcard bio">
													<img src="images/person_1.jpg" alt="Image placeholder">
												</div>
												<div class="comment-body">
													<h3>John Doe</h3>
													<div class="meta mb-3">November 13, 2019 at 2:21pm</div>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
													<p><a href="#" class="reply">Reply</a></p>
												</div>

												<ul class="children">
													<li class="comment">
														<div class="vcard bio">
															<img src="images/person_1.jpg" alt="Image placeholder">
														</div>
														<div class="comment-body">
															<h3>John Doe</h3>
															<div class="meta mb-3">November 13, 2019 at 2:21pm</div>
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
															<p><a href="#" class="reply">Reply</a></p>
														</div>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>

							<li class="comment">
								<div class="vcard bio">
									<img src="images/person_1.jpg" alt="Image placeholder">
								</div>
								<div class="comment-body">
									<h3>John Doe</h3>
									<div class="meta mb-3">November 13, 2019 at 2:21pm</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
									<p><a href="#" class="reply">Reply</a></p>
								</div>
							</li>
						</ul>
						<!-- END comment-list -->

						<div class="comment-form-wrap pt-5">
							<h3 class="mb-5">Leave a comment</h3>
							<form action="#" class="p-5 bg-light">
								<div class="form-group">
									<label for="name">Name *</label>
									<input type="text" class="form-control" id="name">
								</div>
								<div class="form-group">
									<label for="email">Email *</label>
									<input type="email" class="form-control" id="email">
								</div>
								<div class="form-group">
									<label for="website">Website</label>
									<input type="url" class="form-control" id="website">
								</div>

								<div class="form-group">
									<label for="message">Message</label>
									<textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
								</div>

							</form>
						</div>
					</div>

				</div> <!-- .col-md-8 -->
				<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
					<div class="sidebar-box">
						<?php dynamic_sidebar('blog_single');?>
					</div>
		</div>
	</div>
</section>

<?php get_footer();?>

<?php
get_header();
the_post();
$background_image = get_field('blog_post_single_image', 'option');
?>

<main id="primary" class="site-main">

	<!--Page Title-->
	<section class="page-title" style="background-image:url(<?php echo $background_image['url'] ?>);">
		<div class="auto-container">
			<div class="inner-container clearfix">
				<div class="title-box">
					<h1><?php the_title() ?></h1>

				</div>
				<ul class="bread-crumb clearfix">
					<li><a href="index-2.html">Home</a></li>
					<li>Blog Detail</li>
				</ul>
			</div>
		</div>
	</section>
	<!--End Page Title-->

	<!-- Sidebar Page Container -->
	<?php

	$image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');

	?>
	<div class="sidebar-page-container">
		<div class="auto-container">
			<div class="row clearfix">
				<!--Content Side-->
				<div class="content-side col-lg-8 col-md-12 col-sm-12">
					<div class="blog-detail">
						<!-- News Block -->
						<div class="news-block-two">
							<div class="inner-box">
								<div class="image-box">
									<figure class="image"><img src="<?php echo $image[0] ?>" alt=""></figure>
								</div>
								<div class="caption-box">
									<div class="inner">
										<h3><?php the_title() ?></h3>
										<ul class="info">
											<li><?php echo get_the_date() ?>,</li>
											<li><a href="blog-detail-2.html"><?php echo get_the_author() ?>,</a></li>
											<li><a href="blog-detail-2.html"><?php echo get_comments_number() ?>
													Commets</a></li>
										</ul>
										<p><?php the_content() ?></p>
									</div>
								</div>
							</div>
						</div>


						<!--Comment Form-->
						<div class="comment-form">
							
							<form method="post" action="#">
								<?php comments_template()?>
							</form>
						</div>
					</div>
				</div>

				<!--Sidebar Side-->
				<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar default-sidebar">

						<!--search box-->
						<div class="sidebar-widget search-box">
							<form method="post" action="#">
								<div class="form-group">
									<input type="search" name="search-field" value="" placeholder="Search....."
										required="">
									<button type="submit"><span class="icon fa fa-search"></span></button>
								</div>
							</form>
						</div>

						<!-- Categories -->
						<?php

						$category_post = get_terms(
							array(
								'taxonomy' => 'category',
								'hide_empty' => false,
							)
						);

						?>
						<div class="sidebar-widget categories">
							<div class="sidebar-title">
								<h3>Catagories</h3>
							</div>
							<ul class="cat-list">
								<?php
								if (!empty($category_post)) {
									foreach ($category_post as $post) {
										?>
										<li><a href="#"><?php echo $post->name ?></a></li>
									<?php }
								} ?>
							</ul>
						</div>

						<!-- Latest News -->
						<div class="sidebar-widget latest-news">
							<div class="sidebar-title">
								<h3>Recent Post</h3>
							</div>
							<div class="widget-content">
								<?php

								$recent_posts = get_posts(array(
									'post_type' => 'post',
									'posts_per_page' => 3,
								));

								if (!empty($recent_posts)) {
									foreach ($recent_posts as $recent_post) {

										$image = wp_get_attachment_image_src(get_post_thumbnail_id($recent_post->ID), 'full');
										?>
										<article class="post">
											<div class="post-thumb"><a href="blog-detail.html"><img src="<?php echo $image[0] ?>"
														alt=""></a></div>
											<h3><a href="blog-detail.html"><?php echo $recent_post->post_title ?></a></h3>
											<div class="post-info">by <?php echo get_the_author() ?></div>
										</article>
									<?php }
								} ?>

							</div>
						</div>

						<!-- Tags -->
						<div class="sidebar-widget tags">
							<div class="sidebar-title">
								<h3>Keywords</h3>
							</div>
							<ul class="tag-list clearfix">
								<?php

								$tags_args = get_tags(array(
									'hide_empty' => false,
								));

								if (!empty($tags_args)) {
									foreach ($tags_args as $tag) {
										?>
										<li><a href="#"><?php echo $tag->name ?></a></li>
									<?php }
								}
								?>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
	<!-- End Sidebar Container -->

	<?php
	get_footer();

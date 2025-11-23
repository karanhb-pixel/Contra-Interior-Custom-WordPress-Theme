<?php

get_header();

$background_image = get_field('single_project_image', 'option');
?>


<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo $background_image['url'] ?>);">
	<div class="auto-container">
		<div class="inner-container clearfix">
			<div class="title-box">
				<h1>Project Detail</h1>
				<span class="title">The Interior speak for themselves</span>
			</div>
			<ul class="bread-crumb clearfix">
				<li><a href="index-2.html">Home</a></li>
				<li>Project Detail</li>
			</ul>
		</div>
	</div>
</section>
<!--End Page Title-->

<!--Project Detail Section-->
<?php
$gallary_slider = get_field('gallary_slider');
// echo '<pre>';
// print_r($gallary_slider);
// echo '</pre>';
$i = 0;

?>
<section class="project-details-section">
	<div class="project-detail">
		<div class="auto-container">
			<!-- Upper Box -->
			<div class="upper-box">
				<!--Project Tabs-->
				<div class="project-tabs tabs-box clearfix">
					<!--Tab Btns-->
					<ul class="tab-btns tab-buttons clearfix">
						<?php
						foreach ($gallary_slider as $slide) {
							$i++;
							?>
							<li data-tab="#tab-<?php echo $i ?>" class="tab-btn active-btn"><img
									src="<?php echo $slide['image']['url'] ?>" alt="<?php echo $slide['image']['alt'] ?>">
							</li>
						<?php
						}
						$i = 0;
						?>
					</ul>

					<!--Tabs Container-->
					<div class="tabs-content">
						<!--Tab / Active Tab-->
						<?php
						foreach ($gallary_slider as $slide) {
							$i++;
							if($i == 1){
							?>
							<div class="tab active-tab" id="tab-<?php echo $i?>">
								<figure class="image"><a href="<?php echo $slide['image']['url']?>" class="lightbox-image"
										data-fancybox="images"><img src="<?php echo $slide['image']['url']?>" alt="<?php echo $slide['image']['alt'] ?>"></a>
								</figure>
							</div>
								<?php }else{?>
							<!--Tab-->
                            <div class="tab" id="tab-<?php echo $i?>">
                                <figure class="image"><a href="<?php echo $slide['image']['url']?>" class="lightbox-image" data-fancybox="images"><img src="<?php echo $slide['image']['url']?>" alt="<?php echo $slide['image']['alt'] ?>"></a></figure>
                            </div>
						<?php }}
						$i = 0; ?>

					</div>
				</div>
			</div>

			<!--Lower Content--><?php 
					$project_description = get_field('project_description');
					$project_details = get_field('project_details');

					?>
			<div class="lower-content">
				<div class="row clearfix">
					<!--Content Column-->
					<?php echo $project_description?>

					<!--Info Column-->
					<?php echo $project_details?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Portfolio Details-->

<?php
get_footer();

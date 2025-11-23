<?php
// Template Name: About Us Template
get_header();
$dir_path = get_template_directory_uri();

$aboutUs_Section_image = get_field('about_us_image', 'option');

?>
<!-- About Us Page -->

<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo $aboutUs_Section_image['url'] ?>);">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>About Us</h1>
                <span class="title">The Interior speak for themselves</span>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- About Section -->
<?php
$about_Section = get_field('about_section');
$about_Section_image_1 = $about_Section['image-1'] ?? $dir_path . '/assets/images/resource/image-1.jpg';
$about_Section_image_2 = $about_Section['image-2'] ?? $dir_path . '/assets/images/resource/alphabet-image.png';
$about_Section_title = $about_Section['title'] ?? '';
$about_Section_description = $about_Section['description'] ?? '';
$about_Section_button_link = $about_Section['button_link'] ?? ['url' => '#', 'title' => 'About Us', 'target' => '_self'];
$about_Section_Section_title = $about_Section['section_title'] ?? '';
$about_Section_backgroundimage = $about_Section['background_image'] ?? $dir_path . '/assets/images/background/1.jpg';

?>
<section class="about-section" style="background-image: url(<?php echo $about_Section_backgroundimage ?>);">
    <div class="auto-container">
        <div class="row no-gutters">
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-box wow fadeInLeft" data-wow-delay='1200ms'>
                        <h2><?php echo $about_Section_Section_title ?></h2>
                    </div>
                    <div class="image-box wow fadeInRight" data-wow-delay='600ms'>
                        <figure class="alphabet-img"><img src="<?php echo $about_Section_image_2 ?>" alt=""></figure>
                        <figure class="image"><img src="<?php echo $about_Section_image_1 ?>" alt=""></figure>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft">
                    <div class="content-box">
                        <div class="title">
                            <h2><?php echo $about_Section_title ?></h2>
                        </div>
                        <div class="text"><?php echo $about_Section_description ?></div>
                        <div class="link-box"><a href="<?php echo $about_Section_button_link['url'] ?>"
                                target="<?php echo $about_Section_button_link['target'] ?>"
                                class="theme-btn btn-style-one"><?php echo $about_Section_button_link['title'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Section -->

<!-- Fun Fact And Features -->
<?php
$counter_Section = get_field('counter_section');

$counter_one = $counter_Section['counter_one'] ?? [];
$counter_one_num = $counter_one['counter_number'] ?? 14;
$counter_one_text = $counter_one['counter_text'] ?? 'Years of <br>Experience';

$counter_two = $counter_Section['counter_two'] ?? [];
$counter_two_num = $counter_two['counter_number'] ?? 237;
$counter_two_text = $counter_two['counter_text'] ?? 'Project <br>Taken';

$counter_three = $counter_Section['counter_three'] ?? [];
$counter_three_num = $counter_three['counter_number'] ?? 11;
$counter_three_text = $counter_three['counter_text'] ?? 'K<br> Twitter Follower';

$counter_four = $counter_Section['counter_four'] ?? [];
$counter_four_num = $counter_four['counter_number'] ?? 12;
$counter_four_text = $counter_four['counter_text'] ?? 'Awards<br>won';


?>
<section class="fun-fact-and-features alternate"
    style="background-image: url(<?php echo $dir_path ?>/assets/images/background/3.jpg);">
    <div class="outer-box">
        <div class="auto-container">
            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row">
                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000"
                                    data-stop="<?php echo $counter_one_num ?>">0</span></div>
                            <h4 class="counter-title"><?php echo $counter_one_text ?></h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000"
                                    data-stop="<?php echo $counter_two_num ?>">0</span></div>
                            <h4 class="counter-title"><?php echo $counter_two_text ?></h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000"
                                    data-stop="<?php echo $counter_three_num ?>">0</span>K</div>
                            <h4 class="counter-title"><?php echo $counter_three_text ?></h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000"
                                    data-stop="<?php echo $counter_four_num ?>">0</span></div>
                            <h4 class="counter-title"><?php echo $counter_four_text ?></h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features -->
            <div class="features">
                <div class="row">
                    <!-- Feature Block -->
                    <?php
                    $feature_Section = get_field('feature_section');

                    foreach ($feature_Section as $section) {

                        $section_icon_class = $section['icon_class'] ?? '';
                        $section_service_title = $section['service_title'] ?? '';
                        $section_service_details = $section['service_details'] ?? '';
                        $section_button_link = $section['button_link'] ?? ['url' => '#', 'target' => '_self', 'title' => 'Read More'];
                        ?>
                        <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="icon-box"><span class="icon <?php echo $section_icon_class ?>"></span></div>
                                <h3><a href="service-detail.html"><?php echo $section_service_title ?></a></h3>
                                <div class="text"><?php echo $section_service_details ?></div>
                                <div class="link-box"><a href="<?php echo $section_button_link['url'] ?>"
                                        target="<?php echo $section_button_link['target'] ?>"><?php echo $section_button_link['title'] ?></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Fun Fact Section -->

<!-- Testimonial Section Two-->
<?php
$testimonial_Section = get_field('testimonial_section');
$testimonial_Section_section_title = $testimonial_Section['section_title'] ?? "What Client Says";
$testimonial_Section_description = $testimonial_Section['description'] ?? "Looking at its layout. The point of using very profectly is that it has a more-or-less
                    normal distribution of letters, as opposed";

$testimonial_Section_repeater = $testimonial_Section['testimonial_section_repeater'] ?? [];

?>
<section class="testimonial-section-two">
    <div class="auto-container">
        <div class="sec-title">
            <span class="float-text">Testimonial</span>
            <h2><?php echo $testimonial_Section_section_title ?></h2>
        </div>

        <div class="testimonial-carousel-two owl-carousel owl-theme">
            <!-- Testimonial block two -->
            <?php
                foreach ($testimonial_Section_repeater as $repeater) {
                    $desc = $repeater['description'] ?? '';
                    $title = $repeater['title'] ?? '';
                    $image = $repeater['image'] ?? '';
                    $position = $repeater['position'];
            ?>
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="text"><?php echo $desc ?></div>
                        <div class="info-box">
                            <div class="thumb"><img src="<?php echo $image ?>" alt=""></div>
                            <h5 class="name"><?php echo $title ?></h5>
                            <span class="date"><?php echo $position ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<!--End Testimonial Section Two-->


<!-- Process Section -->
 <?php 
    $process_Section = get_field('proven_process');
    $section_title = $process_Section['section_title'] ?? 'Proven Process';
        
 ?>
<section class="process-section" style="background-image: url(<?php echo $dir_path?>/assets/images/background/8.jpg);">
    <div class="auto-container">
        <div class="sec-title light">
            <span class="float-text">HOW WE WORK</span>
            <h2><?php echo $section_title?></h2>
        </div>
        <div class="row">
            <!-- Process Block -->
             <?php 

                $repeaters = $process_Section['repeater'] ?? [];
                foreach($repeaters as $repeater){
                    $number = $repeater['number'] ?? 00;
                    $title = $repeater['title'] ?? '';
                    $desc = $repeater['description'] ?? '';
                    $button_link = $repeater['button_link'] ?? ['url'=> '#','title'=>'Read More','target'=>'_self'];
                
             ?>
            <div class="process-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="count"><?php echo $number?></span>
                    <h4><a href="service-detail.html"><?php echo $title?></a></h4>
                    <div class="text"><?php echo $desc?>
                    </div>
                    <div class="link-box"><a href="<?php echo $button_link['url']?>" target="<?php echo $button_link['target']?>"><?php echo $button_link['title']?></a></div>
                </div>
            </div>
                <?php }?>
            
        </div>
    </div>
</section>
<!--End Process Section -->


<?php get_footer() ?>
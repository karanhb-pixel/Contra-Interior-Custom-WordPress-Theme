<?php
// Template Name: Homepage Template
get_header();
$dir_path = get_template_directory_uri();
$slider_Section = get_field('slider_section');
$about_Section = get_field('about_section');

?>

<!-- Bnner Section -->
<section class="banner-section">
    <div class="banner-carousel owl-carousel owl-theme">

        <?php foreach ($slider_Section as $slider):
            $banner_image = $slider['image'] ?? $dir_path . '/assets/images/main-slider/image-1.jpg';
            $banner_title = $slider['title'] ?? '';
            $banner_description = $slider['description'] ?? '';
            $banner_button_link = $slider['button_link'] ?? ['url' => '#', 'title' => 'Check Link', 'target' => '_self'];
            ?>
            <div class="slide-item"
                style="background-image: url(<?php echo $banner_image ?>);">
                <div class="auto-container">
                    <div class="content-box">
                        <h2><?php echo $banner_title?></h2>
                        <div class="text"><?php echo $banner_description?? '' ?></div>
                        <div class="link-box">
                            <a href="<?php echo $banner_button_link['url']?>"
                                target="<?php echo $banner_button_link['target']?>"
                                class="theme-btn btn-style-one"><?php echo $banner_button_link['title']?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php
    $phone_no = get_field('phone_number', 'option') ?? "+1111111111";
    $email = get_field('email', 'option') ?? "test@email.com";
    ?>
    <div class="bottom-box">
        <div class="auto-container clearfix">
            <ul class="contact-info">
                <li><span>Phone :</span> <?php echo $phone_no ?></li>
                <li><span>EMAIL :</span> <a href="#"><?php echo $email ?></a></li>
            </ul>
        </div>
    </div>
</section>
<!-- End Bnner Section -->

<!-- About Section -->
<?php
$about_Section_background_image = $about_Section['background_image'] ?? $dir_path . '/assets/images/background/1.jpg';
$about_Section_title = $about_Section['title'] ?? '';
$about_Section_description = $about_Section['description'] ?? '';
$about_Section_section_title = $about_Section['section_title'] ?? 'ABOUT <br> US';
$about_Section_image_1 = $about_Section['image-1'] ?? $dir_path . '/assets/images/resource/alphabet-image.png';
$about_Section_image_2 = $about_Section['image-2'] ?? $dir_path . '/assets/images/resource/image-1.jpg';
$about_Section_button_link = $about_Section['button_link'] ?? ['url' => '#', 'title' => 'About Us', 'target' => '_self'];

?>
<section class="about-section" style="background-image: url(<?php echo $about_Section_background_image ?>);">
    <div class="auto-container">
        <div class="row no-gutters">
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-box wow fadeInLeft" data-wow-delay='1200ms'>
                        <h2><?php echo $about_Section_section_title ?></h2>
                    </div>
                    <div class="image-box">
                        <figure class="alphabet-img wow fadeInRight"><img src="<?php echo $about_Section_image_1 ?>"
                                alt=""></figure>
                        <figure class="image wow fadeInRight" data-wow-delay='600ms'><img
                                src="<?php echo $about_Section_image_2 ?>" alt=""></figure>
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
                        <div class="link-box"><a href="<?php echo $about_Section_button_link['url']?>"
                                target="<?php echo $about_Section_button_link['target']?>"
                                class="theme-btn btn-style-one"><?php echo $about_Section_button_link['title']?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Section -->

<!-- Services Section -->
<?php
$service_Section = get_field('services_section');
?>
<section class="services-section">
    <div class="upper-box" style="background-image: url(<?php echo $dir_path ?>/assets/images/background/2.jpg);">
        <div class="auto-container">
            <div class="sec-title text-center light">
                <span class="float-text">Specialization</span>
                <h2>Our Specialization</h2>
            </div>
        </div>
    </div>

    <div class="services-box">
        <div class="auto-container">
            <div class="services-carousel owl-carousel owl-theme">
                <?php foreach ($service_Section as $service) {
                    // Process each service item
                    $service_image = $service['image'] ?? $dir_path . '/assets/images/resource/service-1.jpg';
                    $service_title = $service['title'] ?? 'Architectural Design';
                    $service_description = $service['description'] ?? 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.';
                    $service_button_link = $service['learn_more_button'] ?? ['url' => '#', 'title' => 'Learn More', 'target' => '_self'];
                    ?>

                    <!-- Service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="service-detail.html"><img
                                            src="<?php echo $service_image?>" alt=""></a>
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="service-detail.html"><?php echo $service_title?></a></h3>
                                <div class="text"><?php echo $service_description?></div>
                                <div class="link-box">
                                    <a href="<?php echo $service_button_link['url']?>" target="<?php echo $service_button_link['target']?>"><?php echo $service_button_link['title']?> <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>
<!--End Services Section -->

<!-- Fun Fact Section -->
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
<section class="fun-fact-section">
    <div class="outer-box" style="background-image: url(<?php echo $dir_path ?>/assets/images/background/3.jpg);">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row">
                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000" data-stop="<?php echo $counter_one_num?>">0</span></div>
                            <h4 class="counter-title"><?php echo $counter_one_text?></h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000" data-stop="<?php echo $counter_two_num?>">0</span></div>
                            <h4 class="counter-title"><?php echo $counter_two_text?></h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000" data-stop="<?php echo $counter_three_num?>">0</span>K</div>
                            <h4 class="counter-title"><?php echo $counter_three_text?></h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="count-box">
                            <div class="count"><span class="count-text" data-speed="5000" data-stop="<?php echo $counter_four_num?>">0</span></div>
                            <h4 class="counter-title"><?php echo $counter_four_text?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Fun Fact Section -->

<!-- Project Section -->
<section class="projects-section">
    <div class="auto-container">
        <div class="sec-title text-right">
            <span class="float-text">Project</span>
            <h2>Our Project</h2>
        </div>
    </div>

    <div class="inner-container">
        <?php echo do_shortcode('[project_shortcode]'); ?>
    </div>
</section>
<!--End Project Section -->

<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Our Team</span>
            <h2>Profect Expert</h2>
        </div>

        <div class="row clearfix">
            <!-- Team Block -->
            
                     <?php echo do_shortcode('[team_shortcode]'); ?>
            

        </div>
    </div>
</section>
<!--End Team Section -->

<!-- Testimonial Section -->


 <?php 
            $testimonial_Section = get_field('testimonial_section');
            $testimonial_Section_section_title = $testimonial_Section['section_title'] ?? "What Client Says" ;
            $testimonial_Section_description = $testimonial_Section['description'] ?? "Looking at its layout. The point of using very profectly is that it has a more-or-less
                    normal distribution of letters, as opposed";
            
            $testimonial_Section_repeater = $testimonial_Section['testimonial_section_repeater'] ?? [];
            
         ?>
<section class="testimonial-section">
    <div class="outer-container clearfix">
        <!-- Title Column -->
        <div class="title-column clearfix">
            <div class="inner-column">
                <div class="sec-title">
                    <span class="float-text">testimonial</span>
                    <h2><?php echo $testimonial_Section_section_title?></h2>
                </div>
                <div class="text"><?php echo $testimonial_Section_description?></div>
            </div>
        </div>

        <!-- Testimonial Column -->
        
        <div class="testimonial-column clearfix"
            style="background-image: url(<?php echo $dir_path ?>/assets/images/background/4.jpg);">
            <div class="inner-column">
                <div class="testimonial-carousel owl-carousel owl-theme">
                    <!-- Testimonial Block -->
                     <?php 
                        foreach ($testimonial_Section_repeater as $section){
                            $section_title = $section['title'];
                            $section_description = $section['description'];
                            $section_position = $section['position'];
                            $section_image = $section['image'] ?? $dir_path . '/assets/images/resource/thumb-1.jpg';
                     ?>
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="image-box"><img src="<?php echo $section_image?>"
                                    alt=""></div>
                            <div class="text"><?php echo $section_description?></div>
                            <div class="info-box">
                                <h4 class="name"><?php echo $section_title?></h4>
                                <span class="designation"><?php echo $section_position?></span>
                            </div>
                        </div>
                    </div>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testimonial Section -->

<!-- News Section -->
<section class="news-section">
    <div class="auto-container">
        <div class="sec-title">
            <span class="float-text">Blogs</span>
            <h2>News & Articals</h2>
        </div>
        <div class="row">
            <!-- News Block -->
            
            <?php echo do_shortcode('[post_shortcode]'); ?>
            
        </div>
    </div>
</section>
<!--End News Section -->

<!--Clients Section-->
<?php 
    $client_Section = get_field('client_section');

    
?>
<section class="clients-section">
    <div class="inner-container">
        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <?php  foreach($client_Section as $section){
                    $client_image = $section['logo_image'] ?? $dir_path . '/assets/images/clients/1.png';
                    $client_logo_link = $section['logo_link'] ?? ['url' => '#', 'title' => 'Check Link', 'target' => '_self'];
                    ?>
                <li class="slide-item">
                    <figure class="image-box"><a href="<?php echo $client_logo_link['url']?>" target="<?php echo $client_logo_link['target']?>" ><img src="<?php echo $client_image?>"
                                alt=""></a></figure>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</section>
<!--End Clients Section-->

<?php get_footer() ?>
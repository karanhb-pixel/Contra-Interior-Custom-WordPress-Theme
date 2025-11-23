<?php 
    // Template Name: Services Template

    get_header();
$dir_path = get_template_directory_uri();
?>

<!--Page Title-->
<?php 
    $background_image = get_field('services_image','option');
    // print_r($background_image);
?>
    <section class="page-title" style="background-image:url(<?php echo $background_image['url']?>);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>Services</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

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

    <!-- Specialize Section -->

    <?php 
        $special_Section = get_field('services');
        $special_Section_Section_title = $special_Section['section_title'] ?? '';
        $special_Section_title = $special_Section['title'] ?? '';
        $special_Section_desc = $special_Section['description'] ?? '';
        $special_Section_button_link = $special_Section['button_link'] ?? ['url'=>'#','target'=>'_self','title'=>'Read More'];
        $special_Section_gallary = $special_Section['gallary'] ?? [];
    ?>
    <section class="specialize-section-two alternate">
        <div class="auto-container">
            <div class="row">
                <!-- Title Column -->
                <div class="title-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="float-text">Services</span>
                            <h2><?php echo $special_Section_Section_title?></h2>
                        </div>

                        <div class="text-box">
                            <h4><?php echo $special_Section_title?></h4>
                            <p><?php echo $special_Section_desc?></p>
                        </div>
                        <div class="link-box">
                            <a href="<?php echo $special_Section_button_link['url'] ?>" target="<?php echo $special_Section_button_link['target']?>"><?php echo $special_Section_button_link['title']?><i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Carousel Column -->
                <div class="carousel-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">
                            <ul class="image-carousel owl-carousel owl-theme">
                                <?php 
                                    foreach($special_Section_gallary as $gallary){
                                        $gallary_image = $gallary['image']['url'] ?? '';
                                        // print_r($gallary);
                                        $gallary_alt = $gallry['image']['alt'] ?? ''; 
                                                                        
                                ?>
                                <li><a href="<?php echo $gallary_image?>" class="lightbox-image" title="Image Caption Here"><img src="<?php echo $gallary_image?>" alt="<?php echo $gallary_alt?>"></a></li>
                             <?php }?>
                            </ul>
                            
                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <?php 
                                    foreach($special_Section_gallary as $gallary){
                                        $gallary_image = $gallary['image']['url'] ?? '';
                                        // print_r($gallary);
                                        $gallary_alt = $gallry['image']['alt'] ?? ''; 
                                                                        
                                ?>
                                <li class="thumb-box">
                                    <figure><img src="<?php echo $gallary_image?>" alt="<?php echo $gallary_alt?>"></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Specialize Section -->

    <!-- Contact Section -->
     <?php 
        $contact_Section = get_field('contact_us');
        $title = $contact_Section['title'] ?? 'Contact Us';
        $address = $contact_Section['address'] ?? 'Complax interprice company, 882 street Latrobe, PA 15786';
        $phone_1 = $contact_Section['phone_1'] ?? '+88 169 787 5256';
        $phone_2 = $contact_Section['phone_2'] ?? '+88 165 358 5678';
        $email = $contact_Section['email'] ?? 'support@contra.com';
     ?>
    <section class="contact-section">
        <div class="inner-container">
            <div class="sec-title">
                <span class="float-text">informaer</span>
                <h2>Contact Us</h2>
            </div>

            <div class="row">
                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h4><?php echo $title?></h4>
                        <ul class="contact-info">
                            <li><?php echo $address?></li>
                            <li><?php echo $phone_1; echo "<br>" ; echo $phone_2;?></li>
                            <li><a href="#"><?php echo $email?></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Contact Form -->
                        <div class="contact-form">
                           
                                <?php echo do_shortcode('[contact-form-7 id="fe3187e" title="Contact form 1"]')?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section -->



<?php get_footer()?>
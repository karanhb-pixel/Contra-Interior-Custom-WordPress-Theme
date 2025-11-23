<?php
// Template Name: Contact Template
get_header();
$background_image = get_field('blog_post_single_image', 'option');
$dir_path = get_template_directory_uri();
?>


<!--Page Title-->
<section class="page-title" style="background-image:url(<?php echo $background_image['url'] ?>);">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>Contact Us</h1>
                <span class="title">The Interior speak for themselves</span>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="auto-container">
        <div class="row">
            <!-- Form Column -->
            <div class="form-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="float-text">informaer</span>
                        <h2>Contact Us</h2>
                    </div>

                    <div class="contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="fe3187e" title="Contact form 1"]') ?>
                    </div>

                    <?php
                    $contact_info = get_field('contact_info');
                    $map_link = get_field('map_link');

                    $constact_location = $contact_info['location'] ?? 'Complax interprice company, 882 street Latrobe, PA 15786';
                    $constact_callus_1 = $contact_info['phone-1'] ?? '+88 169 787 5256';
                    $constact_callus_2 = $contact_info['phone-2'] ?? '+88 165 358 5678';
                    $conatact_email_1 = $contact_info['email-1'] ?? 'support@contra.com';
                    $conatact_email_2 = $contact_info['email-2'] ?? 'info@contra.com';


                    ?>
                    <div class="contact-info">
                        <div class="row">
                            <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner">
                                    <h4>Location</h4>
                                    <p><?php echo $constact_location ?></p>
                                </div>
                            </div>

                            <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner">
                                    <h4>Call Us</h4>
                                    <p><?php echo $constact_callus_1 ?></p>
                                    <p><?php echo $constact_callus_2 ?></p>
                                </div>

                            </div>

                            <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner">
                                    <h4>Email</h4>
                                    <p><a href="#"><?php echo $conatact_email_1 ?></a></p>
                                    <p><a href="#"><?php echo $conatact_email_2 ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="map-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="map-outer">
                        <?php echo $map_link ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Page Section -->

<!--Clients Section-->
<section class="clients-section style-two">
    <div class="auto-container">
        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <?php
                $homepage_id = get_option('page_on_front');
                // echo $homepage_id;
                $client_Section = get_field('client_section', $homepage_id);

                foreach ($client_Section as $section) {
                    $client_image = $section['logo_image'] ?? $dir_path . '/assets/images/clients/1.png';
                    $client_logo_link = $section['logo_link'] ?? ['url' => '#', 'title' => 'Check Link', 'target' => '_self'];
                    ?>
                    <li class="slide-item">
                        <figure class="image-box"><a href="<?php echo $client_logo_link['url'] ?>"
                                target="<?php echo $client_logo_link['target'] ?>"><img src="<?php echo $client_image ?>"
                                    alt=""></a></figure>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>
<!--End Clients Section-->



<?php get_footer() ?>
<?php
$dir_path = get_template_directory_uri();
$footer_img = get_field('footer_logo', 'option');
$footer_desc = get_field('footer_description', 'option');
$contact_us = get_field('contact_us','option');

    $address = $contact_us['address'] ?? "" ;
    $phone = $contact_us['footer_phone_no'] ?? "" ;
    $email = $contact_us['footer_email'] ?? "" ;

$social_links = get_field('social_links','option');
    $facebook_link = $social_links['facebook'] ?? "" ;
    $twitter_link = $social_links['twitter'] ?? "" ;
    $instagram_link = $social_links['instagram'] ?? "" ;
    $google_link = $social_links['google'] ?? "" ;
$copyright_text = get_field('copyright_text','option');
?>
<!-- Main Footer -->
<footer class="main-footer"
    style="background-image: url(<?php echo $footer_img ?? "http://wordpress-acf-pro.local/wp-content/uploads/2025/10/footer-logo.png" ?>);">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row">
                <!--Big Column-->
                <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo">
                                    <figure>
                                        <a href="index-2.html"><img
                                                src="<?php echo $footer_img ?? "http://wordpress-acf-pro.local/wp-content/uploads/2025/10/footer-logo.png" ?>"
                                                alt=""></a>
                                    </figure>
                                </div>
                                <div class="widget-content">
                                    <div class="text"><?php echo $footer_desc ?? "" ?></div>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2 class="widget-title">Quick Links</h2>
                                <!--Footer Column-->
                                <div class="widget-content">
                                   <?php wp_nav_menu(
                                    array(
                                        'menu_class'     => 'list',
                                        'container'      => false,
                                        'menu'          => 'quick-links', 
                                    )
                                )?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h2 class="widget-title">Useful links</h2>
                                <div class="widget-content">
                                    <?php wp_nav_menu(
                                    array(
                                        'menu_class'     => 'list',
                                        'container'      => false,
                                        'menu'          => 'support-links', 
                                    )
                                )?>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget gallery-widget">
                                <h2 class="widget-title">Contact Us</h2>
                                <div class="widget-content">
                                    <div class="outer clearfix">
                                        <div class="contact-info " style="color: #ffffffff">
                                            <ul>
                                                <li><span><i class="fa fa-home"></i> </span> <?php echo $address?></li>
                                                <li><span><i class="fa fa-phone"></i> </span><?php echo $phone?></li>
                                                <li><span><i class="fa fa-envelope-o"></i> </span> <?php echo $email?></li>
                                            </ul>
                                        </div>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="social-links">
                    <ul class="social-icon-two">
                        <li><a href="<?php echo $facebook_link?>"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?php echo $twitter_link?>"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?php echo $google_link?>"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="<?php echo $instagram_link?>"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                    </ul>
                </div>

                <div class="copyright-text" style="color: white;">
                    <?php echo $copyright_text?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Main Footer -->

</div>



<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-o-up"></span></div>

</body>
<?php wp_footer() ?>

</html>
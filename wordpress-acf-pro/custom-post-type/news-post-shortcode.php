<?php
add_shortcode('post_shortcode', 'post_shortcode_function');
function post_shortcode_function($atts)
{
    $atts = shortcode_atts(array(
        'posts_per_page' => '-1',
    ), $atts, 'post_shortcode');

    $post_args = array(
        'category_name' => 'news-articals',
        'post_status' => 'publish',
        'post_type' => 'post',
        'posts_per_page' => $atts['posts_per_page'],
        'orderby' => 'ID',
        'order' => 'ASC'
    );

    $post = '';
    ob_start();
    $post_query = new WP_Query($post_args);
    ?>


    <?php
    if ($post_query->have_posts()) {
        while ($post_query->have_posts()) {
            $post_query->the_post();
            $post_image = wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'full');
            $post_name = get_the_title() ?? "post Name";
            $post_auther = get_the_author() ?? 'Author Name';
            $post_date = get_the_date() ?? 'Date';


            ?>
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="<?php echo $post_image?>" alt=""></figure>
                        <div class="overlay-box"><a href="blog-detail.html"><i class="fa fa-link"></i></a></div>
                    </div>
                    <div class="caption-box">
                        <h3><a href="blog-detail.html"><?php echo $post_name?></a></h3>
                        <ul class="info">
                            <li><?php echo $post_date?></li>
                            <li><?php echo $post_auther?></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php
        }
        wp_reset_postdata();
    }
    ?>
    </div>

    <?php
    $post = ob_get_clean();
    return $post;
}
?>
<?php
// Template Name: Blog  Template
get_header();
$background_image = get_field('blog_post_single_image', 'option');
?>

<!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo $background_image['url']?>);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box">
                    <h1>News & Artical</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Blog Section -->
     <?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'order' => 'ASC',
    'orderby' => 'ID',
    'paged' => get_query_var('paged'),
);

if (get_query_var('paged')) {
    $paged = get_query_var('paged');
} elseif (get_query_var('page')) {
    $paged = get_query_var('paged');
} else {
    $paged = 1;
}
$args_query = new WP_Query($args);


?>
    <section class="blog-section">
        <div class="auto-container">
            <div class="row">
                <!-- News Block -->
                 <?php
                if ($args_query->have_posts()) {
                    while ($args_query->have_posts()) {
                        $args_query->the_post();

                        // Get the ID of the current page being viewed
                        $page_id = get_the_ID();

                        // Get the URL of the featured image (using the 'full' size)
                        $featured_image_url = get_the_post_thumbnail_url($page_id, 'full');

                        // Output the URL within an HTML tag
                        if ($featured_image_url) {
                            $bg_image = esc_url($featured_image_url);
                        }
                        ?>
                <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo $bg_image?>" alt=""></figure>
                            <div class="overlay-box"><a href="<?php the_permalink()?>"><i class="fa fa-link"></i></a></div>
                        </div>
                        <div class="caption-box">
                            <div class="inner">
                                <h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
                                <ul class="info">
                                    <li><?php echo get_the_date()?>,</li>
                                    <li><a href="blog-detail-2.html"><?php the_author()?></a></li>
                                    <li><a href="blog-detail-2.html"><?php echo get_comments_number()?> Comments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                
            </div>

            <?php
                // Ensure the custom query object is available and has posts
                if (isset($args_query) && $args_query->max_num_pages > 1):

                    // Set up variables for paginate_links()
                    $big = 999999999; // need an unlikely integer for str_replace
                    $current_page = max(1, get_query_var('paged'));

                    // Get the HTML output of the numbered links
                    $pagination_links = paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => $current_page,
                        'total' => $args_query->max_num_pages,
                        'type' => 'array', // Return links as an array for custom wrapping
                        'show_all' => false,
                        'end_size' => 1, // Number of pages at the ends
                        'mid_size' => 2, // Number of pages either side of current
                        'prev_next' => true,
                        'prev_text' => '<span class="fa fa-long-arrow-left"></span> Prev',
                        'next_text' => 'Next <span class="fa fa-long-arrow-right"></span>',
                    ));

                    // Check if there are links to display
                    if (!empty($pagination_links)):
                        ?>

                        <div class="styled-pagination">
                            <ul class="clearfix">
                                <?php
                                foreach ($pagination_links as $link) {
                                    // Determine if this is the 'prev' or 'next' link to add your specific classes
                                    $is_prev = strpos($link, 'prev page-numbers') !== false;
                                    $is_next = strpos($link, 'next page-numbers') !== false;

                                    // Add your custom list item classes and output the link
                                    if ($is_prev) {
                                        echo '<li class="prev-post">' . $link . '</li>';
                                    } elseif ($is_next) {
                                        echo '<li class="next-post">' . $link . '</li>';
                                    } elseif (strpos($link, 'current') !== false) {
                                        // Current page links have a 'current' class
                                        echo '<li class="active">' . $link . '</li>';
                                    } else {
                                        echo '<li>' . $link . '</li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                        <?php
                    endif; // End check for pagination links
                endif; // End check for query and max pages
            
                wp_reset_postdata();
                } else {
                    echo '<p>No projects found.</p>';
                }
                ?>
        </div>
    </section>
    <!--End Blog Section -->

<?php get_footer()?>
<?php 
add_shortcode('team_shortcode', 'team_shortcode_function');
function team_shortcode_function($atts){
        $atts = shortcode_atts( array(
            'posts_per_page' => '-1',
        ), $atts, 'team_shortcode' );

        $team_args = array(
            'post_type' => 'team',
            'posts_per_page' => $atts['posts_per_page'],
            'orderby' => 'ID',
            'order' => 'ASC'
        );

        $team = '';
        ob_start();
        $team_query = new WP_Query( $team_args );
    ?>


            <?php 
                if($team_query->have_posts()){
                    while($team_query->have_posts()){
                        $team_query->the_post();
                        $team_image = wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()),'full');
                        $team_name = get_the_title() ?? "Team Name";
                        $team_meta_data = get_field('social_links') ??'';
                        $team_designation = $team_meta_data['designation'] ?? 'Designation';
                        $team_fb = $team_meta_data['facebook_link']['url'] ?? '#';
                        $team_tw = $team_meta_data['twitter_link']['url'] ?? '#';
                        $team_go = $team_meta_data['google_link']['url'] ?? '#';
                        
          
          ?>
             <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image"><a href="team.html"><img
                                    src="<?php echo $team_image?>" alt=""></a></div>
                        <ul class="social-links">
                            <li><a href="<?php echo $team_fb?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php echo $team_tw?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?php echo $team_go?>"><i class="fa fa-google-plus"></i></a></li>
                            
                        </ul>
                        <h3 class="name"><a href="#"><?php echo get_the_title()?></a></h3>
                    </div>
                    <span class="designation"><?php echo $team_designation?></span>
                </div>
            </div>
            <?php 
            }
            wp_reset_postdata();
        }
        ?>
        </div>

<?php 
$team = ob_get_clean();
return $team;
}
?>

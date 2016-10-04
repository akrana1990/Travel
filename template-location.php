<?php /*
Template Name: Locations New
*/
?>
<?php get_header(); ?>
<?php get_template_part('index', 'banner'); ?>
    <div class="space-sep20"></div>
    <div class="content-wrapper">
        <div class="body-wrapper pkg-temp">
            <div class="container">
                <div class="row">
                    <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args = array('post_type' => 'location', 'posts_per_page' => 18, 'ignore_sticky_posts' => 1,'paged'=>$paged);
                    $wp_query = new WP_Query($args);
                    while ($wp_query->have_posts()):
                        $wp_query->the_post();
                        global $more;
                        $more = 0; ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="location-box">
                                <div class="location-overlay">
                                    <a href="<?php echo the_permalink(); ?>">
                                        <h4><?php echo the_title(); ?></h4>
                                    </a>
                                    <div class="info-text"><?php  the_excerpt(); ?></div>
                                    <a class="overlay-btn" href="<?php echo the_permalink(); ?>">Take a look</a>
                                </div>
                                <?php if (has_post_thumbnail()){ ?>
                                    <a  href="<?php the_permalink(); ?>">
                                        <?php
                                        $default = array('class' => 'img-responsive');
                                        the_post_thumbnail('wl_blog_img', $default);
                                        ?>
                                    </a>
                                <?php } else { ?>
                                    <img class="img-responsive" src="<?php echo WL_TEMPLATE_DIR_URI  ?>/image/no-image.jpg">
                                <?php } ?>
                            </div>

                        </div>
                    <?php endwhile; ?>
                    <div class="pagination">
                        <?php if ( get_next_posts_link() ): ?>
                            <?php next_posts_link(__('<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>', 'weblizar' ) ); ?>
                        <?php endif; ?>
                        <?php if ( get_previous_posts_link() ): ?>
                            <?php previous_posts_link( __( '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>', 'weblizar' )); ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php get_footer(); ?>
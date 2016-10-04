<?php /*
Template Name: Locations New
*/
?>
<?php get_header(); ?>
<?php get_template_part('index', 'banner'); ?>
    <div class="space-sep20"></div>
    <div class="content-wrapper">
        <div class="body-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <?php
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                        $args = array('post_type' => 'testimonial', 'posts_per_page' => 18, 'ignore_sticky_posts' => 1,'paged'=>$paged);
                        $wp_query = new WP_Query($args);
                        while ($wp_query->have_posts()):
                            $wp_query->the_post();
                            global $more;
                            $more = 0; ?>

                            <div class="wrapper-testimonial">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2">
                                        <?php if (has_post_thumbnail()){ ?>
                                            <a  href="<?php the_permalink(); ?>">
                                                <?php
                                                $default = array('class' => 'img-responsive');
                                                the_post_thumbnail('thumbnail', $default);
                                                ?>
                                            </a>
                                        <?php } else { ?>
                                            <img class="img-responsive" src="<?php echo WL_TEMPLATE_DIR_URI  ?>/image/user.png">
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-10 col-sm-10">
                                        <p><?php  the_content(); ?></p>
                                        <p class="testi-client"><?php the_title(); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="space-sep30"></div>
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
                    <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
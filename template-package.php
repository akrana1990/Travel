<?php /*
Template Name: My Packages New
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
                $args = array('post_type' => 'package', 'posts_per_page' => 12, 'ignore_sticky_posts' => 1,'paged'=>$paged);
                $wp_query = new WP_Query($args);

                while ($wp_query->have_posts()):
                $wp_query->the_post();
                global $more;
                $more = 0;

                ?>
                <div class="col-md-4 col-sm-6">
                    <div class="feature animated fadeIn animatedVisi" data-animtype="fadeIn" data-animrepeat="0" data-animspeed="1s" data-animdelay="0s" style="-webkit-animation: 1s 0s;">
                        <div class="feature-image img-overlay">
                            <?php if (has_post_thumbnail()): ?>
                            <a  href="<?php the_permalink(); ?>">
                            <?php
                            $default = array('class' => 'img-responsive');
                            the_post_thumbnail('wl_blog_img', $default);
                            ?>
                            </a>
                            <?php endif; ?>
                        </div>
                        <?php
                            $last_minute_offer=get_post_meta(get_the_ID(),'last_minute_offer',true);
                            if(!empty( $last_minute_offer ) )
                            {
                        ?>
                        <div class="discount-wrapper">
                            <div class="discount-label">
                                <span class="dis-section1">Last Minute</span>
                                <span class="dis-section2"><?php echo $last_minute_offer; ?></span>
                            </div>
                            <div class="clear"></div>
                            <div class="dis-triangle"></div>
                            <div class="clear"></div>
                        </div>
                        <?php } ?>

                        <div class="h3-pkg-title">
                            <a href="<?php echo the_permalink(); ?>">
                            <p><?php echo the_title(); ?></p>
                            </a>
                            <div class="title-right">
                                <span style="font-size: 30px;" class="">30</span>
                                <span style="font-size: 10px;" class="">Days</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="pkg-info-wrapper">
                            <div class="pkg-info">
                                <i class="fa fa-clock-o"></i>&nbsp;
                                <span class="info-head">Duration: </span>
                                <?php echo get_post_meta(get_the_ID(),'pkg_duration',true); ?>
                            </div>
                            <div class="pkg-info">
                                <i class="fa fa-location-arrow"></i>&nbsp;
                                <span class="info-head">Location: </span>
                                <?php echo get_post_meta(get_the_ID(),'pkg_location',true); ?>
                            </div>
                            <div class="pkg-info">
                                <i class="fa fa-plane"></i>&nbsp;
                                <span class="info-head">Available Seat: </span>
                                <?php echo get_post_meta(get_the_ID(),'pkg_seat',true); ?>
                            </div>
                            <div class="pkg-info">
                                <i class="fa fa-tags"></i>&nbsp;
                                <span class="info-head">Price: </span>
                                <?php echo get_post_meta(get_the_ID(),'pkg_price',true); ?>
                            </div>
                        </div>

                        <!--<div class="feature-content">
                            <div class="info-text"><?php /* the_excerpt(); */?></div>
                        </div>-->
                        <div class="feature-details">
                            <a class="my-btn btn-color-one half-width" href="<?php echo the_permalink(); ?>"><i class="fa fa-paper-plane"></i>&emsp;Read More</a>
                            <a href="#" class="my-btn half-width"><span><i class="fa fa-plane"></i>&emsp;<?php _e('Book Now', 'weblizar'); ?></span></a>
                                <!--<span><i class="icon-picture"></i></span>
							    <span><i class="icon-time"></i><?php // echo get_the_date('j'); ?> <?php // echo the_time('M'); ?>, <?php // echo the_time('Y'); ?></span>
							    <span><i class="icon-user"></i><a href="<?php // echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php // echo get_the_author(); ?></a></span>-->
                        </div>
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
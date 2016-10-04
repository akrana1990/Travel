<?php get_header(); ?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php $wl_theme_options = get_option('weblizar_options');
            $ImageUrl1 = WL_TEMPLATE_DIR_URI ."/images/slide-1.jpg";
            $ImageUrl2 = WL_TEMPLATE_DIR_URI ."/images/slide-2.jpg";
            $ImageUrl3 = WL_TEMPLATE_DIR_URI ."/images/slide-3.jpg";  ?>
            <div class="item active">
                <?php if($wl_theme_options['slide_image']!='') {  ?>
                    <img src="<?php echo $wl_theme_options['slide_image']; ?>" class="img-responsive" alt="First slide">
                <?php } else { ?>
                    <img src="<?php echo $ImageUrl1 ?>" class="img-responsive" alt="First slide">
                <?php } ?>
                <div style="z-index: 9" class="container">
                    <div class="carousel-caption">
                        <?php if($wl_theme_options['slide_title']!='') {  ?>
                            <h1><?php echo $wl_theme_options['slide_title']; ?></h1><br>
                        <?php }
                        if($wl_theme_options['slide_desc']!='') {  ?>
                            <p class="slide-desc" ><?php echo $wl_theme_options['slide_desc']; ?></p>
                        <?php }
                        if($wl_theme_options['slide_btn_text']!='') { ?>
                            <p><a class="my-btn hover1" href="<?php if($wl_theme_options['slide_btn_link']!='') { echo $wl_theme_options['slide_btn_link']; } ?>" role="button"><?php echo $wl_theme_options['slide_btn_text']; ?></a></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="item">
                <?php if($wl_theme_options['slide_image_1']!='') {  ?>
                    <img src="<?php echo $wl_theme_options['slide_image_1']; ?>" class="img-responsive" alt="Second slide">
                <?php } else { ?>
                    <img src="<?php echo $ImageUrl2 ?>" class="img-responsive" alt="Second slide">
                <?php } ?>
                <div style="z-index: 9" class="container">
                    <div class="carousel-caption">
                        <?php if($wl_theme_options['slide_title_1']!='') {  ?>
                            <h1><?php echo $wl_theme_options['slide_title_1']; ?></h1><br>
                        <?php }
                        if($wl_theme_options['slide_desc_1']!='') {  ?>
                            <p class="slide-desc"><?php echo $wl_theme_options['slide_desc_1']; ?></p>
                        <?php }
                        if($wl_theme_options['slide_btn_text_1']!='') { ?>
                            <p><a class="my-btn hover1" href="<?php if($wl_theme_options['slide_btn_link_1']!='') { echo $wl_theme_options['slide_btn_link_1']; } ?>" role="button"><?php echo $wl_theme_options['slide_btn_text_1']; ?></a></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="item">
                <?php if($wl_theme_options['slide_image_2']!='') {  ?>
                    <img src="<?php echo $wl_theme_options['slide_image_2']; ?>" class="img-responsive" alt="Third slide">
                <?php } else { ?>
                    <img src="<?php echo $ImageUrl3 ?>" class="img-responsive" alt="Third slide">
                <?php } ?>
                <div style="z-index: 9" class="container">
                    <div class="carousel-caption">
                        <?php if($wl_theme_options['slide_title_2']!='') {  ?>
                            <h1><?php echo $wl_theme_options['slide_title_2']; ?></h1><br>
                        <?php }
                        if($wl_theme_options['slide_desc_2']!='') {  ?>
                            <p class="slide-desc"><?php echo $wl_theme_options['slide_desc_2']; ?></p>
                        <?php }
                        if($wl_theme_options['slide_btn_text_2']!='') { ?>
                            <p><a class="my-btn hover1" href="<?php if($wl_theme_options['slide_btn_link_2']!='') { echo $wl_theme_options['slide_btn_link_2']; } ?>" role="button"><?php echo $wl_theme_options['slide_btn_text_2']; ?></a></p>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>









<?php $wl_theme_options = get_option('weblizar_options');?>
<div class="content-wrapper">    
	<div class="body-wrapper custom-wrapper">
        <div class="container my-quote">
            <div class="row">
                <?php if ($wl_theme_options['request_quote'] != '') { ?>
                    <p class="land">
                        <?php echo $wl_theme_options['request_quote']; ?>
                        <!--<a class="ank-link"
                       href="<?php // if ($wl_theme_options['request_quote_link']) { echo $wl_theme_options['request_quote_link'];} ?>"
                       target="_blank" ">Learn more</a>-->
                    </p>
                <?php } ?>
                <p class="request-btn">
                    <a href="<?php echo $wl_theme_options['request_quote_link']; ?>" class="my-btn my-large-btn"><i class="fa fa-pencil-square-o"></i>&emsp;REQUEST A QUOTE</a>
                </p>
            </div>
        </div>
        <!--Script-->


        <!--Script ends-->
        <div class="colr-container1">
            <div class="space-sep60"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="center-title">
                            <?php
                            if ($wl_theme_options['blog_title']) {
                                ?>
                                <div class="heading-title">
                                    <h2 class="h2-section-title"><?php echo $wl_theme_options['blog_title']; ?></h2>
                                </div>
                            <?php } ?>
                            <?php if ($wl_theme_options['blog_text'] != '') { ?>
                                <p class="info-text"> <?php echo $wl_theme_options['blog_text']; ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="space-sep20"></div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="content-box content-style2 anim-opacity animated fadeIn animatedVisi" data-animtype="fadeIn"
                             data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s" style="-webkit-animation: 1s 0.2s;">
                            <div style="position: relative">
                            <div class="feature-image img-overlay">

                                <a title="Click to open" href="#">
                                    <?php if ($wl_theme_options['serv_1_img'] != '') { ?>
                                        <img src="<?php echo $wl_theme_options['serv_1_img']; ?>" alt=""/>
                                    <?php } else { ?> <img src="<?php echo get_template_directory_uri(); ?>/image/no-photo.png"
                                                           alt=""/><?php } ?>
                                </a>
                            </div>
                                <div class="discount-wrapper">
                                    <div class="discount-label">
                                        <span class="dis-section1"><?php if ($wl_theme_options['discount_tagline_1'] != '') echo $wl_theme_options['discount_tagline_1']; else echo 'Last Minute'; ?></span>
                                        <span class="dis-section2"><?php if ($wl_theme_options['discount_per_1'] != '') echo $wl_theme_options['discount_per_1']; else echo '0% OFF'; ?></span>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="dis-triangle"></div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <?php if ($wl_theme_options['service_1_title']) { ?>
                                <h4 class="h4-body-title"><i class="<?php if ($wl_theme_options['service_1_icons']) {
                                        echo $wl_theme_options['service_1_icons'];
                                    } ?>"></i><?php echo $wl_theme_options['service_1_title']; ?></h4>
                            <?php } ?>
                            <div class="content-box-text info-text">
                                <?php if ($wl_theme_options['service_1_text']) {
                                    echo $wl_theme_options['service_1_text'];
                                } ?>
                                <div>
                                    <a href="<?php if ($wl_theme_options['service_1_link']) {
                                        echo $wl_theme_options['service_11_link'];
                                    } ?>" class="my-btn btn-color-one"><span><?php _e('Learn More', 'weblizar'); ?></span></a>
                                    <a href="<?php if ($wl_theme_options['service_11_link']) {
                                    echo $wl_theme_options['service_11_link'];
                                } ?>" class="my-btn"><span><?php _e('Book Now', 'weblizar'); ?></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div style="position: relative">
                        <div class="feature-image img-overlay">
                            <a title="Click to open" href="#">
                                <?php if ($wl_theme_options['serv_2_img'] != '') { ?>
                                    <img src="<?php echo $wl_theme_options['serv_2_img']; ?>" alt="" />
                                <?php } else { ?> <img src="<?php echo get_template_directory_uri(); ?>/image/no-photo.png"
                                                       alt=""/><?php } ?>
                            </a>
                        </div>
                            <div class="discount-wrapper">
                                <div class="discount-label">
                                    <span class="dis-section1"><?php if ($wl_theme_options['discount_tagline_2'] != '') echo $wl_theme_options['discount_tagline_2']; else echo 'Last Minute'; ?></span>
                                    <span class="dis-section2"><?php if ($wl_theme_options['discount_per_2'] != '') echo $wl_theme_options['discount_per_2']; else echo '0% OFF'; ?></span>
                                </div>
                                <div class="clear"></div>
                                <div class="dis-triangle"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="content-box content-style2 anim-opacity animated fadeIn animatedVisi" data-animtype="fadeIn"
                             data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s" style="-webkit-animation: 1s 0.2s;">
                            <?php if ($wl_theme_options['service_2_title']) { ?>
                                <h4 class="h4-body-title"><i class="<?php if ($wl_theme_options['service_2_icons']) {
                                        echo $wl_theme_options['service_2_icons'];
                                    } ?>"></i><?php echo $wl_theme_options['service_2_title']; ?></h4>
                            <?php } ?>
                            <div class="content-box- info-text">
                                <?php if ($wl_theme_options['service_2_text']) {
                                    echo $wl_theme_options['service_2_text'];
                                } ?>
                                <div>
                                    <a href="<?php if ($wl_theme_options['service_2_link']) {
                                        echo $wl_theme_options['service_2_link'];
                                    } ?>" class="my-btn btn-color-one"><span><?php _e('Learn More', 'weblizar'); ?></span></a>

                                    <a href="<?php if ($wl_theme_options['service_21_link']) {
                                    echo $wl_theme_options['service_21_link'];
                                } ?>" class="my-btn"><span><?php _e('Book Now', 'weblizar'); ?></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div style="position: relative">
                        <div class="feature-image img-overlay">
                            <a title="Click to open" href="#">
                                <?php if ($wl_theme_options['serv_3_img'] != '') { ?>
                                    <img src="<?php echo $wl_theme_options['serv_3_img']; ?>" alt=""/>
                                <?php } else { ?> <img src="<?php echo get_template_directory_uri(); ?>/image/no-photo.png"
                                                       alt=""/><?php } ?>
                            </a>
                        </div>
                            <div class="discount-wrapper">
                                <div class="discount-label">
                                    <span class="dis-section1"><?php if ($wl_theme_options['discount_tagline_3'] != '') echo $wl_theme_options['discount_tagline_3']; else echo 'Last Minute'; ?></span>
                                    <span class="dis-section2"><?php if ($wl_theme_options['discount_per_3'] != '') echo $wl_theme_options['discount_per_3']; else echo '0% OFF'; ?></span>
                                </div>
                                <div class="clear"></div>
                                <div class="dis-triangle"></div>
                                <div class="clear"></div>
                            </div>
                            </div>
                        <div class="content-box content-style2 anim-opacity animated fadeIn animatedVisi" data-animtype="fadeIn"
                             data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s" style="-webkit-animation: 1s 0.2s;">
                            <?php if ($wl_theme_options['service_3_title']) { ?>
                                <h4 class="h4-body-title"><i class="<?php if ($wl_theme_options['service_3_icons']) {
                                        echo $wl_theme_options['service_3_icons'];
                                    } ?>"></i><?php echo $wl_theme_options['service_3_title']; ?></h4>
                            <?php } ?>
                            <div class="content-box-text info-text">
                                <?php if ($wl_theme_options['service_3_text']) {
                                    echo $wl_theme_options['service_3_text'];
                                } ?>
                                <div>
                                    <a href="<?php if ($wl_theme_options['service_3_link']) {
                                        echo $wl_theme_options['service_3_link'];
                                    } ?>" class="my-btn btn-color-one"><span><?php _e('Learn More', 'weblizar'); ?></span></a>
                                    <a href="<?php if ($wl_theme_options['service_31_link']) {
                                    echo $wl_theme_options['service_31_link'];
                                } ?>" class="my-btn"><span><?php _e('Book Now', 'weblizar'); ?></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div style="position: relative">
                        <div class="feature-image img-overlay">
                            <a title="Click to open" href="#">
                                <?php if ($wl_theme_options['serv_3_img'] != '') { ?>
                                    <img src="<?php echo $wl_theme_options['serv_4_img']; ?>" alt=""/>
                                <?php } else { ?> <img src="<?php echo get_template_directory_uri(); ?>/image/no-photo.png"
                                                       alt=""/><?php } ?>
                            </a>
                        </div>
                            <div class="discount-wrapper">
                                <div class="discount-label">
                                    <span class="dis-section1"><?php if ($wl_theme_options['discount_tagline_4'] != '') echo $wl_theme_options['discount_tagline_4']; else echo 'Last Minute'; ?></span>
                                    <span class="dis-section2"><?php if ($wl_theme_options['discount_per_4'] != '') echo $wl_theme_options['discount_per_4']; else echo '0% OFF'; ?></span>
                                </div>
                                <div class="clear"></div>
                                <div class="dis-triangle"></div>
                                <div class="clear"></div>
                            </div>
                            </div>
                        <div class="content-box content-style2 anim-opacity animated fadeIn animatedVisi" data-animtype="fadeIn"
                             data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s" style="-webkit-animation: 1s 0.2s;">
                            <?php if ($wl_theme_options['service_4_title']) { ?>
                                <h4 class="h4-body-title"><i class="<?php if ($wl_theme_options['service_4_icons']) {
                                        echo $wl_theme_options['service_4_icons'];
                                    } ?>"></i><?php echo $wl_theme_options['service_4_title']; ?></h4>
                            <?php } ?>
                            <div class="content-box-text info-text">
                                <?php if ($wl_theme_options['service_4_text']) {
                                    echo $wl_theme_options['service_4_text'];
                                } ?>
                                <div>
                                    <a href="<?php if ($wl_theme_options['service_4_link']) {
                                        echo $wl_theme_options['service_4_link'];
                                    } ?>" class="my-btn btn-color-one"><span><?php _e('Learn More', 'weblizar'); ?></span></a>

                                    <a href="<?php if ($wl_theme_options['service_41_link']) {
                                    echo $wl_theme_options['service_41_link'];
                                } ?>" class="my-btn"><span><?php _e('Book Now', 'weblizar'); ?></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-sep60"></div>
        </div>
        <div class="colr-container2">
            <div class="space-sep30"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="center-title">
                            <?php if ($wl_theme_options['site_intro_title'] != '') { ?>
                                <div class="heading-title">
                                    <h2 class="h2-section-title h2-title-wht"><?php echo $wl_theme_options['site_intro_title']; ?></h2>
                                </div>
                            <?php } ?>
                            <?php if ($wl_theme_options['site_intro_text'] != '') { ?>
                                <p class="info-text"> <?php echo $wl_theme_options['site_intro_text']; ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-sep60"></div>
            <div class="container">
                <div class="row">
                    <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args = array('post_type' => 'package', 'posts_per_page' => 12, 'ignore_sticky_posts' => 1,'paged'=>$paged);
                    $wp_query = new WP_Query($args);
                    while ($wp_query->have_posts()):
                        $wp_query->the_post();
                        global $more;
                        $more = 0; ?>
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
                </div>
            </div>
            <div class="space-sep60"></div>
        </div>
        <!--India best location Section-->
        <div class="bus-module colr-container3">
            <div class="space-sep60"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="center-title">
                            <?php
                            if ($wl_theme_options['business_module_title']) {
                                ?>
                                <div class="heading-title">
                                    <h2 class="h2-section-title"><?php echo $wl_theme_options['business_module_title']; ?></h2>
                                </div>
                            <?php } ?>
                            <?php if ($wl_theme_options['module_text']) { ?>
                                <p class="info-text"><?php echo $wl_theme_options['module_text']; ?> </p>
                            <?php  } ?>
                            <div class="space-sep20"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="flexslider carousel">
                    <ul class="slides">
                        <li>
                            <div class="flex-col col-md-4 col-sm-4" >
                                <div class="content-box content-style2 anim-opacity animated fadeIn animatedVisi" data-animtype="fadeIn"
                                     data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s" style="-webkit-animation: 1s 0.2s;">
                                    <div class="feature-image img-overlay">

                                        <a title="Click to open" href="#">
                                            <?php if ($wl_theme_options['module_1_img'] != '') { ?>
                                                <img src="<?php echo $wl_theme_options['module_1_img']; ?>"
                                                     alt=""/>
                                            <?php } else { ?> <img src="<?php echo get_template_directory_uri(); ?>/image/no-photo.png"
                                                                   alt=""/><?php } ?>
                                        </a>
                                    </div>
                                    <?php if ($wl_theme_options['module_1_title']) { ?>
                                        <h4 class="h4-body-title"><i class="<?php if ($wl_theme_options['module_1_icons']) {
                                                echo $wl_theme_options['module_1_icons'];
                                            } ?>"></i><?php echo $wl_theme_options['module_1_title']; ?></h4>
                                    <?php } ?>
                                    <div class="content-box-text info-text">
                                        <?php if ($wl_theme_options['module_1_text']) {
                                            echo $wl_theme_options['module_1_text'];
                                        } ?>
                                        <div><a href="<?php if ($wl_theme_options['module_1_link']) {
                                                echo $wl_theme_options['module_1_link'];
                                            } ?>" class="my-btn"><span><?php _e('Read More', 'weblizar'); ?></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex-col col-md-4 col-sm-4">
                            <div class="feature-image img-overlay">
                                <a title="Click to open" href="#">
                                    <?php if ($wl_theme_options['module_2_img'] != '') { ?>
                                        <img src="<?php echo $wl_theme_options['module_2_img']; ?>" alt=""/>
                                    <?php } else { ?> <img src="<?php echo get_template_directory_uri(); ?>/image/no-photo.png"
                                                           alt=""/><?php } ?>
                                </a>
                            </div>
                            <div class="content-box content-style2 anim-opacity animated fadeIn animatedVisi" data-animtype="fadeIn"
                                 data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s" style="-webkit-animation: 1s 0.2s;">
                                <?php if ($wl_theme_options['module_2_title']) { ?>
                                    <h4 class="h4-body-title"><i class="<?php if ($wl_theme_options['module_2_icons']) {
                                            echo $wl_theme_options['module_2_icons'];
                                        } ?>"></i><?php echo $wl_theme_options['module_2_title']; ?></h4>
                                <?php } ?>
                                <div class="content-box-text info-text">
                                    <?php if ($wl_theme_options['module_2_text']) {
                                        echo $wl_theme_options['module_2_text'];
                                    } ?>
                                    <div><a href="<?php if ($wl_theme_options['module_2_link']) {
                                            echo $wl_theme_options['module_2_link'];
                                        } ?>" class="my-btn"><span><?php _e('Read More', 'weblizar'); ?></span></a></div>
                                </div>
                            </div>
                        </div>
                        </li>
                        <li>
                            <div class="flex-col col-md-4 col-sm-4">
                            <div class="feature-image img-overlay">

                                <a title="Click to open" href="#">
                                    <?php if ($wl_theme_options['module_3_img'] != '') { ?>
                                        <img src="<?php echo $wl_theme_options['module_3_img']; ?>" alt=""/>
                                    <?php } else { ?> <img src="<?php echo get_template_directory_uri(); ?>/image/no-photo.png"
                                                           alt=""/><?php } ?>
                                </a>
                            </div>
                            <div class="content-box content-style2 anim-opacity animated fadeIn animatedVisi" data-animtype="fadeIn"
                                 data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s" style="-webkit-animation: 1s 0.2s;">
                                <?php if ($wl_theme_options['module_3_title']) { ?>
                                    <h4 class="h4-body-title"><i class="<?php if ($wl_theme_options['service_3_icons']) {
                                            echo $wl_theme_options['module_3_icons'];
                                        } ?>"></i><?php echo $wl_theme_options['module_3_title']; ?></h4>
                                <?php } ?>
                                <div class="content-box-text info-text">
                                    <?php if ($wl_theme_options['module_3_text']) {
                                        echo $wl_theme_options['module_3_text'];
                                    } ?>
                                    <div><a href="<?php if ($wl_theme_options['module_3_link']) {
                                            echo $wl_theme_options['module_3_link'];
                                        } ?>" class="my-btn"><span><?php _e('Read More', 'weblizar'); ?></span></a></div>
                                </div>
                            </div>
                        </div>
                        </li>
                        <li>
                            <div class="flex-col col-md-4 col-sm-4">
                                <div class="feature-image img-overlay">

                                    <a title="Click to open" href="#">
                                        <?php if ($wl_theme_options['module_4_img'] != '') { ?>
                                            <img src="<?php echo $wl_theme_options['module_4_img']; ?>" alt=""/>
                                        <?php } else { ?> <img src="<?php echo get_template_directory_uri(); ?>/image/no-photo.png"
                                                               alt=""/><?php } ?>
                                    </a>
                                </div>
                                <div class="content-box content-style2 anim-opacity animated fadeIn animatedVisi" data-animtype="fadeIn"
                                     data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s" style="-webkit-animation: 1s 0.2s;">
                                    <?php if ($wl_theme_options['module_4_title']) { ?>
                                        <h4 class="h4-body-title"><i class="<?php if ($wl_theme_options['module_4_icons']) {
                                                echo $wl_theme_options['module_4_icons'];
                                            } ?>"></i><?php echo $wl_theme_options['module_4_title']; ?></h4>
                                    <?php } ?>
                                    <div class="content-box-text info-text">
                                        <?php if ($wl_theme_options['module_4_text']) {
                                            echo $wl_theme_options['module_4_text'];
                                        } ?>
                                        <div><a href="<?php if ($wl_theme_options['module_4_link']) {
                                                echo $wl_theme_options['module_4_link'];
                                            } ?>" class="my-btn"><span><?php _e('Read More', 'weblizar'); ?></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex-col col-md-4 col-sm-4">
                                <div class="feature-image img-overlay">

                                    <a title="Click to open" href="#">
                                        <?php if ($wl_theme_options['module_5_img'] != '') { ?>
                                            <img src="<?php echo $wl_theme_options['module_5_img']; ?>" alt=""/>
                                        <?php } else { ?> <img src="<?php echo get_template_directory_uri(); ?>/image/no-photo.png"
                                                               alt=""/><?php } ?>
                                    </a>
                                </div>
                                <div class="content-box content-style2 anim-opacity animated fadeIn animatedVisi" data-animtype="fadeIn"
                                     data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s" style="-webkit-animation: 1s 0.2s;">
                                    <?php if ($wl_theme_options['module_5_title']) { ?>
                                        <h4 class="h4-body-title"><i class="<?php if ($wl_theme_options['service_5_icons']) {
                                                echo $wl_theme_options['module_5_icons'];
                                            } ?>"></i><?php echo $wl_theme_options['module_5_title']; ?></h4>
                                    <?php } ?>
                                    <div class="content-box-text info-text">
                                        <?php if ($wl_theme_options['module_5_text']) {
                                            echo $wl_theme_options['module_5_text'];
                                        } ?>
                                        <div><a href="<?php if ($wl_theme_options['module_5_link']) {
                                                echo $wl_theme_options['module_5_link'];
                                            } ?>" class="my-btn"><span><?php _e('Read More', 'weblizar'); ?></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex-col col-md-4 col-sm-4">
                                <div class="content-box content-style2 anim-opacity animated fadeIn animatedVisi" data-animtype="fadeIn"
                                     data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s" style="-webkit-animation: 1s 0.2s;">
                                    <div class="feature-image img-overlay">

                                        <a title="Click to open" href="#">
                                            <?php if ($wl_theme_options['module_6_img'] != '') { ?>
                                                <img src="<?php echo $wl_theme_options['module_6_img']; ?>"
                                                     alt=""/>
                                            <?php } else { ?> <img src="<?php echo get_template_directory_uri(); ?>/image/no-photo.png"
                                                                   alt=""/><?php } ?>
                                        </a>
                                    </div>
                                    <?php if ($wl_theme_options['module_6_title']) { ?>
                                        <h4 class="h4-body-title"><i class="<?php if ($wl_theme_options['module_6_icons']) {
                                                echo $wl_theme_options['module_6_icons'];
                                            } ?>"></i><?php echo $wl_theme_options['module_6_title']; ?></h4>
                                    <?php } ?>
                                    <div class="content-box-text info-text">
                                        <?php if ($wl_theme_options['module_6_text']) {
                                            echo $wl_theme_options['module_6_text'];
                                        } ?>
                                        <div><a href="<?php if ($wl_theme_options['module_6_link']) {
                                                echo $wl_theme_options['module_6_link'];
                                            } ?>" class="my-btn"><span><?php _e('Read More', 'weblizar'); ?></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="space-sep60"></div>
        </div>
        <!--Best Locations Section Ends-->

        <!---------------------Testimonial Section Starts------------------------------>

        <div class="wide-shell home-testimonial">
            <div class="container">
                <div class="row">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">


                            <div class="item active">
                                <img class="home-testi-avatar" src="/wp-content/themes/travel/images/avatar-1.png" alt="Chania">

                                <div class="home-testim">
                                    <div class="home-testim-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</div>
                                    <div class="home-testim-name">Jane Smith</div>
                                </div>

                            </div>

                            <div class="item">
                                <img class="home-testi-avatar" src="/wp-content/themes/travel/images/avatar-1.png" alt="Chania">
                                <div class="home-testim">
                                    <div class="home-testim-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</div>
                                    <div class="home-testim-name">Jane Smith</div>
                                </div>
                            </div>

                            <div class="item">
                                <img class="home-testi-avatar" src="/wp-content/themes/travel/images/avatar-1.png" alt="Flower">
                                <div class="home-testim">
                                    <div class="home-testim-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</div>
                                    <div class="home-testim-name">Jane Smith</div>
                                </div>
                            </div>


                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

                        </a>
                        <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!---------------------Testimonial Section Ends-------------------------------->




	</div>
</div><!--.content-wrapper end -->
<?php get_footer(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">``
	<![endif]-->
	<?php $wl_theme_options = get_option('weblizar_options'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
    <meta charset="<?php bloginfo('charset'); ?>" />	
	<title><?php wp_title( '|', true, 'right'); ?></title>	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<?php if($wl_theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo $wl_theme_options['upload_image_favicon']; ?>" /> 
	<?php } ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >



<?php //top header ?>

<div class="top-navigation-wrapper top-header-wrapper">
    <div class="top-navigation-container container">

        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="pull-left right-margin">
                    <a target="_blank" href="#">
                        <i class="fa fa-facebook top-icon"></i>
                    </a>
                </div>
                <div class="pull-left right-margin">
                    <a target="_blank" href="#">
                        <i class="fa fa-linkedin top-icon"></i>
                    </a>
                </div>
                <div class="pull-left right-margin">
                    <a target="_blank" href="#">
                        <i class="fa fa-twitter top-icon"></i>
                    </a>
                </div>
                <div class="pull-left right-margin">
                    <a target="_blank" href="#">
                        <i class="fa fa-google-plus top-icon"></i>
                    </a>
                </div>
                <div class="pull-left right-margin">
                    <a target="_blank" href="#">
                        <i class="fa fa-pinterest top-icon"></i>
                    </a>
                </div>

            </div>

            <div class="col-md-6 col-sm-6">
                <div class="pull-right left-margin">
                    <i class="fa fa-envelope top-icon"></i>
                    <a href="#">
						<span style="color: #B1BAC3;font-size: 12px">contact@packagetourtheme.us</span></a>
                </div>
                <div class="pull-right left-margin">
                    <i class="fa fa-phone top-icon"></i>
                    <span style="color: #B1BAC3;font-size: 12px">1800-1232-4234</span>
                </div>
            </div>
        </div>


    </div>
</div>








<div class="top_wrapper">
	<header id="header">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<div class="logo pull-left">
						<a class="navbar-brand1" title="Weblizar" href="<?php echo home_url( '/' ); ?>">
							<?php if($wl_theme_options['text_title'] =="on")
							{ echo get_bloginfo( ); }
							else if($wl_theme_options['upload_image_logo']!='')
							{ ?>
								<img src="<?php echo $wl_theme_options['upload_image_logo']; ?>" style="height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "55"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "150"; } ?>px;" />
							<?php } else { ?> <img src="<?php echo get_template_directory_uri(); ?>/images/web-logo.png" style="height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "55"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "150"; } ?>px;" /><?php  } ?>
						</a>

					</div>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only"><?php _e('Toggle navigation','weblizar'); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<?php wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav navbar-right',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
				); ?>
			</div>
		</nav>
	</header>
</div>
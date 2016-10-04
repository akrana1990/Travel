<footer>
    <div class="footer">
        <div class="container">
            <div class="footer-wrapper">
                <div class="row">
				<?php 
				if(is_active_sidebar( 'footer-widget-area' ))
				{ 
					dynamic_sidebar( 'footer-widget-area' ); 
				} ?>
                </div>			
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
				<?php $wl_theme_options = get_option('weblizar_options');		 ?>
                    <div class="col-md-6 col-sm-6">
                        <div class="copyright-text"><?php 
							if($wl_theme_options['footer_customizations']) { echo $wl_theme_options['footer_customizations']; }
							if($wl_theme_options['developed_by_text']) { echo "|" .$wl_theme_options['developed_by_text']; } ?>
							<a  rel="nofollow" href="<?php if($wl_theme_options['developed_by_link']) { echo $wl_theme_options['developed_by_link']; } ?>" target="_blank">
							<?php if($wl_theme_options['developed_by_weblizar_text']) { echo $wl_theme_options['developed_by_weblizar_text']; } ?>
							</a>
						</div>
                    </div>
					<?php if($wl_theme_options['footer_section_social_media_enbled'] == 'on') { ?>
                    <div class="col-md-6 col-sm-6"> 
						<div class="social-icons">
							<ul>
								<?php if($wl_theme_options['social_media_facebook_link']) { ?>
								<li><a href="<?php echo esc_url($wl_theme_options['social_media_facebook_link']); ?>" title="facebook" target="_blank" class="social-media-icon facebook-icon"><?php _e('Facebook','weblizar'); ?></a></li>
								<?php } 
								if($wl_theme_options['social_media_twitter_link']) { ?>
								<li><a href="<?php echo esc_url($wl_theme_options['social_media_twitter_link']); ?>" title="twitter" target="_blank" class="social-media-icon twitter-icon"><?php _e('Twitter','weblizar'); ?></a></li>
								<?php } 
								if($wl_theme_options['social_media_google_plus']) { ?>
								<li><a href="<?php echo esc_url($wl_theme_options['social_media_google_plus']); ?>" title="googleplus" target="_blank" class="social-media-icon googleplus-icon"><?php _e('Googleplus','weblizar'); ?></a></li>
								<?php } 
								if($wl_theme_options['social_media_linkedin_link']) { ?>
								<li><a href="<?php echo esc_url($wl_theme_options['social_media_linkedin_link']); ?>" title="linkedin" target="_blank" class="social-media-icon linkedin-icon"><?php _e('Linkedin','weblizar'); ?></a></li>
								<?php } ?>
							</ul>
						</div>
                    </div>
					<?php } ?>
                </div>
            </div>
        </div>	
		<?php if($wl_theme_options['custom_css']) ?>
		<style type="text/css">
			<?php { echo $wl_theme_options['custom_css']; } ?>
		</style>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
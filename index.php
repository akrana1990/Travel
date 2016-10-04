<?php get_header(); ?>
<div class="top-title-wrapper">
	<div class="top-title-wrapper-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h1 class="h1-page-title"><?php echo __('Blog', 'weblizar' ); ?></h1>
            </div>
        </div>
    </div>
</div>
<div class="space-sep20"></div>	
<div class="content-wrapper">
	<div class="body-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9">
					<?php  if ( have_posts() ) : 
					while(have_posts()):the_post(); ?>
					<?php get_template_part( 'content' ); ?>
					<?php endwhile;
					 endif; ?>
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
</div>
<?php get_footer(); ?>
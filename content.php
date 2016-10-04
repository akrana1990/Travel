<div class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-span">
		<?php
		if(get_post_type()=='package' && is_single())
		{
			echo 'Post Type package';
		}
			?>
		<?php if(!is_page()){ ?>
			<div class="blog-post-details">
				<div class="blog-post-details-item blog-post-details-item-left">
					<i class="fa fa-clock-o"></i>
					<a href="#">
						<?php the_date('j'); ?> <?php the_time('M , Y'); ?>,
					</a>
				</div>

				<div class="blog-post-details-item blog-post-details-item-left">
					<i class="fa fa-user"></i>
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?></a>
				</div>

				<?php if(get_the_tag_list() != '') { ?>
					<div class="blog-post-details-item blog-post-details-item-left">
						<i class="fa fa-tags"></i><?php the_tags('', ', ', '<br />'); ?>
					</div>
				<?php } ?>

				<div class="blog-post-details-item blog-post-details-item-left">
					<i class="fa fa-comment"></i>
					<?php comments_number( 'No Comments', 'one comments', '% comments' ); ?>
				</div>
			</div>
		<?php } ?>

		<?php if(has_post_thumbnail() && !is_search()): ?>
		<div class="blog-post-featured-img img-overlay">
			<?php $defalt_arg =array('class' => "img-responsive" ); ?>
			<a  href="<?php the_permalink(); ?>"><?php the_post_thumbnail('wl_media_blog_img', $defalt_arg); ?></a>
		</div>

		<?php endif; ?>
		<?php if(!is_page()) { ?>
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h2>

		<?php } ?>
		<div class="space-sep20"></div>
		<div class="blog-post-body">
			<?php if(is_single()){ ?>
			<?php the_content( __( 'Read More' , 'weblizar' ) ); ?>


			<?php } else { ?>
			<?php the_excerpt( __( 'Read More' , 'weblizar' ) ); ?>
			<?php } ?>

			<?php $defaults = array(
				'before'           => '<div class="pagination">' . __( 'Pages:','weblizar' ),
				'after'            => '</div>',
				'link_before'      => '',
				'link_after'       => '',
				'next_or_number'   => 'number',
				'separator'        => ' ',
				'nextpagelink'     => __( 'Next page','weblizar' ),
				'previouspagelink' => __( 'Previous page','weblizar' ),
				'pagelink'         => '%',
				'echo'             => 1
			);
			wp_link_pages( $defaults );
			?>

		</div>
		
	</div>
</div>
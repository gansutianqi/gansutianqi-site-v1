<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>

	<div class="container">

		<?php if ( is_singular( get_post_type() ) ) { ?>

			<a class="status-avatar" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_avatar( get_the_author_meta( 'email' ), '60' ); ?></a>
			<div class="content">
				<?php the_content(); ?>
			</div>

			<div class="article-meta-format">
				<?php wp_link_pages('before=<spam id="page-links">' . __( 'Pages:', 'kichu' ) . ' &after=</spam>'); ?>
				<?php printf( __( 'Status published by <a href="%2$s">%1$s</a> on <time>%3$s</time>', 'kichu' ), get_the_author(), get_author_posts_url(get_the_author_meta( 'ID' )), get_the_time( get_option( 'date_format' ) ) ); ?>
				<span class="entry-categories"><?php _e('Categories:','kichu'); ?> <?php the_category(', '); ?></span>
				<span class="entry-tags"><?php the_tags(__( 'Tags: ', 'kichu' ) , ', '); ?> </span>
			</div>

		<?php } else { ?>

			<a class="status-avatar" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_avatar( get_the_author_meta( 'email' ), '60' ); ?></a>
			<div class="content">
				<?php the_content("Continue reading " . get_the_title()); ?>
			</div>

		<?php } ?>

	</div>

</article>
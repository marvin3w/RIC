<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<li class="result-item">
		
		
		
		
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<!-- post thumbnail -->
		<!-- <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
			<?php endif; ?> -->
		<!-- /post thumbnail -->
		
		<!-- post title -->
			<h5 class="search_title">
				<a target="_top" href="<?php the_permalink(); ?>" class="search_link"  title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h5>
			<p><?php the_excerpt(); ?></p>
			<!-- <p>...ices Calculate <span class="search">Our</span> Team Services 1 Services 2 Team Member Profile 404 Maintenance Coming Soon FAQs Clients Additional Pages Tabs &amp; Acc...</p> -->
			
			<!-- /post title -->

			<!-- post details -->
			<!-- <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span> -->
			<!-- <span class="author">Publicado por <?php the_author_posts_link(); ?></span> -->
			<!-- <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->
			<!-- /post details -->

			<?php // html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

			<?php // edit_post_link(); ?>

		</article>
		<!-- /article -->
	</li>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

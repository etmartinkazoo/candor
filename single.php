<?php
get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php if ( has_post_thumbnail() ): ?>
			<div class="post-hero mb-5">
				<?php	the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<hr>
					<?php if(comments_open() || get_comments_number()): ?>
						<?php comments_template(); ?>
					<?php endif; ?>
					<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				</div>
			</div>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>

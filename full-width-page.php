<?php

	get_header(); ?>

	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-8">
				<h2><?php the_title(); ?></h2>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

					<?php if(comments_open() || get_comments_number()): ?>
						<?php comments_template(); ?>
					<?php endif; ?>

				<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<?php get_footer(); ?>

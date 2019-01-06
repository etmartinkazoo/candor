<?php

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="excerpt-card my-5">
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<div class="meta-info py-3">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>&nbsp;&nbsp;<?php the_date(); ?>
				</div>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="btn btn-secondary rounded-0">Read More</a>
			</div>
			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			<?php posts_nav_link(); ?>
		</div>
		<div class="col-md-4 sidebar py-5">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-nav" aria-controls="primary-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <?php
      wp_nav_menu([
        'menu'            => 'Main Nav',
        'container'       => 'div',
        'container_id'    => 'primary-nav',
        'container_class' => 'collapse navbar-collapse',
        'menu_id'         => false,
        'menu_class'      => 'navbar-nav ml-auto',
        'depth'           => 2,
        'fallback_cb'     => 'bs4navwalker::fallback',
        'walker'          => new bs4navwalker()
      ]);
      ?>
	</div>
</nav>

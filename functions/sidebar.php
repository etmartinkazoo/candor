<?php
	register_sidebar( $args );

	$args = array(
		'name'          => __( 'default' ),
		'id'            => 'default_sidebar',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>' );

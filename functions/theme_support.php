<?php

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'card', 250, 400, true );
	add_image_size( 'banner', 1500, 600, true );

// Register theme menu(s)
	register_nav_menus( array(
		'primary' => __( 'Primary Menu' ),
	) );

// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));
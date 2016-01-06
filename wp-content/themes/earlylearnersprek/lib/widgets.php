<?php

	$args = array(
		'id'            => 'footer-one',
		'class'         => 'widget',
		'name'          => __( 'Footer one', 'tba' ),
		'description'   => __( 'A custom footer', 'tba' ),
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	);
	register_sidebar( $args );
	
	$args = array(
		'id'            => 'footer-two',
		'class'         => 'widget',
		'name'          => __( 'Footer two', 'tba' ),
		'description'   => __( 'A custom footer', 'tba' ),
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	);
	register_sidebar( $args );
	$args = array(
		'id'            => 'footer-three',
		'class'         => 'widget',
		'name'          => __( 'Footer three', 'tba' ),
		'description'   => __( 'A custom footer', 'tba' ),
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	);
	register_sidebar( $args );
	$args = array(
		'id'            => 'footer-four',
		'class'         => 'widget',
		'name'          => __( 'Footer four', 'tba' ),
		'description'   => __( 'A custom footer', 'tba' ),
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'rightside-widget',
		'class'         => 'widget',
		'name'          => __( 'Rightside widget', 'tba' ),
		'description'   => __( 'A custom sidebar', 'tba' ),
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	);
	register_sidebar( $args );

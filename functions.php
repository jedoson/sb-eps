<?php



add_action('init', 'define_sbeps_taxonomy', 0);
function define_sbeps_taxonomy() {
	
	register_post_type('post_sbeps',
    					array('labels' => array('name' => __( '성보-EPS' ),
        										'singular_name' => __('post_sbeps' )
      											),
      							'public' => true,
      							'has_archive' => true,
    						)
  						);
	
	register_taxonomy('sbeps', 
					  'post_sbeps', 
					  array('hierarchical' => false, 
							'label' => '회사소개-TAG정의', 
							'query_var' => true, 
							'rewrite' => true));
	
}






function sbeps_scripts() {
	
	wp_enqueue_script('jquery');
	
	wp_enqueue_script('sbeps-js', 
					  get_stylesheet_directory_uri() . '/js/script.js',
					  array('jquery'), null, true);
	
	
	wp_enqueue_style('bootstrap-style', 
					 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css',
					  array());
	
	wp_enqueue_style('bootstrap-theme-style', 
					 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css',
					  array());
	
	if(!wp_style_is('kboard-skin-default')) {
		wp_enqueue_style('font-awesome-style', 
					 '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
					  array());
	}
	wp_enqueue_style('sbeps-style', 
					 get_stylesheet_directory_uri() . '/style.css',
					  array());
}
add_action( 'wp_enqueue_scripts', 'sbeps_scripts' );




function isActiveSBEPS($sbeps, $sbm) {
	
	if($sbeps == $sbm)	 return "active";
	else				 return "";
	
}


















?>
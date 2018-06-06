<?php


function eigenThema_test() {
  // styles
  wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri());
  
  
  // scripts
  
  wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true); 
  wp_enqueue_script( 'eigenThema-js', get_template_directory_uri() . '/eigenThema.js', array('jquery'), null, true); 

}
add_action('wp_enqueue_scripts', 'eigenThema_test');


function eigenThemaSetup() {
  
  add_theme_support('menus');
  add_theme_support('html5', array('search-form'));
  
  register_nav_menu('primary', 'Primary header navigation');
  register_nav_menu('secondary', 'Secondary footer navigation');
}

// (optie als je 1 nav hebt >>> after_setup_thema
add_action('init', 'eigenThemaSetup');

// thumbnail images support
add_theme_support( 'post-thumbnails' );



function create_post_your_post() { 
    
    // Slideshow items
  	register_post_type( 'slideshow',
		array(
			'labels'       => array(
				'name'       => __( 'Slideshow', 'fbi-design' ),
			),
			'public'       => true,
			'hierarchical' => false,
			'has_archive'  => false,
            'publicly_queryable'  => false,
            'exclude_from_search' => true, 
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
			), 
            'rewrite' => array('slug' => 'slideshow'),
          
		)
	);
  
    // Feature items
  	register_post_type( 'features',
		array(
			'labels'       => array(
				'name'       => __( 'Features', 'fbi-design' ),
			),
			'public'       => true,
			'hierarchical' => false,
			'has_archive'  => false,
            'publicly_queryable'  => false,
            'exclude_from_search' => true, 
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
			), 
            'rewrite' => array('slug' => 'features'),
          
		)
	);
  
    // portfolio items
	register_post_type( 'portfolio',
		array(
			'labels'       => array(
				'name'       => __( 'Portfolio', 'fbi-design' ),
			),
			'public'       => true,
			'hierarchical' => true,
			'has_archive'  => true,
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
			), 
			'taxonomies'   => array(
				'post_tag',
				'category',
			),
            'rewrite' => array('slug' => 'work'),
          
		)
	);
  
    // Testimonials items
  	register_post_type( 'testimonials',
		array(
			'labels'       => array(
				'name'       => __( 'Testimonials', 'fbi-design' ),
			),
			'public'       => true,
			'hierarchical' => false,
			'has_archive'  => false,
            'publicly_queryable'  => false,
            'exclude_from_search' => true, 
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
			), 
            'rewrite' => array('slug' => 'testimonials'),
          
		)
	);
  
      // Our Clients items
  	register_post_type( 'our-clients',
		array(
			'labels'       => array(
				'name'       => __( 'Our Clients', 'fbi-design' ),
			),
			'public'       => true,
			'hierarchical' => false,
			'has_archive'  => false,
            'exclude_from_search' => true, 
            'publicly_queryable'  => false,
			'supports'     => array(
				'title',
				'editor',
				'thumbnail',
			), 
            'rewrite' => array('slug' => 'our-clients'),    
		)
	);
}
add_action( 'init', 'create_post_your_post' );




// Image size for single posts
add_image_size( 'single-post-thumbnail', 315, 160 );

// na hoeveel woorden de excpert moet worden ingeschakeld
function my_excerpt_length($length) {
return 20;
}

add_filter('excerpt_length', 'my_excerpt_length');

// verander excerpt
function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


// widgets

function footer_widgets() {
  
  register_sidebar(array(
    'name' => 'Recent Posts Footer',
    'id' => 'footer-1',
 	'description'   => 'Footer section where the recente posts are located',
    'class'         => '',
	'before_widget' => '<div class="col-sm-3 col-xs-12 moreSpace">',
	'after_widget'  => '</div>',
    'before_title' => '<h5 class="widget_title">',
    'after_title' => '</h5>',
    )
  );
  
  register_sidebar(array(
    'name' => 'Recent Comments Footer',
    'id' => 'footer-2',
 	'description'   => 'Footer section where the comment about the posts are located',
    'class'         => '',
	'before_widget' => '<div class="col-sm-3 col-xs-12 moreSpace">',
	'after_widget'  => '</div>',
    'before_title' => '<h5 class="widget_title">',
    'after_title' => '</h5>',
    )
  );
  
  register_sidebar(array(
    'name' => 'Tags Footer',
    'id' => 'footer-3',
 	'description'   => 'Footer section where the tags of the posts are located',
    'class'         => '',
	'before_widget' => '<div class="col-sm-3 col-xs-12 moreSpace">',
	'after_widget'  => '</div>',
    'before_title' => '<h5 class="widget_title">',
    'after_title' => '</h5>',
    )
  );
  
  register_sidebar(array(
    'name' => 'Thunder Text Footer',
    'id' => 'footer-4',
 	'description'   => 'Footer section where the text about "Your Site" is located',
    'class'         => '',
	'before_widget' => '<div class="col-sm-3 col-xs-12">',
	'after_widget'  => '</div>',
    'before_title' => '<h5 class="widget_title">',
    'after_title' => '</h5>',
    )
  );
  
  register_sidebar(array(
    'name' => 'Search Footer',
    'id' => 'footer-5',
 	'description'   => 'Footer section where the search bar is located',
    'class'         => '',
	'before_widget' => '<div class="col-sm-3 col-xs-12 pull-right">',
	'after_widget'  => '</div>',
    'before_title' => '<h5 class="widget_title">',
    'after_title' => '</h5>',
    )
  );
  
  // callout
  register_sidebar(array(
    'name' => 'Callout Promotion',
    'id' => 'call-out',
 	'description'   => 'widget for promotion text',
    'class'         => '',
	'before_widget' => '<div class="promotieWrapper">',
	'after_widget'  => '</div>',
    'before_title' => '<h5 class="widget_title">',
    'after_title' => '</h5>',
    )
  );
  
}
add_action('widgets_init', 'footer_widgets');

function social_widgets() {
  register_sidebar(array(
    'name' => 'Social Media Icons Footer',
    'id' => 'footer-6',
 	'description'   => 'Footer sectie waar de social media iconen instaan',
    'class'         => '',
	'before_widget' => '<div class="socialMediaIcons pull-right">',
	'after_widget'  => '</div>',
    )
  );
}
add_action('widgets_init', 'social_widgets');

add_action( 'front-page', 'storefront_featured_products', 40 );


function fbi_img_url() {
  return wp_get_attachment_url( get_post_thumbnail_id() );
}


//Exclude pages from WordPress Search
if (!is_admin()) {
function wpb_search_filter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','wpb_search_filter');
}


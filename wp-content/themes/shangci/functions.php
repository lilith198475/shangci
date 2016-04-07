<?php
require_once('wp_bootstrap_navwalker.php');
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

/* Install Theme CSS */	
function prime_theme_styles() {
	wp_enqueue_style( 'bootstrap_min_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'font_awsome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
	wp_enqueue_style( 'jasny-bootstrap', get_template_directory_uri() . '/css/jasny-bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'slider_css', get_template_directory_uri() . '/css/lightslider.css' );
	wp_enqueue_style( 'multiple-select_css', get_template_directory_uri() . '/css/multiple-select.css' );
}
add_action( 'wp_enqueue_scripts', 'prime_theme_styles' );



/* Install Theme Javascript */	

function prime_theme_js() {
     wp_enqueue_script('j-query','http://code.jquery.com/jquery.js', '', '', true);
	 wp_enqueue_script( 'bootstrap_min_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('j-query'), '', true);	
     wp_enqueue_script( 'jasny-bootstrap-js', get_template_directory_uri() . '/js/jasny-bootstrap.min.js', array('j-query'), '', true );	
     wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/customapp.js', array('jquery', 'bootstrap_min_js'), '', true );
	 wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.custom.21780.js', '', '', false);
	 wp_enqueue_script('lightslider', get_template_directory_uri() . '/js/lightslider.js', array('jquery', 'bootstrap_min_js'), '', true);
	 wp_enqueue_script('multiple-select', get_template_directory_uri() . '/js/jquery.multiple.select.js', array('jquery', 'bootstrap_min_js'), '', true);
	
	
	 
  /* if(is_page(64)) {
    wp_enqueue_script('mapjs', 'http://maps.google.com/maps/api/js?sensor=true', array('j-query'), '', false);
	 wp_enqueue_script('gmapapp', get_template_directory_uri() . '/js/gmap.js', array('mapjs'), '', true);
  }*/
}


add_action( 'wp_enqueue_scripts', 'prime_theme_js' );

/* Regist and install menu */	

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' 	=> __( 'Main Menu', 'Shangci' ),
			'Footer-about-link' => __('Footer About link','Shangci'),
			'Footer-service-link' => __('Footer Service link','Shangci'),
			'Footer-more-link' => __('Footer More link','Shangci'),
			'Footer-special-link' => __('Footer special link','Shangci'),
		)
	);

}
add_action( 'init', 'register_theme_menus' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

function strip_shortcode_gallery( $content ) {
    preg_match_all( '/' . get_shortcode_regex() . '/s', $content, $matches, PREG_SET_ORDER );

    if ( ! empty( $matches ) ) {
        foreach ( $matches as $shortcode ) {
            if ( 'gallery' === $shortcode[2] ) {
                $pos = strpos( $content, $shortcode[0] );
                if( false !== $pos ) {
                    return substr_replace( $content, '', $pos, strlen( $shortcode[0] ) );
                }
            }
        }
    }

    return $content;
}

function ancestor_category($category){
	
	if ($category->category_parent > 0)
	{
		 return $category;
	}
	else{
	ancestor_category( get_the_category_by_ID($category->category_parent));
	}
	
	
}

function ancestor_category_custom($tt, $category_name){
	$parent = get_term_by("id", $tt->parent, $category_name);	
	
	
	if($parent != true)
	{
	  return $tt;	
		
	}
	else{
		if ($parent->parent == 0)
		{
		
			return $parent;
        } 
	     ancestor_category_custom($parent,$category_name);	
	}	
}

function wpbeginner_numeric_posts_nav() {
    if( is_singular() )
        return;
    global $wp_query;
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
      return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	
    $max   = intval( $wp_query->max_num_pages );
    /** Add current page to the array */

    if ( $paged >= 1 )

        $links[] = $paged;
		
		  
   
 
    /** Add the pages around the current page to the array */

    if ( $paged >= 3 ) {

        $links[] = $paged - 1;

        $links[] = $paged - 2;
		

    }

 

    if ( ( $paged + 2 ) <= $max ) {

        $links[] = $paged + 2;

        $links[] = $paged + 1;

    }

 


 

    /** Previous Post Link */

    if ( get_previous_posts_link() )

        printf( '<li>%s</li>' . "\n", get_previous_posts_link("前一页") );

 

    /** Link to first page, plus ellipses if necessary */

    if ( ! in_array( 1, $links ) ) {

        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
		echo $class;
		

 

        if ( ! in_array( 2, $links ) )

            echo '<li>…</li>';

    }

 

    /** Link to current page, plus 2 pages in either direction if necessary */

    sort( $links );

    foreach ( (array) $links as $link ) {

        $class = $paged == $link ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );

    }

 

    /** Link to last page, plus ellipses if necessary */

    if ( ! in_array( $max, $links ) ) {

        if ( ! in_array( $max - 1, $links ) )

            echo '<li>…</li>' . "\n";

 

        $class = $paged == $max ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );

    }

 

    /** Next Post Link */

    if ( get_next_posts_link() )

        printf( '<li>%s</li>' . "\n", get_next_posts_link("后一页") );

}


/* Excerpt words*/


function excerpt_read_more_link($output, $wordnumb) {

    global $post;
 
    $output = mb_substr($output,0, $wordnumb );
       return $output . ' ...';
    
}


?>








<?php

function details_custom_excerpt_length($length) {
	return 32;
}
add_filter('excerpt_length', 'details_custom_excerpt_length');
 

 /* function details_excerpt_more($more) {
 	return sprintf('<br /><a class="read-more btn btn-primary" href="%1$s">%2$s..</a>',
 		get_permalink(get_the_ID()),
 		__('Läs mer', 'details')
 	);
 }
 add_filter('excerpt_more', 'details_excerpt_more'); */

 function details_body_classes($classes) {
 	$id = get_queried_object_id();
 	if (has_post_thumbnail($id)) {
 		$classes[] = 'has-featured-image';
 	}else{
 		$classes[] = 'no-featured-image';
 	}
 	return $classes;
 }
 add_filter('body_class', 'details_body_classes');
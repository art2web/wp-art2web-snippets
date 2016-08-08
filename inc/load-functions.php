<?php
/* =================================================================================================== */
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_stylesheet_directory_uri().'/images/favicon.png" />';
}
add_action('wp_head', 'blog_favicon');
/* =================================================================================================== */
function the_slug($echo=true){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if (is_home() || is_front_page()) {
	  if( $echo ) echo 'id="home-page-main"';
} else {
	if( $echo ) echo 'id="'.$slug.'"';
}
  do_action('after_slug', $slug);
  return $slug;
}
/* =================================================================================================== */
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');
/* =================================================================================================== */

?>

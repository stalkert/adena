<?php
define('WOOCOMMERCE_USE_CSS', false);
register_nav_menus(
		array('cart-menu'=>'Меню корзины')//'sidebar-menu'=>'sidebar-menu1'
	);

if(function_exists('register_sidebar')){
	register_sidebar(array('name' => 'woo_category'));
	register_sidebar(array('name' => 'woo_search'));
	register_sidebar(array('name' => 'feedback'));
}
define('WOOCOMMERCE_USE_CSS', false);
add_theme_support( 'woocommerce' );
function woocommerce_output_related_products() {
 woocommerce_related_products(0,0); // Показать 4 товара а 4 колонки
 }

 function my_pagenavi() {
	global $wp_query;

	$big = 999999999; // уникальное число для замены

	$args = array(
		'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
		'format' => '',
		'end_size'     => 2,
		'mid_size'     => 2,
		'prev_text'    => __('«'),
		'next_text'    => __('»'),
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages
	);

	$result = paginate_links( $args );

	// удаляем добавку к пагинации для первой страницы
	$result = str_replace( '/page/1/', '', $result );

	echo $result;
}

// Теперь, где нужно вывести пагинацию используем 
// my_pagenavi();
function get_current_URL() {
	$current_url  = 'http';
	$server_https = $_SERVER["HTTPS"];
	$server_name  = $_SERVER["SERVER_NAME"];
	$server_port  = $_SERVER["SERVER_PORT"];
	$request_uri  = $_SERVER["REQUEST_URI"];
	if ($server_https == "on") $current_url .= "s";
	$current_url .= "://";
	if ($server_port != "80") $current_url .= $server_name . ":" . $server_port . $request_uri;
	else $current_url .= $server_name . $request_uri;
	return $current_url;
}
?>
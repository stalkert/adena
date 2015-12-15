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
?>
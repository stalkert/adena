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
?>
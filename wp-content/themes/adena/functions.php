<?php
register_nav_menus(
		array('cart-menu'=>'Меню корзины')//'sidebar-menu'=>'sidebar-menu1'
	);

if(function_exists('register_sidebar')){
	register_sidebar(array('name' => 'woo_category'));
	register_sidebar(array('name' => 'woo_cart'));
}
define('WOOCOMMERCE_USE_CSS', false);
add_theme_support( 'woocommerce' );
?>
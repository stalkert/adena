<?php
if(function_exists('register_sidebar')){
	register_sidebar(array('name' => 'woo_category'));
	
}
define('WOOCOMMERCE_USE_CSS', false);
add_theme_support( 'woocommerce' );
?>
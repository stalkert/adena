<?php
/**
 * Single product short description
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;

if ( ! $post->post_excerpt ) {
	return;
}

?>
<div itemprop="description" id ="adena-short-description">
	<span id="discrip">Описание: </span><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
</div>

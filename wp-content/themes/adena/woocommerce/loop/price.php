<?php
/**
 * Loop Price
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<div class="wrapper-art-kol-price">
	<div class="artikul">
	
		<?php// do_action( 'woocommerce_product_meta_start' ); ?>
	
		<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
	
			<span class="sku_wrapper"><?php _e( 'SKU:', 'woocommerce' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : __( 'N/A', 'woocommerce' ); ?></span></span>
	
		<?php endif; ?>
	
		<?php //echo $product->get_categories( ', ', '<span class="posted_in">' . _n( 'Бренд: ', 'Categories:', $cat_count, 'woocommerce' ) . ' ', '</span>' ); ?>
	
		<?php //echo $product->get_tags( ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', $tag_count, 'woocommerce' ) . ' ', '</span>' ); ?>
	
		<?php //do_action( 'woocommerce_product_meta_end' ); ?>
	
	</div>
	<div class="kolekciya">
		<?php
			$cur_terms = get_the_terms( $post->ID, 'pa_kolekciya' );
			if($cur_terms){
			foreach($cur_terms as $cur_term){
				
					echo '<p> Коллекция: <span class="sku">'.$cur_term->name.'</span></p>';
					}
			
		}
	?>
	
		
	</div>
	
	
	
	<?php if ( $price_html = $product->get_price_html() ) : ?>
		<span class="price"><?php echo $price_html; ?></span>
	<?php endif; ?>
	<div class="cena-za-upakovku" >
		<?php
			$cur_terms = get_the_terms( $post->ID, 'pa_cena-za-upakovku' );
			if($cur_terms){
			foreach($cur_terms as $cur_term){
				
					echo '<span class="sku">'.$cur_term->name.'</span>';
					}
			
		}
	?>
	
		
	</div>
</div>
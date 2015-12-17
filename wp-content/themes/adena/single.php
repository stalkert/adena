<?php get_header(); ?> 
    
	<div class="container"> 	
		<div class="row">
			<div id="category" class="col-md-3 col-sm-3 col-xs-12">Категории</div>	
			
				
		</div>
         <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12" id="category-list">
				<ul  class="nav">
					<li><a href="<?php echo get_term_link(11,'product_cat'); ?>"><?php echo get_term(11,'product_cat')->name; ?></a></li>
					<li><a href="<?php  echo get_term_link(12,'product_cat'); ?>"><?php echo get_term(12,'product_cat')->name; ?></a></li>
					<li><a href="<?php  echo get_term_link(13,'product_cat'); ?>"><?php echo get_term(13,'product_cat')->name; ?></a></li>
					<li><a href="<?php  echo get_term_link(14,'product_cat'); ?>"><?php echo get_term(14,'product_cat')->name; ?></a></li>
					<li><a href="<?php  echo get_term_link(15,'product_cat'); ?>"><?php echo get_term(11,'product_cat')->name; ?></a></li>
				</ul>
				
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('woo_category')) : ?>
					
				<?php endif; ?>
             </div>
			 <div class="col-md-9 col-sm-9 col-xs-12" id="item-list">
				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>			
				<?php endif; ?>
             </div>
                
        </div>

        </div>
    <?php get_footer(); ?>  
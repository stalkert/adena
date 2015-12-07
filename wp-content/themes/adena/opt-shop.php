<?php /*
Template Name: opt-shop
*/
get_header(); ?> 
    
	<div class="container"> 	
		
         <div class="row">
            <?php get_sidebar();?>
			 <div class="col-md-9" id="item-list">
				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>			
				<?php endif; ?>
             </div>
                
        </div>

        </div>
    <?php get_footer(); ?>     
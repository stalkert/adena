<?php get_header(); ?> 
    
	<div class="container"> 	
		
			 <div class="col-md-12" id="item-list">
				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>			
				<?php endif; ?>
             </div>
                
        </div>

        </div>
    <?php get_footer(); ?>   
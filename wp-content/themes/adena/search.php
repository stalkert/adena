<?php get_header(); ?> 	
	<div class="container"> 	
		
         <div class="row">
            <?php get_sidebar();?>
			 <div class="col-md-9 col-sm-9 col-xs-12" id="item-list">
			 
				<?php woocommerce_content();?>
             </div>

                
        </div>

        </div>
    <?php get_footer(); ?>   
<div class="col-md-3 col-sm-3 col-xs-12" >
		<div id="category-list">
			<h1 id="brends">БРЕНДЫ</h1>
				<ul  class="nav">
					<li><a href="<?php echo get_term_link(11,'product_cat'); ?>"><?php echo get_term(11,'product_cat')->name; ?></a></li>
					<li><a href="<?php  echo get_term_link(12,'product_cat'); ?>"><?php echo get_term(12,'product_cat')->name; ?></a></li>
					<li><a href="<?php  echo get_term_link(13,'product_cat'); ?>"><?php echo get_term(13,'product_cat')->name; ?></a></li>
					<li><a href="<?php  echo get_term_link(14,'product_cat'); ?>"><?php echo get_term(14,'product_cat')->name; ?></a></li>
					<li><a href="<?php  echo get_term_link(74,'product_cat'); ?>"><?php echo get_term(74,'product_cat')->name; ?></a></li>
					<li><a href="<?php  echo get_term_link(15,'product_cat'); ?>"><?php echo get_term(15,'product_cat')->name; ?></a></li>
					<li><a href="<?php  echo get_term_link(73,'product_cat'); ?>"><?php echo get_term(73,'product_cat')->name; ?></a></li>
				</ul>
             </div>
			 <div id="filtr">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('woo_category')) : ?>
					
				<?php endif; ?>
			 </div>
		</div>

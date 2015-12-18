/**
 * Created by ITaranenko on 8/17/2015.
 */
$(document).ready(function(){
	 var checked_item = [];
        $('.berocket_aapf_widget').before('<button class="clear-filtr-display-none" id="clear-filtr">Очистить все фильтры</button>');
	var login = $('.woocommerce>h2').html();
	
	if(login ==='Авторизация'){
		$('#category-list').remove();
		console.log('/optovym-pokupatelyam');
		$("input[name='_wp_http_referer']").val('/optovym-pokupatelyam');
	}
	$('.bxslider').bxSlider({
	  mode: 'fade',
	  adaptiveHeight: true,
	  auto:true,
	  pause:8000,
	  speed:1000,
		captions: true
	});
	
	$('#partners a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	});
	$('#search-handler').click(function(){
		$('#search').slideToggle('slow');
	});
	 $(".single_add_to_cart_button").click(function(){ 
		var koordCart = $('.wpmenucart-icon-shopping-cart-0').offset();
		
		var koordImg = $('img.attachment-shop_single').offset();
		
             $("img.attachment-shop_single").clone().css({'position' : 'absolute', 'z-index' : '100','height':'300px','width':'auto'}).prependTo(".images").animate({
				 opacity: 0.5,
				 top: -(koordImg.top-koordCart.top),
				 left:koordCart.left-koordImg.left,
				 width: 50,height: 50}, 700, function() {  
                    $(this).remove();  
              });  
         }); 
	 $('.berocket_aapf_widget input').on("change", function(){
	 		
	 	$('.berocket_aapf_widget input').each(function(){
                
                
                if($(this).prop('checked')){
                    checked_item.push(1);
                    }
            });
	 	console.log(checked_item);
            if(checked_item){
                $('#clear-filtr').removeClass('clear-filtr-display-none');
            }else{
                $('#clear-filtr').addClass('clear-filtr-display-none');
            }
	 });
	 
});
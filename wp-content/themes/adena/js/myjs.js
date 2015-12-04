/**
 * Created by ITaranenko on 8/17/2015.
 */
$(document).ready(function(){
	var login = $('.woocommerce>h2').html();
	
	if(login ==='Авторизация'){
		$('#category-list').remove();
		console.log('/optovym-pokupatelyam');
		$("input[name='_wp_http_referer']").val('/optovym-pokupatelyam');
	}
	$('.bxslider').bxSlider({
	  mode: 'fade',
	  adaptiveHeight: true,
	  
		captions: true
	});
	
	$('#partners a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	});
	$('#search-handler').click(function(){
		$('#search').slideToggle('slow');
	});
	
});
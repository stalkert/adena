/**
 * Created by ITaranenko on 8/17/2015.
 */
$(document).ready(function(){
	var login = $('.woocommerce>h2').html();
	console.log(login);
	if(login ==='Авторизация'){
		$('#category-list').remove();
	}
	$('.bxslider').bxSlider({
	});
	
	$('#partners a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	});
	$('#search-handler').click(function(){
		$('#search').slideToggle('slow');
	});
	
});
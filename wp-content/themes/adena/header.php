<!DOCTYPE html>
<html>
<head lang="ru">
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="https://rawgit.com/codefucker/finalReject/master/reject/reject.css" media="all" />
	<script type="text/javascript" src="https://rawgit.com/codefucker/finalReject/master/reject/reject.min.js"></script>
	<![endif]-->
     <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<link href='https://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo( 'template_url' ); ?>/css/jquery.bxslider.css" rel="stylesheet">
    
	<?php wp_head();?>
	<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">
    

</head>
<body>
<div id="wrapper-futer-bottom">
<div id="wrapper-content">
<div class="wrapper-bg">
    <div class="container">
        <div class="row padding5">
            <div  id="login" class="col-md-6  col-sm-6 col-xs-6 green-color">
             <?php if ( is_user_logged_in() ) {
							echo '<a href="'.get_permalink(11).'">Мои заказы</a>';   
						}else{
							echo '<a href="'.get_permalink(11).'">Вход в аккаунт</a>';  
						}?> &nbsp  &nbsp  &nbsp  
			<a href="<?php echo get_permalink(32);?>">Запрос доступа</a> 	
            </div>
			<div  id="logout" class="col-md-6 col-sm-6 col-xs-6 green-color">
			<?php if ( is_user_logged_in() ) {
							echo '<span>Вы вошли как </span><span id="login-user">'.wp_get_current_user()->user_login.'</span> &nbsp  &nbsp  &nbsp <a href="'.get_permalink(11).'/customer-logout/">Выход</a>';  
						}?>
             	
            </div>
		</div>		
    </div>
</div>
	<div class="row gray-line">
            
    </div>
<div class="wrapper-bg">
    <div class="container ">    
        <div class="row padding10">
			<div  id="logo" class="col-md-2 col-sm-2">
             <img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png"> 	
            </div>
            <ul id="navbar" class="nav navbar-nav col-md-7 col-sm-9 ">
                <li class="<?php if(get_permalink()==get_permalink(14)){echo 'active';}; ?>"><a href="<?php bloginfo( 'url' ); ?>">Главная</a></li>
                <li class="<?php if(get_current_URL()==get_page_link(16)||get_current_URL()==get_page_link(8)){echo 'active';}; ?>"><a href="<?php if ( is_user_logged_in() ) {
							echo get_permalink(16);
						}else{
						echo get_permalink(11);
						};?>">Оптовым покупателям</a></li>
                 <li class="<?php if(get_current_URL()==get_page_link(169)){echo 'active';}; ?>"><a href="<?php echo get_permalink(169)?>">Контакты</a></li>
                 <li class="<?php if(get_current_URL()==get_page_link(171)){echo 'active';}; ?>"><a href="<?php echo get_permalink(171)?>">Где купить</a></li>
            </ul>
			<div  id="shopping-cart" class="col-md-2 col-sm-2 col-xs-12">
				
					<i class="glyphicon glyphicon-search gray-color" id="search-handler"></i>
					<?php wp_nav_menu(array('theme_location' => 'cart-menu'));?>
				
				
			</div>
		</div>
		<div class="row" id="search">
			<div class="input-group col-md-8 col-md-offset-2 col-sm-10 col-xs-10">
				
					
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('woo_search')) : ?>
					
					<?php endif; ?>
					
				</div>
			</div>
		</div>
	</div>

<?php exit;?>a:3:{s:8:"template";a:6:{i:0;s:70:"/home/linuxer/dev/web_chinas/store/themes/default/category_top_all.dwt";i:1;s:77:"/home/linuxer/dev/web_chinas/store/themes/default/library/new_page_header.lbi";i:2;s:69:"/home/linuxer/dev/web_chinas/store/themes/default//library/js_sdk.lbi";i:3;s:78:"/home/linuxer/dev/web_chinas/store/themes/default/library/new_search_small.lbi";i:4;s:72:"/home/linuxer/dev/web_chinas/store/themes/default/library/new_search.lbi";i:5;s:77:"/home/linuxer/dev/web_chinas/store/themes/default/library/new_page_footer.lbi";}s:7:"expires";i:1580396644;s:8:"maketime";i:1580393044;}<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="description" content="CoolStore la mejor tienda en linea"/>
    <meta name="keywords" content="CoolStore"/>
    <title>Todas las categorias</title>
    <link rel="stylesheet" href="/themes/default/statics/css/ectouch.css" />
    <script type="text/javascript" >var tpl = '/themes/default';</script>
    
	</head>
<body style="max-width:640px;">
<div id="loading"><img src="/themes/default/statics/img/loading.gif" /></div>
<div class="con" >
	<div class="category-top">
	<header>
		<section class="search">
			<div class="text-all  text-all-back j-text-all">
				<div class="input-text n-input-text i-search-input">
					<a class="a-search-input j-search-input" href="javascript:void(0)"></a>
					<i class="iconfont icon-sousuo"></i>
					<input type="text" placeholder="Buscar" />
					<i class="iconfont icon-guanbi is-null j-is-null"></i>
				</div>
			</div>
		</section>
	</header>
</div>	<aside>
		<div class="menu-left scrollbar-none" id="sidebar">
			<ul>
								<li  class="active">Computadora</li>
								<li >Comunicación</li>
							</ul>
		</div>
	</aside>
		<section class="menu-right padding-all j-content">
													<h5>Computadora</h5>
				<ul>
									<li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(2);'></a>
					<img src="http://192.168.43.13/data/attached/images/201805/thumb_img/1_thumb_G_1526429499181.jpg" /><span>Ratón</span></li>
									<li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(3);'></a>
					<img src="http://192.168.43.13/data/attached/images/201805/thumb_img/2_thumb_G_1526429627326.jpg" /><span>Auriculares</span></li>
								</ul>
																						</section>
		<section class="menu-right padding-all j-content" style="display:none">
													<h5>Comunicación</h5>
				<ul>
									<li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(5);'></a>
					<img src="http://192.168.43.13/data/attached/images/201805/thumb_img/3_thumb_G_1526429781740.jpg" /><span>Celular</span></li>
									<li class="w-3"><a href="javascript:void(0);" onclick='javascript:redirect_list(6);'></a>
					<img src="http://192.168.43.13/data/attached/images/201805/thumb_img/4_thumb_G_1526430080529.jpg" /><span>Reloj inteligente</span></li>
								</ul>
																						</section>
	</div>
<footer class="footer-nav dis-box">
				<a href="/index.php?m=default&c=index&a=index&u=1" class="box-flex nav-list">
					<i class="nav-box i-home"></i><span>Inicio</span>
				</a>
				<a href="/index.php?m=default&c=category&a=top_all&u=1" class="box-flex nav-list active">
					<i class="nav-box i-cate"></i><span>Categoría</span>
				</a>
				
				<a href="/index.php?m=default&c=flow&a=cart&u=1" class="box-flex position-rel nav-list">
					<i class="nav-box i-flow"></i><span>Carrito</span>
				</a>
				<a href="/index.php?m=default&c=user&a=index&u=1" class="box-flex nav-list">
					<i class="nav-box i-user"></i><span>Cuenta</span>
				</a>
		</footer>	
<div class="search-div ts-3">
	<section class="search">
		<form action="/index.php?m=default&c=category&a=index&u=1" method="post">
		<div class="text-all dis-box j-text-all">
			<a class="a-icon-back j-close-search" href="javascript:history.go(-1)"><i class="iconfont icon-jiantou is-left-font"></i></a>
			<div class="box-flex input-text">
				<input class="j-input-text" type="text" name="name" placeholder="Buscar" id="newinput"/ >
				<i class="iconfont icon-guanbi2 is-null j-is-null"></i>
			</div>
			<button type="submit" class="btn-submit">Buscar</button>
		</div>
		</form>
	</section>
	<section class="search-con">
		<div class="swiper-scroll history-search">
			<div class="swiper-wrapper">
			<div class="swiper-slide">
		<p>
			<label class="fl">Búsquedas populares</label>
		</p>
		<ul class="hot-search a-text-more">
					</ul>
		<p class="hos-search">
			<label class="fl">Borrar historial</label>
			<span class="fr" onclick="javascript:clearHistroy();"><i class="iconfont icon-xiao10 is-xiao10 jian-top fr"></i></span>
		</p>
		
			<ul class="hot-search a-text-more a-text-one" id="search_histroy">
							</ul>
			</div>
			</div>
			<div class="swiper-scrollbar"></div>
		</div>
	</section>
	<footer class="close-search j-close-search">
		Click para cerrar
	</footer>
</div>
<script type="text/javascript">
//设置cookie
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}
function clearHistroy(){
	setCookie('ECS[keywords]', '', -1);
	document.getElementById("search_histroy").style.visibility = "hidden";
}
</script>
<script type="text/javascript" src="/themes/default/statics/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/themes/default/statics/js/swiper.min.js"></script>
<script type="text/javascript" src="/themes/default/statics/js/ectouch.js"></script>
<script type="text/javascript" src="/data/assets/js/jquery.json.js"></script>
<script type="text/javascript" src="/themes/default/statics/js/jquery-ui-1.10.1.custom.min.js"></script>
<script type="text/javascript" src="/themes/default/statics/js/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="/themes/default/statics/js/jquery.scrollUp.min.js"></script>
<script type="text/javascript" src="/themes/default/statics/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="/data/assets/js/common.js"></script>
<script type="text/javascript">
	$(function($){
		$('#sidebar ul li').click(function(){
			$(this).addClass('active').siblings('li').removeClass('active');
			var index = $(this).index();
			$('.j-content').eq(index).show().siblings('.j-content').hide();
			$(window).scrollTop(0);
		})
	})
	
	function redirect_list(id){
		localData.remove('cat_'+ id +'_page');
		localData.remove('cat_'+ id +'_page_min');
		localData.remove('cat_'+ id +'_page_max');
		window.location.href = 'index.php?c=category&id=' + id+ '&u=1';
	}
</script>
</body>
</html>
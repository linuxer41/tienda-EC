<?php echo $this->fetch('library/new_page_header.lbi'); ?>
<header class="dis-box header-menu b-color color-whie"><a class="" href="javascript:history.go(-1)"><i class="iconfont icon-jiantou"></i></a>
	<h3 class="box-flex">Mi billetera</h3>
	<p><i class="iconfont icon-pailie j-nav-box"></i></p>
</header>
<div class="j-nav-content">
	<ul class="dis-box new-footer-box">
		<li class="box-flex">
			<a href="<?php echo url('index/index');?>" class="nav-cont"><i class="nav-box"><img src="__TPL__/statics/img/home.png"></i><span>inicio</span></a>
		</li>
		<li class="box-flex">
			<a href="<?php echo url('category/top_all');?>" class="nav-cont"><i class="nav-box"><img src="__TPL__/statics/img/cate.png"></i><span>Categoría</span></a>
			<li class="box-flex"><a href="javascript:;" class="nav-cont j-search-input"><i class="nav-box"><img src="__TPL__/statics/img/search.png"></i><span>Buscar</span></a></li>
			<li class="box-flex"><a href="<?php echo url('flow/cart');?>" class="nav-cont"><i class="nav-box"><img src="__TPL__/statics/img/flow.png"></i><span>Carrito</span></a></li>
			<li class="box-flex"><a href="<?php echo url('user/index');?>" class="nav-cont"><i class="nav-box"><img src="__TPL__/statics/img/user.png"></i><span>Cuenta</span></a></li>
	</ul>
</div>
<section class="purse-header-box text-center purse-f">
	<p>Saldo disponible:</p>
	<h2><?php echo $this->_var['surplus_amount']; ?></h2>
	<img src="__TPL__/statics/img/pur-bg.png">
	<div class="user-pur-box">
		<div class="user-nav-1-box g-s-i-title-4 dis-box text-center">
			<a href="<?php echo url('User/account_deposit');?>" class="box-flex">
				<h4 class="ellipsis-one purse-f"><i class="iconfont icon-money is-money-color"></i><?php echo $this->_var['lang']['surplus_type_0']; ?></h4>
			</a>
			<a href="<?php echo url('User/account_raply');?>" class="box-flex">
				<h4 class="ellipsis-one purse-f"><i class="iconfont icon-wodetixian is-money-color"></i><?php echo $this->_var['lang']['surplus_type_1']; ?></h4>
			</a>
		</div>
	</div>
</section>
<section class="b-color-f my-nav-box m-top10">
	<a href="<?php echo url('User/account_list');?>">
		<div class="dis-box padding-all my-bottom">
			<h3 class="box-flex text-all-span my-u-title-size"><?php echo $this->_var['lang']['add_surplus_log']; ?></h3>
			<span class="t-jiantou"><i class="iconfont icon-jiantou tf-180 jian-top"></i></span>
		</div>
	</a>
	<a href="<?php echo url('User/account_log');?>">
		<div class="dis-box padding-all my-bottom">
			<h3 class="box-flex text-all-span my-u-title-size"><?php echo $this->_var['lang']['view_application']; ?></h3>
			<span class="t-jiantou"><i class="iconfont icon-jiantou tf-180 jian-top"></i></span>
		</div>
	</a>
</section>
<?php echo $this->fetch('library/new_search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>

</html>
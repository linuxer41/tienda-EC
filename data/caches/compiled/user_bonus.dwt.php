<?php echo $this->fetch('library/new_page_header.lbi'); ?>
	<header class="dis-box header-menu b-color color-whie"><a class="" href="javascript:history.go(-1)"><i class="iconfont icon-jiantou"></i></a>
		<h3 class="box-flex">bonus</h3>
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
<div class="user-account-detail user-bonus">
   <?php if ($this->_var['bonus']): ?>
  <ul>
	<?php $_from = $this->_var['bonus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
    <li>
		<p class="title"><?php echo $this->_var['lang']['bonus_sn']; ?>：<?php echo empty($this->_var['item']['bonus_sn']) ? 'N/A' : $this->_var['item']['bonus_sn']; ?><span class="pull-right"><?php echo $this->_var['item']['status']; ?></span></p>
		
		<p class="content"><span class="remark pull-left"><?php echo $this->_var['lang']['bonus_amount']; ?>：<?php echo $this->_var['item']['type_money']; ?></span> <span class="pull-right text-right type"><?php echo $this->_var['lang']['bonus_name']; ?>：<?php echo $this->_var['item']['type_name']; ?></span></p>
		<p class="content"><span class="remark pull-left"><?php echo $this->_var['lang']['min_goods_amount']; ?>：<?php echo $this->_var['item']['min_goods_amount']; ?></span> <span class="pull-right text-right type"><?php echo $this->_var['lang']['bonus_end_date']; ?>：<?php echo $this->_var['item']['use_enddate']; ?></span></p>
	</li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
  </div>
<?php echo $this->fetch('library/page.lbi'); ?> 
   <?php else: ?>  
	<div class="ect-margin-tb ect-pro-list ect-margin-bottom0 ect-border-bottom0">
		  	<div class="no-div-message flow-no-cart">
			<i class="iconfont icon-biaoqingleiben"></i>
			<p>Estimado, no tienes Bonus ~!</p>
		</div>		
	</div>
   <?php endif; ?>
  <form name="addBonus" action="<?php echo url('user/bonus');?>" method="post" onSubmit="return addBonus()" class="form-inline bonus-form-inline" role="form">
				<section class="user-forget-tel margin-lr">
					<div class="text-all j-text-all" name="userpassworddiv">
						<div class="input-text input-check n-b-hongbao b-color-f">
							<input type="text" class="j-input-text" name="bonus_sn" placeholder="<?php echo $this->_var['lang']['bonus_number']; ?>"/>
							<i class="iconfont icon-guanbi2 is-null j-is-null"></i>
						</div>
					</div>
					<input type="hidden" name="uid" value="">
					<button type="submit" class="btn-submit"><?php echo $this->_var['lang']['add_bonus']; ?></button>
				</section>
			</form>
  <script type="text/javascript">
  	var bonus_sn_empty = "<?php echo $this->_var['lang']['bonus_sn_empty']; ?>";
  	var bonus_sn_error = "<?php echo $this->_var['lang']['bonus_sn_error']; ?>";
  </script>
  <script type="text/javascript" src="__PUBLIC__/js/user.js"></script>
<?php echo $this->fetch('library/new_search.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
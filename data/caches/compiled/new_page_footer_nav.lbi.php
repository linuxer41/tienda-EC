<div class="filter-btn dis-box">
	<a class="filter-btn-kefu filter-btn-a" href="https://eco-api.meiqia.com/dist/standalone.html?eid=4283"><i class="iconfont icon-kefu"></i><em>Servicio al cliente</em></a>
	<a href="<?php echo url('flow/cart');?>" class="filter-btn-flow filter-btn-a"><i class="iconfont icon-gouwuche"></i><sup class="b-color" id='total_number'><?php if ($this->_var['seller_cart_total_number']): ?><?php echo $this->_var['seller_cart_total_number']; ?><?php else: ?>0<?php endif; ?></sup><em>Carrito</em></a>
	<a type="button" class="btn-cart box-flex n-iphone5-top1 j-goods-attr j-show-div" >Al carrito</a>
	<a type="button" class="btn-submit box-flex n-iphone5-top1 j-goods-attr j-show-div">Comprar</a>
</div>
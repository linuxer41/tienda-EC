<section class="product-sequence dis-box">
	<a class="box-flex<?php if ($this->_var['sort'] == 'goods_id'): ?> active<?php endif; ?> a-change" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'type'=>$this->_var['type'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'', 'order'=> '', 'keywords'=>$this->_var['keywords']));?>"><?php echo $this->_var['lang']['sort_default']; ?></a>
	<a class="box-flex<?php if ($this->_var['sort'] == 'sales_volume'): ?> active<?php endif; ?><?php if ($this->_var['sort'] == 'sales_volume' && $this->_var['order'] == 'ASC'): ?> a-change<?php endif; ?>" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'type'=>$this->_var['type'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'sales_volume', 'order'=> ($this->_var['sort']=='sales_volume' && $this->_var['order']=='ASC')?'DESC':'ASC', 'keywords'=>$this->_var['keywords']));?>"><?php echo $this->_var['lang']['sort_sales']; ?><i class="iconfont icon-xiajiantou"></i></a>
	<a class="box-flex<?php if ($this->_var['sort'] == 'click_count'): ?> active<?php endif; ?><?php if ($this->_var['sort'] == 'click_count' && $this->_var['order'] == 'ASC'): ?> a-change<?php endif; ?>" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'type'=>$this->_var['type'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'click_count', 'order'=> ($this->_var['sort']=='click_count' && $this->_var['order']=='ASC')?'DESC':'ASC', 'keywords'=>$this->_var['keywords']));?>"><?php echo $this->_var['lang']['sort_popularity']; ?><i class="iconfont icon-xiajiantou"></i></a>
	<a class="box-flex<?php if ($this->_var['sort'] == 'shop_price'): ?> active<?php endif; ?><?php if ($this->_var['sort'] == 'shop_price' && $this->_var['order'] == 'ASC'): ?> a-change<?php endif; ?>" href="<?php echo url('category/index#goods_list',array('id'=>$this->_var['id'],'display'=>$this->_var['display'],'brand'=>$this->_var['brand_id'],'type'=>$this->_var['type'],'price_min'=>$this->_var['price_min'],'price_max'=>$this->_var['price_max'],'filter_attr'=>$this->_var['filter_attr'], 'sort'=>'shop_price', 'order'=> ($this->_var['sort']=='shop_price' && $this->_var['order']=='ASC')?'DESC':'ASC', 'keywords'=>$this->_var['keywords']));?>"><?php echo $this->_var['lang']['sort_price']; ?><i class="iconfont icon-xiajiantou"></i></a>
	<a href="#j-filter-div" class="box-flex s-filter j-s-filter">Filtrar</a>
	<!--
	<a class="a-sequence j-a-sequence"><i class="iconfont icon-pailie" data="1"></i></a>-->
</section>
<?php if ($this->_var['not_keyword'] == 1): ?>
<div id="hide-div" class="n-cate-box-1">
	<p>No ingres� una palabra clave v�lida</p>
	<span>Recomendado para ti</span>
</div>
<?php endif; ?>
<section class="product-list j-product-list product-list-medium" data="1">
	<ul id="j-product-box">
		<script id="j-product" type="text/html">
		{{each list as vo i}}
		<li>
			<div class="product-div">
				<a class="product-div-link" href="{{vo.url}}"></a>
				<img class="product-list-img"  src="{{vo.goods_thumb}}" />
				<div class="product-text">
					<h4>{{vo.goods_name}}</h4>
					<p class="dis-box p-t-remark"><span class="box-flex">Inventario{{vo.goods_number}}<?php echo $this->_var['category']['measure_unit']; ?></span><!--<span class="box-flex">销量：{{vo.sales_count}}<?php echo $this->_var['category']['measure_unit']; ?></span>--></p>
					<p><span class="p-price t-first ">{{vo.shop_price}}<small><del>{{vo.market_price}}</del></small></span></p>
					<a href="javascript:addCart({{vo.goods_id}})" class="icon-flow-cart fr j-goods-attr" style="display:None"><i class="iconfont icon-gouwuche"></i></a>
				</div>
			</div>
		</li>
		{{/each}}
		</script>
		<?php if ($this->_var['is_show'] == 1): ?>
		<div class="no-div-message">
			<i class="iconfont icon-biaoqingleiben"></i>
			<p>Estimado, no hay contenido aqui!</p>
		</div>
		<?php endif; ?>
	</ul>
</section>

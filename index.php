<?php

	include './head.html';
	$goods = array(
		0=>array('img'=>'1.jpg','name'=>'美丽人妻','price'=>"18888"),
		1=>array('img'=>'2.jpg','name'=>'浪漫人妻','price'=>"28888"),
		2=>array('img'=>'3.jpg','name'=>'女神人妻','price'=>"38888"),
		3=>array('img'=>'4.jpg','name'=>'人妻','price'=>"8888"),
		4=>array('img'=>'5.jpg','name'=>'帅气男神','price'=>"188888"),
		5=>array('img'=>'6.jpg','name'=>'帅气老男人','price'=>"88"),
	);
	// var_dump($goods);
?>
<div id="goods">
	<h2>发现好货</h2>
	<hr />
	<div id="goods_z">

		<!-- php高级分离技术 -->
		<?php foreach($goods as $value)  {?>
		<div class="goods_z_1">
			<a href=""><img src="./img/<?php echo $value['img']?>" width="80" height="80" /></a><br/><br/>
			商品名称: <a href=""><?php echo $value['name']?></a><br/>
			商品价格: $<?php echo $value['price']?><br/>
			<a href=""><u>放入购物车</u></a>

		</div>
		<?php } ?>




	</div>
</div>
<?php
	include './foot.html';
?>
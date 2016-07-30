<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>商品详细页面</title>
	<link rel="stylesheet" href="/shop/Public/css/base.css" type="text/css" />
	<link rel="stylesheet" href="/shop/Public/css/shop_common.css" type="text/css" />
	<link rel="stylesheet" href="/shop/Public/css/shop_header.css" type="text/css" />
	<link rel="stylesheet" href="/shop/Public/css/shop_list.css" type="text/css" />
    <link rel="stylesheet" href="/shop/Public/css/shop_goods.css" type="text/css" />
    <script type="text/javascript" src="/shop/Public/js/jquery.js" ></script>
    <script type="text/javascript" src="/shop/Public/js/topNav.js" ></script>
    <script type="text/javascript" src="/shop/Public/js/shop_goods.js" ></script>
</head>
<body>
	<!-- Header  -wll-2013/03/24 -->
<div class="shop_hd">
	<!-- Header TopNav -->
	<div class="shop_hd_topNav">
		<div class="shop_hd_topNav_all">
			<!-- Header TopNav Left -->
			<div class="shop_hd_topNav_all_left">
				<p>您好，欢迎来到<b><a href="/shop/index.php/home/goods/index">XXXX商城</a></b>
				<?php if($_SESSION['user']== null): ?>[<a href="/shop/index.php/home/Login/index">登录</a>][<a href="/shop/index.php/home/Register/index">注册</a>]
   				<?php else: ?>
   					 [<a href=""><?php echo ($_SESSION['user']['user_name']); ?></a>]
   					 [<a href="/shop/index.php/home/goods/logout">退出</a>]<?php endif; ?>

				</p>

			</div>
			<!-- Header TopNav Left End -->

			<!-- Header TopNav Right -->
			<div class="shop_hd_topNav_all_right">
				<ul class="topNav_quick_menu">

					<li>
						<div class="topNav_menu">
							<a href="#" class="topNavHover">我的商城<i></i></a>
							<div class="topNav_menu_bd" style="display:none;" >
					            <ul>
					              <li><a title="已买到的商品" target="_top" href="#">已买到的商品</a></li>
					              <li><a title="个人主页" target="_top" href="#">个人主页</a></li>
					              <li><a title="我的好友" target="_top" href="#">我的好友</a></li>
					            </ul>
					        </div>
						</div>
					</li>
                                            <li>
						<div class="topNav_menu">
							<a href="#" class="topNavHover">卖家中心<i></i></a>
							<div class="topNav_menu_bd" style="display:none;">
					            <ul>
					              <li><a title="已售出的商品" target="_top" href="#">已售出的商品</a></li>
					              <li><a title="销售中的商品" target="_top" href="#">销售中的商品</a></li>
					            </ul>
					        </div>
						</div>
					</li>

					<li>
						<div class="topNav_menu">
							<a href="#" class="topNavHover">购物车<b>0</b>种商品<i></i></a>
							<div class="topNav_menu_bd" style="display:none;">
								<!--
					            <ul>
					              <li><a title="已售出的商品" target="_top" href="#">已售出的商品</a></li>
					              <li><a title="销售中的商品" target="_top" href="#">销售中的商品</a></li>
					            </ul>
					        	-->
					            <p>还没有商品，赶快去挑选！</p>
					        </div>
						</div>
					</li>

					<li>
						<div class="topNav_menu">
							<a href="#" class="topNavHover">我的收藏<i></i></a>
							<div class="topNav_menu_bd" style="display:none;">
					            <ul>
					              <li><a title="收藏的商品" target="_top" href="#">收藏的商品</a></li>
					              <li><a title="收藏的店铺" target="_top" href="#">收藏的店铺</a></li>
					            </ul>
					        </div>
						</div>
					</li>

					<li>
						<div class="topNav_menu">
							<a href="#">站内消息</a>
						</div>
					</li>

				</ul>
			</div>
			<!-- Header TopNav Right End -->
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<!-- Header TopNav End -->

	<!-- TopHeader Center -->
	<div class="shop_hd_header">
		<div class="shop_hd_header_logo"><h1 class="logo"><a href="/"><img src="/shop/Public/images//logo.png" alt="ShopCZ" /></a><span>ShopCZ</span></h1></div>
		<div class="shop_hd_header_search">
                        <ul class="shop_hd_header_search_tab">
		        <li id="search" class="current">商品</li>
		        <li id="shop_search">店铺</li>
		    </ul>
                        <div class="clear"></div>
		    <div class="search_form">
		    	<form method="post" action="index.php">
		    		<div class="search_formstyle">
		    			<input type="text" class="search_form_text" name="search_content" value="搜索其实很简单！" />
		    			<input type="submit" class="search_form_sub" name="secrch_submit" value="" title="搜索" />
		    		</div>
		    	</form>
		    </div>
                        <div class="clear"></div>
		    <div class="search_tag">
		    	<a href="">李宁</a>
		    	<a href="">耐克</a>
		    	<a href="">Kappa</a>
		    	<a href="">双肩包</a>
		    	<a href="">手提包</a>
		    </div>

		</div>
	</div>
	<div class="clear"></div>
	<!-- TopHeader Center End -->

	<!-- Header Menu -->
	<div class="shop_hd_menu">
		<!-- 所有商品菜单 -->
                    
		<div class="shop_hd_menu_all_category <?php if(($index) == "true"): ?>shop_hd_menu_hover<?php endif; ?>" <?php if(($index) != "true"): ?>id="shop_hd_menu_all_category"<?php endif; ?>><!-- 首页去掉 id="shop_hd_menu_all_category" 加上clsss shop_hd_menu_hover -->
			<div class="shop_hd_menu_all_category_title"><h2 title="所有商品分类"><a href="javascript:void(0);">所有商品分类</a></h2><i></i></div>
			<div id="shop_hd_menu_all_category_hd" class="shop_hd_menu_all_category_hd">
				<ul class="shop_hd_menu_all_category_hd_menu clearfix">
					<!-- 单个菜单项 -->
					<?php if(is_array($cats)): $k = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k < 8): ?><li id="cat_1" class="">
						<h3><a href="/shop/index.php/home/Category/index/id/<?php echo ($vo["cat_id"]); ?>" title="<?php echo ($vo["cat_name"]); ?>"><?php echo ($vo["cat_name"]); ?></a></h3>
						
						<div id="cat_1_menu" class="cat_menu clearfix" style="">
							<?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><dl class="clearfix">
								<dt><a href="/shop/index.php/home/Category/index/id/<?php echo ($vo1["cat_id"]); ?>"><?php echo ($vo1["cat_name"]); ?></a></dt>
								<dd>
									<?php if(is_array($vo1["child"])): $i = 0; $__LIST__ = $vo1["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><a href="/shop/index.php/home/Category/index/id/<?php echo ($vo2["cat_id"]); ?>"><?php echo ($vo2["cat_name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
								</dd>
							</dl><?php endforeach; endif; else: echo "" ;endif; ?>                                                     
						</div>
						
					</li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
					<!-- 单个菜单项 End -->
					
                    <li class="more"><a href="">查看更多分类</a></li>
				</ul>
			</div>
		</div>
		<!-- 所有商品菜单 END -->

		<!-- 普通导航菜单 -->
		<ul class="shop_hd_menu_nav">
			<li class="current_link"><a href="__MODUEL__/index/index"><span>首页</span></a></li>
			<li class="link"><a href=""><span>团购</span></a></li>
			<li class="link"><a href=""><span>品牌</span></a></li>
			<li class="link"><a href=""><span>优惠卷</span></a></li>
			<li class="link"><a href=""><span>积分中心</span></a></li>
			<li class="link"><a href=""><span>运动专场</span></a></li>
			<li class="link"><a href=""><span>微商城</span></a></li>
		</ul>
		<!-- 普通导航菜单 End -->
	</div>
	<!-- Header Menu End -->



</div>
<div class="clear"></div>
<!-- Header End -->
	<!-- 面包屑 注意首页没有 -->
	<div class="shop_hd_breadcrumb">
		<strong>当前位置：</strong>
		<span>
			<a href="">首页</a>&nbsp;›&nbsp;
			<a href="">商品分类</a>&nbsp;›&nbsp;
			<a href="">男装女装</a>&nbsp;›&nbsp;
			<a href="">男装</a>
		</span>
	</div>
	<div class="clear"></div>
	<!-- 面包屑 End -->

	<!-- Header End -->
	
	<!-- Goods Body -->
	<div class="shop_goods_bd clear">

		<!-- 商品展示 -->
		<div class="shop_goods_show">
			<div class="shop_goods_show_left">
				<!-- 京东商品展示 -->
				<link rel="stylesheet" href="/shop/Public/css/shop_goodPic.css" type="text/css" />
				<script type="text/javascript" src="/shop/Public/js/shop_goodPic_base.js"></script>
				<script type="text/javascript" src="/shop/Public/js/lib.js"></script>
				<script type="text/javascript" src="/shop/Public/js/163css.js"></script>
				<div id="preview">
					<div class=jqzoom id="spec-n1" onClick="window.open('/')"><IMG height="350" src="/shop/<?php echo ($goods["goods_img"]); ?>" jqimg="/shop/<?php echo ($goods["goods_img"]); ?>" width="350">
						</div>
						<div id="spec-n5">
							<div class=control id="spec-left">
								<img src="/shop/Public/images/left.gif" />
							</div>
							<div id="spec-list">
								<ul class="list-h">
									<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="/shop/{goods.goods_thumb}"> </li><?php endforeach; endif; else: echo "" ;endif; ?>									
								</ul>
							</div>
							<div class=control id="spec-right">
								<img src="/shop/Public/images/right.gif" />
							</div>
							
					    </div>
					</div>

					<SCRIPT type=text/javascript>
						$(function(){			
						   $(".jqzoom").jqueryzoom({
								xzoom:400,
								yzoom:400,
								offset:10,
								position:"right",
								preload:1,
								lens:1
							});
							$("#spec-list").jdMarquee({
								deriction:"left",
								width:350,
								height:56,
								step:2,
								speed:4,
								delay:10,
								control:true,
								_front:"#spec-right",
								_back:"#spec-left"
							});
							$("#spec-list img").bind("mouseover",function(){
								var src=$(this).attr("src");
								$("#spec-n1 img").eq(0).attr({
									src:src.replace("\/n5\/","\/n1\/"),
									jqimg:src.replace("\/n5\/","\/n0\/")
								});
								$(this).css({
									"border":"2px solid #ff6600",
									"padding":"1px"
								});
							}).bind("mouseout",function(){
								$(this).css({
									"border":"1px solid #ccc",
									"padding":"2px"
								});
							});				
						})
						</SCRIPT>
					<!-- 京东商品展示 End -->

			</div>
			<div class="shop_goods_show_right">
				<ul>
					
					<li>
						<strong style="font-size:14px; font-weight:bold;"><?php echo ($goods["goods_name"]); ?></strong>
					</li>
					<li>
	 					<label>价格：</label>
						<span><strong><?php echo ($goods["shop_price"]); ?></strong>元</span>
					</li>
					<li>
						<label>运费：</label>
						<span>卖家承担运费</span>
					</li>
					<li>
						<label>累计售出：</label>
						<span><?php echo ($goods["goods_number"]); ?></span>
					</li>
					<li>
						<label>评价：</label>
						<span>0条评论</span>
					</li>
					<li class="goods_num">
						<label>购买数量：</label>
						<span><a class="good_num_jian" id="good_num_jian" href="javascript:void(0);"></a><input type="text" value="1" id="good_nums" class="good_nums" /><a href="javascript:void(0);" id="good_num_jia" class="good_num_jia"></a>(当前库存0件)</span>
					</li>
					<li style="padding:20px 0;">
						<label>&nbsp;</label>
						<span><a href="" class="goods_sub goods_sub_gou" >加入购物车</a></span>
					</li>
				</ul>

			</div>
		</div>
		<!-- 商品展示 End -->

		<div class="clear mt15"></div>
		<!-- Goods Left -->
		<div class="shop_bd_list_left clearfix">
			<!-- 左边商品分类 -->
			<div class="shop_bd_list_bk clearfix">
				<div class="title">商品分类</div>
				<div class="contents clearfix">
					<dl class="shop_bd_list_type_links clearfix">
						<dt><strong>女装</strong></dt>
						<dd>
							<span><a href="">风衣</a></span>
							<span><a href="">长袖连衣裙</a></span>
							<span><a href="">毛呢连衣裙</a></span>
							<span><a href="">半身裙</a></span>
							<span><a href="">小脚裤</a></span>
							<span><a href="">加绒打底裤</a></span>
							<span><a href="">牛仔裤</a></span>
							<span><a href="">打底衫</a></span>
							<span><a href="">情侣装</a></span>
							<span><a href="">棉衣</a></span>
							<span><a href="">毛呢大衣</a></span>
							<span><a href="">毛呢短裤</a></span>
						</dd>
					</dl>
				</div>
			</div>
			<!-- 左边商品分类 End -->

			<!-- 热卖推荐商品 -->
			<div class="shop_bd_list_bk clearfix">
				<div class="title">热卖推荐商品</div>
				<div class="contents clearfix">
					<ul class="clearfix">
						
						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="/shop/Public/images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="/shop/Public/images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="/shop/Public/images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

					</ul>
				</div>
			</div>
			<!-- 热卖推荐商品 -->
			<div class="clear"></div>

			<!-- 浏览过的商品 -->
			<div class="shop_bd_list_bk clearfix">
				<div class="title">浏览过的商品</div>
				<div class="contents clearfix">
					<ul class="clearfix">
						
						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="/shop/Public/images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="/shop/Public/images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

						<li class="clearfix">
							<div class="goods_name"><a href="">Gap经典弹力纯色长袖T恤|000891347|原价149元</a></div>
							<div class="goods_pic"><span class="goods_price">¥ 279.00 </span><a href=""><img src="/shop/Public/images/89a6d6466b00ae32d3c826b9ec639084.jpg_small.jpg" /></a></div>
							<div class="goods_xiaoliang">
								<span class="goods_xiaoliang_link"><a href="">去看看</a></span>
								<span class="goods_xiaoliang_nums">已销售<strong>99</strong>笔</span>
							</div>
						</li>

					</ul>
				</div>
			</div>
			<!-- 浏览过的商品 -->

		</div>
		<!-- Goods Left End -->

		<!-- 商品详情 -->
		<script type="text/javascript" src="/shop/Public/js/shop_goods_tab.js"></script>
		<div class="shop_goods_bd_xiangqing clearfix">
			<div class="shop_goods_bd_xiangqing_tab">
				<ul>
					<li id="xiangqing_tab_1" onmouseover="shop_goods_easytabs('1', '1');" onfocus="shop_goods_easytabs('1', '1');" onclick="return false;"><a href=""><span>商品详情</span></a></li>
					<li id="xiangqing_tab_2" onmouseover="shop_goods_easytabs('1', '2');" onfocus="shop_goods_easytabs('1', '2');" onclick="return false;"><a href=""><span>商品评论</span></a></li>
					<li id="xiangqing_tab_3" onmouseover="shop_goods_easytabs('1', '3');" onfocus="shop_goods_easytabs('1', '3');" onclick="return false;"><a href=""><span>商品咨询</span></a></li>
				</ul>
			</div>
			<div class="shop_goods_bd_xiangqing_content clearfix">
				<div id="xiangqing_content_1" class="xiangqing_contents clearfix">
					<p><?php echo ($goods["goods_desc"]); ?></p>
				</div>
				<div id="xiangqing_content_2" class="xiangqing_contents clearfix">
					<p>商品评论----22222</p>
				</div>

				<div id="xiangqing_content_3" class="xiangqing_contents clearfix">
					<p>商品自诩---3333</p>
				</div>
			</div>
		</div>
		<!-- 商品详情 End -->

	</div>
	<!-- Goods Body End -->

	<!-- Footer - wll - 2013/3/24 -->
	<div class="clear"></div>
	<div class="shop_footer">
            <div class="shop_footer_link">
                <p>
                    <a href="">首页</a>|
                    <a href="">招聘英才</a>|
                    <a href="">广告合作</a>|
                    <a href="">关于ShopCZ</a>|
                    <a href="">关于我们</a>
                </p>
            </div>
            <div class="shop_footer_copy">
                <p>Copyright 2004-2013 itcast Inc.,All rights reserved.</p>
            </div>
        </div>
	<!-- Footer End -->

</body>
</html>
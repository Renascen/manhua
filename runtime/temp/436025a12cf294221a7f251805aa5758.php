<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:56:"/var/www/html/dlmh/application/cms/view/index/index.html";i:1513761627;s:56:"/var/www/html/dlmh/application/cms/view/public/base.html";i:1513761627;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title><?php echo config('web_site_title'); ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta content="black" name="apple-mobile-web-app-status-bar-style" />
	<meta content="telephone=no" name="format-detection" />
	
	<link rel="shortcut icon" href="__ADMIN_IMG__/favicons/favicon.ico">
	<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/base.css" />
	<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/mui.min.css" />
	
<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/index.css" />

	<script src="__MODULE_JS__/fontSize.js"></script>
	

	
<style type="text/css">
	.see_title_left {
		background: url(__MODULE_IMG__/img-png/meiribikan.png)no-repeat center left;
		background-size: 0.32rem 0.32rem;
	}

	.see_title_right {
		background: url(__MODULE_IMG__/img-png/gengduo.png)no-repeat center right;
		background-size: 0.26rem 0.26rem;
	}

	.hot_title_left {
		background: url(__MODULE_IMG__/img-png/hot.png)no-repeat center left;
		background-size: 0.32rem 0.32rem;
	}
	.free_title_left {
		background: url(__MODULE_IMG__/img-png/free.png)no-repeat center left;
		background-size: 0.32rem 0.32rem;
	}
	.new_title_left {
		background: url(__MODULE_IMG__/img-png/zuixindongman-.png)no-repeat center left;
		background-size: 0.32rem 0.32rem;
	}
	.free_tro_msg span {
		background: url(__MODULE_IMG__/img-png/fenlei.png)no-repeat center left;
		background-size: 0.52rem 0.25rem;
	}

	.new_autor {
		background: url(__MODULE_IMG__/img-png/touxiangtubiao.png)no-repeat center left;
		background-size: 0.31rem 0.31rem;
	}

	.zan {
		background: url(__MODULE_IMG__/img-png/zan.png)no-repeat center left;
		background-size: 0.22rem 0.22rem;
	}

	.r_msg {
		background: url(__MODULE_IMG__/img-png/pinglun.png)no-repeat center left;
		background-size: 0.22rem 0.22rem;
	}
	.font-hid{
		color:#5f504e;
	}
	.list_thr{
		width:0.8rem;
	}
</style>

	</head>

	<body>
	
	<header id="header" class="clear">
		<div class="fl header_left">
			<a href="<?php echo url('index/index'); ?>"><img src="__MODULE_IMG__/img-png/doulaiicon.png" alt="" /></a>
		</div>
		<div class="fr header_right">
			<ul>
				<!--{block name="search"}-->
				<li class="list_one">
					<a href="<?php echo url('cms/search/index'); ?>"><img src="__MODULE_IMG__/img-png/sousuo.png" /></a>
				</li>
				<!--{/block}-->
				<li class="fengge">|</li>
				<li class="list_two">
					<a href="<?php echo url('cms/user/booksheet'); ?>"><img src="__MODULE_IMG__/img-png/shujia.png" /><span>书架</span></a>
				</li>
				<li class="fengge">|</li>
				<li class="list_thr">
					<a href="<?php echo url('user/index'); ?>"><img src="__MODULE_IMG__/img-png/wode.png" /></a>
				</li>
			</ul>
		</div>
	</header>
	


	
<!--轮播图-->
		<div class="mui-slider slide_banner">
			<div class="mui-slider-group mui-slider-loop">
				<!--支持循环，需要重复图片节点，最后一个节点-->
				<div class="mui-slider-item mui-slider-item-duplicate">
					<a href="#"><img src="__MODULE_IMG__/img-big/4.jpg" /></a>
				</div>
				<div class="mui-slider-item">
					<a href="#"><img src="__MODULE_IMG__/img-big/1.png" /></a>
				</div>
				<div class="mui-slider-item">
					<a href="#"><img src="__MODULE_IMG__/img-big/2.jpg" /></a>
				</div>
				<div class="mui-slider-item">
					<a href="#"><img src="__MODULE_IMG__/img-big/3.jpg" /></a>
				</div>
				<div class="mui-slider-item">
					<a href="#"><img src="__MODULE_IMG__/img-big/4.jpg" /></a>
				</div>
				<!--支持循环，需要重复图片节点,第一个节点-->
				<div class="mui-slider-item mui-slider-item-duplicate">
					<a href="#"><img src="__MODULE_IMG__/img-big/1.png" /></a>
				</div>
			</div>
		</div>

	
	<nav id="nav">
		<div>
			<a href="<?php echo url('cms/index/booklibrary'); ?>"><img src="__MODULE_IMG__/img-png/shuku.png" alt="" /><p>书库</p>
			</a>
		</div>
		<div>
			<a href="<?php echo url('cms/column/index', ['id' => 2]); ?>"><img src="__MODULE_IMG__/img-png/paihang.png" alt="" /><p>排行</p>
			</a>
		</div>
		<div>
			<a href=""><img src="__MODULE_IMG__/img-png/wanjie.png" alt="" /><p>完结</p>
			</a>
		</div>
		<div>
			<!--<a href="<?php echo url('cms/pay/index'); ?>"><img src="__MODULE_IMG__/img-png/chonghzi.png" alt="" /><p>充值</p></a>-->
			<a href="#"><img src="__MODULE_IMG__/img-png/chonghzi.png" alt="" /><p>充值</p></a>
		</div>
	</nav>
	


		<!--必看-->

		<div class="mustSee">
			<div class="title">
				<div class="fl title_left see_title_left">
					<span>每日必看</span>
				</div>
				<div class="fr title_right see_title_right">
					<a href="<?php echo url('index/many'); ?>">全部</a>
				</div>
			</div>
		<?php if(is_array($daily_list) || $daily_list instanceof \think\Collection || $daily_list instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($daily_list) ? array_slice($daily_list,0,1, true) : $daily_list->slice(0,1, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<div class="see_content">
				<a href="<?php echo url('cms/document/desc',['id' => $vo['zid'],'bid' => $vo['id'],'comefrom'=> 5]); ?>">
					<img src="__MODULE_IMG__/img-big/2.jpg" />
					<!--<img src="http://www.lce0.com/test/1.jpg" />-->
				</a>
			</div>
			<div class="see_introdu clear">
				<div class="see_introdu_one clear">
					<a href="<?php echo url('cms/document/desc',['bid' => $vo['id'],'comefrom'=> $vo['id']]); ?>" class="fl font-hid"><?php echo $vo['title']; ?></a>
					<img class="fr" src="__MODULE_IMG__/img-png/lianzai.png" alt="" />
				</div>
				<p class="see_introdu_two font-hid">
					<?php echo $vo['desc']; ?>
				</p>
			</div>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>

		<!--热门推荐-->
		<div class=" hot">
			<div class="title">
				<div class="fl title_left hot_title_left">
					<span>热门推介</span>
				</div>
				<div class="fr title_right see_title_right">
					<a href="<?php echo url('index/many'); ?>">全部</a>
				</div>
			</div>
			<div class="hot_content">
				<div class="content_list">
					<a href="<?php echo url('cms/document/desc',['bid' => $vo['id'],'comefrom'=> $vo['id']]); ?>">
						<img src="__MODULE_IMG__/img-big/111.jpg" />
						<div class="clear content_tro">
							<p class="font-hid content_tro_title fl">哑舍里的古物</p>
							<img class="fr content_tro_state" src="__MODULE_IMG__/img-png/lianzai.png" />
						</div>

						<p class="font-hid content_tro_msg clear">每一件都有着自己的故事</p>
					</a>
				</div>
				<div class="content_list">
					<a href="<?php echo url('cms/document/desc',['bid' => $vo['id'],'comefrom'=> $vo['id']]); ?>">
						<img src="__MODULE_IMG__/img-big/222.jpg" />
						<div class="clear content_tro">
							<p class="font-hid content_tro_title fl">哑舍里的古物</p>
							<img class="fr content_tro_state" src="__MODULE_IMG__/img-png/wanjie-14.png" />
						</div>

						<p class="font-hid content_tro_msg clear">每一件都有着自己的故事</p>
					</a>
				</div>
				<div class="content_list">
					<a href="<?php echo url('cms/document/desc',['bid' => $vo['id'],'comefrom'=> $vo['id']]); ?>">
						<img src="__MODULE_IMG__/img-big/333.jpg" />
						<div class="clear content_tro">
							<p class="font-hid content_tro_title fl">哑舍里的古物</p>
							<img class="fr content_tro_state" src="__MODULE_IMG__/img-png/mianfei.png" />
						</div>

						<p class="font-hid content_tro_msg clear">每一件都有着自己的故事</p>
					</a>
				</div>
				<div class="content_list">
					<a href="<?php echo url('cms/document/desc',['bid' => $vo['id'],'comefrom'=> $vo['id']]); ?>">
						<img src="__MODULE_IMG__/img-big/444.jpg" />
						<div class="clear content_tro">
							<p class="font-hid content_tro_title fl">哑舍里的古物</p>
							<img class="fr content_tro_state" src="__MODULE_IMG__/img-png/wanjie-14.png" />
						</div>

						<p class="font-hid content_tro_msg clear">每一件都有着自己的故事</p>
					</a>
				</div>
			</div>
		</div>
		<!--免费专区-->
		<div class="free">
			<div class="title">
				<div class="fl title_left free_title_left">
					<span>免费专区</span>
				</div>
				<div class="fr title_right see_title_right">
					<a href="">更多</a>
				</div>
			</div>
			<div class="free_content">
				<div class="free_content_list">
					<a href="<?php echo url('cms/document/desc',['bid' => $vo['id'],'comefrom'=> $vo['id']]); ?>">
						<img class="free_pic" src="__MODULE_IMG__/img-big/11.jpg" />
						<p class="font-hid free_tro_title fl">镇魂街</p>
						<p class="font-hid free_tro_msg clear">
							<span>少年</span>
							<span>少女</span>
							<span>热血</span>
						</p>
					</a>
				</div>
				<div class="free_content_list">
					<a href="<?php echo url('cms/document/desc',['bid' => $vo['id'],'comefrom'=> $vo['id']]); ?>">
						<img class="free_pic" src="__MODULE_IMG__/img-big/22.jpg" />
						<p class="font-hid free_tro_title fl">正负联盟</p>
						<p class="font-hid free_tro_msg clear">
							<span>少年</span>
							<span>动作</span>
						</p>
					</a>
				</div>
				<div class="free_content_list">
					<a href="<?php echo url('cms/document/desc',['bid' => $vo['id'],'comefrom'=> $vo['id']]); ?>">
						<img class="free_pic" src="__MODULE_IMG__/img-big/33.jpg" />
						<p class="font-hid free_tro_title fl">西游降魔</p>
						<p class="font-hid free_tro_msg clear">
							<span>神游</span>
							<span>冒险</span>
							<span>格斗</span>
						</p>
					</a>
				</div>
				<div class="free_content_list">
					<a href="<?php echo url('cms/document/desc',['bid' => $vo['id'],'comefrom'=> $vo['id']]); ?>">
						<img class="free_pic" src="__MODULE_IMG__/img-big/22.jpg" />
						<p class="font-hid free_tro_title fl">阴阳杂技变</p>
						<p class="font-hid free_tro_msg clear">
							<span>鬼神</span>
							<span>冒险</span>
							<span>热血</span>
						</p>
					</a>
				</div>
				<div class="free_content_list">
					<a href="<?php echo url('cms/document/desc',['bid' => $vo['id'],'comefrom'=> $vo['id']]); ?>">
						<img class="free_pic" src="__MODULE_IMG__/img-big/11.jpg" />
						<p class="font-hid free_tro_title fl">天真有邪</p>
						<p class="font-hid free_tro_msg clear">
							<span>蠢萌</span>
							<span>少年</span>
						</p>
					</a>
				</div>
				<div class="free_content_list">
					<a href="<?php echo url('cms/document/desc',['bid' => $vo['id'],'comefrom'=> $vo['id']]); ?>">
						<img class="free_pic" src="__MODULE_IMG__/img-big/33.jpg" />
						<p class="font-hid free_tro_title fl">翻转现实</p>
						<p class="font-hid free_tro_msg clear">
							<span>科幻</span>
							<span>冒险</span>
							<span>格斗</span>
						</p>
					</a>
				</div>
			</div>
		</div>
		<!--最新动漫-->
		<div class="new">
			<div class="title">
				<div class="fl title_left new_title_left">
					<span>最新动漫</span>
				</div>
				<div class="fr title_right see_title_right">
					<a href="">全部</a>
				</div>
			</div>
			<div class="new_content">
				<div class="new_list">
					<a href="<?php echo url('cms/document/desc',['bid' => $vo['id'],'comefrom'=> $vo['id']]); ?>" class="clear">
						<img class="fl" src="__MODULE_IMG__/img-big/111.jpg" alt="" />
						<div class="fr new_tro">
							<h3 class="new_title font-hid">
							黄金神威
							<img src="__MODULE_IMG__/img-png/mianfei.png" alt="" />
						</h3>
							<p class="new_msg dou_hang">战争，掠夺，在北部的土地上，探寻生命的意义，寻找黄金，生存竞争。</p>
							<div class="new_change">
								<div class="new_autor fl">野田サトル</div>
								<div class="new_reply fl">
									<p class="zan">1823</p>
									<p class="r_msg">3	026</p>
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="new_list clear">
					<a href="<?php echo url('cms/document/desc',['bid' => $vo['id'],'comefrom'=> $vo['id']]); ?> " class="clear">
						<img class="fl" src="__MODULE_IMG__/img-big/1.png" alt="" />
						<div class="fr new_tro">
							<h3 class="new_title font-hid">
							黄金气球
							<img src="__MODULE_IMG__/img-png/lianzai.png" alt="" />
						</h3>
							<p class="new_msg dou_hang">战争，掠夺，在北部的土地上，探寻生命的意义，寻找黄金，生存竞争。</p>
							<div class="new_change">
								<div class="new_autor fl">野田サトル</div>
								<div class="new_reply fl">
									<p class="zan">1823</p>
									<p class="r_msg">3026</p>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</body>

	<script src="__MODULE_JS__/mui.js"></script>
	<script src="__MODULE_JS__/jquery-1.8.3.min.js"></script>

	<script type="text/javascript">
		//获得slider插件对象
		var gallery = mui('.mui-slider');
		gallery.slider({
			interval: 2000 //自动轮播周期，若为0则不自动播放，默认为0；
		});
	</script>

	</body>
	</html>
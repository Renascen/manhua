<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:53:"D:\manhua/application/cms\view\index\booklibrary.html";i:1513761628;s:47:"D:\manhua/application/cms\view\public\base.html";i:1513761628;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>书库</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta content="black" name="apple-mobile-web-app-status-bar-style" />
	<meta content="telephone=no" name="format-detection" />
	
	<link rel="shortcut icon" href="__ADMIN_IMG__/favicons/favicon.ico">
	<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/base.css" />
	<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/mui.min.css" />
	
		<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/library.css" />

		
	<script src="__MODULE_JS__/fontSize.js"></script>
	
	
	
		<style type="text/css">
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
			.list_thr{
				width:0.8rem;
			}
			.list_title{
				width:0.7rem;
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
	


	
	
		<nav id="nav" class="clear">
			<div class="type">
				<div class="fl list_title">
					类型 :  
				</div>
				<div class="fl list_content">
					<p class="activeChoose" value="男生">男生</p>
					<p value="女生">女生</p>
				</div>
			</div>
			<div class="classify">
				<div class="fl list_title">
					分类 :  
				</div>
				<div class="fl list_content">
					<p class="activeChoose"  value="全部">全部</p>
					<p value="校园">校园</p>
					<p value="恋爱">恋爱</p>
					<p value="灵异">灵异</p>
					<p value="悬疑">悬疑</p>
					<p value="古风">古风</p>
					<p value="爆笑">爆笑</p>
					<p value="奇幻">奇幻</p>
					<p value="都市">都市</p>
					<p value="彩虹">彩虹</p>
					<p value="少年">少年</p>
					<p value="总裁">总裁</p>
					<p value="日漫">日漫</p>
					<p value="正能量">正能量</p>
				</div>
			</div>
			<div class="works">
				<div class="fl list_title">
					作品 :  
				</div>
				<div class="fl list_content">
					<p class="activeChoose" value="完结作品">完结作品</p>
					<p value="彩漫作品">彩漫作品</p>
					<p value="独家签约">独家签约</p>
				</div>
			</div>
		</nav>



		<section id="section">
			<div class="new_list clear">
				<a href="" class="clear">
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
								<p class="r_msg">3026</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="new_list clear">
				<a href="" class="clear">
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
			<div class="new_list clear">
				<a href="" class="clear">
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
								<p class="r_msg">3026</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="new_list clear">
				<a href="" class="clear">
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
		</section>

	<script src="__MODULE_JS__/mui.js"></script>
	<script src="__MODULE_JS__/jquery-1.8.3.min.js"></script>

	<script type="text/javascript">
			$(".list_content").on("click","p",function(){
			$(this).addClass('activeChoose').siblings().removeClass('activeChoose');

			var length=$(".activeChoose").length;
			var arr=[];//将选择内容放进数组
			for(var i=0;i<length;i++){
				arr.push($(".activeChoose").eq(i).attr('value'))
			}
			// alert(arr);
			//ajax
		})
	</script>

	</body>
	</html>
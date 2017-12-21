<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"/var/www/html/dlmh/application/cms/view/column/list_book.html";i:1513741701;s:56:"/var/www/html/dlmh/application/cms/view/public/base.html";i:1513741702;}*/ ?>
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
	
		<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/ranking.css" />
		
	<script src="__MODULE_JS__/fontSize.js"></script>
	
	
	
		<style type="text/css">
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
	


	
	
		<nav id="nav">
			<div class="">
				<a href="" class="choose_active">男生榜</a>
			</div>
			<div class="">
				<a href="">女生榜</a>
			</div>
			<div class="">
				<a href="">新作榜</a>
			</div>
			<div class="">
				<a href="">畅销榜</a>
			</div>
		</nav>



		<div class="search_content">
			<div class="search_list">
				<a href="">
					<div class="fl rank_list">
						<img src="__MODULE_IMG__/img-png/Champion.png"/>
					</div>
					<div class="fl search_img">
						<img src="__MODULE_IMG__/img-big/33.jpg"/>
					</div>
					<div class="fl search_list_r">
						<p class="list_r_one">黄金神威</p>
						<p class="list_r_upd font-hid">
							更新至：第二季 第9话（下） 老同学
						</p>
						<p class="list_r_two">
							<span>少年</span>
							<span>热血</span>
							<span>三国</span>
						</p>
						<p class="list_r_thr">
							<img src="__MODULE_IMG__/img-png/touxiangtubiao.png"/>
							野田サトル
						</p>
						
					</div>
				</a>
			</div>
			<div class="search_list">
				<a href="">
					<div class="fl rank_list">
						<img src="__MODULE_IMG__/img-png/Runner-up.png"/>
					</div>
					<div class="fl search_img">
						<img src="__MODULE_IMG__/img-big/33.jpg"/>
					</div>
					<div class="fl search_list_r">
						<p class="list_r_one">黄金神威</p>
						<p class="list_r_upd font-hid">
							更新至：第二季 第9话（下） 老同学
						</p>
						<p class="list_r_two">
							<span>少年</span>
							<span>热血</span>
							<span>三国</span>
						</p>
						<p class="list_r_thr">
							<img src="__MODULE_IMG__/img-png/touxiangtubiao.png"/>
							野田サトル
						</p>
					</div>
				</a>
			</div>
			<div class="search_list">
				<a href="">
					<div class="fl rank_list">
						<img src="__MODULE_IMG__/img-png/Third.png"/>
					</div>
					<div class="fl search_img">
						<img src="__MODULE_IMG__/img-big/33.jpg"/>
					</div>
					<div class="fl search_list_r">
						<p class="list_r_one">黄金神威</p>
						<p class="list_r_upd font-hid">
							更新至：第二季 第9话（下） 老同学
						</p>
						<p class="list_r_two">
							<span>少年</span>
							<span>热血</span>
							<span>三国</span>
						</p>
						<p class="list_r_thr">
							<img src="__MODULE_IMG__/img-png/touxiangtubiao.png"/>
							野田サトル
						</p>
					</div>
				</a>
			</div>
			<div class="search_list">
				<a href="">
					<div class="fl rank_list">
						<span>4</span>
					</div>
					<div class="fl search_img">
						<img src="__MODULE_IMG__/img-big/33.jpg"/>
					</div>
					<div class="fl search_list_r">
						<p class="list_r_one">黄金神威</p>
						<p class="list_r_upd font-hid">
							更新至：第二季 第9话（下） 老同学
						</p>
						<p class="list_r_two">
							<span>少年</span>
							<span>热血</span>
							<span>三国</span>
						</p>
						<p class="list_r_thr">
							<img src="__MODULE_IMG__/img-png/touxiangtubiao.png"/>
							野田サトル
						</p>
					</div>
				</a>
			</div>
		</div>

	<script src="__MODULE_JS__/mui.js"></script>
	<script src="__MODULE_JS__/jquery-1.8.3.min.js"></script>


	</body>
	</html>
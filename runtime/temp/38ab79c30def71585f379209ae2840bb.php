<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:50:"D:\manhua/application/cms\view\user\booksheet.html";i:1513761628;s:47:"D:\manhua/application/cms\view\public\base.html";i:1513761628;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>我的书架</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta content="yes" name="apple-mobile-web-app-capable" />
	<meta content="black" name="apple-mobile-web-app-status-bar-style" />
	<meta content="telephone=no" name="format-detection" />
	
	<link rel="shortcut icon" href="__ADMIN_IMG__/favicons/favicon.ico">
	<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/base.css" />
	<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/mui.min.css" />
	
		<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/bookshelf.css" />
	
	<script src="__MODULE_JS__/fontSize.js"></script>
	
	
	
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
	


	
	


		<section id="section">
			<div class="list">
				<a href="">
					<div class="list_content">
						<img class="list_img" src="__MODULE_IMG__/img-big/11.jpg"/>
						<p class="list_title">复仇冷冷端上</p>
						<p class="list_zuo">左久乐</p>
						<div class="progger">
							<span class="proshow"></span>
							<p class="proval">38.5%</p>
							<p class="unread">未读</p>
							<img class="readed" src="__MODULE_IMG__/img-png/yiyuewan.png"/>
						</div>
					</div>
				</a>
			</div>
			<div class="list">
				<a href="">
					<div class="list_content">
						<img class="list_img" src="__MODULE_IMG__/img-big/11.jpg"/>
						<p class="list_title">复仇冷冷端上</p>
						<p class="list_zuo">左久乐</p>
						<div class="progger">
							<span class="proshow"></span>
							<p class="proval">52.5%</p>
							<p class="unread">未读</p>
							<img class="readed" src="__MODULE_IMG__/img-png/yiyuewan.png"/>
						</div>
					</div>
				</a>
			</div>
			<div class="list">
				<a href="">
					<div class="list_content">
						<img class="list_img" src="__MODULE_IMG__/img-big/11.jpg"/>
						<p class="list_title">复仇冷冷端上</p>
						<p class="list_zuo">左久乐</p>
						<div class="progger">
							<span class="proshow"></span>
							<p class="proval">0%</p>
							<p class="unread">未读</p>
							<img class="readed" src="__MODULE_IMG__/img-png/yiyuewan.png"/>
						</div>
					</div>
				</a>
			</div>
			<div class="list">
				<a href="">
					<div class="list_content">
						<img class="list_img" src="__MODULE_IMG__/img-big/11.jpg"/>
						<p class="list_title">复仇冷冷端上</p>
						<p class="list_zuo">左久乐</p>
						<div class="progger">
							<span class="proshow"></span>
							<p class="proval">100%</p>
							<p class="unread">未读</p>
							<img class="readed" src="__MODULE_IMG__/img-png/yiyuewan.png"/>
						</div>
					</div>
				</a>
			</div>
		</section>

	<script src="__MODULE_JS__/mui.js"></script>
	<script src="__MODULE_JS__/jquery-1.8.3.min.js"></script>

	<script type="text/javascript">
		var length=$(".progger").length;
		for(var i=0;i<length;i++){
			var pro=$(".proval").eq(i).html();
				if(pro=='100%'){
					$(".proshow").eq(i).hide();
					$('.proval').eq(i).hide();
					$(".unread").eq(i).hide();
					$('.readed').eq(i).show();
					$(".progger").eq(i).css("background","none");
				}else if(pro=="0%"){
					$(".proshow").eq(i).hide();
					$('.proval').eq(i).hide();
					$('.readed').eq(i).hide();
					$(".unread").eq(i).show();
					$(".progger").eq(i).css("background","none");
				}else{
					$('.readed').eq(i).hide();
					$(".unread").eq(i).hide();
					$(".progger .proshow").eq(i).css("width",pro);
					$(".progger").eq(i).css("background","#E6E6E6");
				}
		
		}

	</script>

	</body>
	</html>
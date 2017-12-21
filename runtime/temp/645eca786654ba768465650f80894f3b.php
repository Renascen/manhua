<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:46:"D:\manhua/application/cms\view\user\index.html";i:1513761628;s:47:"D:\manhua/application/cms\view\public\base.html";i:1513761628;}*/ ?>
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
	
		<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/stacks.css" />
		
	<script src="__MODULE_JS__/fontSize.js"></script>
	
	
	
		<style type="text/css">
			.recharge_view{
				background: url(__MODULE_IMG__/img-png/gengduo.png)no-repeat center right;
				background-size: 0.26rem 0.26rem;
			}
			.s_title-r{
				background: url(__MODULE_IMG__/img-png/gengduo.png)no-repeat center right;
				background-size: 0.26rem 0.26rem;
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
	


	
	


	<body>
		<!--读者ID-->
		<div id="ID" class="clear"> 
			<div class="fl ID_Tuo">
				<img src="__MODULE_IMG__/img-big/touxiang.jpg" alt="" />
			</div>
			<div class="fl ID_Code">
				<h3 class="codeName font-hid">喵小咪和比丢</h3>
				<p class="codeNum font-hid">ID:632586</p>
			</div>
		</div>
		<!--余额信息-->
		<div class="balance">
			<div class="bal_msg">	
				<div class="bal_book">
					<p class="fl mdg_left">
						<span class="bi">书币余额:</span>
						<span class="yu">123币</span>
					</p>
					<div class="fr sub_Recharge">
						<a href="javascript:void(0);">充值</a>
					</div>
				</div>
				<div class="bal_other">
					<p class="fl mdg_left other_mar">
						<span class="bi">其它余额:</span>
						<span class="yu_o">588币</span>
					</p>
				</div>
				<div class="bal_pointer">
					<p class="fl mdg_left other_mar">
						<span class="bi">会员积分:</span>
						<span class="yu_o">200分</span>
					</p>
				</div>
			</div>
			<div class="bal-recode clear">
				<div class="fl recharge_Record">
					<img class="recharge_img" src="__MODULE_IMG__/img-png/chongzhijilu.png"/>
					<span class="recharge_lu">充值记录</span>
				</div>
				<div class="fr recharge_view">
					<a href="<?php echo url('cms/user/payhistory'); ?>">查看</a>
				</div>
			</div>
		</div>
		
		<!--订阅-->
		<div class="subscribe clear">
			<div class="subscribe_title clear">
				<div class="fl s_title-l">
					<img class="s_title-img" src="__MODULE_IMG__/img-png/dingyuejilu.png"/>
					<span class="s_title-til">订阅记录</span>
				</div>
				<div class="fr s_title-r">
					<a href=""></a>
				</div>
			</div>
			<div class="subscribe_content">
				<div class="_content_list">
					<a href="">
						<div class="_content_list_k" >
							<img src="__MODULE_IMG__/img-big/3.jpg" alt="" />
							<span class="ss_num">第18话</span>
						</div>
						<p class="_content_list_t">睡前鬼故事</p>
					</a>
				</div>
				<div class="_content_list">
					<a href="">
						<div class="_content_list_k" >
							<img src="__MODULE_IMG__/img-big/3.jpg" alt="" />
							<span class="ss_num">第18话</span>
						</div>
						<p class="_content_list_t">睡前鬼故事</p>
					</a>
				</div>
				<div class="_content_list">
					<a href="">
						<div class="_content_list_k" >
							<img src="__MODULE_IMG__/img-big/3.jpg" alt="" />
							<span class="ss_num">第18话</span>
						</div>
						<p class="_content_list_t">睡前鬼故事</p>
					</a>
				</div>
			</div>
		</div>
		
		<!--修改密码-->
		<div class="modify">
			<a href="">
				<div class="subscribe_title clear">
					<div class="fl s_title-l">
						<img class="s_title-img" src="__MODULE_IMG__/img-png/xiugaimima.png"/>
						<span class="s_title-til">修改密码</span>
					</div>
					<div class="fr s_title-r">
						<a href=""></a>
					</div>
				</div>
			</a>
		</div>
		
		<!--退出登陆-->
		<div class="drop_Out">
			<a href="javascript:void(0);">退出登陆</a>
		</div>
	</body>
	
	<script src="__MODULE_JS__/mui.js"></script>
	<script src="__MODULE_JS__/jquery-1.8.3.min.js"></script>

	<script type="text/javascript">
		
	</script>

	</body>
	</html>
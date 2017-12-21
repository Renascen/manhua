<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:49:"D:\test/application/cms\view\user\payhistory.html";i:1512980734;s:45:"D:\test/application/cms\view\public\base.html";i:1513583294;}*/ ?>
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
	<link rel="stylesheet" href="__MODULE_CSS__/vendor.css">
	<link rel="stylesheet" href="__MODULE_CSS__/front.css?v1.4.0}">
	<link href="__MODULE_CSS__/font_apds0v8n2bhp8pvi.css" rel="stylesheet">
	<link rel="stylesheet" href="__MODULE_CSS__/common.css">
	<link rel="stylesheet" href="__MODULE_CSS__/animate.min.css">
	<link rel="stylesheet" href="__MODULE_CSS__/jquery.alertable.css">
	<link rel="stylesheet" href="__MODULE_CSS__/main.css?v1.4.1<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/base.css" />
	<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/mui.min.css" />
	<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/introduct.css" />
	<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/index.css" />
	
	
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
	<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
	<script src="__MODULE_JS__/fontSize.js"></script>
	<script src="__MODULE_JS__/mui.js"></script>
	<script src="__MODULE_JS__/vendor.js?20171106"></script>
	<script src="__MODULE_JS__/jquery.alertable.min.js"></script>
	<script src="__MODULE_JS__/app.js"></script>
	<script src="__MODULE_JS__/jquerysession.js"></script>
	<script src="__MODULE_JS__/jquery-1.8.3.min.js"></script>
	
	
	
    <style>
    .top-head{padding-bottom:10px;}
    .user{padding:10px 0px;} 
    .user-info .user-msg{flex:2;} 
    .user_icon.flex1 img{width:100px;height:100px;}
    .user-info .nickname{font-size:20px;color:#333;margin-top:5px;}
    .user-info .user-id{font-size:16px;margin:10px 0px;}
    .user-info .user-level{font-size:16px;color:#999;}
    .user-score{border:1px solid #F6F6F7;margin:10px 15px;padding:15px 25px;border-radius: 5px;font-size:16px;box-shadow:0px 0px 10px #F6F6F7;}
    .user-score div{margin-bottom: 5px;padding:5px 0px;}
    .record{font-size:16px;}
    .record>div{padding:10px 0px;border-bottom: 1px solid #EFEEF3;padding:15px 10px;}
    .record img{width:35px;margin-right:10px;opacity: 0.6}
    .logout{text-align: center;padding:15px 10px;color:#333;font-size:20px;}
    .record .inblock{border:none;flex:4;}
    </style>

	</head>

	<body>
	
	<header id="header" class="clear">
		<div class="fl header_left">
			<a href="http://localhost.test.com/index.php/cms"><img src="__MODULE_IMG__/img-png/doulaiicon.png" alt="" /></a>
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
	


	
	



<div class="record bgcfff mt3">
    <?php if(empty($payhistory)): ?>
    <div style="color:#c9c9c9;box-sizing:border-box;text-align: center;">当前没有充值记录</div>
    <?php else: if(is_array($payhistory) || $payhistory instanceof \think\Collection || $payhistory instanceof \think\Paginator): $i = 0; $__LIST__ = $payhistory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div>
            <a href="<?php echo url('cms/user/payhistory'); ?>" class="flex">
                <span class="flex1"><img src="__MODULE_IMG__/wechat.png" alt="" style="vertical-align: middle;margin-top:8px"></span>
                <div class="inblock">
                    <div style="color:#000;font-size:18px"><?php echo $vo['money']; ?>元</div>
                    <div style="font-size:14px"><?php echo date('m-d H:i', $vo['paytime']); ?></div>
                </div>
                <div style="flex:2;margin-top:10px"><span class="fcf00">+<?php echo $vo['coin'] + $vo['score']; ?></span> 书币</div>
            </a>
        </div>
    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
</div>



	</body>
	</html>
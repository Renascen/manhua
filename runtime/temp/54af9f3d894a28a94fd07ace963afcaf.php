<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:46:"D:\test/application/cms\view\search\index.html";i:1513653827;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>搜索</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta content="yes" name="apple-mobile-web-app-capable" />
		<meta content="black" name="apple-mobile-web-app-status-bar-style" />
		<meta content="telephone=no" name="format-detection" />
		<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/base.css" />
		<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/mui.min.css" />
		<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/many.css" />
		<script src="__MODULE_JS__/fontSize.js"></script>
		<style type="text/css">
				.search_kuang{
					background: url(__MODULE_IMG__/img-png/suosuokuang.png)no-repeat center left;
					background-size: 5.75rem 0.7rem;
				}
				.list_r_two>span{
					background: url(__MODULE_IMG__/img-png/fenlei.png)no-repeat center left;
					background-size: 0.52rem 0.25rem;
				}
				.list_zan{
					background: url(__MODULE_IMG__/img-png/zan.png)no-repeat center left;
					background-size: 0.20rem 0.20rem;
				}
				.list_msg{
					background: url(__MODULE_IMG__/img-png/pinglun.png)no-repeat center left;
					background-size: 0.20rem 0.20rem;
				}
		</style>
	</head>
	<body>
		<!--搜索框-->
		<div class="search">
			<div class="search_kuang clear">
				<input type="text" class="fl inp_search"/>	
				<button class="btn_search fr"></button>
			</div>			
			<span class="fr btn_cancel">取消</span>
		</div>
		<!--搜索内容区域-->
		<div class="search_content">
			<div class="search_list">
				<a href="">
					<div class="fl search_img">
						<img src="__MODULE_IMG__/img-big/33.jpg"/>
					</div>
					<div class="fl search_list_r">
						<p class="list_r_one">黄金神威</p>
						<p class="list_r_two">
							<span>少年</span>
							<span>热血</span>
							<span>三国</span>
						</p>
						<p class="list_r_thr">
							<img src="__MODULE_IMG__/img-png/touxiangtubiao.png"/>
							野田サトル
						</p>
						<p class="list_r_four">
							<span class="list_zan">1306</span>
							<span class="list_msg">4531</span>
						</p>
					</div>
				</a>
			</div>
			<div class="search_list">
				<a href="">
					<div class="fl search_img">
						<img src="__MODULE_IMG__/img-big/33.jpg"/>
					</div>
					<div class="fl search_list_r">
						<p class="list_r_one">黄金神威</p>
						<p class="list_r_two">
							<span>少年</span>
							<span>热血</span>
							<span>三国</span>
						</p>
						<p class="list_r_thr">
							<img src="__MODULE_IMG__/img-png/touxiangtubiao.png"/>
							野田サトル
						</p>
						<p class="list_r_four">
							<span class="list_zan">1306</span>
							<span class="list_msg">4531</span>
						</p>
					</div>
				</a>
			</div>
			<div class="search_list">
				<a href="">
					<div class="fl search_img">
						<img src="__MODULE_IMG__/img-big/33.jpg"/>
					</div>
					<div class="fl search_list_r">
						<p class="list_r_one">黄金神威</p>
						<p class="list_r_two">
							<span>少年</span>
							<span>热血</span>
							<span>三国</span>
						</p>
						<p class="list_r_thr">
							<img src="__MODULE_IMG__/img-png/touxiangtubiao.png"/>
							野田サトル
						</p>
						<p class="list_r_four">
							<span class="list_zan">1306</span>
							<span class="list_msg">4531</span>
						</p>
					</div>
				</a>
			</div>
		</div>
	</body>
	<script src="__MODULE_JS__/mui.js"></script>
	<script src="__MODULE_JS__/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		$(".btn_cancel").click(function(){
			$(".inp_search").val("");
		})
		//过滤特殊字符
		function str(s) {
		    var pattern = new RegExp("[`~!@#$^&*()=|{}':;',\\[\\].<>/?~！@#￥……&*（）——|{}【】‘；：”“'。，、？]")
		        var rs = "";
		    for (var i = 0; i < s.length; i++) {
		        rs = rs + s.substr(i, 1).replace(pattern, '');
		    }
		    return rs;
		}
		//搜索
		$(".btn_search").click(function(){
			var btnVal=str($(".inp_search").val());//过滤了特殊字符的值
			//alert(btnVal);
			//ajax
		})
	</script>
</html>

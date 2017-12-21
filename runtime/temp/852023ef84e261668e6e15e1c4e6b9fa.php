<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:47:"D:\test/application/cms\view\document\read.html";i:1513600456;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title><?php echo $cartoon['title']; ?></title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta content="yes" name="apple-mobile-web-app-capable" />
		<meta content="black" name="apple-mobile-web-app-status-bar-style" />
		<meta content="telephone=no" name="format-detection" />
		<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/base.css" />
		<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/mui.min.css" />
		<link rel="stylesheet" type="text/css" href="__MODULE_CSS__/read.css" />
		<script src="__MODULE_JS__/fontSize.js"></script>
	</head>

	<body>
		<header id="header">
			<div class="header_return">
				<a href=""><img src="__MODULE_IMG__/img-png/fanhui.png" alt="" /></a>
			</div>
			<div class="header_content"><span><?php echo $document['title']; ?></span></div>
			<div class="header_home">
				<a href="<?php echo url('index/index'); ?>"><img src="__MODULE_IMG__/img-png/shouye-.png" /></a>
			</div>
		</header>
		<section id="section" class="mui-content mui-scroll-wrapper">
			<div class="mui-scroll">

				<ul class="cartoon">



					<?php if(is_array($picture) || $picture instanceof \think\Collection || $picture instanceof \think\Paginator): $i = 0; $__LIST__ = $picture;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li class="cartoon_list">
						<img src="<?php echo $vo; ?>" alt="">
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>


				</ul>

			</div>

			
		</section>
		<footer id="footer">
			<div class="footer_shou">
				<a href=""><img src="__MODULE_IMG__/img-png/jiarushujia.png" /><span>加入书架</span></a>
			</div>
			<div class="footer_mu">
				<a href=""><span>目录</span></a>
			</div>
			<div class="footer_send">
				<a href=""><img src="__MODULE_IMG__/img-png/fenxiang.png" /><span>分享</span></a>
			</div>
		</footer>
		<!--遮罩层-->
		<div id="mock"></div>
	</body>
	<script src="__MODULE_JS__/mui.js"></script>
	<script src="__MODULE_JS__/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		document.getElementById("section").addEventListener("tap", function() {
			$("#header").animate({
				top: "0",
				opacity: "1"
			}, 200);
			$("#footer").animate({
				bottom: "0",
				opacity: "1"
			}, 200);
			$("#mock").show();
		});
		document.getElementById("mock").addEventListener("tap", function() {
			$("#header").animate({
				top: "-0.8rem",
				opacity: "0"
			}, 200);
			$("#footer").animate({
				bottom: "-0.93rem",
				opacity: "0"
			}, 200);
			$("#mock").hide();
		})
		
		mui.init({
			pullRefresh: {
				container: '#section',
				down: {
					contentrefresh: '加载上一话...',
					callback: pulldownRefresh
				},
				up: {
					contentrefresh: '加载下一话...',
					callback: pullupRefresh
				}
		
			}
		
		});
		/**
		 * 下拉刷新具体业务实现
		 */
		function pulldownRefresh() {
			setTimeout(function() {
				var htmlTop = '';
				//ajax
				for(var i = 0; i < 3; i++) {
					htmlTop += `
										<li class="cartoon_list">
											<img src="img/img-big/man1.jpg" />
										</li>`;
				}
				$(htmlTop).insertBefore(".cartoon");
		
				mui('#section').pullRefresh().endPulldownToRefresh(); //refresh completed
			}, 500);
		}
		var count = 0;
		/**
		 * 上拉加载具体业务实现
		 */
		function pullupRefresh() {
			setTimeout(function() {
				var htmlBottom = '';
				//ajax
				for(var i = 0; i < 3; i++) {
					htmlBottom += `
									<li class="cartoon_list">
										<img src="img/img-big/man3.jpg" />
									</li>`;
				}
				$(htmlBottom).insertAfter(".cartoon");		
				mui('#section').pullRefresh().endPullupToRefresh(); //refresh completed
			}, 500);
		}
		//			if (mui.os.plus) {
		//				mui.plusReady(function() {
		//					setTimeout(function() {
		//						mui('#pullrefresh').pullRefresh().pullupLoading();
		//					}, 10);
		//
		//				});
		//			} else {
		//				mui.ready(function() {
		//					mui('#pullrefresh').pullRefresh().pullupLoading();
		//				});
		//			}
			
	</script>

</html>
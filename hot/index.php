<?php
	$onread1 = floor(time() / (0 + rand(10000, 170000)));
	$onread2 = floor(time() / (0 + rand(50000, 220000)));
	$onread3 = floor(time() / (0 + rand(20000, 220000)));
	$onread4 = floor(time() / (0 + rand(20000, 220000)));
	$onread5 = floor(time() / (0 + rand(30000, 220000)));
	$onread6 = floor(time() / (0 + rand(40000, 220000)));

	$onSave1 = floor(time() / (17000000 + rand(1, 5000000))*100)/100;
	$onSave2 = floor(time() / (17000000 + rand(1, 5000000))*100)/100;
	$onSave3 = floor(time() / (17000000 + rand(1, 5000000))*100)/100;
	$onSave4 = floor(time() / (17000000 + rand(1, 5000000))*100)/100;
	$onSave5 = floor(time() / (17000000 + rand(1, 5000000))*100)/100;
	$onSave6 = floor(time() / (17000000 + rand(1, 5000000))*100)/100;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>火豚中文</title>
	<style>
		*{margin:0px;padding:0px;}
		li{list-style: none}
		body{background: #ECECEC;width:100%;font-size:2.8rem;}
		/*#header{font-size:3rem;padding:10px 20px;height: 100px;line-height: 100px;border-bottom:2px solid #ccc;position:fixed;top:0px;width:100%;background: #ECECEC}*/
		/*.back{position: absolute;}*/
		.title{text-align: center;}
		#list{width:100%;}
		#list li{display:flex;border-bottom:2px solid #ccc;padding:20px; height: auto;}
		#list .img{flex:1;display: inline-block; height: 200px;}
		#list .img img{height:100%;padding: 0px;margin: 0px}
		#list .right{flex:4;display: inline-block;padding:0px 20px;color:#000;height: 100%}
		.bookname{margin:5px 0px 0px 0px;font-weight: 1000;}
		.desc{margin:7px 0px 0px 0px; color: #555555; font-size: 2.3rem}
		.data{margin:10px 0px 0px 0px; color: #ff0066; font-size: 2rem;}
		.icon1{position: relative;top:4px;width:30px;height: 30px;display: inline-block;background: url('./img/00031.png');background-size: 100% 100%;margin-right:10px;}
		.icon2{position: relative;top:4px;width:30px;height: 30px;display: inline-block;background: url('./img/00032.png');background-size: 100% 100%;margin-right:10px;}
		.save{margin-left:25px;}
	</style>
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div id="main">
<!-- 		<div id="header">
			<div class="back"><img src="./next_icon.png" alt=""></div>	
			<div class="title">热门推荐</div>
		</div> -->
		<div id="content">
			<ul id="list">
				<li url="http://huotun.m.ishufun.net/read/11813/1254336.html">
					<div class="img"><img src="./img/情至荒芜遇见你.jpg" alt=""></div>
					<div class="right">
						<div class="text bookname">情至荒芜遇见你</div>
						<div class="text desc">结婚三年，丈夫出轨，还带着小三…</div>
						<div class="text data"><span><i class="icon1"></i><?=$onread1?>人在追</span><span class="save"><i class="icon2"></i><?=$onSave1?>%留存</span></div>
					</div>
				</li>
				<li url="http://huotun.m.ishufun.net/read/11640/1148503.html">
					<div class="img"><img src="./img/神术医妃.jpg" alt=""></div>
					<div class="right">
						<div class="text bookname">神术医妃</div>
						<div class="text desc">竟让她穿越到一位王爷的床上…</div>
						<div class="text data"><span><i class="icon1"></i><?=$onread2?>人在追</span><span class="save"><i class="icon2"></i><?=$onSave2?>%留存</span></div>
					</div>
				</li>
				<li url="http://huotun.m.ishufun.net/read/11817/1254272.html">
					<div class="img"><img src="./img/我拿时光换你一世痴迷.jpg" alt=""></div>
					<div class="right">
						<div class="text bookname">我拿时光换你一世痴迷</div>
						<div class="text desc">一夜缠绵，却怎么也甩不掉了…</div>
						<div class="text data"><span><i class="icon1"></i><?=$onread3?>人在追</span><span class="save"><i class="icon2"></i><?=$onSave3?>%留存</span></div>
					</div>
				</li>
				<li url="http://huotun.m.ishufun.net/read/16003/1321389.html">
					<div class="img"><img src="./img/午夜撩情：总裁，沉沦吧！.jpg" alt=""></div>
					<div class="right">
						<div class="text bookname">午夜撩情：总裁，沉沦吧！</div>
						<div class="text desc">醒来却发现枕边之人不是她的丈夫…</div>
						<div class="text data"><span><i class="icon1"></i><?=$onread4?>人在追</span><span class="save"><i class="icon2"></i><?=$onSave4?>%留存</span></div>
					</div>
				</li>
				<li url="http://huotun.m.ishufun.net/read/10082/665289.html">
					<div class="img"><img src="./img/被偷走的那七年.jpg" alt=""></div>
					<div class="right">
						<div class="text bookname">被偷走的那七年</div>
						<div class="text desc">天哪，那晚的混蛋，到底是谁…</div>
						<div class="text data"><span><i class="icon1"></i><?=$onread5?>人在追</span><span class="save"><i class="icon2"></i><?=$onSave5?>%留存</span></div>
					</div>
				</li>
				<li url="http://huotun.m.ishufun.net/read/10166/685209.html">
					<div class="img"><img src="./img/幸孕萌妻.jpg" alt=""></div>
					<div class="right">
						<div class="text bookname">幸孕萌妻</div>
						<div class="text desc">戚暖的一对龙凤胎，父不详！</div>
						<div class="text data"><span><i class="icon1"></i><?=$onread6?>人在追</span><span class="save"><i class="icon2"></i><?=$onSave6?>%留存</span></div>
					</div>
				</li>
			</ul>
		</div>
		<div id="footer"></div>
	</div>	
</body>
<script>
	$('#content li').click(function(){
		url = $(this).attr('url');
		window.location.href = url;
	});
	$('.back').click(function(){
		window.history.back()
	})
</script>
</html>
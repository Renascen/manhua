<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:47:"D:\test/application/cms\view\document\desc.html";i:1513653677;s:45:"D:\test/application/cms\view\public\base.html";i:1513598199;}*/ ?>
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
    .ipt_content{
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 3rem;
        z-index: 9999;
        background-color: #fff;
        padding: 0 0.34rem;
    }
    .ipt_bak{
        height: 1000px;
        width: 100%;
    }
    .v-c-two {
        background: url(__MODULE_IMG__/img-png/zan.png)no-repeat center left;
        background-size: 0.22rem 0.22rem;
    }

    .validity_one_type>span {
        background: url(__MODULE_IMG__/img-png/fenlei.png)no-repeat center left;
        background-size: 0.52rem 0.25rem;
    }

    .validity_autor {
        background: url(__MODULE_IMG__/img-png/touxiangtubiao.png)no-repeat center left;
        background-size: 0.29rem 0.29rem;
    }

    .anthology_title_left {
        background: url(__MODULE_IMG__/img-png/xuanji.png)no-repeat center left;
        background-size: 0.26rem 0.26rem;
    }

    .anthology_title_right {
        background: url(__MODULE_IMG__/img-png/gengduo.png)no-repeat center right;
        background-size: 0.29rem 0.29rem;
    }

    .comment_write {
        background: url(__MODULE_IMG__/img-png/xiepinglunkuang.png)no-repeat center right;
        background-size: 1.34rem 0.48rem;
    }
    #section{
        margin-top: 0;
    }

    .anthology_title_right{
        width:2rem;
    }
    #nav{
        margin-top: 0.85rem;
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
	


	
	



		<section id="section">
			<!--作品图-->
			<div class="works_cover">
				<a href="">
					<img src="<?php echo $share['img']; ?>" />
				</a>
			</div>
            <!--<div>-->
                <!--<div class="validity">-->
                <!--234-->
                <!--</div>-->
            <!--</div>-->
			<!--内容简介-->
			<div class="validity">
				<div class="validity_one">
					<div class="validity_one_title">
						<p class="fl v-c-one"> <span><?php echo $cartoon['title']; ?></span> <img src="__MODULE_IMG__/img-png/lianzai.png" /> </p>
						<p class="fr v-c-two"><?php echo $cartoon['view']; ?></p>
					</div>
					<!--清除浮动-->
					<div class="clear"></div>

					<div class="validity_one_type">
						<span>少年</span>
						<span>热血</span>
						<span>三国</span>
					</div>
					<div class="validity_autor">
					<?php echo $cartoon['author']; ?>
					</div>
				</div>
				<div class="validity_two ">
					<p class="validity_two_content">
						<span>简介 : </span> <?php echo $cartoon['desc']; ?>
					</p>
				</div>
			</div>
			<!--选集-->
			<div class="anthology">
				<div class="title">
					<div class="fl title_left anthology_title_left">
						<span><a href="<?php echo url('cms/column/indexidx', 'id=2' .'&bid=3'); ?>" style="color: #928c8e">选集</a></span>
					</div>
					<div class="fr title_right anthology_title_right">
						<a href="<?php echo url('cms/column/indexidx', 'id=2' .'&bid=3'); ?>">连载到68话</a>
					</div>
				</div>
				<!--选集栏-->

			</div>

			<!--金币-->
			<div class="gold">
				<div class="gold_list">
					<h3>100</h3>
					<p>本月金币</p>
				</div>
				<div class="gold_list">
					<h3><?php echo $cartoon['tips']; ?></h3>
					<p>累计金币</p>
				</div>
			</div>

			<!--评漫区-->
			<div class="comment">
				<div class="comment_title">
					<div class="fl comment_num">
						<h3>评漫区</h3>
						<p><?php echo $cartoon['c_total']; ?><span>人评论</span></p>
					</div>
					<div class="fr comment_write">
						<a href="javascript:void(0);">
							<img src="__MODULE_IMG__/img-png/xuepinglun.png" alt="" />
							<span>写评论</span>
						</a>
					</div>
				</div>
				<div class="comment_content">
					<div class="comment_man">
						<div class="comment_pic fl">
							<a href="#">
								<img src="__MODULE_IMG__/img-big/touxiang.jpg" />
							</a>
						</div>
						<div class="comment_msg fr">
							<div class="comment_name">
								<h3 class="fl comment_name_left">怪异叔叔</h3>
								<p class="fr comment_name_right"><span>1306</span><img src="__MODULE_IMG__/img-png/dianzanhou-.png" alt="" /></p>
							</div>
							<p class="comment_time">
								9月28日<span>08:00</span>
							</p>
							<p class="comment_font">女装大佬，其实我觉得如果暗黑帆是真的喜欢星咩的话，他可能就是知道了他是男的，他也会还是喜欢宵。小鬼的眼睛真的很好看啊。</p>
						</div>
					</div>
					<div class="comment_man">
						<div class="comment_pic fl">
							<a href="#">
								<img src="__MODULE_IMG__/img-big/touxiang.jpg" />
							</a>
						</div>
						<div class="comment_msg fr">
							<div class="comment_name">
								<h3 class="fl comment_name_left">怪异叔叔</h3>
								<p class="fr comment_name_right"><span>1306</span><img src="__MODULE_IMG__/img-png/dianzanqian.png" alt="" /></p>
							</div>
							<p class="comment_time">
								9月28日<span>08:00</span>
							</p>
							<p class="comment_font">女装大佬，其实我觉得如果暗黑帆是真的喜欢星咩的话，他可能就是知道了他是男的，他也会还是喜欢宵。小鬼的眼睛真的很好看啊。</p>
						</div>
					</div>
					<!--查看更多评论-->
					<div class="comment_many">
						<p>查看更多评论</p>
					</div>
				</div>
			</div>
		</section>
		<!--遮罩层-->
		<div class="mask">
			<!--点击顶部关闭-->
			<div class="mask_top"></div>
			<div class="mask_content">
				<div class="mask_one clear">
					<img class="fl mask_pic" src="__MODULE_IMG__/img-big/33.jpg" />
					<div class="fl mask_wenz">
						<p class="wenz_one font-hid">反转显示</p>
						<p class="wenz_two font-hid">书卷余额 <span>88</span></p>
						<p class="wenz_thr font-hid">单部作品可打赏8张月票</p>
					</div>

				</div>
				<div class="mask_two">
					<p>打赏金币 <span>(今日剩余 3 个)</span></p>
				</div>
				<div class="mask_thr">
					<ul class="mask_all">
						<li class="mask_index">1 金币</li>
						<li class="mask_index">2 金币</li>
						<li class="mask_index default_choose">3 金币</li>
						<li class="mask_index">4 金币</li>
						<li class="mask_index">5 金币</li>
						<li class="mask_index">6 金币</li>
						<li class="mask_index">7 金币</li>
						<li class="mask_index">8 金币</li>
					</ul>
				</div>
				<div class="mask_four">
					确认打赏
				</div>
			</div>
		</div>
		
		<!--弹出输入框-->
		<div class="ipt">
            <div class="ipt_bak"></div>
            <div class="ipt_content">
				<div class="ipt_one">
					<span class="fl ipt_cancel">取消</span>
					<span class="fr ipt_send">发送</span>
				</div>
				<div class="ipt_two">
					<textarea id="ipt_text" name="" rows="" cols=""></textarea>
				</div>
				<div class="ipt_thr">
					<p>还可以输入 <span class="ipt_num">200</span>/200个字</p>
				</div>
			</div>			
		</div>
		<footer id="footer">
			<div class="first_line">
				<a href="">加入书架</a>
			</div>
			<div class="mask_toggle">
				<a href="#middlePopover"><img src="__MODULE_IMG__/img-png/dashang.png" />打赏</a>
			</div>
			<div class="try_read">
				<a href="/index.php/cms/document/detail/id/<?php echo $readCid; ?>.html?updateReadHistory=true">
                    <?php if(empty($readCfg)): ?>开始阅读<?php else: ?>继续阅读<?php endif; ?></a>
			</div>
		</footer>





	<script type="text/javascript">
        //		选中打赏票数
        $(".mask_all").on("click", ".mask_index", function() {
            $(this).addClass("default_choose").siblings().removeClass("default_choose");
            //alert($(this).index());//选中位置
        })

        //打赏打开
        $(".mask_toggle").click(function() {
            $(".mask").show();
        })
        //打赏关闭
        //		var mark_top_header=$(window).height()-$(".mask").height();
        //		$(".mask_top").css('height',mark_top_header);
        $(".mask_top").click(function() {
            $(".mask").hide();
        })
        //确认打赏
        $(".mask_four").click(function(){
            var shanVal=$(".default_choose").html();
            //ajax
            alert(shanVal);
        })



        //写评论
        $("#ipt_text").click(function(){$(this).focus()});
        $(".comment_write").click(function(){
            $(".ipt").show();
            $("#ipt_text").trigger('click');
        })
        //隐藏输入框
        $(".ipt_bak").click(function(){
            $(".ipt").hide();
            $("#ipt_text").val("");
            $(".ipt_num").html("200");
        })
        $(".ipt_cancel").click(function(){
            $(".ipt_bak").trigger("click");
            $("#ipt_text").val("");
            $(".ipt_num").html("200");
        });
        //发送
        $(".ipt_send").click(function(){
            if(send_state==true){
                var sendVal=trim($("#ipt_text").val());
                //ajax
                console.log("发送成功"+sendVal);
                $("#ipt_text").val("");//发送成功后清除内容
                $(".ipt_num").html("200");
                $(".ipt_bak").trigger("click");
            }
        });
        //监听输入字数的变化
        var send_state=false;
        var ipt_text=document.getElementById("ipt_text");
        ipt_text.oninput=function(){
            //console.log($(this).val().length);
            var surplus=200-$(this).val().length;
            if(surplus>=0){
                $(".ipt_thr").html('<p>还可以输入 <span class="ipt_num">'+surplus+'</span>/200个字</p>');
                send_state=true;
            }else{
                $(".ipt_thr").html("您已经超出了限制字数");
                send_state=false;
            }

        }

        //去掉俩端空格

        function trim(str) {
            return str.replace(/(^\s*)|(\s*$)/g, "");
        }
	</script>


	</body>
	</html>
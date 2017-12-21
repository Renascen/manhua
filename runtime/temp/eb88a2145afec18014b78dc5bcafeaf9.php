<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:43:"D:\test/application/cms\view\pay\index.html";i:1512980734;s:45:"D:\test/application/cms\view\public\base.html";i:1513583294;}*/ ?>
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
        body{font-style: normal;font-weight: 400}
      .container{height:auto;-webkit-overflow-scrolling:touch;padding-bottom:80px;padding:0px;}
      .hd{padding:1.5em 0}
      .page_title{text-align:center;font-size:24px;color:#3cc51f;font-weight:400;margin:0 15%}
      .page_desc{text-align:center;color:#888;font-size:14px}
      .cell .page_title{color:#225fba}
      /*.cell .bd{margin-left: 10px;}*/
      .dialog .bd,.toast .bd{padding:120px 15px 0}
      .msg{background-color:#fff}
      .bookneed{padding: 9px 14px;background-color: #f7f7f9;border: 1px solid #e1e1e8;border-radius: 4px;font-size:16px}
      .product-cell{margin:0px 1%;}
      .product-item.active div{color:#ff8c00;}
      .product-item.active .offer span{color:#fff;}
      .product-item{position: relative;padding:10px 0px;overflow: hidden;}
      .product-item .product-welth{margin-bottom: 8px;color:#FF5548;font-weight: 500}
      .offer{position:absolute;top:0px;width:66%;height:17px;font-size:0.87em;color:#fff;line-height: 17px;width:40px;height:40px;}
      /*.left_title{left:-30px;-webkit-transform:rotate(-45deg);background:#D5A75A;}
      .right_title{right:-30px;-webkit-transform:rotate(45deg);background:#FF5548;}*/
      .offer span{display: inline-block;text-align: center;width:100%;}
      .left_title{left:0px;background:url(__MODULE_IMG__/detail_tag_left.png);background-size:100% 100%;}
      .right_title{right:0px;background:url(__MODULE_IMG__/detail_tag_right.png);background-size:100% 100%;}
      .left_title span{-webkit-transform:rotate(-45deg);position:relative;left:-7px;top:4px;}
      .right_title span{-webkit-transform:rotate(45deg);position:relative;right:-7px;top:4px;}
      .titleb{color:#000;}
      .titlec{color:#9B9B9B;}
      @media screen and (max-width: 320px){
        .offer{font-size:0.75em;top:5px;}
        .left_title{left:-15px;}
        .right_title{right:-15px;}
      }
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
	


    <div class="container">

    <div class="cell">

    <div class="bd mt3">
    <em>
  <?php if((!empty($cuxiaoshij))): ?>
    <div class='bgcfff' style='color:#f00;text-align: center;'><?php echo $cuxiaoshij; ?></div>
  <?php else: ?>
    <div class='bgcfff' style='padding:10px;font-size:16px;'>
    <?php if((!empty($chaptername))): ?>
      <span style='color:#ff0066; font-weight: bold; font-size: 20px'><?php echo $chaptername; ?></span>
      <span style='color:#333333; font-weight: bold; font-size: 14px'>《<?php echo $book['title']; ?>》</span>
      </div>
      <div class='bookneed' style=''>
      <?php if(empty($book['packsell'])): ?>
        章节字数：<span style='color:darkorange'><?php echo $chapterzishu; ?></span>
        <br />
        本章价格：<span style='color:darkorange'><?php echo $shubi; ?></span> 书币 
        <br />
        您的余额：<span style='color:darkorange' id="coin"><?php echo moneyToCoin($usercoin); ?></span> 书币
      <?php else: ?>
        全本字数：<span style='color:darkorange'><?php echo $book['zishu']; ?></span>
        <br />
        全本价格：<span style='color:darkorange'><?php echo $bookprice; ?></span> 元　<span class="original">原价 <span class="original_price"><del><?php echo $original; ?> 元</del></span></span>
        <br />
        您的余额：<span style='color:darkorange' id="coin"><?php echo $usercoin; ?></span> 元
      <?php endif; else: ?>
        您的余额：<span style='color:darkorange' id="coin"><?php echo moneyToCoin($usercoin); ?></span> 书币
    <?php endif; ?>
    </div>
  <?php endif; ?>
    </em>
    <div class="novel-list bgcfff" style="padding:15px 0px">
        <?php if(!empty($book['packsell'])): ?>
        <div class="packsell_desc">此书为优质出版图书，按照全本定价折扣销售，购买之后可以阅读该书全部章节</div>
        <?php endif; ?>
        <div style="margin:10px 10px;margin-top:0px;font-size:16px;">

            <em>充值金额 ( <span style="color:orangered">1元 = 100书币</span> )</em>

        </div>



<div id="products-grid" class="products-grid clearfix"> 
   
<em>
<?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $k = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
    <div class="product-cell" style="width: 48%">
        <div class="product-item <?php if(empty($noselect)): if($k==1): ?> active<?php endif; else: if($vo['status']==1): ?> active<?php endif; endif; ?>" data-pid="<?php echo $vo['id']; ?>" data-welth="<?php echo $vo['score']; ?>">
        <?php if(!empty(trim($vo['left_title']))): ?>
        <div class="offer left_title">
            <span><?php echo $vo['left_title']; ?></span>
        </div>
        <?php endif; if(!empty(trim($vo['offer_title']))): ?>
        <div class="offer right_title">
            <span><?php echo $vo['offer_title']; ?></span>
        </div>
        <?php endif; ?>
            <div class="product-welth">
                <span class="value">
                <?php echo $vo['titilea']; ?></span>
            </div>
            <div class="product-info">
                <div class="titleb"><?php echo $vo['titileb']; ?></div>
                <div class="titlec"><?php echo $vo['titilec']; ?></div>
            </div>
        </div> 
    </div> 
<?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</em>
</div>
<p class="weui_btn_area" style="margin-top:20px">
<a id="btn-pay-confirm" href="javascript:;" class="weui_btn weui_btn_primary" style="background: #FF5448"><?php if(empty($book['packsell'])): ?>确认充值<?php else: ?>充值购买<?php endif; ?></a>
</p>
</div>
</div>
<div style="margin: 15px; font-size: 15px; line-height: 22px;border-top: 1px #e1e1e8 solid;color: #999999">
    <em>
    <div style="padding-top: 10px;padding-bottom: 5px;">温馨提示：</div>
    <div class="tl">
        <ul>
            <li style="padding-bottom: 5px;">1、如遇到充值未到账的情况，请先确认当前登录的账号与充值的账号是否一致；</li>
            <li style="padding-bottom: 5px;">2、确定账号正确，充值后超过24小时仍未到账，请联系客服解决。</li>
            <li style="padding-bottom: 5px;">3、官方客服微信号：huotun666</li>
            <li style="padding-bottom: 5px;">4、工作时间：周一到周五 9:00-21:00</li>
        </ul>
    </div>
    </em>
</div>

</div>



<script>

    $(function () {
        var cid = '<?php echo $chapterId; ?>';
        var packsell = '<?php echo $book["packsell"]; ?>';
        function jsApiCall(json){
            WeixinJSBridge.invoke(
                'getBrandWCPayRequest',
                json,
                function(res){
                    //WeixinJSBridge.log(res.err_msg);
                    //alert(res.err_code+res.err_desc+res.err_msg);
                    if(res.err_msg == "get_brand_wcpay_request:ok" ) {
                        //alert('支付成功。');
                        var url = '/index.php/cms/pay/index.html?bid=<?php echo $bookid; ?>&cid=<?php echo $chapterId; ?>';
                        if(cid != '' && cid > 0){
                            url = '/index.php/cms/document/detail/id/' + cid;
                        }
                        if(packsell == 1 || packsell == '1'){
                            $.post('/index.php/cms/pay/paybybook', {bid:'<?php echo $book['id']; ?>', zid:cid,packsell:true}, function(res){
                                if(res.status != 4){
                                    location.reload();
                                }else{
                                    $.toast('购买成功');
                                    location.href = '/index.php/cms/document/detail/id/' + cid;
                                }
                                return false;
                            });
                        }else{
                            location.href = url;
                        }
                    }else{
                        //alert(res.errMsg);
                        if(res.err_msg == "get_brand_wcpay_request:cancel"){
                            //alert('支付取消!');
                            $.modal({
                                    title: '取消支付',
                                    text: '支付已取消',
                                    buttons: [{
                                        text: '确定',
                                        className: 'default',
                                        onClick: function () {
                                            submitting = false;
                                        }
                                    }
                                ]
                            });
                            //window.history.go(-1);
                        }else{
                            //alert("支付失败，请返回重试。");
                            $.modal({
                                title: '支付失败',
                                text: '支付失败，请重新选择进行支付',
                                buttons: [{
                                        text: '确定',
                                        className: 'default',
                                        onClick: function () {
                                            submitting = false;
                                        }
                                    }
                                ]
                            });
                            //window.history.go(-1);
                        }
                    }
                }
            );
        }
        function callpay(json) {
            if (typeof WeixinJSBridge == "undefined"){
                if( document.addEventListener ){
                    document.addEventListener('WeixinJSBridgeReady', jsApiCall(json), false);
                }else if (document.attachEvent){
                    document.attachEvent('WeixinJSBridgeReady', jsApiCall(json)); 
                    document.attachEvent('onWeixinJSBridgeReady', jsApiCall(json));
                }
            }else{
                jsApiCall(json);
            }
        }
        var articleId = null;
        var returnUrl = '';
        var tradeType = '';
        var submitting = false;
        $('#products-grid .product-item').click(function () {
            $('#products-grid .product-item').removeClass('active');
            $(this).addClass('active');
        });
        $('#btn-pay-confirm').click(function () {
            if (submitting) {
                return false;
            }
            submitting = true;
            var productId = $('#products-grid .product-item.active').data('pid');
            
            var url = "/index.php/cms/pay/pay.html?id=" + productId + "&bid=" + "<?php echo $bookid; ?>";
            if (articleId) {
                url += '&aid=' + articleId;
            }
            if (tradeType) {
                url += '&trade_type=' + tradeType;
            }
            if (returnUrl) {
                url += '&return=' + encodeURIComponent(returnUrl);
            }
            if (<?php echo $zffs; ?>==1) {
                $.post(url,{},function(resu){
                    // $.toast(resu.msg);
                    // console.log(resu);
                    // return false;
                    var jsonObj=JSON.parse(resu);
                    // console.log(typeof(jsonObj));
                    // console.log(jsonObj);
                    callpay(jsonObj);
                })
            }


            // var productId = $('#products-grid .product-item.active').data('pid');
            // var url = '/index.php/cms/pay/duobaopay/payprodcutid/'+productId+'/bid/<?php echo $book['id']; ?>';
            // if (articleId) {
            //     url += '&aid=' + articleId;
            // }
            // if (tradeType) {
            //     url += '&trade_type=' + tradeType;
            // }
            // if (returnUrl) {
            //     url += '&return=' + encodeURIComponent(returnUrl);
            // }
            // if (<?php echo $zffs; ?>==1) {
                // var llpay = '/index.php/cms/pay/duobaopay/';
                // $.ajax({
                //     url: '/index.php/cms/pay/savellpayid/',
                //     type: 'POST',
                //     dataType: 'JSON',
                //     contentType: 'application/json',
                //     data: JSON.stringify({
                //         id: productId,
                //     })
                // })
                // .then(function (payload) {
                //     location.href = llpay;
                // })
                // .fail(function (error) {
                //     window.location.reload();
                // });
            // }
            // if (<?php echo $zffs; ?>==1) {
                // location.href = url;
            // }
            return false;
        })
    })


</script>



	</body>
	</html>
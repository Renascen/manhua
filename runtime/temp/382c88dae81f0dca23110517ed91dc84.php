<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:53:"D:\test/application/cms\view\column\list_chapter.html";i:1512980734;s:47:"D:\test/application/cms\view\public\header.html";i:1512980734;}*/ ?>
<html lang="zh-CN" class="pixel-ratio-1"><head>
    <title><?php echo $book; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link rel="stylesheet" href="__MODULE_CSS__/vendor.css">
    <link rel="stylesheet" href="__MODULE_CSS__/front.css?1.4.0">
    <link rel="stylesheet" href="__MODULE_CSS__/iconfont.css">
    <script src="__MODULE_JS__/vendor.js"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>

    <link href="__MODULE_CSS__/font_apds0v8n2bhp8pvi.css" rel="stylesheet">
    
    <style>
      body,html{-webkit-tap-highlight-color:transparent}
      body{overflow-x:hidden;background-color:#fbf9fe;font-style: normal;font-weight: 400}
      .vip_txt{position: absolute; right: 15px; color: #ff9966}
      .novip_txt{position: absolute; right: 15px; color: #999999}
      .container{height:100%;-webkit-overflow-scrolling:touch}
      .container>div{background-color:#fbf9fe}
      .page_title{text-align:center;font-size:24px;color:#3cc51f;font-weight:400;margin:0 15%}
      .page_desc{text-align:center;color:#888;font-size:14px}
      .bd.spacing{padding:0 15px}
      .button .page_title{color:#225fba}.button .bd{padding:0 15px}
      .button .button_sp_area{padding:10px 0;width:60%;margin:0 auto;text-align:justify;text-justify:distribute-all-lines;font-size:0}
      .button .button_sp_area:after{display:inline-block;width:100%;height:0;font-size:0;margin:0;padding:0;overflow:hidden;content:"."}
      .cell .page_title{color:#225fba}
      .cell .bd{padding-bottom:30px}
      .dialog .bd,.toast .bd{padding:120px 15px 0}
      .msg{background-color:#fff}
      .panel .bd{padding-bottom:20px}
      .article{background-color:#fff}
      .article .page_title{color:#de7c23}
      .icons{background-color:#fff;text-align:center}
      .icons .page_title{color:#3e24bd}
      .icons .bd{padding:30px 0;text-align:center}
      .icons .icon_sp_area{padding:10px 20px;text-align:left}
      .icons i{margin:0 5px 10px}
      .tabbar{height:100%}
      .search_show{display:none;margin-top:0;font-size:14px}
      .search_show .weui_cell_bd{padding:2px 0 2px 20px;color:#666}
      .enter,.leave{position:absolute;top:0;right:0;bottom:0;left:0;z-index:1}
      .enter{-webkit-animation:a .2s forwards;animation:a .2s forwards}
      .leave{-webkit-animation:b .25s forwards;animation:b .25s forwards}
      .weui-infinite-scroll{padding-bottom:35px;}
      #buyall{position: fixed;bottom:0px;background:#EB624F;padding:10px 0px;width:100%;text-align: center;color:#fff;}
      #buyall a{color:#fff;}
      .weui_cells{margin-top:0px;}
      .sum{display:flex;padding:15px 10px;background:#fff;border-bottom:1px solid #d9d9d9;}
      .left,.right,.select_z{padding:8px;}
      .left{flex:2;text-align: left}
      .right{flex:3;text-align: right}
      .select_z{flex:3;text-align: left;border:1px solid #d6a464;padding:8px 10px;border-radius: 5px}
      .back{flex:1;}
      .title{flex:6;}
      .home{flex:1;}
      .chapter_col{display: flex}
      .chapter_title{flex:9;padding-right:10px;-webkit-line-clamp:1;overflow: hidden;white-space: nowrap;text-overflow:ellipsis;}
      .chapter_isvip{flex:1;}
    </style>
</head>
  <body class=" has-footer-nav">
    <div class="container">
    <div class="cell">
    <style>
	.weui_cells{margin-top:0px;}
      .hd{padding:7px 0px;text-align: center;width:100%;line-height: 30px;font-weight: bold;font-size:18px;color:#333;background:#FEFDF8;border-bottom: 1px #f3f3f3 solid; position: fixed;z-index: 9}
      .sum{display:flex;padding:15px 10px;background:#fff;border-bottom:1px solid #d9d9d9;}
      .left,.right,.select_z{padding:8px;}
      .left{flex:2;text-align: left}
      .right{flex:3;text-align: right}
      .select_z{flex:3;text-align: left;border:1px solid #d6a464;padding:8px 10px;border-radius: 5px}
      .back{flex:1;}
      .title{flex:6;}
      .home{flex:1;padding-bottom:0px;}
      .chapter_col{display: flex}
      .chapter_title{flex:9;}
      .chapter_isvip{flex:1;}
      .title{overflow:hidden;text-overflow:ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp:1;display: -webkit-box;}
</style>
<div class="hd <?php if(isset($zpay)): ?>hd_buy<?php endif; ?>">
  <div style="width:100%;display: flex;">
  <?php if(empty($tgid) || (!empty($tgid) && empty($f))): ?>
      <a href="<?php echo url('cms/document/desc', array('bid' => empty($bid)?$book['id']:$bid)); ?>" class="back"><!-- <i class="iconfont icon-prev"></i> <--><img src="__MODULE_IMG__/back.png" alt="" style="width:39%;padding-top: 10%"></--></a><div class="title"><em><?php if(($document['title'] == '')): ?>目录<?php else: ?><?php echo $document['title']; endif; ?></em></div><a class="home" href="<?php echo url('cms/index/index'); ?>"><!-- <i class="iconfont icon-home"></i> <--><img src="__MODULE_IMG__/home.png" alt="" style="width:39%;padding-top: 9%"></--></a>
  <?php else: ?>
    <div class="title"><em><?php if(($document['title'] == '')): ?>目录<?php else: ?><?php echo $document['title']; endif; ?></em></div>
  <?php endif; ?>
  </div>
</div>
    <div class="bd" style="padding-top: 45px;">
      <div class="weui_cells weui_cells_access" id="catalog-container">
        <div class="sum">
          <span class="left">共<?php echo $z_total; ?>章</span><span class="right" orderby='desc'>
            <?php if($orderby == desc): ?>
            <i id="asc" class="orderby">&#8593;升序</i>
            <?php else: ?>
            <i id="desc" class="orderby">&#8595;降序</i>
            <?php endif; ?>
          </span>
          <!-- <div class="select_z">1 - 50章
            <i style="width:25px;height:25px;position: absolute;right:15px">
            <img src="__MODULE_IMG__/select.png" alt=""></i>
          </div> -->
        </div>
        <div id="catalog-entries">

</div>

<!--ajax分页-->
        <div class="weui-infinite-scroll">
          <div class="infinite-preloader"></div>
        </div>

      </div>
    </div>
  </div>
</div>
<?php if(empty($isbuyall) == true): ?>
<!-- <a href="<?php echo url('cms/pay/paybybook',['zid' => 0, 'bid' => $bid]); ?>"><div id="buyall" style="line-height: 30px; font-size: 18px;">全本购买</div></a> -->
<?php endif; ?>
<!--ajax数据获取-->
<script>
  $(function () {

    wx.config({

            debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。

            appId: '<?php echo $signature['appId']; ?>', // 必填，公众号的唯一标识

            timestamp: '<?php echo $signature['timestamp']; ?>', // 必填，生成签名的时间戳

            nonceStr: '<?php echo $signature['nonceStr']; ?>', // 必填，生成签名的随机串

            signature: '<?php echo $signature['signature']; ?>',// 必填，签名，见附录1

            jsApiList: ['onMenuShareTimeline','onMenuShareAppMessage'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2

        });

        wx.ready(function(){
            var url = location.href;
            wx.onMenuShareTimeline({

                title: '<?php echo $share['title']; ?>', // 分享标题

                link: url, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致

                desc:'<?php echo $share['desc']; ?>',

                imgUrl: '<?php echo $share['img']; ?>', // 分享图标

            });

            wx.onMenuShareAppMessage({

                title: '<?php echo $share['title']; ?>', // 分享标题

                link: url, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致

                desc:'<?php echo $share['desc']; ?>',

                imgUrl: '<?php echo $share['img']; ?>', // 分享图标

            });

        })

    $(".orderby").click(function(){
      var opt = $(this).attr('id');
      var url = location.href;
      var pos = url.indexOf('.html');
      if(pos != -1){
        url = url.substr(0, pos);
      }
      location.href = url + '/orderby/' + opt;
    })
    var loading = false;
    var bid = <?php echo $bid; ?>;
    var cursor = 0;
    var completed = false;
    var from = '';

    loadCatalogEntries(cursor);

    $(document.body).infinite(50).on('infinite', function () {
      if (loading || completed) {
        return false;
      }

      loadCatalogEntries(cursor);
    });

    function loadCatalogEntries(start) {
      loading = true;
      var opt = $('.orderby').attr('id');
      if(opt == 'asc'){
        opt = 'desc'
      }else{
        opt = 'asc'
      }
      return $.get('/index.php/cms/column/doajaxidx', {start: start,bid: bid,orderby:opt}, function (entries) {
        var htmls = [];
        $.each(entries.data, function () {
          var entry = this;
          var url='/index.php/cms/document/detail/id/'+entry.id+'';
          entry.title = entry.title || '第' + entry.idx + '章';
          if(entry.isvip == 2){
             entry.isvip = '';
          }else if(entry.isvip == 1){
            entry.isvip = '<span class="vip_txt">VIP</span>';
          }else if(entry.isvip == 3){
            entry.isvip = '<span class="vip_txt">继续阅读</span>';
          }else if(entry.isvip == 4){
            entry.isvip = '<span class="vip_txt">限免</span>';
          }else{
            entry.isvip = '<span class="novip_txt">免费</span>';
          }
          //entry.welth = parseInt(entry.welth);
          if(entry.title.length > 15){
            entry.title = entry.title.substr(0, 16) + '...';
          }
          htmls.push(
              '<a class="weui_cell" href='+url+'>' +
              '<div class="weui_cell_bd weui_cell_primary">' +
              '<p class="chapter_col"><span class="chapter_title">' +
              entry.title + '</span><span class="chapter_isvip">'+ entry.isvip + 
              '</span></p>' +
              '</div>' +
              '</a>'
          );
        });

        $('#catalog-entries').append(htmls.join(''));
        var len = 0;
        if(entries.data){
          len = entries.data.length
        }
        cursor = cursor + len;
        completed = len === 0;

        loading = false;

        if (completed) {
          $(document.body).destroyInfinite();
          $('.weui-infinite-scroll').html('已加载完毕');
        }
      });
    }
  });
</script>
         
    
<!--     <div style="display:none">
     <script src="https://s13.cnzz.com/z_stat.php?id=1262128736&web_id=1262128736" language="JavaScript"></script>
    </div> -->


</body></html>
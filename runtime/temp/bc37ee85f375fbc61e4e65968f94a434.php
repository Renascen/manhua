<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:50:"D:\test/application/cms\view\column\list_book.html";i:1513409971;s:45:"D:\test/application/cms\view\public\base.html";i:1513598199;}*/ ?>
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
        .novel-list{margin-top:0px;}
        .novel-list .novel-summary{margin-top:0px;}
        .novel-info{position: relative;}
        .count{position:absolute;bottom:0px;width:100%;}
        .filter{margin-top: 0.85rem;}
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
	


	
	


<?php echo \think\Request::instance()->get('id'); ?>
    <div class="filter bgcfff mt3 flex" style="border-bottom:1px solid #EFEEF3">
        <div class="flex1 rank" style="border-right:1px solid #EAEAEC"><a class="active" id="man" key="2">男生榜</a></div>
        <div class="flex1 rank"><a id="woman" key="3">女生榜</a></div>
        <div class="flex1 rank"><a id="new" key="3">新作榜</a></div>
        <div class="flex1 rank"><a id="hot" key="3">畅销榜</a></div>
    </div>
    <div class="novel-list bgcfff rank-list" id="novel-list">

    </div>
  
<script>

  $(function () { 

    var sex = 2;
    var loading = false;

    var apiurl = '/index.php/cms/column/rank';

    var cursor = 0;

    var limit = 10;

    var completed = false;

    $(".rank a").click(function(){  
      $(".rank a").removeClass("active");  
      $(this).addClass("active"); 
      sex = $('.rank a.active').attr('key');
      loadList(0);
    }) 


    loadList(cursor);


    $(document.body).infinite(50).on('infinite', function () {

      if (loading || completed) {

        return false;

      }



      // loadList(cursor);


    });



    function loadList(start) {
      loading = true;
      $('#novel-list').html('');
      return $.get(apiurl, {start: start, limit: limit, sex: sex}, function (entries) {

        var htmls = [];
        $.each(entries.data, function (e) {
          var entry = this;
          var url='/index.php/cms/document/desc/id/'+entry.zid+'/bid/'+entry.id;

          htmls.push(

              '<div class="novel-item click-item">' +
                '<div class="novel-rank-icon">' + (e > 2 ? '<span class="inblock">' + (e + 1) + '</span>' : '<img src="__MODULE_IMG__/rank_' + (e + 1) + '.png" alt="" />') + '</div>' +                 
                '<div class="novel-image list">' +

                  '<a href="' + url + '"><img src='+entry.avatar+'  /></a>' +

                '</div>' +

                '<div class="novel-info">' +

                  '<a href="' + url + '" class="novel-title">' + entry.title + '</a>' +
                  '<div class="flex1 fcd6a465">' + entry.zuozhe + '</div>' + 
                  '<div class="novel-summary"><a href="' + url + '">' + entry.summary + '</a></div>' +
                  '<div class="count"><div class="inblock"><span>'+entry.zishu+'</span>字</div><div class="vertical-line inblock"></div><div class="inblock"><span class="fcf00">'+entry.tuijian+'</span>书票</div></div></div>' + 
                '</div>' +

              '</div>'

          );

        });



        $('#novel-list').append(htmls.join(''));
        var len = 0;

        if(entries.data){
          len = entries.data.length
        }
        cursor = cursor + len;
        completed = len < limit;



        loading = false;



        if (completed) {

          $(document.body).destroyInfinite();

          // $('.weui-infinite-scroll').html('已加载完毕');

        }

      });

    }

  });

</script>



	</body>
	</html>
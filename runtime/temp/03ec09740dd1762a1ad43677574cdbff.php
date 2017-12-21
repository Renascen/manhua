<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"/var/www/html/dlmh/application/cms/view/index/booklibrary.html";i:1513654394;s:56:"/var/www/html/dlmh/application/cms/view/public/base.html";i:1513598198;}*/ ?>
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
    .filter_title{margin:3px 2px;}
    .filter span{margin:3px 2px;}
    .filter span{
      cursor:pointer; 
    }
    
    .novel-info{position: relative;}
    .count{position:absolute;bottom:0px;width:100%;height:25px;}
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
    <div class="filter bgcfff mt3">
        <div class="type flex">
            <div class="filter_title">类型:</div>
            <div class="tags sex">
                <span class="active filter_tag book_sort" key="" >全部</span>
                <span class="filter_tag book_sort" key="2" style="margin: 0 10px">男生</span>
                <span class="filter_tag book_sort" key="3" style="margin: 0 10px 0 0">女生</span>
            </div>
        </div> 
        <div class="category flex">
            <div class="filter_title">分类:</div>
            <div class="tags cate" id="_sort">
                <span class="active filter_tag" id="all_sort" key="">全部</span>
                <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <span class="filter_tag" key="<?php echo $vo['tstype']; ?>"><?php echo $vo['name']; ?></span>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div> 
        <div class="other flex">
            <div class="filter_title">作品:</div>
            <div class="tags other">
                <span class="active filter_tag" key="">全部</span>
                <span class="filter_tag" key="0" style="margin: 0 10px">连载作品</span>
                <span class="filter_tag" key="1" style="margin: 0 10px 0 0">完结作品</span>
            </div>
        </div> 
    </div>
    <div class="novel-list bgcfff" id="novel-list">
    </div>
    <div class="empty" style="width:100%;text-align: center;background: #fff;display: none">
      <img src="__MODULE_IMG__/list_empty.png" alt="" style="width:30%">
      <div style="padding:10px 0px;color:#c9c9c9;font-size:16px">暂时没有相关小说</div>
    </div>
<script>

  $(function () {

    var loading = false;

    var tstype = '';
    var xstype = '';

    var apiurl = '/index.php/cms/column/doajax';

    var cursor = 0;

    var limit = 5;
    var sex = '';
    var completed = false;
   // $('.filter span').click(function()  
   $(document).on('click', '.filter span', function(){
        cursor = 0;
        $('#novel-list').empty();
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        sex = $('.sex .active').attr('key');
        tstype = $('.cate .active').attr('key');
        if($(this).hasClass("book_sort")){
           tstype = $('.cate #all_sort').attr('key');
        }
        // /**********确认所选类别是否有此类型************/
        //   $.ajax({
          
        //     url: '/index.php/cms/column/confirm2cate',
        //     type: 'GET',
        //     data: {'cid':sex,'tstype':tstype},
        //     dataType: 'text', 
        //     async :false, 
        //     success:function(data){
        //          changecate(data);
        //     }
        //   });
        //  function changecate(str){                
        //       if (str==1) {
        //           tstype = $('.cate .active').attr('key');
        //       }
        //       if (str==0) {
        //           tstype = $('.cate #all_sort').attr('key');
        //       }
        //   }
        /**********确认所选类别是否有此类型************/
        xstype = $('.other .active').attr('key');
        loadList(cursor);
        $(document.body).infinite(50).on('infinite', function () {

          if (loading || completed) {
            return false;

          }



          loadList(cursor);


        });
    });
    loadList(cursor);

/**********分类************/
 $(document).on('click', '.book_sort', function(){
      // tstype = $('.cate #all_sort').attr('key');
        var sex = $('.sex .active').attr('key');
        $.ajax({
              url: '/index.php/cms/column/cid2sort',
              type: 'GET',
              data: {'cid':sex,'tstype':tstype},
              success:function(entries){
                  $("#_sort>span:first").nextAll().remove();
        
                  $("#all_sort").addClass('active');//全部分类
                  var htmls = [];
                  $.each(entries, function () {
                    var entry = this;
                        htmls.push(
                            '<span class="filter_tag" key='+entry.tstype+'>'+entry.name +'</span>'
                        );

                  });
                  $('#_sort').append(htmls.join(''));
                    //  $.ajax({
                    //     url: '/index.php/cms/column/cid2resort',
                    //     type: 'GET',
                    //     data: {'cid':sex,'tstype':tstype},
                    //     dataType: 'json', 
                    //     async :false, 
                    //     success:function(data){
                    //       gochange(data);
                          
                    //     }
                    // });
              }

        });

        /**********重新选择类别后是否还包含此分类************/
     
        // function gochange(data) {
        //       if (data.code==1) {
        //         // var kv=data.tstype;
        //         // alert(data.tstype);
        //          // $('.cate span[key='+tstype]).addClass('active');
        //          $(".cate span[key="+data.tstype+"]").addClass('active');
        //       }
        //       if (data.code==0) {
        //           $("#all_sort").addClass('active');//全部分类
        //       }
          
        // }
        /**********重新选择类别后是否还包含此分类************/

    })
/**********分类************/

    $(document.body).infinite(50).on('infinite', function () {

      if (loading || completed) {
        return false;

      }



      loadList(cursor);


    });



    function loadList(start) {
        $('.empty').hide();
      loading = true;
      return $.get(apiurl, {start: start, limit: limit, tstype: tstype,xstype:xstype,sex:sex}, function (entries) {
        var htmls = [];
        if(entries.length == 0 && $('.novel-item').length == 0){
            $('.empty').show();
            return false;
        }
        $.each(entries.data, function () {

          var entry = this;
          var url='/index.php/cms/document/desc/bid/'+entry.id+'';
          htmls.push(
                '<div class="novel-item click-item">' +
                    '<div class="novel-image list">' +
                    '<a href="' + url + '"><img src='+entry.avatar+'  /></a>' +
                '</div>' +
                '<div class="novel-info">' +
                  '<a href="' + url + '" class="novel-title">' + entry.title + '</a>' +
                  '<div class="novel-summary"><a href="' + url + '">' + entry.summary + '</a></div>' +
                  '<div class="count flex"><div class="flex1 fcd6a465"><img src="__MODULE_IMG__/author_icon.png" alt="" class="author_icon"/>' + entry.zuozhe + '</div><div class="flex1 cur_cate"><div class="inblock fcd6a465 box_5 box_d6a465">'+entry.tstype+'</div><div class="inblock box_5 box_ccc">'+entry.zishu+'字</div></div></div>' + 
                '</div>' +
                '</div>'

          );

        });



        $('#novel-list').append(htmls.join(''));

        if(entries.data){
          len = entries.data.length
        }
        cursor = cursor + len;
        completed = len < limit;



        loading = false;



        if (completed) {

          $(document.body).destroyInfinite();

          $('.weui-infinite-scroll').html('已加载完毕');

        }

      });

    }

  });

</script>




	</body>
	</html>
<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:48:"D:\test/application/cms\view\user\booksheet.html";i:1513594509;s:45:"D:\test/application/cms\view\public\base.html";i:1513598199;}*/ ?>
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
        .weui_cell {padding: 10px 5px;}
        .thumb-novel-list{background:#fff;padding: 0px 10px;padding-left: 15px;padding-bottom: 10px}
        .thumb-novel-list .novel-item{margin:10px 1.5%;width:30.3%;padding:0px;background: #fff;margin-top:10px;position: relative;border:1px solid rgba(214,164,101,0.14);}
        .rank-list .novel-image{flex:1.3;}
        .rate-line{height:2px;background: #d6a465;position:absolute;bottom:-1px;}
        .btn{display: inline-block;width:auto;padding:0px 10px;border-radius: 5px;background:#fff;font-size:16px;margin-right:15px;}
        .btn-danger{color:#ff4500;}
        .opt{display: none;}
        .no_selbox{width:20px;height: 20px;border-radius: 50%;border:1px solid #d6a464;position:absolute;z-index: 88;right:3px;bottom:3px;display: none}
        .ischoose{background-image: url(__MODULE_IMG__/selbox.png);border: none;background-size: 100% 100%}
        .showtextline{overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;}
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
	


	
	


        <div class="block-body">

            <!-- <div class="empty mt3" style="width:100%;text-align: center;background: #fff;<?php if(!empty($booksheet)): ?>display:none<?php endif; ?>">
              <img src="__MODULE_IMG__/list_empty.png" alt="" style="width:30%">
              <div style="padding:10px 0px;color:#c9c9c9;font-size:16px">还没有收藏小说</div>
            </div> -->
            <div id="tjbook">
                <!-- 我的书架 -->
                <?php if(count($tj_book_myB)>0): ?>
                <div class="block" style="margin-top: 8px;" id="myB">
                    <div class="novel-list-title" style="padding-bottom:10px;padding-left:5px">

                        <div class="novel-list-cate"><em><?php echo $tj_book_myB[0]['tjname']; ?></em></div>
                        <?php if(count($tj_book_myB)>100): ?>
                            <div style="flex: 1.5; font-size: 1.2em;text-align: right;color: #999999"><em>更多</em></div>
                            <div style="flex: 0.5;margin-right: 5px;"><img src="__MODULE_IMG__/icon_right17.png" alt="" style="margin-top: 6px;width: 13px;height: 13px"></div>
                        <?php endif; ?>
                    </div>
                    <div class="block-body" style="margin-left: 5px;padding-bottom: 10px">
                        <div class="thumb-novel-list" style="padding-left:10px">
                           <?php if(is_array($tj_book_myB) || $tj_book_myB instanceof \think\Collection || $tj_book_myB instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($tj_book_myB) ? array_slice($tj_book_myB,0,99, true) : $tj_book_myB->slice(0,99, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <div class="novel-item" style="border:0px;margin-top: 0px">
                                <a href="<?php echo url('cms/document/desc', ['id' => $vo['zid'], 'bid' => $vo['id'], 'comefrom' => 9]); ?>">
                                    <div class="novel-image" style="width: 100%">
                                        <?php if(!empty($vo['image'])): ?>
                                        <img src="http://img.9kus.com/Images/76/6bd8341cb7718a921aefab52b5ea49bb.jpg" style="border: #d5c3ab 1px solid">
                                        <?php else: ?>
                                        <img src="<?php echo $vo['cover']; ?>" style="border: #d5c3ab 1px solid" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="novel-name" style="text-align: center;padding: 10px 0px">
                                        <span class="showtextline" style="color: #000;font-size: 1.2em; -webkit-line-clamp:1;overflow: hidden"><em><?php echo $vo['title']; ?></em></span>
                                        <span style="color: #999999;font-size: 14px"><em><?php echo $vo['zuozhe']; ?></em></span>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <script id="booksheet_temp" type="text/html">
            <div style="padding:10px 5px;background: #fff;text-align: right;padding-bottom:0px" id="operate">
                <div id="edit" class="btn">编辑</div> 
                <div class="opt">
                    <span id="cancel" class="btn" style="margin-right:0px;padding-right:3px">取消</span>
                    <span id="del" class="btn btn-danger">删除</span>
                </div>
            </div>
            <div class="thumb-novel-list" style="padding: 0px 10px;padding-left: 15px;padding-bottom: 10px">
                <div class="novel-item" id="booksheet_add_icon" style="min-height: 200px">
                    <a href="<?php echo url('cms/index/index'); ?>">
                    <img src="__MODULE_IMG__/add.png" alt="" style="width:80px;position: absolute;left:50%;margin-left:-40px;top:50%;margin-top:-40px">
                    </a>
                </div>
            </div>
        </script>
        <script id="readhistory_temp" type="text/html">
            <div class="novel-list bgcfff rank-list" id="novel-list" style="margin-top:1px;margin-bottom: 5px">
                <div class="novel-item click-item" id="readhistory_add_icon">
                    <a href="/index.php/cms/index/index" style="display: block;text-align: center;width: 100%">
                        <img src="__MODULE_IMG__/add.png" alt="" style="width:40px;">
                    </a>
                </div>
            </div> 
        </script>


<script>
    $(function(){
        var cursor = 0;
        var limit = 5;
        var completed = false;
        var loading = false;
        var apiurl = '<?php echo url("cms/user/booksheet_temp"); ?>';
        var action = '<?php echo $active; ?>';
        $(document.body).infinite(50).on('infinite', function () {
            if (completed || loading) {
                return false;
            }
            loadList(cursor, action);
        });
        $('.tab').on('click', function(){
            if($(this).children('a').data('action') == action){
                return false;
            }
            $('#notempty').empty();
            $('.tab a').removeClass('active');
            $(this).children('a').addClass('active');
            action = $(this).children('a').data('action');
            if(action == 'readhistory'){
                $('.block-body').css('padding-bottom', 0 + 'px');
                $('#myB').hide();
                $('#reH').show();
            }else{
                $('.block-body').css('padding-bottom', 0 + 'px');
                $('#reH').hide();
                $('#myB').show();
            }
            apiurl = '/index.php/cms/user/' + action + '_temp';
            cursor = 0;
            limit = 5;
            completed = false;
            loading = false;
            $(document.body).infinite(50).on('infinite', function () {
                if (completed || loading) {
                    return false;
                }
                loadList(cursor, 'booksheet');
            });
            loadList(cursor, action);
        })
        if('<?php echo $active; ?>' == 'readhistory'){
            apiurl = '<?php echo url("cms/user/readhistory_temp"); ?>';
            $('.tab a').removeClass('active');
            $('.block-body').css('padding-bottom', 0 + 'px');
            $('.readhistory').children('a').addClass('active');
        }
        loadList(cursor, action);
        function edit(){
            $(this).hide();
            $('#booksheet_add_icon').hide()
            $('.opt,.no_selbox').show();
            $('.novel-item a').click(function(){
                if($(this).children('.no_selbox').prop('class').indexOf('ischoose') == -1){
                    $(this).children('.no_selbox').addClass('ischoose');
                }else{
                    $(this).children('.no_selbox').removeClass('ischoose');
                }
                return false;
            });
        }
       function cancel(){
            $('.no_selbox').removeClass('ischoose');
            $('.novel-item a').unbind('click');
            $('#edit, #booksheet_add_icon').show();
            $('.no_selbox,.opt').hide();
        };
        function del(){
            var ids = new Array();
            $('.ischoose').each(function(i){
                ids[i] = $(this).data('id');
            });
            if(ids.length > 0){
                $.post('<?php echo url("cms/user/delbooksheet"); ?>', {'ids': ids}, function(result){
                    if(result.status == 1){
                        $('.ischoose').parents('.novel-item').remove();
                        completed = false;
                        loading = false;
                        limit = ids.length;
                        if($('.book-list').length <= 0){
                            $('#operate').hide();
                            $('#booksheet_add_icon').show()
                        }
                        $('#collect_num').text(parseInt($('#collect_num').text()) - limit);
                        $(document.body).infinite(50).on('infinite', function () {
                            if (completed || loading) {
                                return false;
                            }
                            loadList(cursor, action);
                        });
                        loadList(cursor - limit, action);
                    }else{
                        $.toast(result.message, 'cancel');
                    }
                })
            }
        }
        function loadList(start, action) {
            loading = true;
            return $.get(apiurl, {start: start, limit: limit}, function (entries) {
                var ele = '#' + action + '_temp';
                if(start == 0){
                    $('#notempty').append($(ele).html());
                    $('#edit').on('click', edit);
                    $('#del').on('click', del);
                    $('#cancel').on('click', cancel);
                }
                var novel_item_len = $('.book-list').length - 1;
                $('#' + action + '_add_icon').before(entries.html);
                var readhistory_tj = '<?php echo count($tj_book_reH); ?>';
                if(action == 'readhistory' && $('.readhistory-list').length != 0 || parseInt(readhistory_tj) != 0){
                    $('#readhistory_add_icon').hide();
                }
                if($('.opt').css('display') != 'none'){
                    $('.no_selbox').each(function(i){
                        if(i > novel_item_len){
                            $(this).css('display', 'block');
                            $('.book-list a').eq(i).on('click',function(){
                                if($(this).children('.no_selbox').prop('class').indexOf('ischoose') == -1){
                                    $(this).children('.no_selbox').addClass('ischoose');
                                }else{
                                    $(this).children('.no_selbox').removeClass('ischoose');
                                }
                                return false;
                            });
                        }
                    });
                }

                if($('.book-list').length <= 0){
                    $('#operate').hide();
                    $('#booksheet_add_icon').show()
                }
                if(entries.length == 0){
                    return false;
                }
                if(entries.length < limit){
                    completed = true;
                }
                if(limit != 5){
                    limit = 5;
                }else{
                    cursor = cursor + limit;
                }
                loading = false;
                if (completed) {
                    $(document.body).destroyInfinite();
                }
            });
        }
    
    })
</script>

	</body>
	</html>
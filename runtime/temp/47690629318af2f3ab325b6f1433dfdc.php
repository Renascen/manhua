<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:50:"D:\test/application/cms\view\user\readhistory.html";i:1512980734;}*/ ?>

<?php if(is_array($history) || $history instanceof \think\Collection || $history instanceof \think\Paginator): $i = 0; $__LIST__ = $history;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
  <div class="novel-item click-item readhistory-list">           
    <div class="novel-image list">
      <a href="/index.php/cms/document/detail/id/<?php echo $vo['zid']; ?>">
        <?php if(!empty($vo['image'])): ?>
        <img src="<?php echo get_thumb($vo['image']); ?>" style="border: #d5c3ab 1px solid">
        <?php else: ?>
        <img src="<?php echo $vo['cover']; ?>" style="border: #d5c3ab 1px solid" alt="">
        <?php endif; ?>
      </a>
    </div>
    <a href="/index.php/cms/document/detail/id/<?php echo $vo['zid']; ?>" >
        <div class="novel-info novel-title" style="padding-left: 5px;box-sizing: border-box;font-size:14px">
          <div style="color:#000;font-size:16px"><?php echo $vo['btitle']; ?></div>
          <div class="flex1 fcd6a465" style="margin-top:2px"><?php echo $vo['author']; ?></div>
          <div class="novel-summary" style="color:#666;margin-top:2px"><a href="/index.php/cms/document/detail/id/<?php echo $vo['zid']; ?>"><?php echo $vo['ctitle']; ?></a></div>
          <div class="count" style="margin-top:3px;color:#999">
            <?php echo date('m-d H:i', $vo['update_time']); ?>
          </div>
        </div>
    </a>
  </div>
<?php endforeach; endif; else: echo "" ;endif; ?>

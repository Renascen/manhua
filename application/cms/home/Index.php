<?php
// +----------------------------------------------------------------------
// | 浩森PHP框架 [ IeasynetPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2017~2018 北京浩森宇特互联科技有限公司 [ http://www.ieasynet.com ]
// +----------------------------------------------------------------------
// | 官方网站：http://ieasynet.com
// +----------------------------------------------------------------------
// | 开源协议 ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | 作者: 拼搏 <378184@qq.com>
// +----------------------------------------------------------------------

namespace app\cms\home;
use think\Db;
use util\Tree;
use think\Session;
/**
 * 前台首页控制器
 * @package app\cms\admin
 */
class Index extends Common
{
    /**
     * 首页
     * @author 拼搏 <378184@qq.com>
     * @return mixed
     */
    public function index($agent=null,$t=null)
    {
		session_start();
        // dump($_SESSION['wechat_user']);
        if(empty($_SESSION['wechat_user'])) {
            $this->redirect('oauth/oauth');
            //$this-> checklogin();
        }

        $user = DB::table('ien_admin_user')->where('openid', $_SESSION['wechat_user']['original']['openid'])->find();

        //$this->oauth($agent,'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]);
        // $this->getCode("wxfcc9e317d7e4279d","8af792a6ed7ada0e26bd30c212638f49");
        $category = explode("\r\n", DB::table('ien_cms_field')->where('id', 49)->value('options'));
		$banner_list = Db::view('ien_cms_slider','id,title,cover,url,bid')
                ->where('status=1')
                ->order('sort desc,update_time desc')
                ->select();
        foreach ($banner_list as &$val) {
            if(empty($val['url'])){
                $val['url'] = empty($val['bid']) ? '' :url('document/desc', ['bid' => $val['bid'], 'comefrom' => 1, 'subid' => $val['id']]);
            }else{
                $val['url'] = strpos($val['url'], '?') ? $val['url'] . '&comefrom=1&subid=' . $val['id'] : $val['url'] . '?comefrom=1&subid=' . $val['id'];
            }
        }
        unset($val);
        $list_num_1 = Db::table('ien_rec_admin')->field('list_num')->where('rec',1)->find();
        $hot_list = Db::table('ien_cartoon cartoon')
                ->join('ien_rec_cartoon rec','cartoon.id=rec.cid','left')
                ->where('cartoon.status=1')
                ->where("FIND_IN_SET( '1', cartoon.rec)")
                ->where("rec.rid=1")
                ->limit($list_num_1['list_num'])
                ->order('cartoon.sort desc')
                ->select();
                // echo DB::getLastSql();exit();

                if ($list_num_1['list_num'] == 0) {
                    $hot_list = [];
                }
                $hot_name = Db::table('ien_rec_admin')->field('name')->where('rec',1)->find();
                if (count($hot_list)>0) {
                    $hot_list[0]['tjname'] = $hot_name['name'];
                }

                // echo '<br>';
        $notice_list = Db::view('ien_cms_notice','id,title,url,bid')
        ->where('status=1')
        ->order('id desc')
        ->select();



                // 每日必看
        $list_num_2 = Db::table('ien_rec_admin')->field('list_num')->where('rec',0)->find();
        $daily_list = Db::table('ien_cartoon cartoon')->field("cartoon.id,cartoon.title,cartoon.model,cartoon.sort,cartoon.mold,cartoon.author,cartoon.desc,cartoon.image,cartoon.view,rec.sort")
                ->join('ien_rec_cartoon rec','cartoon.id=rec.cid','left')
                ->where('cartoon.status=1')
                ->where("FIND_IN_SET( '0', cartoon.rec)")
                ->where("rec.rid=0")
                ->limit($list_num_2['list_num'])
                ->order('cartoon.sort desc')
//                ->fetchSql(true)
                ->select();

                if ($list_num_2['list_num'] == 0) {
                    $girl_list_1 = [];
                }
                $girl_list_1_name = Db::table('ien_tj_admin')->field('name')->where('tj',2)->find();
                if (count($girl_list_1)>0) {
                    $girl_list_1[0]['tjname'] = $girl_list_1_name['name'];
                }
                foreach ($girl_list_1 as $k => $v) {
                    if ($v['pv']>=100000) {
                        $girl_list_1[$k]['pv'] = round($v['pv']/10000).'万+';
                    }
                    if($v['zishu'] >= 100000){
                        $girl_list_1[$k]['zishu'] = round($v['zishu'] / 10000) . '万';
                    }
                }

                // echo DB::getLastSql();
                // echo '<br>';
        $list_num_3 = Db::table('ien_tj_admin')->field('list_num')->where('tj',3)->find();
        $free_book = Db::table('ien_book book')->field('tjbook.sort,book.id,(book.jpv+ifnull(pvt.pv,0)) as pv,book.title,book.jpv,book.zuozhe,book.zishu,book.image,book.desc,book.model,book.cover,book.tstype,book.recommend')
                ->join('ien_book_pv pvt', 'book.id=pvt.bid', 'left')
                ->join('ien_tj_book tjbook','book.id=tjbook.bid','left')
                ->where('book.status=1')
                ->where("FIND_IN_SET( '3', book.tj)")
                ->where("tjbook.tjid=3")
                ->limit($list_num_3['list_num'])
                ->order('sort desc,pv desc')
                ->select();
                if ($list_num_3['list_num'] == 0) {
                    $free_book = [];
                }
                $free_book_name = Db::table('ien_tj_admin')->field('name')->where('tj',3)->find();
                if (count($free_book)>0) {
                    $free_book[0]['tjname'] = $free_book_name['name'];
                }
                foreach ($free_book as $k => $v) {
                    if ($v['pv']>=100000) {
                        $free_book[$k]['pv'] = round($v['pv']/10000).'万+';
                    }
                    if($v['zishu'] >= 100000){
                        $free_book[$k]['zishu'] = round($v['zishu'] / 10000) . '万';
                    }
                }
                // echo DB::getLastSql();
                // echo '<br>';
/******活动*********/
        $time = time();
        $act_limit = Db::query("select id,start_time,end_time from ien_free_limit where start_time < $time and (end_time > $time or end_time=0) and status=1");
        if ($act_limit) {
            foreach ($act_limit as $k => $v) {
                if ($v['end_time'] == 0) {
                    $act_limit[$k]['end_time'] = 2114265599;
                }
                // if ($v['start_time']<$time && $v['end_time']>$time) {
                //     $xsid[] = $v['id'];
                // }elseif ($v['start_time']<$time && $v['end_time'] == 0) {
                //     $xsid[] = $v['id'];
                // }elseif ($v['start_time'] == 0 && $v['end_time'] == 0) {
                //     $xsid[] = $v['id'];
                // }elseif ($v['start_time'] == 0 && $v['end_time']>$time) {
                //     $xsid[] = $v['id'];
                // }
            }
            $flag = array();
            foreach($act_limit as $v){
                $flag[] = $v['end_time'];
            }
            array_multisort($flag, SORT_ASC, $act_limit);
            $xsid = $act_limit[0]['id'];
            // $xsid = implode(',',$xsid);
            // $xsid = '('.$xsid.')';

                $free_limit = Db::query("select price,packsell,title,zuozhe,image,recommend,a.desc,zhishu,model,cover,b.sort,b.bid id from  ien_book a right join
        (select distinct bid,sort from ien_free_limit_book where xsid=$xsid and type=0 group by bid) b on a.id=b.bid  order by b.sort desc,id desc");
                $z_price_bid = [];
                foreach ($free_limit as $k => $v) {
                    if ($v['packsell'] == 0) {
                        $z_price_bid[] = $v['id'];
                    }
                }
                if ($z_price_bid) {
                    $z_price_bid = implode(',', $z_price_bid);
                    $z_price_bid = '('.$z_price_bid.')';
                    $free_limit = Db::query("select price,packsell,title,zuozhe,image,a.desc,zhishu,model,cover,recommend,b.sort,b.bid id,c.zishu from  ien_book a right join
                    (select distinct bid,sort from ien_free_limit_book where xsid=$xsid and type=0 group by bid) b on a.id=b.bid left join (select bid,sum(zishu) zishu from ien_chapter where bid in $z_price_bid and isvip=1 group by bid) c on a.id=c.bid order by sort desc,id desc");
                    foreach ($free_limit as $k => $v) {
                         if ($v['packsell'] == 1) {
                             $free_limit[$k]['price'] = round($v['price']/100);
                         }else{
                             $free_limit[$k]['price'] = round($v['zishu']/10000);
                         }
                    }
                }else{
                    foreach ($free_limit as $k => $v) {
                         if ($v['packsell'] == 1) {
                             $free_limit[$k]['price'] = round($v['price']/100);
                         }else{
                             $free_limit[$k]['price'] = round($v['zishu']/10000);
                         }
                    }
                }

        }else{
            $free_limit = [];
        }

//         $free_limit = Db::query("select title,zuozhe,image,a.desc,zhishu,model,cover,b.sort,b.bid id from  ien_book a right join
// (select distinct bid,sort from ien_free_limit_book where xsid in (select id from ien_free_limit where start_time < $time and end_time > $time and status=1)) b
// on a.id=b.bid  order by b.sort,zhishu");
        $this->assign('free_limit', $free_limit);
/******活动********/
        $this->assign('banner_list', $banner_list);
        $this->assign('notice_list', $notice_list); // 公告
        $this->assign('zhubian_list', $zhubian_list); // 热门
        $this->assign('daily_list', $daily_list); // 每日必看
        $this->assign('free_book', $free_book);
        $this->assign('category', $category);
        $this->assign('user', $user);

        // $this->assign('boy_list_1', $boy_list_1);
        // $this->assign('boy_list_2', $boy_list_2);
        return $this->fetch(); // 渲染模板
    }
    public function footer()
    {
    	return $this->fetch(); // 渲染模板
    }
    public function header()
    {
    	return $this->fetch(); // 渲染模板
    }
    public function many(){
        return $this->fetch(); // 渲染模板
    }
    public function booklibrary()
    {   
        // $category = explode("\r\n", DB::table('ien_cms_field')->where('id', 49)->value('options'));
        $category = Db::query("select tstype,name from ien_book_sort where status=1 order by sort desc,id desc");
        // var_dump($category);exit(); 
        $user = DB::table('ien_admin_user')->where('openid', $_SESSION['wechat_user']['original']['openid'])->find();
        $this->assign('category', $category);
        $this->assign('user', $user);
        $this->assign('id', input('id'));
    	return $this->fetch(); // 渲染模板
    }

}
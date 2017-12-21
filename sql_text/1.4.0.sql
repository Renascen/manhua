ALTER TABLE `ien_user_log` ADD `login_ip` bigint NOT NULL DEFAULT 0 COMMENT '登录ip';
TRUNCATE TABLE `ien_recommend_click_log`;
ALTER TABLE `ien_recommend_click_log` CHANGE `update_time` `uid` int unsigned not null default 0 comment '用户id';
ALTER TABLE `ien_recommend_click_log` CHANGE `click` `ip` bigint unsigned not null default 0 comment '客户端ip';
ALTER TABLE `ien_hot_tj` ADD `linktype` tinyint unsigned not null default 0 comment '填写链接的类型，0普通链接，1小说id' after link;
ALTER TABLE `ien_hot_tj` ADD `bid` int unsigned not null default 0 comment '小说id' after link;
ALTER TABLE `ien_advertise` ADD `linktype` tinyint unsigned not null default 0 comment '填写链接的类型，0普通链接，1小说id' after bid;
ALTER TABLE `ien_cms_slider` ADD `linktype` tinyint unsigned not null default 0 comment '填写链接的类型，0普通链接，1小说id' after bid;
ALTER TABLE `ien_cuxiao` ADD `status` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '前端默认选中状态';
CREATE TABLE `ien_comefrom_log` (
  `id` int(11) unsigned NOT NULL COMMENT '主键id' AUTO_INCREMENT PRIMARY KEY,
  `uid` int NOT NULL DEFAULT 0 COMMENT '用户id',
  `tgid` int  NOT NULL DEFAULT 0 COMMENT '推广id',
  `scene_id` varchar(255) NOT NULL DEFAULT '' COMMENT '场景值',
  `comefrom` varchar(255) NOT NULL DEFAULT '' COMMENT '来源网址',
  `is_new` tinyint NOT NULL DEFAULT 0 COMMENT '是否新用户，0否，1是',
  `create_time` int(11) unsigned NOT NULL default 0 COMMENT '记录时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户来源记录';
ALTER TABLE `ien_read_log` ADD INDEX uid_bid_index ( uid,bid );
ALTER TABLE `ien_tj_admin`
ADD `status` int(11) unsigned NOT NULL DEFAULT '1' COMMENT '前台开关1:开启0:关闭';

ALTER TABLE `ien_tj_admin`
ADD `list_num` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '单次数量';

ALTER TABLE `ien_tj_admin`
ADD `position` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '推荐位位置,0:首页1:我的书架2:阅读历史';

UPDATE `ien_tj_admin` SET
`id` = '7',
`tj` = '6',
`name` = '导航名称',
`num` = '8',
`position` = '1',
`list_num` = '5',
`status` = '1'
WHERE `id` = '7';

UPDATE `ien_tj_admin` SET
`id` = '8',
`tj` = '7',
`name` = '小说推荐',
`num` = '5',
`position` = '2',
`list_num` = '7',
`status` = '1'
WHERE `id` = '8';

CREATE TABLE `ien_hot` (
  `id` int(11) unsigned NOT NULL COMMENT '主键id' AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(32) COLLATE 'utf8_general_ci' NOT NULL COMMENT '方案名称',
  `num` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '推荐数量',
  `part` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '适用范围0:全部1:免费2:收费',
  `start_time` int(11) unsigned NOT NULL COMMENT '开始时间',
  `end_time` int(11) unsigned NOT NULL COMMENT '结束时间',
  `status` int(2) unsigned NOT NULL DEFAULT '0' COMMENT '状态0:未启用1:启用'
) COMMENT='阅读页热门推荐' ENGINE='InnoDB' COLLATE 'utf8_general_ci';

ALTER TABLE `ien_hot`
ADD `display_num` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '显示数量';

CREATE TABLE `ien_hot_tj` (
  `id` int(11) NOT NULL COMMENT '主键id' AUTO_INCREMENT PRIMARY KEY,
  `hotid` int(11) NOT NULL COMMENT '阅读页热门推荐表id',
  `name` varchar(32) COLLATE 'utf8_general_ci' NOT NULL COMMENT '推荐内容',
  `link` varchar(255) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' COMMENT '链接'
) COMMENT='阅读页推荐内容表' ENGINE='InnoDB' COLLATE 'utf8_general_ci';

ALTER TABLE `ien_hot_tj`
CHANGE `link` `link` varchar(255) COLLATE 'utf8_general_ci' NOT NULL COMMENT '链接' AFTER `name`,
ADD `create_time` int(11) unsigned NOT NULL COMMENT '创建时间';

CREATE TABLE `ien_advertise` (
  `id` int(11) NOT NULL COMMENT '主键id' AUTO_INCREMENT PRIMARY KEY,
  `cover` int(11) NOT NULL DEFAULT '0' COMMENT '广告图',
  `num` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '适用小说数量0：全部',
  `url` varchar(255) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' COMMENT '链接',
  `start_time` int(11) unsigned NOT NULL COMMENT '开始时间',
  `end_time` int(11) unsigned NOT NULL COMMENT '结束时间',
  `status` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '状态0:未启用1:启用',
  `is_delete` tinyint unsigned NOT NULL DEFAULT 0 COMMENT '是否删除，0:否,1:是'
) COMMENT='阅读页广告表' ENGINE='InnoDB' COLLATE 'utf8_general_ci';

ALTER TABLE `ien_advertise`
ADD `bid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '书id';

CREATE TABLE `ien_advertise_book` (
  `id` int(11) NOT NULL COMMENT '主键id' AUTO_INCREMENT PRIMARY KEY,
  `advid` int(11) NOT NULL COMMENT '阅读页广告表id',
  `bid` int(11) NOT NULL COMMENT '书id'
) COMMENT='阅读页广告关联书表' ENGINE='InnoDB' COLLATE 'utf8_general_ci';

ALTER TABLE `ien_advertise`
ADD `name` varchar(32) COLLATE 'utf8_general_ci' NOT NULL DEFAULT '' COMMENT '名称' AFTER `cover`;
ALTER TABLE `ien_agent_pv` ADD `comefrom` int NOT NULL DEFAULT 0 COMMENT '位置标记';
ALTER TABLE `ien_agent_pv` ADD `subid` int NOT NULL DEFAULT 0 COMMENT '广告来源id,非广告来源,此字段为0';

CREATE TABLE `ien_recommend_click_log` (
  `id` int(11) unsigned NOT NULL COMMENT '主键id' AUTO_INCREMENT PRIMARY KEY,
  `tag` int unsigned not null default 0 COMMENT '位置标记',
  `subid` int unsigned not null default 0 COMMENT '广告id',
  `in_table` varchar(100) not null default '' comment '所在数据表',
  `click` int unsigned not null default 0 comment '点击次数',
  `create_time` int(11) unsigned NOT NULL default 0 COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL default 0 COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='广告点击记录表';
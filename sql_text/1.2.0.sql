create table `ien_agent_category`
(
	`id` int unsigned auto_increment primary key,
	`title` varchar(255) not null default '' comment '类型名称',
	`status` tinyint not null default 1 comment '状态，0禁用，1启用',
	`sort` int not null default 0 comment '排序，数值越大，越靠前',
	`create_time` int not null default 0 comment '创建时间',
	`update_time` int not null default 0 comment '修改时间'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 comment '推广链接类型';
ALTER TABLE `ien_book` add `recommend` text comment '推荐词';
ALTER TABLE `ien_cuxiao` add `left_title` varchar(255) not null default '' comment '左侧标签';
ALTER TABLE `ien_cuxiao` change `offer_title` `offer_title` varchar(255) not null default '' comment '右侧标签';
ALTER TABLE `ien_agent` add `category` int comment '分类id';

CREATE TABLE `ien_book_sort` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `tstype` int(11) unsigned NOT NULL COMMENT '类型id',
  `name` varchar(255) NOT NULL COMMENT '类型名称',
  `cid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '类别,0:通用2:男3:女',
  `status` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '状态,0:未启用1:启用',
  `sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='书籍分类表';

INSERT INTO `ien_book_sort` (`id`, `tstype`, `name`, `cid`, `status`, `sort`) VALUES
(1,	0,	'玄幻奇异',	0,	1,	0),
(2,	1,	'都市生活',	0,	1,	1),
(3,	2,	'仙侠武侠',	0,	1,	0),
(4,	3,	'校园生活',	0,	1,	3),
(5,	4,	'悬疑灵异',	2,	1,	3),
(6,	5,	'现代言情',	3,	1,	2),
(7,	6,	'穿越架空',	2,	1,	2),
(8,	7,	'仙侠情缘',	2,	1,	0),
(9,	8,	'古代言情',	3,	1,	15),
(10,	9,	'玄幻奇幻',	0,	1,	11);

CREATE TABLE `ien_tj_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `tj` int(11) unsigned NOT NULL COMMENT '推荐位id',
  `name` varchar(255) NOT NULL COMMENT '推荐位名称',
  `num` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '书籍数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='推荐位管理表';

CREATE TABLE `ien_tj_book` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `tjid` varchar(32) NOT NULL COMMENT '推荐位id',
  `bid` int(11) unsigned NOT NULL COMMENT '书id',
  `sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='推荐位小说表';

insert into ien_tj_book (tjid,bid)
  select  tj,id from ien_book where tj<>'';

ALTER TABLE `ien_book` add `jpv` int not null default 0 comment '虚拟pv';
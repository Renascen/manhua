create table `ien_cms_notice`
(
	`id` int unsigned auto_increment primary key,
	`bid` int not null default 0 comment '小说id',
	`title` varchar(255) not null default '' comment '标题', 
	`status` tinyint not null default 1 comment '状态,0无效，1正常',
	`sort` int not null default 100 comment '排序',
	`url` varchar(255) not null default '' comment '链接地址',	
	`create_time` int not null default 0 comment '添加时间',
	`update_time` int not null default 0 comment '更新时间'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 comment '广播列表';
ALTER TABLE ien_cms_notice ADD INDEX idx_bid (bid);
create table `ien_user_log`
(
	`id` int unsigned auto_increment primary key,
	`uid` int not null default 0 comment '用户id',
	`openid` varchar(255) not null default '' comment '用户openid',
	`create_time` int not null default 0 comment '登录时间'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 comment '用户日志表';
alter table `ien_user_log` add index idx_uid (uid);
alter table `ien_user_log` add index idx_oid (openid);
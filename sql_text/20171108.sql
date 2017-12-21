create table `ien_wechat_qrcode`
(
	`id` int unsigned auto_increment primary key,
	`scene_id` int not null default 0 comment '场景值',
	`title` varchar(255) not null default '' comment '场景名称',
	`showqrcode` varchar(255) not null default '' comment '二维码地址',
	`type` varchar(255) not null default '' comment '回复类型',
	`content` varchar(255) not null default '' comment '回复内容',
	`status` tinyint not null default 1 comment '状态，0禁用，1启用，禁用时不发消息',
	`create_time` int not null default 0 comment '创建时间',
	`update_time` int not null default 0 comment '修改时间',
)ENGINE=InnoDB DEFAULT CHARSET=utf8 comment '场景二维码';
create table `ien_qrcode_log`
(
	`id` int unsigned auto_increment primary key,
	`scene_id` int not null default 0 comment '场景值',
	`uid` int not null default 0 comment '用户id',
	`openid` varchar(255) not null default '' comment '用户openid',
	`isnew` tinyint not null default 0,
	`create_time` int not null default 0 comment '创建时间'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 comment '场景二维码扫码记录';
ALTER TABLE `ien_qrcode_log` ADD INDEX idx_uid ( uid );
ALTER TABLE `ien_admin_user` add `scene_id` int not null default 0 comment '场景值';
ALTER TABLE `ien_admin_user` add `guanzhued` int not null default 0 comment '是否曾经关注过';
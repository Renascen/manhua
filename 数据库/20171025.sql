create table `ien_comment`
(
	`id` int unsigned auto_increment primary key,
	`uid` int not null default 0 comment '用户id',
	`bid` int not null default 0 comment '小说id',
	`comment` varchar(256) not null default '' comment '评论内容', 
	`status` tinyint not null default 0 comment '评论状态,0待审核，1已审核',
	`zan` int not null default 0 comment '点赞数',
	`zan_list` text comment '点赞者列表',	
	`createtime` int not null default 0 comment '评论时间'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 comment '书籍评论表';
ALTER TABLE ien_comment ADD INDEX idx_bid ( bid );
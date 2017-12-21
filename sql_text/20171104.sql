create table `ien_book_pv`
(
	`id` int unsigned auto_increment primary key,
	`bid` int not null default 0 comment '小说id',
	`pv` int(255) not null default 0 comment 'pv总数',
	`max_pv_id` int(255) not null default 0 comment '最新更新ien_agent_pv数据id'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 comment '小说pv统计';
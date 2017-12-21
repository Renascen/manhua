create table `ien_agent_category`
(
	`id` int unsigned auto_increment primary key,
	`title` varchar(255) not null default '' comment '类型名称',
	`status` tinyint not null default 1 comment '状态，0禁用，1启用，禁用时不发消息',
	`sort` int not null default 0 comment '排序，数值越大，越靠前',
	`create_time` int not null default 0 comment '创建时间',
	`update_time` int not null default 0 comment '修改时间'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 comment '推广链接类型';
ALTER TABLE `ien_book` add `recommend` text comment '推荐词';
ALTER TABLE `ien_cuxiao` add `left_title` varchar(255) not null default '' comment '左侧标签';
ALTER TABLE `ien_cuxiao` change `offer_title` `offer_title` varchar(255) not null default '' comment '右侧标签';
ALTER TABLE `ien_agent` add `category` int comment '分类id';
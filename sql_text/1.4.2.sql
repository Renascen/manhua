alter table `ien_book` add `pay_desc` text comment '充值描述';
alter table `ien_cuxiaolist` add `active_page_title` varchar(100) not null default '' comment '充值引导标题';
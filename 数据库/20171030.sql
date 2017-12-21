alter table `ien_cuxiao` add `offer_title` varchar(255) not null default '' comment '优惠信息';
ALTER TABLE `ien_chapter` ADD INDEX idx (idx);
alter table `ien_addcoin_log` add `orderid` int unsigned not null default 0 comment '订单id，签到获得积分时该字段为0';

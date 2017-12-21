ALTER TABLE `ien_cuxiaolist` ADD `type` tinyint NOT NULL DEFAULT 0 COMMENT '活动类型，0普通促消，1首充活动';
ALTER TABLE `ien_cuxiaolist` ADD `is_delete` tinyint NOT NULL DEFAULT 0 COMMENT '是否删除，0否，1是';
ALTER TABLE `ien_cuxiaolist` ADD `status` tinyint NOT NULL DEFAULT 1 COMMENT '是否启用，0否，1是';
ALTER TABLE `ien_cuxiaolist` ADD `createtime` int NOT NULL DEFAULT 0 COMMENT '创建时间';
ALTER TABLE `ien_free_limit_book` ADD `type` tinyint NOT NULL DEFAULT 0 COMMENT '活动类型，0限时免费，1首充活动';
ALTER TABLE `ien_cuxiao` MODIFY `leixing` tinyint not null DEFAULT 1 COMMENT '商品类型，1商品，2促消，3首充活动';

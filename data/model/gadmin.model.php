<?php
/**
 * 管理员权限组
 *
 *
 *
 * * @网店运维 (c) 2015-2018 ShopWWI Inc. (http://www.shopwwi.com)
 * @license    http://www.shopwwi.c om
 * @link       交流群号：111731672
 * @since      网店运维提供技术支持 授权请购买shopnc授权
 */
defined('ByShopWWI') or exit('Access Invalid!');
class gadminModel extends Model{
    public function __construct() {
        parent::__construct('gadmin');
    }

    /**
     * 根据id查询后台管理员权限组
     * @param int $id
     * @return array
     */
    public function getGadminInfoById($id) {
        return $this->where(array('gid' => $id))->find();
    }
}

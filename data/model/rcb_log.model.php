<?php
/**
 * 平台充值卡使用日志
 * * @网店运维 (c) 2015-2018 ShopWWI Inc. (http://www.shopwwi.com)
 * @license    http://www.shopwwi.c om
 * @link       交流群号：111731672
 * @since      网店运维提供技术支持 授权请购买shopnc授权
 */

defined('ByShopWWI') or exit('Access Invalid!');

class rcb_logModel extends Model
{
    public function __construct()
    {
        parent::__construct('rcb_log');
    }

    /**
     * 获取充值卡使用日志列表
     *
     * @param array $condition 条件数组
     * @param int $pageSize 分页长度
     *
     * @return array 充值卡使用日志列表
     */
    public function getRechargeCardBalanceLogCount($condition)
    {
        return $this->where($condition)->count();
    }

    /**
     * 获取充值卡使用日志列表
     *
     * @param array $condition 条件数组
     * @param int $pageSize 分页长度
     *
     * @return array 充值卡使用日志列表
     */
    public function getRechargeCardBalanceLogList($condition, $pageSize = 20, $limit = null, $sort = 'id desc')
    {
        if ($condition) {
            $this->where($condition);
        }

        if ($sort) {
            $this->order($sort);
        }

        if ($limit) {
            $this->limit($limit);
        } else {
            $this->page($pageSize);
        }

        return $this->select();
    }
}

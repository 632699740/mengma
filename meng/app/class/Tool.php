<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/17
 * Time: 8:48
 */
class Tool {
    static public $treeList = array(); //存放无限分类结果如果一页面有多个无限分类可以使用 Tool::$treeList = array(); 清空
    /**
     * 无限级分类
     * @access public
     * @param Array $data     //数据库里获取的结果集
     * @param Int $pid
     * @param Int $count       //第几级分类
     * @return Array $treeList
     */
    static public function tree(&$data,$pid = 0,$count = 1) {
        foreach ($data as $key => $value){
            if($value['p_id']==$pid){
                $value['count'] = $count;
                self::$treeList []=$value;
                unset($data[$key]);
                self::tree($data,$value['c_id'],$count+1);
            }
        }
        return self::$treeList ;
    }

}
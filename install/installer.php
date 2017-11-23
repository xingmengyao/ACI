<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/23
 * Time: 10:53
 */
namespace mjwlking\installer;
/**
 * Class installer
 * @package mjwlking\installer
 */
class installer
{
    //是否允许用户协议
    public $set_rule = False;
    //默认一个用户协议
    public $rule_file = "./resources/rule.txt";
    //协议的文件类型 默认txt
    public $rule_ext = "txt";

    //构造函数 类初始化
    public function __construct()
    {

    }

    //读取协议，根据文件类型，返回html。
    protected function set_rule($rule_file,$rule_ext)
    {
        //你们来写
    }
}
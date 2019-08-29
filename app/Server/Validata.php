<?php
namespace App\Server;
use App\Exception\ValidataException;

class Validata {
    /**
     * 定义一个视图加载方法
    */
    public static function make()
    {
        if (empty($_POST['title'])) {
            throw new ValidataException('请输入内容');
        }
    }
}
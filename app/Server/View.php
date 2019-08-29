<?php
namespace App\Server;
use App\Exception\ViewsException;

class View {
    /**
     * 定义一个视图加载方法
    */
    public static function make(string $file, array $vars = [])
    {
        $file = __DIR__.'/../Views/'.$file.'.blade.php';
        if (!is_file($file)) {
            throw new ViewsException('视图模板'.$file.'不存在');
        }
        include $file;
    }
}
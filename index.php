<?php
/**引入自动加载文件*/
include "app/bootstrap.php";
//throw new \App\Exception\ValidataException('这是一个测试');
\App\Server\View::make('index');
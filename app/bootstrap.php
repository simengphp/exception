<?php
session_start();
include "vendor/autoload.php";
class Boot{
    public function init()
    {
        set_exception_handler([$this, 'exception']);
    }
    /**自定义异常处理方法*/
    public function exception($e)
    {
        if (method_exists($e, 'render')) {
            $e->render();
        } else {
            die($e);
        }
    }
}
(new Boot())->init();
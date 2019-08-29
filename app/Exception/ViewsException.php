<?php
    /**
     * Created by PhpStorm.
     * User: Administrator
     * Date: 2019/8/28
     * Time: 17:45
     */

namespace App\Exception;


use App\Server\View;

class ViewsException extends \Exception
{
    public function render()
    {
        View::make('error', ['message' => $this->getMessage()]);
    }
}
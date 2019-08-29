<?php
    /**
     * Created by PhpStorm.
     * User: Administrator
     * Date: 2019/8/28
     * Time: 17:45
     */

namespace App\Exception;


class ValidataException extends \Exception
{
    public function render()
    {
        $_SESSION['VALI_MESSAGE'] = $this->getMessage();
        header('Location:/ex/index.php');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Exception;

class ErrorLoggingController extends Controller
{
    /**
     * repott() 用法
     *
     * @param $value
     * @return bool
     */
    public function reportErrorLog($value) {
        try {
            //$value的驗證
        } catch (Exception $e) {
            /**
             * report() 會使用 App\Exceptions\Handler 的 report 方法來回報一個例外
             */
            report($e);
            return false;
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Exception;
use Illuminate\Support\Facades\Log;

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

    /**
     * 回傳錯誤頁面
     */
    public function returnAbort() {
        abort(404);
        abort(403, 'test message');

    }

    /**
     * 新增訊息到Log
     */
    public function addLog() {
        $message = 'test message';
        Log::emergency($message);
        Log::alert($message);
        Log::critical($message);
        Log::error($message);
        Log::warning($message);
        Log::notice($message);
        Log::info($message);
        Log::debug($message);
    }
}

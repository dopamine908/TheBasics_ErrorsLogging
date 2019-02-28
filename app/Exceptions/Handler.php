<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     * 不該被回報的例外類型清單
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     * 回報或記錄一個例外
     * report 方法用於記錄例外或發送它們到外部服務，像是 Bugsnag 或 Sentry
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        /**
         * 當Exceptiong是自己律定的類型的時候才執行
         */
        if ($exception instanceof CustomException) {
            //
        }

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     * 渲染例外到 HTTP 回應
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        /**
         * 當Exceptiong是自己律定的類型的時候才執行
         */
        if ($exception instanceof CustomException) {
            /**
             * 回傳 500 錯誤 response
             */
            return response()->view('errors.custom', [], 500);
        }

        return parent::render($request, $exception);
    }
}

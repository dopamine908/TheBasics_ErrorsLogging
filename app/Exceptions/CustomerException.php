<?php

namespace App\Exceptions;

use Exception;

/**
 * 自定義exception
 *
 * Class CustomerException
 * @package App\Exceptions
 */
class CustomerException extends Exception
{
    /**
     * 回報例外。
     *
     * @return void
     */
    public function report()
    {
        //
    }

    /**
     * 渲染例外到 HTTP 回應。
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return response();
    }
}

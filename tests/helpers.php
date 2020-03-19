<?php

use Illuminate\Http\Response;

if (! function_exists('response')) {
    /**
     * fake response helper method
     *
     * @param  \Illuminate\View\View|string|array|null  $content
     * @param  int  $status
     * @param  array  $headers
     * @return \Illuminate\Http\Response|\Illuminate\Contracts\Routing\ResponseFactory
     */
    function response($content = '', $status = 200, array $headers = [])
    {
        return new Response($content, $status, $headers);
    }
}

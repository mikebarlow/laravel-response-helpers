<?php

use Illuminate\Http\Response;

if (! function_exists('ok')) {
    function ok($content = '', array $headers = [])
    {
        return response(
            $content,
            Response::HTTP_OK,
            $headers
        );
    }
}

if (! function_exists('created')) {
    function created($content = '', array $headers = [])
    {
        return response(
            $content,
            Response::HTTP_CREATED,
            $headers
        );
    }
}

if (! function_exists('accepted')) {
    function acccepted($content = '', array $headers = [])
    {
        return response(
            $content,
            Response::HTTP_ACCEPTED,
            $headers
        );
    }
}

if (! function_exists('badRequest')) {
    function badRequest($content = '', array $headers = [])
    {
        return response(
            $content,
            Response::HTTP_BAD_REQUEST,
            $headers
        );
    }
}

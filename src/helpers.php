<?php

use Illuminate\Http\Response;
use Illuminate\Http\Resources\Json\JsonResource;

if (! function_exists('ok')) {
    function ok($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_OK,
            $headers
        );
    }
}

if (! function_exists('created')) {
    function created($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_CREATED,
            $headers
        );
    }
}

if (! function_exists('accepted')) {
    function accepted($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_ACCEPTED,
            $headers
        );
    }
}

if (! function_exists('noContent')) {
    function noContent(array $headers = [])
    {
        return response(
            null,
            Response::HTTP_NO_CONTENT,
            $headers
        );
    }
}

if (! function_exists('movedPermanently')) {
    function movedPermanently($newUrl, array $headers = [])
    {
        return response(
            null,
            Response::HTTP_MOVED_PERMANENTLY,
            $headers + ['Location' => $newUrl]
        );
    }
}

if (! function_exists('found')) {
    function found($url, array $headers = [])
    {
        return response(
            null,
            Response::HTTP_FOUND,
            $headers + ['Location' => $url]
        );
    }
}

if (! function_exists('seeOther')) {
    function seeOther($newUrl, array $headers = [])
    {
        return response(
            null,
            Response::HTTP_SEE_OTHER,
            $headers + ['Location' => $newUrl]
        );
    }
}

if (! function_exists('temporaryRedirect')) {
    function temporaryRedirect($tempUrl, array $headers = [])
    {
        return response(
            null,
            Response::HTTP_TEMPORARY_REDIRECT,
            $headers + ['Location' => $tempUrl]
        );
    }
}

if (! function_exists('badRequest')) {
    function badRequest($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_BAD_REQUEST,
            $headers
        );
    }
}

if (! function_exists('unauthorized')) {
    function unauthorized($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_UNAUTHORIZED,
            $headers
        );
    }
}

if (! function_exists('paymentRequired')) {
    function paymentRequired($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_PAYMENT_REQUIRED,
            $headers
        );
    }
}

if (! function_exists('forbidden')) {
    function forbidden($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_FORBIDDEN,
            $headers
        );
    }
}

if (! function_exists('notFound')) {
    function notFound($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_NOT_FOUND,
            $headers
        );
    }
}

if (! function_exists('methodNotAllowed')) {
    function methodNotAllowed($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_METHOD_NOT_ALLOWED,
            $headers
        );
    }
}

if (! function_exists('notAcceptable')) {
    function notAcceptable($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_NOT_ACCEPTABLE,
            $headers
        );
    }
}

if (! function_exists('gone')) {
    function gone($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_GONE,
            $headers
        );
    }
}

if (! function_exists('payloadTooLarge')) {
    function payloadTooLarge($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_REQUEST_ENTITY_TOO_LARGE,
            $headers
        );
    }
}

if (! function_exists('unprocessableEntity')) {
    function unprocessableEntity($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_UNPROCESSABLE_ENTITY,
            $headers
        );
    }
}

if (! function_exists('upgradeRequired')) {
    function upgradeRequired($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_UPGRADE_REQUIRED,
            $headers
        );
    }
}

if (! function_exists('tooManyRequests')) {
    function tooManyRequests($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_TOO_MANY_REQUESTS,
            $headers
        );
    }
}

if (! function_exists('internalServerError')) {
    function internalServerError($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_INTERNAL_SERVER_ERROR,
            $headers
        );
    }
}

if (! function_exists('notImplemented')) {
    function notImplemented($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_NOT_IMPLEMENTED,
            $headers
        );
    }
}

if (! function_exists('badGateway')) {
    function badGateway($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_BAD_GATEWAY,
            $headers
        );
    }
}

if (! function_exists('serviceUnavailable')) {
    function serviceUnavailable($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_SERVICE_UNAVAILABLE,
            $headers
        );
    }
}

if (! function_exists('gatewayTimeout')) {
    function gatewayTimeout($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_GATEWAY_TIMEOUT,
            $headers
        );
    }
}

if (! function_exists('insufficientStorage')) {
    function insufficientStorage($content = '', array $headers = [])
    {
        return response(
            processContent($content),
            Response::HTTP_INSUFFICIENT_STORAGE,
            $headers
        );
    }
}

if (! function_exists('processContent')) {
    function processContent($content)
    {
        if ($content instanceof JsonResource) {
            return $content->response()->content();
        }

        return $content;
    }
}

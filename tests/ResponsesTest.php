<?php

namespace Tests;

use Illuminate\Http\Response;
use PHPUnit\Framework\TestCase;

class ResponsesTest extends TestCase
{
    /**
     * @test
     */
    public function can_return_200_ok()
    {
        $response = ok(['message' => 'ok'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame('{"message":"ok"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_201_created()
    {
        $response = created(['message' => 'created'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(201, $response->getStatusCode());
        $this->assertSame('{"message":"created"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_202_accepted()
    {
        $response = accepted(['message' => 'accepted'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(202, $response->getStatusCode());
        $this->assertSame('{"message":"accepted"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_204_no_content()
    {
        $response = noContent(['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(204, $response->getStatusCode());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_301_moved_permanently()
    {
        $response = movedPermanently('https://example.com/new-url', ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(301, $response->getStatusCode());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
        $this->assertSame('https://example.com/new-url', $response->headers->get('Location'));
    }

    /**
     * @test
     */
    public function can_return_302_found()
    {
        $response = found('https://example.com/url', ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(302, $response->getStatusCode());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
        $this->assertSame('https://example.com/url', $response->headers->get('Location'));
    }

    /**
     * @test
     */
    public function can_return_303_see_other()
    {
        $response = seeOther('https://example.com/new-url', ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(303, $response->getStatusCode());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
        $this->assertSame('https://example.com/new-url', $response->headers->get('Location'));
    }

    /**
     * @test
     */
    public function can_return_307_temporary_redirect()
    {
        $response = temporaryRedirect('https://example.com/new-url', ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(307, $response->getStatusCode());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
        $this->assertSame('https://example.com/new-url', $response->headers->get('Location'));
    }

    /**
     * @test
     */
    public function can_return_400_bad_request()
    {
        $response = badRequest(['message' => 'bad request'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(400, $response->getStatusCode());
        $this->assertSame('{"message":"bad request"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_401_unauthorized()
    {
        $response = unauthorized(['message' => 'unauthorized'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(401, $response->getStatusCode());
        $this->assertSame('{"message":"unauthorized"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_402_payment_required()
    {
        $response = paymentRequired(['message' => 'payment required'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(402, $response->getStatusCode());
        $this->assertSame('{"message":"payment required"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_403_forbidden()
    {
        $response = forbidden(['message' => 'forbidden'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(403, $response->getStatusCode());
        $this->assertSame('{"message":"forbidden"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_404_not_found()
    {
        $response = notFound(['message' => 'not found'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(404, $response->getStatusCode());
        $this->assertSame('{"message":"not found"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_405_method_not_allowed()
    {
        $response = methodNotAllowed(['message' => 'method not allowed'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(405, $response->getStatusCode());
        $this->assertSame('{"message":"method not allowed"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_406_not_acceptable()
    {
        $response = notAcceptable(['message' => 'not acceptable'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(406, $response->getStatusCode());
        $this->assertSame('{"message":"not acceptable"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_410_gone()
    {
        $response = gone(['message' => 'gone'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(410, $response->getStatusCode());
        $this->assertSame('{"message":"gone"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_413_payload_too_large()
    {
        $response = payloadTooLarge(['message' => 'payload too large'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(413, $response->getStatusCode());
        $this->assertSame('{"message":"payload too large"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_422_unprocessable_entity()
    {
        $response = unprocessableEntity(['message' => 'unprocessable entity'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(422, $response->getStatusCode());
        $this->assertSame('{"message":"unprocessable entity"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_426_upgrade_required()
    {
        $response = upgradeRequired(['message' => 'upgrade required'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(426, $response->getStatusCode());
        $this->assertSame('{"message":"upgrade required"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_429_too_many_requests()
    {
        $response = tooManyRequests(['message' => 'too many requests'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(429, $response->getStatusCode());
        $this->assertSame('{"message":"too many requests"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_500_internal_server_error()
    {
        $response = internalServerError(['message' => 'internal server error'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(500, $response->getStatusCode());
        $this->assertSame('{"message":"internal server error"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_501_not_implemented()
    {
        $response = notImplemented(['message' => 'not implemented'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(501, $response->getStatusCode());
        $this->assertSame('{"message":"not implemented"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_502_bad_gateway()
    {
        $response = badGateway(['message' => 'bad gateway'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(502, $response->getStatusCode());
        $this->assertSame('{"message":"bad gateway"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_503_service_unavailable()
    {
        $response = serviceUnavailable(['message' => 'service unavailable'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(503, $response->getStatusCode());
        $this->assertSame('{"message":"service unavailable"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_504_gateway_timeout()
    {
        $response = gatewayTimeout(['message' => 'gateway timeout'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(504, $response->getStatusCode());
        $this->assertSame('{"message":"gateway timeout"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    /**
     * @test
     */
    public function can_return_507_insufficient_storage()
    {
        $response = insufficientStorage(['message' => 'insufficient storage'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(507, $response->getStatusCode());
        $this->assertSame('{"message":"insufficient storage"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }
}

<?php

namespace Tests;

use Illuminate\Http\Response;
use Orchestra\Testbench\TestCase;

class ResponsesTest extends TestCase
{
    public function testItCanReturn200Ok(): void
    {
        $response = ok(['message' => 'ok'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame('{"message":"ok"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn201Created(): void
    {
        $response = created(['message' => 'created'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(201, $response->getStatusCode());
        $this->assertSame('{"message":"created"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn202Accepted(): void
    {
        $response = accepted(['message' => 'accepted'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(202, $response->getStatusCode());
        $this->assertSame('{"message":"accepted"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn204NoContent(): void
    {
        $response = noContent(['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(204, $response->getStatusCode());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn301MovedPermanently(): void
    {
        $response = movedPermanently('https://example.com/new-url', ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(301, $response->getStatusCode());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
        $this->assertSame('https://example.com/new-url', $response->headers->get('Location'));
    }

    public function testItCanReturn302Found(): void
    {
        $response = found('https://example.com/url', ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(302, $response->getStatusCode());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
        $this->assertSame('https://example.com/url', $response->headers->get('Location'));
    }

    public function testItCanReturn303SeeOther(): void
    {
        $response = seeOther('https://example.com/new-url', ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(303, $response->getStatusCode());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
        $this->assertSame('https://example.com/new-url', $response->headers->get('Location'));
    }

    public function testItCanReturn307TemporaryRedirect(): void
    {
        $response = temporaryRedirect('https://example.com/new-url', ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(307, $response->getStatusCode());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
        $this->assertSame('https://example.com/new-url', $response->headers->get('Location'));
    }

    public function testItCanReturn400BadRequest(): void
    {
        $response = badRequest(['message' => 'bad request'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(400, $response->getStatusCode());
        $this->assertSame('{"message":"bad request"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn401Unauthorized(): void
    {
        $response = unauthorized(['message' => 'unauthorized'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(401, $response->getStatusCode());
        $this->assertSame('{"message":"unauthorized"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn402PaymentRequired(): void
    {
        $response = paymentRequired(['message' => 'payment required'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(402, $response->getStatusCode());
        $this->assertSame('{"message":"payment required"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn403Forbidden(): void
    {
        $response = forbidden(['message' => 'forbidden'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(403, $response->getStatusCode());
        $this->assertSame('{"message":"forbidden"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn404NotFound(): void
    {
        $response = notFound(['message' => 'not found'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(404, $response->getStatusCode());
        $this->assertSame('{"message":"not found"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn405MethodNotAllowed(): void
    {
        $response = methodNotAllowed(['message' => 'method not allowed'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(405, $response->getStatusCode());
        $this->assertSame('{"message":"method not allowed"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn406NotAcceptable(): void
    {
        $response = notAcceptable(['message' => 'not acceptable'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(406, $response->getStatusCode());
        $this->assertSame('{"message":"not acceptable"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn410Gone(): void
    {
        $response = gone(['message' => 'gone'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(410, $response->getStatusCode());
        $this->assertSame('{"message":"gone"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn413PayloadTooLarge(): void
    {
        $response = payloadTooLarge(['message' => 'payload too large'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(413, $response->getStatusCode());
        $this->assertSame('{"message":"payload too large"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn422UnprocessableEntity(): void
    {
        $response = unprocessableEntity(['message' => 'unprocessable entity'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(422, $response->getStatusCode());
        $this->assertSame('{"message":"unprocessable entity"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn426UpgradeRequired(): void
    {
        $response = upgradeRequired(['message' => 'upgrade required'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(426, $response->getStatusCode());
        $this->assertSame('{"message":"upgrade required"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn429TooManyRequests(): void
    {
        $response = tooManyRequests(['message' => 'too many requests'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(429, $response->getStatusCode());
        $this->assertSame('{"message":"too many requests"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn500InternalServerError(): void
    {
        $response = internalServerError(['message' => 'internal server error'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(500, $response->getStatusCode());
        $this->assertSame('{"message":"internal server error"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn501NotImplemented(): void
    {
        $response = notImplemented(['message' => 'not implemented'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(501, $response->getStatusCode());
        $this->assertSame('{"message":"not implemented"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn502BadGateway(): void
    {
        $response = badGateway(['message' => 'bad gateway'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(502, $response->getStatusCode());
        $this->assertSame('{"message":"bad gateway"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn503ServiceUnavailable(): void
    {
        $response = serviceUnavailable(['message' => 'service unavailable'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(503, $response->getStatusCode());
        $this->assertSame('{"message":"service unavailable"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn504GatewayTimeout(): void
    {
        $response = gatewayTimeout(['message' => 'gateway timeout'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(504, $response->getStatusCode());
        $this->assertSame('{"message":"gateway timeout"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }

    public function testItCanReturn507InsufficientStorage(): void
    {
        $response = insufficientStorage(['message' => 'insufficient storage'], ['x-custom-header' => 'test']);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertSame(507, $response->getStatusCode());
        $this->assertSame('{"message":"insufficient storage"}', $response->content());
        $this->assertSame('test', $response->headers->get('x-custom-header'));
    }
}

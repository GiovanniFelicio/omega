<?php

namespace Modules\Architecture\Http\Controllers\Api;

use Illuminate\Http\Response;
use Laravel\Passport\Http\Controllers\AccessTokenController;
use Illuminate\Support\Collection;
use Psr\Http\Message\ServerRequestInterface;

class AccessTokenCustomController extends AccessTokenController
{
    public function index()
    {
    }

    public function issueToken(ServerRequestInterface $request): Response
    {
        $tokenResponse = parent::issueToken($request);

        $response = $this->resolveResponseFromTokenResponse($tokenResponse);

        return (new Response($response, Response::HTTP_ACCEPTED));
    }

    private function resolveResponseFromTokenResponse($tokenResponse): Collection
    {

        $content = $tokenResponse->getContent();

        $data = json_decode($content, true);

        $response = new Collection();
        $response->put("token_type", $data['token_type']);
        $response->put("expires_in", $data['expires_in']);
        $response->put("access_token", $data['access_token']);

        return $response;
    }
}

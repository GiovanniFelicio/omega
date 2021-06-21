<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use League\OAuth2\Server\Exception\OAuthServerException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
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
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        $class = get_class($exception);

        if ($class == 'Laravel\Passport\Exceptions\OAuthServerException') {
            return response()->json([
                'error' => $exception->getMessage()
            ], Response::HTTP_UNAUTHORIZED);
        } elseif ($class == 'Symfony\Component\HttpKernel\Exception\HttpException') {
            return response()->json([
                'errors' => explode('|', $exception->getMessage())
            ], $exception->getStatusCode());
        }

        return parent::render($request, $exception);
    }
}

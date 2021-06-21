<?php


namespace App\Utils;

use Illuminate\Http\Response;
use Illuminate\Support\MessageBag;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ExceptionUtil
{

    public static function resolveValidatorException(MessageBag $messageException)
    {
        $exception = "";

        foreach ($messageException->messages() as $key => $message) {
            $exception .= implode("|", $message);
        }

        throw new HttpException(Response::HTTP_UNPROCESSABLE_ENTITY, $exception);
    }
}

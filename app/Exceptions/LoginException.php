<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class LoginException extends Exception
{
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    public function render($request)
    {
        return response()->json(["error" => true, "message" => $this->getMessage()]);
    }
}

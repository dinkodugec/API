<?php

class ErrorHandler
{
    public static function handleException(Throwable $exception): void   //https://www.php.net/manual/en/class.throwable.php
    {
        http_response_code(500);
        
        echo json_encode([
            "code" => $exception->getCode(),
            "message" => $exception->getMessage(),
            "file" => $exception->getFile(),
            "line" => $exception->getLine()
        ]);
    }
}
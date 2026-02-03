<?php

class ResponseHandler
{
    public static function success(array $data): void
    {
        http_response_code(200);
        echo json_encode($data);
    }

    public static function error(Throwable $e): void
    {
        http_response_code($e->getCode() ?: 500);
        echo json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]);
    }
}

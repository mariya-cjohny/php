<?php


spl_autoload_register(function ($class) {
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});

set_exception_handler(function (Throwable $e) {
    http_response_code($e->getCode() ?: 500);

    echo json_encode([
        'error' => $e->getMessage(),
        'code'  => $e->getCode() ?: 500
    ]);

    exit;
});

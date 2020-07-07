<?php

// to run with builtin server
// php -S localhost:8000 public/routing.php

$request_uri = __DIR__ . $_SERVER["REQUEST_URI"];
if (file_exists($request_uri)) {
    return false;
} else {
    include __DIR__ . '/index.php';
}

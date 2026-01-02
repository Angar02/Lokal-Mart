<?php

    $basePath   = '/project/lokal-mart/public/';
    $requestUri = $_SERVER['REQUEST_URI'];

    $route = str_replace($basePath, '', $requestUri);

    if ($route === '') {
        $route = '/';
    }

    switch ($route) {
        case '/':
            echo 'Homepage';
            break;
        default:
            http_response_code(404);
            echo 'Halaman tidak ditemukan';
    }

?>
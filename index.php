<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/') {
    require 'src/controllers/index.php';
} elseif ($uri === '/posts') {
    require 'src/controllers/posts.php';
} elseif ($uri === '/about') {
    require 'src/controllers/about.php';
} else {
    http_response_code(404);
    echo "404 Not Found";
}
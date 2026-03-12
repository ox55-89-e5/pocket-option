<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/');

// Serve static files directly
if ($uri !== '' && file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false;
}

// Redirect rules
$redirects = [
    '/signup'   => 'https://po-fcm.com/ru/register/',
    '/lk'       => 'https://po-fcm.com/ru/register/',
    '/aff'      => 'https://cleveraff.com/',
    '/download' => 'https://po-fcm.com/ru/register/',
    '/demo'     => 'https://po-fcm.com/ru/register/',
];

if (isset($redirects[$uri])) {
    header('Location: ' . $redirects[$uri], true, 301);
    exit;
}

// Homepage
if ($uri === '' || $uri === '/') {
    require __DIR__ . '/index.php';
    exit;
}

// Route /page or /page/ → pages/page/index.php
$slug = ltrim($uri, '/');
$file = __DIR__ . '/pages/' . $slug . '/index.php';
if (file_exists($file)) {
    require $file;
    exit;
}

// 404
http_response_code(404);
echo '<h1>404 Not Found</h1>';

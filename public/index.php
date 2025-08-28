<?php
// public/index.php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Route;
use App\Middleware\AuthMiddleware;
use App\Core\BaseController;

Route::add('/', 'Front\HomeController@index');
Route::add('/reservation', 'Front\ReservationController@index');

// Gelen URI'yi al ve yönlendir
$uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($uri, PHP_URL_PATH); // Query string'i kaldır

try {
    Route::dispatch($uri);
} catch (Exception $e) {
    http_response_code(404);
    echo "404 - Sayfa Bulunamadı";
}

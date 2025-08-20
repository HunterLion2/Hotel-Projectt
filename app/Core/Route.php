<?php

namespace App\Core;

class Route
{
    /**
     * @var array $routes Tanımlanan rotaları tutar
     */
    private static $routes = [];

    /**
     * @var array $middlewares Rotaya atanmış middleware'leri tutar
     */
    private static $middlewares = [];

    /**
     * Yeni bir rota ekler
     *
     * @param string $uri Rota URI'si
     * @param string $controller Rota ile ilişkilendirilecek kontrolör
     * @return static
     */
    public static function add($uri, $controller)
    {
        self::$routes[$uri] = $controller;
        return new static;
    }

    /**
     * Bir rotaya middleware ekler
     *
     * @param string $middleware Middleware sınıfı
     * @return void
     */
    public static function middleware($middleware)
    {
        $lastRoute = array_key_last(self::$routes);
        self::$middlewares[$lastRoute] = $middleware;
    }

    /**
     * Gelen URI'yi uygun kontrolör ve metoda yönlendirir
     *
     * @param string $uri Gelen URI
     * @return void
     */
    public static function dispatch($uri)
    {
        foreach (self::$routes as $route => $controller) {
            // Dinamik parametreleri yakalamak için regex oluştur
            $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([a-zA-Z0-9_-]+)', $route);
            $pattern = "#^" . $pattern . "$#";

            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches); // İlk eleman tüm eşleşmedir, onu çıkar

                if (isset(self::$middlewares[$route])) {
                    $middleware = self::$middlewares[$route];
                    (new $middleware)->handle();
                }

                [$class, $method] = explode('@', $controller);
                $class = "App\\Controllers\\" . $class;

                if (class_exists($class) && method_exists($class, $method)) {
                    call_user_func_array([new $class, $method], $matches);
                    return;
                } else {
                    http_response_code(404);
                    echo "404 Not Found - Sınıf ya da Metot Bulunamadı";
                    return;
                }
            }
        }

        // Eğer hiçbir rota eşleşmezse
        throw new \Exception("404 Not Found");
    }
}

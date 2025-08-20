<?php

namespace App\Middleware;
 
class AuthMiddleware
{
    /**
     * İstekleri ele alır ve kullanıcı oturumunu kontrol eder.
     * Eğer oturum yoksa, kullanıcıyı giriş sayfasına yönlendirir.
     */
    public function handle()
    {
        // Oturum başlatılmamışsa oturumu başlat
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Kullanıcı oturumu yoksa giriş sayfasına yönlendir
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login'); // "header() değeri yönlendirme metodur."
            exit();
        }
    }
}
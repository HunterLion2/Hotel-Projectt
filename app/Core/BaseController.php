<?php

namespace App\Core;


class BaseController
{
    // protected $settings = [];
    // protected $categories = [];
    // protected $cartItemCount = 0;
    // protected $userId;

    /**

     * BaseController constructor.
     * Oturum başlatma ve oturum süresi ayarlama

    **/
    public function __construct()
    {
        // Oturum başlatma ve oturum süresi ayarlama
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // // SettingsModel kullanarak ayarları yükle
        // $settingsModel = new SettingsModel();
        // $this->settings = $settingsModel->getAllSettings();

        // // CategoryModel'den kategorileri al
        // $categoryModel = new CategoryModel();
        // $this->categories = $categoryModel->getActiveCategories();

        // Sepetteki ürün sayısını al
        // if (isset($_SESSION['user_id'])) {
        //     $this->userId = $_SESSION['user_id'];
        //     $cartModel = new CartModel();
        //     $this->cartItemCount = $cartModel->getCartItemCountByUserId($this->userId);
        // }
        // checkLogin metodunu renderAdmin içinde çağıracağız
    }

    /**

    * Kullanıcı giriş kontrolü

    **/

    // private function checkLogin()
    // {
    //     if (!isset($_SESSION['user_id'])) {
    //         header('Location: /login');
    //         exit();
    //     }

    //     if ($_SESSION['user_role'] !== 'admin') {
    //         header('Location: /');
    //         exit();
    //     }
    // }

    /**
     * View render etme metodu
     *
     * @param string $view Görünüm dosyası
     * @param array $data Görünüme aktarılacak veri
     * @param int $statusCode HTTP durum kodu
     */
    public function render($view, $data = [], $statusCode = 200)
    {
        http_response_code($statusCode);

        // // Settings verilerini $data içine dahil et
        // $data['settings'] = $this->settings;
        // $data['categories'] = $this->categories;
        // $data['cartItemCount'] = $this->cartItemCount;

        $data['session'] = $_SESSION;

        // Verileri kullanılabilir hale getirme
        extract($data);

        // Layout ve view dosyalarını dahil et
        require_once __DIR__ . "/../../views/layouts/front/header.php";
        require_once __DIR__ . "/../../views/$view.php";
        require_once __DIR__ . "/../../views/layouts/front/footer.php";
    }

    /**
     * Admin view render etme metodu
     *
     * @param string $view Görünüm dosyası
     * @param array $data Görünüme aktarılacak veri
     */
    public function renderAdmin($view, $data = [])
    {
        // $this->checkLogin(); // Admin sayfaları için login kontrolü

        $data['session'] = $_SESSION;

        // Verileri kullanılabilir hale getirme
        extract($data);

        // Layout ve view dosyalarını dahil et
        require_once __DIR__ . "/../../views/layouts/admin/header.php";
        require_once __DIR__ . "/../../views/$view.php";
        require_once __DIR__ . "/../../views/layouts/admin/footer.php";
    }
}

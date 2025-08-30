<?php

namespace App\Core;

use Dotenv\Dotenv;

class Config
{
    /**
     * @var array $config Uygulama yapılandırma ayarlarını tutar
     */
    private static $config = [];

    /**
     * .env dosyasını yükler ve yapılandırma ayarlarını ayarlar
     *
     * @return array Yapılandırma ayarları
     */
    public static function loadEnv()
    {
        if (empty(self::$config)) {
            $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
            $dotenv->load();

            self::$config = [
                'DB_HOST' => $_ENV['DB_HOST'],
                'DB_NAME' => $_ENV['DB_NAME'],
                'DB_USER' => $_ENV['DB_USER'],
                'DB_PASSWORD' => $_ENV['DB_PASSWORD'],
                'DB_CHARSET' => $_ENV['DB_CHARSET'],
                'IYZIPAY_API_KEY' => $_ENV['IYZIPAY_API_KEY'],
                'IYZIPAY_SECRET_KEY' => $_ENV['IYZIPAY_SECRET_KEY'],
                'IYZIPAY_BASE_URL' => $_ENV['IYZIPAY_BASE_URL']
            ];
        }

        return self::$config;
    }

    /**
     * Belirtilen anahtara göre yapılandırma ayarını döner
     *
     * @param string $key Yapılandırma anahtarı
     * @return mixed|null Yapılandırma değeri veya null
     */
    public static function get($key)
    {
        $config = self::loadEnv();
        return $config[$key] ?? null;
    }
}

<?php

namespace App\Core; // App\Core ad alanını tanımlar

use PDO; // PDO sınıfını kullanmak için içe aktarır
use PDOException; // PDOException sınıfını kullanmak için içe aktarır

class Database
{
    /**
     * Singleton deseni için tek örnek değişkeni
     *
     * @var Database|null
     */
    private static $instance = null;

    /**
     * Veritabanı bağlantısını tutacak değişken
     *
     * @var PDO
     */
    private $connection;

    /**
     * Yapıcı metod, sınıfın dışından çağrılabilir
     */
    public function __construct()
    {
        $config = Config::loadEnv(); // Ortam değişkenlerini yükler

        // DSN (Data Source Name) oluşturur
        $dsn = "mysql:host={$config['DB_HOST']};dbname={$config['DB_NAME']};charset={$config['DB_CHARSET']}";
        try {
            // PDO nesnesi oluşturur ve bağlantı kurar
            $this->connection = new PDO($dsn, $config['DB_USER'], $config['DB_PASSWORD'], [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Hata modunu istisna olarak ayarlar
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Varsayılan veri çekme modunu ayarlar
                PDO::ATTR_EMULATE_PREPARES => false, // Hazırlanan ifadelerin emülasyonunu devre dışı bırakır
            ]);
        } catch (PDOException $e) {
            // Bağlantı hatası durumunda hata mesajı ile sonlandırır
            die("Veritabanı bağlantı hatası: " . $e->getMessage());
        }
    }

    /**
     * Singleton deseni için örnek döndüren metod
     *
     * @return PDO
     */
    public static function getInstance()
    {
        if (self::$instance === null) { // Eğer örnek yoksa yeni bir örnek oluşturur
            self::$instance = new self();
        }
        return self::$instance->connection; // Veritabanı bağlantısını döner
    }

    /**
     * Veritabanı sorgusu çalıştırır
     *
     * @param string $query SQL sorgusu
     * @param array $params Sorgu parametreleri
     * @return \PDOStatement
     */
    public function query($query, $params = [])
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }

    /**
     * Veritabanı sorgusu hazırlar
     *
     * @param string $query SQL sorgusu
     * @return \PDOStatement
     */
    public function prepare($query)
    {
        return $this->connection->prepare($query);
    }

    /**
     * Klonlamayı devre dışı bırakır
     */
    private function __clone() {}

    /**
     * Serileştirmeyi devre dışı bırakır
     */
    public function __wakeup() {}
}

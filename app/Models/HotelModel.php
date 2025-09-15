<?php

namespace App\Models;

use App\Core\Database;
use Exception;
use PDO;

class HotelModel
{

    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAllRoom(){
    
        try {
            $stmt = $this->db->prepare("
                SELECT 
                    r.*,
                    ps.`none-smoke`,
                    ps.`engelli-erişimi`,
                    ps.`romantic-packet`
                FROM `rooms-table` r
                LEFT JOIN `private-settings` ps ON r.id = ps.room_id
                ORDER BY r.price ASC
            ");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("getAllRoom error: " . $e->getMessage());
            return [];
        }
    }

    public function capacityRoom($capacity){
    
                try {
            $stmt = $this->db->prepare("
                SELECT 
                    r.*,
                    ps.`none-smoke`,
                    ps.`engelli-erişimi`,
                    ps.`romantic-packet`
                FROM `rooms-table` r
                LEFT JOIN `private-settings` ps ON r.id = ps.room_id
                WHERE r.capacity >= ?
                ORDER BY r.price ASC
            ");
            $stmt->execute([$capacity]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("capacityRoom error: " . $e->getMessage());
            return [];
        }
    }

    public function twopricefilter($price, $capacity){
        try {
            $stmt = $this->db->prepare("
                SELECT 
                    r.*,
                    ps.`none-smoke`,
                    ps.`engelli-erişimi`,
                    ps.`romantic-packet`
                FROM `rooms-table` r
                LEFT JOIN `private-settings` ps ON r.id = ps.room_id
                WHERE r.price <= ? AND r.capacity >= ?
                ORDER BY r.price ASC
            ");
            $stmt->execute([$price, $capacity]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("twopricefilter error: " . $e->getMessage());
            return [];
        }
    }

    public function threepricefilter($price, $capacity){
        try {
            $stmt = $this->db->prepare("
                SELECT 
                    r.*,
                    ps.`none-smoke`,
                    ps.`engelli-erişimi`,
                    ps.`romantic-packet`
                FROM `rooms-table` r
                LEFT JOIN `private-settings` ps ON r.id = ps.room_id
                WHERE r.price <= ? AND r.capacity >= ?
                ORDER BY r.price ASC
            ");
            $stmt->execute([$price, $capacity]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("threepricefilter error: " . $e->getMessage());
            return [];
        }
    }

      public function filterWithSpecialFeatures($capacity = null, $price = null, $noneSmoke = false, $disabledAccess = false, $romanticPacket = false)
    {
        try {
            $sql = "
                SELECT DISTINCT
                    r.*,
                    ps.`none-smoke`,
                    ps.`engelli-erişimi`,
                    ps.`romantic-packet`
                FROM `rooms-table` r
                LEFT JOIN `private-settings` ps ON r.id = ps.room_id
                WHERE 1=1
            ";
            $params = [];

            if ($capacity) {
                if ($capacity === '5+') {
                    $sql .= " AND r.capacity >= ?";
                    $params[] = 5;
                } else {
                    $sql .= " AND r.capacity >= ?";
                    $params[] = (int)$capacity;
                }
            }

            if ($price && $price > 0) {
                $sql .= " AND r.price <= ?";
                $params[] = $price;
            }

            if ($noneSmoke) {
                $sql .= " AND (ps.`none-smoke` = 1 OR r.`smoke-packet` = 0)";
            }

            if ($disabledAccess) {
                $sql .= " AND (ps.`engelli-erişimi` = 1 OR r.`engelli-packet` = 1)";
            }

            if ($romanticPacket) {
                $sql .= " AND (ps.`romantic-packet` = 1 OR r.`romantik-packet` = 1)";
            }

            $stmt = $this->db->prepare($sql);
            $stmt->execute($params);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            
            return $result;

        } catch (Exception $e) {

        }
    }

    // ----------------------------------------------
    public function privateromantic() {
        try {
            $stmt = $this->db->prepare("
                SELECT r.* 
                FROM `rooms-table` r
                INNER JOIN `private-settings` ps ON r.id = ps.room_id 
                WHERE ps.`romantic-packet` = 1
            ");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("privateromantic error: " . $e->getMessage());
            return [];
        }
    }

    public function privatesmoke() {
        try {
            $stmt = $this->db->prepare("
                SELECT r.* 
                FROM `rooms-table` r
                INNER JOIN `private-settings` ps ON r.id = ps.room_id 
                WHERE ps.`none-smoke` = 1
            ");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("privatesmoke error: " . $e->getMessage());
            return [];
        }
    }

    public function privateengelli() {
        try {
            $stmt = $this->db->prepare("
                SELECT r.* 
                FROM `rooms-table` r
                INNER JOIN `private-settings` ps ON r.id = ps.room_id 
                WHERE ps.`engelli-erişimi` = 1
            ");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("privateengelli error: " . $e->getMessage());
            return [];
        }
    }
}

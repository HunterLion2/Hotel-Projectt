<?php

namespace App\Models;

use App\Core\Database;

class HotelModel
{

    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAllRoom()
    {
        $room = $this->db->query("SELECT * FROM `rooms-table`");
        return $room->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function capacityRoom($capacity)
    {
        $room = $this->db->query("SELECT * FROM `rooms-table` WHERE capacity >= $capacity");
        return $room->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function twopricefilter($price, $capacity)
    {
        $prices = $this->db->query("SELECT * FROM `rooms-table` WHERE price <= $price AND capacity >= $capacity");
        return $prices->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function threepricefilter($price, $capacity)
    {
        $prices = $this->db->query("SELECT * FROM `rooms-table` WHERE price <= $price AND capacity >= $capacity");
        return $prices->fetchAll(\PDO::FETCH_ASSOC);
    }
}

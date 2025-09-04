<?php
namespace App\Models;

use App\Core\Database;

class HotelModel {

    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAllRoom() {
        $room = $this->db->query("SELECT * FROM `rooms-table`");
        return $room->fetchAll(\PDO::FETCH_ASSOC);
    }
}

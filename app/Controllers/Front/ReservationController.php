<?php

namespace App\Controllers\Front;

use App\Core\BaseController;
use App\Core\Database;
use App\Models\HotelModel;

class ReservationController extends BaseController
{
    private $db;
    private $roomModel;

    public function __construct()
    {
        parent::__construct();
        $this->db = Database::getInstance();
        $this->roomModel = new HotelModel();
    }

    public function index()
    {

        try {
            if (isset($this->db)) {
                $allroom = $this->roomModel->getAllRoom();

                if ($_SERVER['REQUEST_METHOD'] == "GET") {
                    if ($_GET['kişisay']  <= 2) {
                        $tworoom = $this->roomModel->twocapacityRoom();

                        $this->render('/front/reservation', [
                            'rooms' => $tworoom
                        ]);
                    } else if($_GET['kişisay']  >= 3) {
                        
                    } 
                    
                    else {
                        $this->render('/front/reservation', [
                            'rooms' => $allroom
                        ]);
                    }
                }
            }
        } catch (\Throwable $th) {
            //throw $th;
        }


        $this->render("front/reservation");
    }
}

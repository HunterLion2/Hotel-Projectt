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
                        if (isset($_GET['price-filter'])) {
                            $tworoomp = $this->roomModel->twopricefilter($_GET['price-filter'], $_GET['kişisay']);

                            $this->render('/front/reservation', [
                                'rooms' => $tworoomp
                            ]);
                        } else {
                            $tworoom = $this->roomModel->capacityRoom($_GET['kişisay']);

                            $this->render('/front/reservation', [
                                'rooms' => $tworoom
                            ]);
                        }
                    } else if ($_GET['kişisay']  >= 3) {
                        if (isset($_GET['price-filter'])) {
                            $tworoomp = $this->roomModel->threepricefilter($_GET['price-filter'], $_GET['kişisay']);

                            $this->render('/front/reservation', [
                                'rooms' => $tworoomp
                            ]);
                        } else {
                            $tworoom = $this->roomModel->capacityRoom($_GET['kişisay']);

                            $this->render('/front/reservation', [
                                'rooms' => $tworoom
                            ]);
                        }
                    } else {
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

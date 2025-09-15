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
        $rooms = [];

        try {
            if (isset($this->db)) {

                if (isset($_GET['filter_submitted']) && $_GET['filter_submitted'] == "1") {
                    $capacity = $_GET['kişisay'] ?? null;
                    $priceFilter = $_GET['price-filter'] ?? null;

                    $noneSmoke = isset($_GET['none-smoke']);
                    $disabledAccess = isset($_GET['engelli-erişimi']);
                    $romanticPacket = isset($_GET['romantic-packet']);

                    if($noneSmoke || $disabledAccess || $romanticPacket) {
                        $rooms = $this->roomModel->filterWithSpecialFeatures($capacity, $priceFilter, $noneSmoke, $disabledAccess, $romanticPacket);
                    }

                    else if ($capacity) {
                        if ($capacity <= 2) {
                            if (!empty($priceFilter)) {
                                $rooms = $this->roomModel->twopricefilter($priceFilter, $capacity);
                            } else {
                                $rooms = $this->roomModel->capacityRoom($capacity);
                            }
                        } else if ($capacity >= 3) {
                            if (!empty($priceFilter)) {
                                $rooms = $this->roomModel->threepricefilter($priceFilter, $capacity);
                            } else {
                                $rooms = $this->roomModel->capacityRoom($capacity);
                            }
                        }
                    } else {
                        $rooms = $this->roomModel->getAllRoom();
                    }
                } else {
                    $rooms = $this->roomModel->getAllRoom();
                }
            }
        } catch (\Throwable $th) {
            $rooms = $this->roomModel->getAllRoom();
        }

        $this->render('/front/reservation', [
            'rooms' => $rooms
        ]);

        // Her yere render() yazmaktansa burada olduğu gibi bir tane liste değeri oluşturup içinide boş yaparsak sadece bu değeri çağırıp yazarız en sona da bu değerin aslında ne olduğunu yani bu değeri =>

        // $this->render('/front/reservation', [
        //    'rooms' => $rooms
        // ]);

    }
}

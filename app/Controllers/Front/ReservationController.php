<?php

namespace App\Controllers\Front;

use \App\Core\BaseController;

class ReservationController extends BaseController {
    public function index() {
        $this->render("front/reservation");
    }
}

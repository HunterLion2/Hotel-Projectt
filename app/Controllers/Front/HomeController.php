<?php

namespace App\Controllers\Front;

use \App\Core\BaseController;

class HomeController extends BaseController {
    public function index() {
        $this->render("front/home");
    }
}

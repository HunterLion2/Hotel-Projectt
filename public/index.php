<?php
// public/index.php
require_once __DIR__ . '/../vendor/autoload.php';

use Controllers\HomeController;

$controller = new HomeController();
$controller->index();

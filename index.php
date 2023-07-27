<?php
// In this file start application

require_once './models/bootcampModel.php';
require_once './controllers/bootcampController.php';

$controller = new bootcampController();
$controller->index();



?>
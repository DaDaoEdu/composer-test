<?php
require '../vendor/autoload.php';
use DaDaoEdu\Car\Bmw;
use DaDaoEdu\Car\Wheel\Goodyear;

$car = new Bmw();
$car::info();


$wheel = new Goodyear();
$wheel::info();

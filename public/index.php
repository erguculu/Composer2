<?php
require_once '../vendor/autoload.php';


use App\Wcs\Hello;

$a = new Hello();
echo $a->talk().'<br>';

$hellocomposer = new Hello();
echo $hellocomposer->world();
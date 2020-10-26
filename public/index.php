<?php
require_once '../vendor/autoload.php';


use App\Wcs\Hello;

$hello = new HelloWorld\SayHello();

echo $hello->world();
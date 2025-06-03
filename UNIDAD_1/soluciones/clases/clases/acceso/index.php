<?php
require 'clase.php';

$mango = new Fruit();
$mango->name = 'Mango'; // OK
/*
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR
*/
$mango->setParams('color','Yellow');
$mango->setParams('weight','300');
echo $mango-> getParams();
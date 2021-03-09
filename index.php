<?php
require_once 'class/Complex.php';

$z1 = new Complex(10, 20);
$z2 = new Complex(30, 35);
echo "{$z1} + {$z2} = ".Complex::addition($z1, $z2)."\n";
echo "{$z1} - {$z2} = ".Complex::subtraction($z1, $z2)."\n";
echo "{$z1} * {$z2} = ".Complex::multiplication($z1, $z2)."\n";
echo "{$z1} / {$z2} = ".Complex::deletion($z1, $z2)."\n";
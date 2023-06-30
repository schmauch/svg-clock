<?php

header('Content-type: image/svg+xml');

$h = - date('g') * 3600 - date('i') * 60 - date('s');
$m = - date('i') * 60 - date('s');
$s = - date('s');

$clock = file_get_contents('clock.svg');
$clock = substr_replace($clock, $s, 5903, 1);
$clock = substr_replace($clock, $m, 5595, 1);
$clock = substr_replace($clock, $h, 5352, 1);

echo $clock; 


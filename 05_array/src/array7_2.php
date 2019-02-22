<?php
$names = ["Andy", "Betty", "Carol"];

$temp = $names[0];
$names[0] = $names[2];
$names[2] = $temp;

var_dump($names);

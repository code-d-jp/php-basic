<?php
$names = ["Andy", "Betty", "Carol"];

$names[0] = $names[2];
$names[2] = $names[0];

var_dump($names);

<?php
$array = ["Andy", "Betty", "Carol"];
$length = array_unshift($array, "Dave", "Ellen");
echo $length . PHP_EOL;
print_r($array);

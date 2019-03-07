<?php
$str = "Hello";
$padded_str = str_pad($str, 10, "*", STR_PAD_LEFT);
echo $padded_str . "World" . PHP_EOL;

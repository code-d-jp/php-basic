<?php
$file = "hello.txt";
$handle = fopen($file, "r");

$line = fgets($handle);
echo $line;

fclose($handle);

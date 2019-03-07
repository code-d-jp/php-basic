<?php
$str = "Hello PHP" . PHP_EOL;
$file = "hello.txt";
file_put_contents($file, $str);

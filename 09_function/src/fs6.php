<?php
$names = ["Andy", "Betty", "Carol"];
$file = "names.txt";
$handle = fopen($file, "w");
foreach($names as $name) {
  fwrite($handle, $name . PHP_EOL);
}
fclose($handle);

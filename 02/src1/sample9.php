<?php
$handle = fopen("names.csv", "r");

while ($name = fgets($handle)) {
    echo "Hello ";
    echo strtoupper($name);
}

fclose($handle);

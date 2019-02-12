<?php
$students = [
  ["name" => "Andy", "age" => 20],
  ["name" => "Betty", "age" => 19],
  ["name" => "Cody", "age" => 21]
];

for ($i = 0; $i < 3; $i++) {
    if ($students[$i]["age"] >= 20) {
        echo "Hello ";
        echo $students[$i]["name"] . PHP_EOL;
    }
}

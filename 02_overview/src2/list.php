<?php
require_once("functions.php");
$todo_list = read_todo_list(false, true);
foreach ($todo_list as $todo) { 
  echo "$todo[0], $todo[1] $todo[2]" . PHP_EOL;
}

<?php
require_once("functions.php");

if (count($argv) != 2) {
  die("Error: Invalid arguments");
}

$task = $argv[1];
if (mb_strlen($task) > 140) {
  die("Error: Invalid arguments");
}

if (strpos($task, ",")) {
  die("Error: Invalid arguments");
}

// TODO comma
$date = date('Y-m-d H:i:s');
$id = get_todo_id();
$status = STATUS_OPENED;
$todo = [$id, $task, $date, $status];

add_todo_list($todo);

<?php
require_once("functions.php");

$task = $_POST["task"];
$date = date('Y-m-d H:i:s');
$id = get_todo_id();

$todo = [$id, $task, $date];
add_todo_list($todo);

redirect("todo_list.php");

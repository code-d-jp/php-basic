<?php
require_once("functions.php");

$task = (string)filter_input(INPUT_POST, "task");
if ($task === "") {
    redirect("todo_list.php");
}

if (mb_strlen($task) > 140) {
    redirect("todo_list.php");
}

$date = date('Y-m-d H:i:s');
$todo = [$task, $date];

add_todo_list($todo);

redirect("todo_list.php");

<?php
define("DOMAIN", "http://localhost:8000/");
define("TODO_LIST_CSV", "todo_list.csv");

function read_todo_list()
{
    $handle = fopen(TODO_LIST_CSV, "r");
    $todo_list = [];
    while ($todo = fgetcsv($handle)) {
        $todo_list[] = $todo;
    }
    fclose($handle);
    return $todo_list;
}

function add_todo_list($todo)
{
    $handle = fopen(TODO_LIST_CSV, "a");
    fputcsv($handle, $todo);
    fclose($handle);
}

function redirect($page)
{
    header("Location: " . DOMAIN . $page);
    exit();
}

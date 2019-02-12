<?php
define("DOMAIN", "http://localhost:8000/");

function load_todo_list($include_closed = false) {
  $handle = fopen("todo_list.csv", "r");
  $todo_list = [];
  while($todo = fgetcsv($handle)) {
    $todo_list[] = $todo;
  }
  fclose($handle);
  return $todo_list;
}

function get_todo_id() {
  return count(load_todo_list()) + 1;
}

function add_todo_list($todo) {
  $handle = fopen("todo_list.csv", "a");
  fputcsv($handle, $todo);
  fclose($handle);
}

function redirect($page) {
  header("Location: " . DOMAIN . $page);
  exit();
}

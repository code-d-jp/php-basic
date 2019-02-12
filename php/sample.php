<?php
$handle = fopen("todo_list.csv", "r");
$todo_list = [];
while($todo = fgetcsv($handle)) {
  $todo_list[] = $todo;
}
print_r($todo_list);

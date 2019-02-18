<?php
$url = (string)filter_input(INPUT_POST, "url");
$lines = file($url);
$title = "Untitled";
foreach ($lines as $line) {
  if (strpos($line, "<title>") !== FALSE) {
    $parts = explode("<title>", $line);
    $parts = explode("</title>", $parts[1]);
    $title = $parts[0];
    break;
  }
}

file_put_contents("bookmarks.csv", $title . "," . $url . PHP_EOL, FILE_APPEND);

header("Location: /bookmark.php");

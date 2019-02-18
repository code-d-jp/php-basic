<?php
$userId = (string)filter_input(INPUT_POST, "userId");
$password = (string)filter_input(INPUT_POST, "password");

$result = "NG";
if ($userId === "Andy" && $password === "0101") {
    $result = "OK";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <h1>Login Result</h1>
    <h3><?php echo $result ?></h3>
  </body>
</html>
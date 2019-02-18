<?php
$userId = (string)filter_input(INPUT_POST, "userId");
$password = (string)filter_input(INPUT_POST, "password");

$result = "NG";
$handle = fopen("users.csv", "r");
if ($handle == false) {
  die("file open error.");
}
while($user = fgetcsv($handle)) {
  if ($user[0] === $userId && $user[1] === $password) {
    $result = "OK";
    break;
  }
}
fclose($handle);
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
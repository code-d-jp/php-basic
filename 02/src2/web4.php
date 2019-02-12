<?php
$title = "Hello PHP";
$names = ["Andy", "Betty", "Carol"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
  </head>
  <body>
    <h1><?php echo $title ?></h1>
    <ul>
      <?php for ($i = 0; $i < 3; $i++) {
    ?>
        <li><?php echo strtoupper($names[$i]) ?></li>
      <?php
} ?>
    </ul>
  </body>
</html>
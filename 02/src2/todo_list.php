<?php
require_once("functions.php");

$todo_list = read_todo_list();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>TODO List</title>
</head>
<body>
    <h1>TODO List</h1>
    <form action="todo_add.php" method="post" class="form">
        <input type="text" name="task">
        <input type="submit" value="Add">
    </form>
    <hr>
    <ul>
        <?php foreach ($todo_list as $todo) { ?>
            <li><?= htmlspecialchars($todo[0]) ?> / <?= htmlspecialchars($todo[1]) ?></li>
        <?php } ?>
    </ul>
</body>
</html>

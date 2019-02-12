<?php
require_once("functions.php");
$todo_list = load_todo_list();
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Tweet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-primary">
      <div class="container">
        <span class="navbar-brand mb-0 h1">TODO LIST</span>
      </div>
    </nav>
    <div class="container" style="margin-top:20px">
      <div class="row">
        <div class="col-md-12">
          <form action="todo_add.php" method="post" class="form">
            <div class="input-group mb-2">
              <input type="text" name="task" class="form-control">
              <div class="input-group-append">
                <input type="submit" class="btn btn-primary" value="追加">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <hr>
        </div>
      </div>
      <div class="row">
        <?php foreach ($todo_list as $todo) { ?>
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <p class="card-text"><?= htmlspecialchars($todo[1]) ?></p>
                <p class="small text-muted"><?= htmlspecialchars($todo[2]) ?></p>
                <a href="todo_finish.php?id=<?= htmlspecialchars($todo[0])?>" class="btn btn-primary btn-sm">完了</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </body>
</html>

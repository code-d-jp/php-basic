<?php
$lines = file("bookmarks.csv");
$bookmarks = [];
foreach($lines as $line) {
  $items = explode(",", $line);
  $bookmark = ["title" => $items[0], "url" => $items[1]];
  $bookmarks[] = $bookmark;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Bookmark List</h1>
    <form action="bookmark_post.php" method="post">
        <input type="url" name="url" value="">
        <input type="submit" name="" value="add">
    </form>
    <ul>
      <?php foreach($bookmarks as $bookmark) { ?>
      <li>
        <a href="<?= $bookmark['url'] ?>"><?= $bookmark['title'] ?></a>
      </li>
      <?php } ?>
    </ul>
  </body>
</html>
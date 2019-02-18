<?php
$name = "Andy";

$message1 = 'Hello $name'; # 変数を展開しない
echo $message1; # => Hello $name

$message2 = "Hello $name"; # 変数を展開する
echo $message2; # => Hello Andy

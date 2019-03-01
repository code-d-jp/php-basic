# 要素の削除

連想配列の要素の削除について見ておきましょう。連想配列のキーと値を削除するにはunsetを使います。次のプログラム（a_array5.php）を作成してみましょう。

```php
<?php
$student = ["name" => "Andy", "age" => 20];
unset($student["age"]);

var_dump($student);
```

上記のプログラムでは`unset`関数によって`$student`配列のキー`"age"`を削除しています。

それではプログラムを実行してみましょう。

```
$ php a_array5.php
array(1) {
  ["name"]=>
  string(4) "Andy"
}
```

連想配列からキー`"age"`が削除されているのがわかります。

> 添字配列の場合はunset関数を使うと要素番号に空きが生じるので注意してください。


# ステートメント

続いてステートメントについて学習していきましょう。ステートメントとはプログラムで記述された文のことです。次のプログラム（basic8.php）を見てみましょう。

```php
<?php
echo "Hello PHP";
echo "Hello Python";
echo "Hello Java";
```

上記のPHPプログラムは3行のステートメントで構成されています。

```php
echo "Hello PHP";
echo "Hello Python";
echo "Hello Java";
```

PHPのステートメントには一つルールがあります。それはステートメントの終端にセミコロン`;`をつけるというルールです。それではルールに従わない場合はどうなるのでしょうか。試しにセミコロン`;`を1つ省略してみましょう。さきほどのプログラム（basic8.php）を次のように修正します。

```php
<?php
echo "Hello PHP";
echo "Hello Python"
echo "Hello Java";
```

> echo "Hello Python"の後のセミコロン`;`を削除してみました。`


作成したプログラムを実行してみましょう。

```
$ php basic8.php
PHP Parse error:  syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' in /Users/murayama/Desktop/php/basic/basic8.php on line 4

Parse error: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' in /Users/murayama/Desktop/php/basic/basic8.php on line 4
```

上記のようにPHPのエラーメッセージが出力されます。

エラーメッセージは初めて見ると難しく感じるかもしれません。これから少しずつ慣れていく必要があります。ここでは1行目の出力内容を分解して見ておきましょう。

まずエラーメッセージの冒頭の部分で何が起きたか出力されています。

```
PHP Parse error:  
```

PHPのパース（解析）エラーと出力されています。これはPHPプログラムを正しく解析できなかったことを意味します。PHPに限らずプログラムには構文があり、その構文にそった形でプログラミングしていく必要があります。さらに詳細なメッセージが続きます。

```
syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';'
```

syntax errorは構文エラーという意味です。今回は意図的にセミコロン`;`を外してみたので、正しいPHPの構文に従っていない、ということになります。上記のエラーメッセージでは`echo`の後には`,`や`;`が続くはずだと説明しています。

> `echo`命令は`echo "Hello", "World";` のようにカンマ区切りで複数のデータを出力できます。

エラーメッセージ（1行目）の最後の部分を見てみましょう。

```
in /Users/murayama/Desktop/php/basic/basic8.php on line 4
```

これはPHPプログラムのどこでエラーがあったかを示しています。`/Users/murayama/Desktop/php/basic/basic8.php`ファイルの`4`行目にエラーがあることを示しています。


## セミコロンの省略

ここまでに見てきたとおり、PHPプログラムのステートメントの終端にはセミコロン`;`をつける必要があります。ただし例外的に、PHPプログラムの終了タグ`?>`の直前のセミコロン`;`については、省略することができます。

> 終了タグ`?>`にはセミコロン`;`の役割が備わっていると考えれば良いでしょう。

具体的には次のようなケースです。さきほどのプログラム（basic8.php）を次のように修正します。

```php
<?php
echo "Hello PHP";
echo "Hello Python";
echo "Hello Java"
?>
```

3行目のステートメント`echo "Hello Java"`にセミコロン`;`が付与されていない点に注意してください。この場合、直後に終了タグ`?>`が続くためにセミコロン`;`の省略は許可されます。

プログラムを実行してみましょう。

```
$ php basic8.php
Hello PHPHello PythonHello Java
```

PHP Parse errorは発生せずに、正しく出力されているのがわかります。


# PHPタグ

それではPHPタグについて学習していきましょう。テキストエディタを開いて次のプログラム（basic1.php）を作成してみましょう。

```
<?php
echo "Hello PHP";
?>
```

> ファイルの保存先フォルダは任意です。ここでは`/Users/murayama/Desktop/php/basic`に保存するものとします。


続いて作成したプログラムを動かしてみましょう。

ターミナル（Windowsの場合はコマンドプロンプト）を開きます。カレントディレクトリを変更するために以下のコマンドを入力します。

```bash
$ cd /Users/murayama/Desktop/php-basic
```

> ターミナル上で現在作業している（開いている）ディレクトリをカレントディレクトリと呼びます。`cd`コマンドによってカレントディレクトリを変更することができます。ここではカレントディレクトリを`/Users/murayama/Desktop/php/overview`に変更しています。


> 注意：自分のMacに合わせて上記のパス`/Users/murayama/Desktop/php/overview`は置き換えてください。

それでは作成したプログラムを実行してみましょう。ターミナル上で`php`コマンドを入力します。

```bash
$ php basic1.php
Hello PHP
```

上記のように`Hello PHP`と出力されればOKです。


PHPプログラムは開始タグ`<?php`と終了タグ`?>`の中に記述します。

プログラムが複数行になる場合は開始タグ`<?php`と終了タグ`?>`の間にEnterキーで改行を入れながらプログラムを作成していきます。次のプログラム（basic2.php）を作成してみましょう。

```
<?php
echo "Hello PHP";
echo "Hello Python";
echo "Hello Java";
?>
```

それでは作成したプログラムを実行してみましょう。

```bash
$ php basic2.php
Hello PHPHello PythonHello Java
```

開始タグ`<?php`と終了タグ`?>`の中に記述した命令が上から順番に処理されているのがわかります。


## PHPタグの外側

PHPの開始タグ`<?php`と終了タグ`?>`の外側には任意のテキストを記述することができます。次のプログラム（basic3.php）を作成してみましょう。

```
Hello Python
<?php
echo "Hello PHP";
?>
Hello Java
```

それでは作成したプログラムを実行してみましょう。

```bash
$ php basic3.php
Hello Python
Hello PHPHello Java
```

PHPの開始タグ`<?php`と終了タグ`?>`の外側に記述した内容がそのまま出力されているのがわかります。このようにPHPの開始タグ`<?php`と終了タグ`?>`の外側は、記述した内容がそのまま出力されるようになっています。それでは次のプログラム（basic4.php）はどうでしょうか。


```
Hello Python


<?php
echo "Hello PHP";
?>
Hello Java


```

上記のプログラムには改行がいくつか追加されています。それでは作成したプログラムを実行してみましょう。

```bash
$ php basic4.php
Hello Python


Hello PHPHello Java

```

実行結果を見ると改行も正しく出力されているのがわかります。

なぜこのような仕組みになっているかというと、PHPは後で学習するHTMLと相性の良いプログラミング言語になっているからです。少し背伸びをして、次のプログラム（basic5.php）を作成してみましょう。

```
<?php
$title = "Hello PHP";
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
  </head>
  <body>
    <h1><?php echo $title ?></h1>
  </body>
</html>
```

変数やHTMLを活用いたプログラムです。現時点ではざっくり見ておいてもらえれば大丈夫ですが、1点注意して見てほしいのは、HTMLプログラムの中にPHPプログラムを挿入するようにプログラミングすることができる点です。たとえば`<title>`タグや`<h1>`タグの中でPHPプログラムが記述されています。

```
<title><?php echo $title ?></title>
```

```
<h1><?php echo $title ?></h1>
```

いずれも変数`$title`に入力された値（`"Hello PHP"`）をechoで出力しています。

> <?php echo $title ?>のように1行でPHPプログラムを記述する場合は、処理の終端のセミコロン`;`を省略可能です。

それでは作成したプログラムを実行してみましょう。

```bash
$ php basic5.php
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Hello PHP</title>
  </head>
  <body>
    <h1>Hello PHP</h1>
  </body>
</html>
```

HTMLの`<title>`タグや`<h1>`タグの中身がPHPによって出力されているのがわかります。


## 終了タグの省略

さきほどのプログラム（basic4.php）の仕組みを理解しておかないと、プログラムの出力結果が変わってしまいます。たとえば次のプログラム（basic6.php）を見てみましょう。

```
<?php
echo "Hello PHP";
?>







```

PHPの終了タグ`?>`の下に意味のない改行が複数入力されています。

> プログラミングをしていると考える時間が多くなるので、無意識のうちにEnterキーをタイプしてしまうこともあります。

プログラムを実行すると当然、次のように出力されてしまいます。

```bash
$ php basic6.php
Hello PHP





```

余計な改行が出力されている点に注意してください。私たち人間からすると些細な問題のように感じますが、ソフトウェア開発の世界では、出力に不要な改行が含まれることで、プログラムが正しく動作しない、というケースもありえます。

そのためPHPのプログラムでは、ファイルの終端においては終了タグ`?>`を省略することが許されています。次のプログラム（basic7.php）を作成してみましょう。


```
<?php
echo "Hello PHP";







```

> 終了タグ`?>`を省略している点に注意してください。またPHPタグの中の改行は、出力に影響を与えないので無視されます。

プログラムを実行すると次のように出力されます。

```bash
$ php basic7.php
Hello PHP
```

> 改行が出力されていない点に注意してください。

このようにPHPプログラムでは意図して終了タグ`?>`を省略することが多くあります。以降の解説では特に必要のない限り、終了タグ`?>`を省略して解説を進めます。



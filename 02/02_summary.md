# はじめてのPHPプログラミング

## サンプルプログラム

本講座で扱うサンプルプログラムを見てみましょう。

### データの出力

次のプログラムは画面（コマンドライン）に"Hello PHP"と出力するプログラムです。ファイル名はsample1.phpとして任意のフォルダに保存します。

> 以降のサンプルプログラムは/Users/murayama/Desktop/php-basicフォルダに保存したものとします。

```php
<?php
echo "Hello PHP";
```

次にターミナル（Windowsの場合はコマンドプロンプト）を開きます。カレントフォルダを変更するために以下のコマンドを入力します。

```bash
$ cd /Users/murayama/Desktop/php-basic
```

> 現在作業している（開いている）フォルダをカレントフォルダと呼びます。cdコマンドによってカレントフォルダを変更することができます。

それでは作成したプログラムを実行してみましょう。ターミナル上でphpコマンドを入力します。

```bash
$ php sample1.php
Hello PHP
```

上記のように画面にHello PHPと出力されればOKです。


### 変数

続いて変数を扱うプログラムについて見てみましょう。変数とはプログラム上でデータを管理する仕組みです。次のプログラムをsample2.phpという名前で保存します。

```php
<?php
$name = "Andy";
echo "Hello ";
echo $name;
```

ここでは新たに変数$nameを定義しています。また変数$nameの中に"Andy"という文字列データを代入しています。

それでは作成したプログラムを実行してみましょう。ターミナル上でphpコマンドを入力します。

```bash
$ php sample2.php
Hello Andy
```

上記のように画面にHello Andyと出力されればOKです。

もう一つ変数を扱うサンプルプログラムを考えてみましょう。先のプログラムはHello Andyと出力しましたが、もう一人、登場人物を追加してみましょう。次のプログラムをsample3.phpという名前で保存します。


```php
<?php
$name = "Andy";
$name2 = "Betty";

echo "Hello ";
echo $name;
echo "Hello ";
echo $name2;
```

それでは作成したプログラムを実行してみましょう。ターミナル上でphpコマンドを入力します。

```bash
$ php sample3.php
Hello AndyHello Betty
```

上記のように画面にHello AndyHello Bettyと出力されればOKです。ところでもう一人名前の出力を追加する場合はどうでしょうか。"Andy"、"Betty"、"Carol"のように名前を追加していくと、変数の数も多くなってしまいます。


### 配列

続いて配列を扱うプログラムについて見てみましょう。配列は変数の一種で、関係性のある複数のデータをまとめて管理する仕組みです。たとえば先ほどの"Andy"、"Betty"、"Carol"のような名前を表すデータは配列で管理すると簡単になります。次のプログラムをsample4.phpという名前で保存します。


```php
<?php
$names = ["Andy", "Betty", "Carol"];

echo "Hello ";
echo $names[0];
echo "Hello ";
echo $names[1];
echo "Hello ";
echo $names[2];
```

変数$namesには"Andy"、"Betty"、"Carol"と3つのデータが代入されています。このように複数のデータをまとめて管理する仕組みを配列と呼びます。

それでは作成したプログラムを実行してみましょう。ターミナル上でphpコマンドを入力します。

```bash
$ php sample3.php
Hello AndyHello BettyHello Carol
```

上記のように画面に出力されればOKです。

### 制御構文

### 関数



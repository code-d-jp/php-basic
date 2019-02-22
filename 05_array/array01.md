# 配列

配列はプログラム上で複数のデータを管理する仕組みです。これまでに学習してきた変数は1つのデータしか管理できませんでしたが、配列は複数のデータをまとめて管理することができます。

> 配列は変数の一種です。配列のことを変数と呼んだり、配列変数と呼んだりすることもあります。

テキストエディタを開いて次のプログラム（array1.php）を作成してみましょう。

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

まずは作成したプログラムを実行してみましょう。ターミナルから次のように実行します。

```
$ php array1.php
Hello AndyHello BettyHello Carol
```

上記の結果から`"Andy"`、`"Betty"`、`"Carol"`3つのデータが出力されているのがわかります。


## 配列の使い方

それではプログラム（array1.php）の詳細を見てみましょう。プログラムの先頭の部分で配列`$names`を定義しています。

```php
<?php
$names = ["Andy", "Betty", "Carol"];
```

配列には複数のデータを代入することができます。また配列は変数の一種です。ここでは配列`$names`の中に、次の図のように`"Andy"`、`"Betty"`、`"Carol"`3つのデータが代入されています。

> 図

配列を構成する個々のデータは要素と呼びます。配列の要素には先頭から順番に番号が割り振られています。この番号のことを要素番号と呼びます。要素番号は0から開始する点に注意してください。


配列は要素番号を指定することで一つのデータを取り出すことができます。たとえば配列`$names`に要素番号としてと0を指定する場合は`$names[0]`と記述します。引き続きプログラム（array1.php）の詳細を見てみましょう。

```php
echo "Hello ";
echo $names[0]; # 先頭の要素にアクセス
echo "Hello ";
echo $names[1]; # 前から2番目の要素にアクセス
echo "Hello ";
echo $names[2]; # 前から3番目の要素にアクセス
```

上記のプログラムでは要素番号に`0`、`1`、`2`を指定することで配列の要素を先頭から順番にアクセスしています。

## 要素番号の指定

PHPの要素番号は0から割り振られることを学びました。それでは存在しない要素番号にアクセスするとどうなるのでしょうか。次のプログラム（array2.php）を作成してみましょう。

```php
<?php
$names = ["Andy", "Betty", "Carol"];

echo $names[3];
```

ここでは配列に存在しない要素番号である`3`を指定しています。このような誤った指定をするとどうなるのでしょうか。作成したプログラムを実行してみましょう。ターミナルから次のように実行します。

```
$ php array2.php
PHP Notice:  Undefined offset: 3 in /Users/murayama/Desktop/php/array/array2.php on line 5

Notice: Undefined offset: 3 in /Users/murayama/Desktop/php/array/array2.php on line 5
```

プログラムを実行すると上記のような注意メッセージが表示されます。`Undefined offset: 3`という出力から「定義されていない要素番号3」にアクセスしていると読み取れます。

> PHPのエラーメッセージにはError（エラー）、Warning（警告）、Notice（注意）など様々な種類があります。ここではPHP Noticeと先頭に出力されています。

## 配列の出力

もう一つ注意する点を確認しておきましょう。次のプログラム（array3.php）を作成してみましょう。

```php
<?php
$names = ["Andy", "Betty", "Carol"];

echo $names;
```

一見すると正しく動作するように見えますが、これは配列を習いはじめの頃によくある誤りです。作成したプログラムを実行してみましょう。ターミナルから次のように実行します。

```
$ php array3.php
PHP Notice:  Array to string conversion in /Users/murayama/Desktop/Udemy-PHP/05_array/src/array3.php on line 4

Notice: Array to string conversion in /Users/murayama/Desktop/Udemy-PHP/05_array/src/array3.php on line 4
Array
```

プログラムを実行すると上記のような注意メッセージが表示されます。`Array to string conversion`という出力から「配列を文字列に変換している」と読み取れます。echo命令は数値や文字列を出力することはできるのですが、配列のような集合データを出力することはできないため、このようなメッセージが出力されるのです。

もし配列の要素をすべて確認したいのであればechoではなくvar_dump関数を使うことができます。さきほどのプログラム（array3.php）を修正してみましょう。

```php
<?php
$names = ["Andy", "Betty", "Carol"];

var_dump($names);
```

プログラムを実行してみましょう。

```
$ php array3_2.php
array(3) {
  [0]=>
  string(4) "Andy"
  [1]=>
  string(5) "Betty"
  [2]=>
  string(5) "Carol"
}
```

var_dump関数によって配列のすべての要素が出力されているのがわかります。


## 配列の要素数の取得

続いて配列の要素数を求めるプログラムを見てみましょう。次のプログラム（array4.php）を作成してみましょう。

```php
<?php
$names = ["Andy", "Betty", "Carol"];
$count = count($names);

echo $count;
```

配列の要素数を求めるにはcount関数を使います。上記のようにプログラミングすることで変数`$count`には`3`という値が代入されます。

> 関数の詳細については後の章で学習します。

プログラムを実行してみましょう。


```
$ php array4.php
3
```

実行結果から配列の要素数である`3`が出力されているのがわかります。
# はじめてのPHPプログラミング

本講座で扱うサンプルプログラムを見てみましょう。

1. データの出力
1. 変数
1. 配列（添字配列）
1. 制御構文（for文）
1. 制御構文（if文）
1. 配列（連想配列）
1. 関数
1. まとめ

### 1 データの出力

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


### 2 変数

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

もう一つ変数を扱うサンプルプログラムを考えてみましょう。先のプログラムはHello Andyと出力しましたが、もう一人、登場人物を追加してみましょう。先ほどのプログラムをsample2.phpを修正します。


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
$ php sample2.php
Hello AndyHello Betty
```

上記のように画面にHello AndyHello Bettyと出力されればOKです。ところでもう一人名前の出力を追加する場合はどうでしょうか。"Andy"、"Betty"、"Carol"のように名前を追加していくと、変数の数も多くなってしまいます。


### 3 配列（添字配列）

続いて配列を扱うプログラムについて見てみましょう。配列は変数の一種で、関係性のある複数のデータをまとめて管理する仕組みです。たとえば先ほどの"Andy"、"Betty"、"Carol"のような名前を表すデータは配列で管理すると簡単になります。次のプログラムをsample3.phpという名前で保存します。


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

変数$namesには"Andy"、"Betty"、"Carol"と3つのデータが代入されています。このように複数のデータをまとめて管理する仕組みを配列（添字配列）と呼びます。配列は前から順番に要素番号が割り振られます。また要素番号の先頭は1ではなく0から始まる点に注意しておきましょう。

それでは作成したプログラムを実行してみましょう。ターミナル上でphpコマンドを入力します。

```bash
$ php sample3.php
Hello AndyHello BettyHello Carol
```

上記のように出力されればOKです。

### 4 制御構文（for文）

配列のような集合データはfor文などの繰り返し構造を使えば簡単に出力できます。次のプログラムをsample4.phpという名前保存します。

```php
<?php
$names = ["Andy", "Betty", "Carol"];

for ($i = 0; $i < 3; $i++) {
    echo "Hello ";
    echo $names[$i];
}
```

ここで繰り返し構造であるfor文は変数iの値が0から3まで（計3回）処理を繰り返します。

それでは作成したプログラムを実行してみましょう。ターミナル上でphpコマンドを入力します。

```bash
$ php sample4.php
Hello AndyHello BettyHello Carol
```

上記のように出力されればOKです。

### 5 制御構文（if文）

さきほどのプログラムを少し修正してみましょう。ここではif文を使って"Andy", "Betty", "Carol" 3人の名前の中から"Andy"以外の名前を出力するように修正します。次のプログラムをsample5.phpという名前保存します。

```php
<?php
$names = ["Andy", "Betty", "Carol"];

for ($i = 0; $i < 3; $i++) {
    if ($names[$i] != "Andy") {
        echo "Hello ";
        echo $names[$i];
    }
}
```

for文の中で、if文を使って変数（$names[$i]）の値が"Andy"でないか確認しています。

それでは作成したプログラムを実行してみましょう。ターミナル上でphpコマンドを入力します。

```bash
$ php sample5.php
Hello BettyHello Carol
```

上記のように出力されればOKです。

### 6 配列（連想配列）

少し複雑なプログラムも見てみましょう。ここでは"Andy", "Betty", "Carol" 3人のデータに対して、"Andy"は20歳、"Betty"は19歳、"Carol"は21歳のように、年齢（age）データも定義します。また出力の条件も変更して、年齢が20歳以上であればHelloと出力するように修正してみましょう。次のプログラムをsample6.phpという名前保存します。


```php
<?php
$students = [
  ["name" => "Andy", "age" => 20],
  ["name" => "Betty", "age" => 19],
  ["name" => "Cody", "age" => 21]
];

for ($i = 0; $i < 3; $i++) {
    if ($students[$i]["age"] >= 20) {
        echo "Hello ";
        echo $students[$i]["name"];
    }
}
```

連想配列はダブルアロー演算子（=>）を使って定義します。通常の配列（添字配列）は前から順番に要素番号が割り振られるのに対して、連想配列は要素番号ではなく、キー（"name"や"age"のような文字列）を割り振ります。

またfor文の中で、if文を使って変数（$names[$i]["age"]）の値が20以上かどうか確認しています。

それでは作成したプログラムを実行してみましょう。ターミナル上でphpコマンドを入力します。

```bash
$ php sample6.php
Hello AndyHello Carol
```

上記のように出力されればOKです。


### 7 関数

続いて本講座では関数について取り上げます。関数を使うサンプルプログラムを見てみましょう。次のプログラムはstrtoupper関数を使って"Andy", "Betty", "Carol" 3人の名前をアルファベット大文字で出力します。次のプログラムをsample7.phpという名前保存します。

```php
<?php
$names = ["Andy", "Betty", "Carol"];

for ($i = 0; $i < 3; $i++) {
    echo "Hello ";
    echo strtoupper($names[$i]);
}
```

for文の繰り返し処理の中でstrtoupper関数を利用しています。strtoupper関数は引数（$names[$i]）に受け取った値を大文字に変換する関数です。

> 引数とは関数の受け取るデータのことです。また関数の返却するデータは戻り値（返り値）などと呼びます。

それでは作成したプログラムを実行してみましょう。ターミナル上でphpコマンドを入力します。

```bash
$ php sample7.php
Hello ANDYHello BETTYHello CAROL
```

上記のように出力されればOKです。

PHPにはstrtoupper以外にも様々な関数が用意されています。次のサンプルプログラムはmkdir関数を使ってディレクトリ（フォルダ）を作成するプログラムです。さきほどのプログラムsample7.phpを次のように修正してみましょう。

```php
<?php
$names = ["Andy", "Betty", "Carol"];

for ($i = 0; $i < 3; $i++) {
    mkdir($names[$i]);
}
```

for文の繰り返し処理の中でmkdir関数を利用しています。mkdir関数は引数（$names[$i]）に受け取った値を使ってディレクトリを作成します。


それでは作成したプログラムを実行してみましょう。ターミナル上でphpコマンドを入力します。

```bash
$ php sample7.php
```

このプログラムは実行結果をターミナルに表示しませんが、Finderやlsコマンド（Windowsの場合はExplorerやdirコマンド）で生成されたディレクトリを確認できるでしょう。

```bash
$ ls
Andy    Betty    Carol
```

上記のように生成されたディレクトリを確認できればOKです。


### 8 まとめ

それではこれまでのまとめとして、配列（連想配列）や制御構造（for文やif文）、それから関数（strtoupper）を使うプログラムを作成してみましょう。次のプログラムをsample8.phpという名前保存します。

```php
<?php
$students = [
  ["name" => "Andy", "age" => 20],
  ["name" => "Betty", "age" => 19],
  ["name" => "Carol", "age" => 21]
];

for ($i = 0; $i < 3; $i++) {
    if ($students[$i]["age"] >= 20) {
        echo "Hello ";
        echo strtoupper($students[$i]["name"]);
    }
}
```

それでは作成したプログラムを実行してみましょう。ターミナル上でphpコマンドを入力します。

```bash
$ php sample8.php
Hello ANDYHello CODY
```


上記のように出力されればOKです。














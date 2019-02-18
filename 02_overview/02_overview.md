# はじめてのPHPプログラミング

## コマンドラインアプリケーション - サンプルプログラム

本講座で扱うサンプルプログラムを見てみましょう。

1. データの出力
1. 変数
1. 配列（添字配列）
1. 制御構文（for文）
1. 制御構文（if文）
1. 配列（連想配列）
1. 関数
1. まとめ


プログラミング初学者にとっては配列や関数など躓きやすいポイントがいくつかありますが、上から順番に学習を進めていけばどこが苦手かチェックできると思います。

### 1 データの出力（sample1.php）

次のプログラムは画面（ターミナル）に`Hello PHP`と出力するプログラムです。ファイル名は`sample1.php`として任意のフォルダに保存します。

> 以降のサンプルプログラムはMac上で`/Users/murayama/Desktop/php/overview`フォルダに保存したものとします。

```php
<?php
echo "Hello PHP";
?>
```

PHPで画面にデータを出力するには`echo`命令を使います。上記のように記述すれば画面に`Hello PHP`と出力されます。

次にターミナル（Windowsの場合はコマンドプロンプト）を開きます。カレントディレクトリ（カレントフォルダ）を変更するために以下のコマンドを入力します。

```bash
$ cd /Users/murayama/Desktop/php/overview
```

ターミナル上で現在作業している（開いている）ディレクトリをカレントディレクトリと呼びます。`cd`コマンドによってカレントディレクトリを変更することができます。ここではカレントディレクトリを`/Users/murayama/Desktop/php/overview`に変更しています。


> 注意：自分のMacに合わせて上記のパス`/Users/murayama/Desktop/php/overview`は置き換えてください。



それでは作成したプログラムを実行してみましょう。ターミナル上で`php`コマンドを入力します。

```bash
$ php sample1.php
Hello PHP
```

上記のように`Hello PHP`と出力されればOKです。

> PHPプログラムの終端となる閉じタグ`?>`は省略可能です。以降は`?>`を省略してコードを記載します。


### 2 変数（sample2.php）

続いて変数を扱うプログラムについて見てみましょう。変数とはプログラム上でデータを扱う仕組みです。次のプログラムを`sample2.php`という名前で保存します。

```php
<?php
$name = "Andy";
echo "Hello ";
echo $name;
```

ここでは変数`$name`を定義しています。また変数`$name`の中に`"Andy"`という文字列データを代入しています。PHPの文字列データは`""`（ダブルクォーテーション）あるいは`''`（シングルクォーテーション）で囲む必要があります。変数に格納したデータは`echo`命令で出力できます。

> PHPの変数は先頭に`$`マークが付きます。

それでは作成したプログラムを実行してみましょう。ターミナル上で`php`コマンドを入力します。

```bash
$ php sample2.php
Hello Andy
```

上記のように`Hello Andy`と出力されればOKです。


さて、もう一つ変数を扱うサンプルプログラムを考えてみましょう。先ほどのプログラムは`Hello Andy`と出力しましたが、もう一人、登場人物として`"Betty"`を追加してみましょう。先ほどのプログラム`sample2.php`を修正します。

```php
<?php
$name = "Andy";
$name2 = "Betty";

echo "Hello ";
echo $name;
echo "Hello ";
echo $name2;
```

変数が`$name`と`$name2`の2つになりました。変数`$name`には`"Andy"`、`$name2`には`"Betty"`がそれぞれ代入されています。

それでは作成したプログラムを実行してみましょう。ターミナル上で`php`コマンドを入力します。

```bash
$ php sample2.php
Hello AndyHello Betty
```

上記のように画面に`Hello AndyHello Betty`と出力されればOKです。ところでもう一人名前の出力を追加する場合はどうでしょうか。`"Andy"`、`"Betty"`、`"Carol"`のように名前を追加していくと、変数の数も多くなってしまいます。


### 3 配列（添字配列）（sample3.php）

続いて配列を扱うプログラムについて見てみましょう。配列は変数の一種で、関係性のある複数のデータをまとめて管理する仕組みです。たとえば先ほどの`"Andy"`、`"Betty"`、`"Carol"`のような名前を表すデータは配列で管理すると簡単になります。次のプログラムを`sample3.php`という名前で保存します。


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

変数`$names`には`"Andy"`、`"Betty"`、`"Carol"`と3つのデータが代入されています。このように複数のデータをまとめて管理する仕組みを配列（添字配列）と呼びます。配列は前から順番に要素番号が割り振られます。また要素番号の先頭は`1`ではなく`0`から始まる点に注意しておきましょう。

> 変数名が`$names`と複数形になっている点も注目してください。配列のような複数のデータを表現する変数は名前の付け方を工夫すると読みやすくなります。

それでは作成したプログラムを実行してみましょう。ターミナル上で`php`コマンドを入力します。

```bash
$ php sample3.php
Hello AndyHello BettyHello Carol
```

上記のように出力されればOKです。

### 4 制御構文（for文）（sample4.php）

配列のような集合データはfor文などの繰り返し構造を使えば簡単に出力できます。次のプログラムを`sample4.php`という名前保存します。

```php
<?php
$names = ["Andy", "Betty", "Carol"];

for ($i = 0; $i < 3; $i++) {
    echo "Hello ";
    echo $names[$i];
}
```

ここで繰り返し構造である`for`文は変数`$i`の値が`0`から`3`まで（計3回）処理を繰り返します。

> for文で扱う変数`$i`はカウンター変数などと呼ばれます。変数`$i`のiはincrement（増える）という単語の頭文字を意味しています。`for ($i = 0; $i < 3; $i++)`とすると、変数`$i`の初期値は0となり、`$i < 3`の条件が成立する間、処理（forの後の`{}`）を繰り返します。繰り返しが1回終了するごとに`$i++`が実行されます。`$i++`は`$i`の値を`1`増やすという処理なので、繰り返しの都度、変数`$i`の値が1増えることになります。

それでは作成したプログラムを実行してみましょう。ターミナル上で`php`コマンドを入力します。

```bash
$ php sample4.php
Hello AndyHello BettyHello Carol
```

上記のように出力されればOKです。

### 5 制御構文（if文）（sample5.php）

さきほどのプログラムを少し修正してみましょう。ここでは`if`文を使って`"Andy"`、`"Betty"`、 `"Carol"` 3人の名前の中から`"Andy"`以外の名前を出力するように修正してみましょう。次のプログラムをsample5.phpという名前保存します。

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

for文の中で、if文を使って変数（`$names[$i]`）の値が`"Andy"`でないか確認しています。

> if文で利用している演算子`!=`は左辺と右辺が等しくない場合に真（True）となります。等しいかどうかを比較する場合は`==`を使います。`!==`や`===`といった演算子も大切ですが、もう少しあとで勉強しましょう。

それでは作成したプログラムを実行してみましょう。ターミナル上で`php`コマンドを入力します。

```bash
$ php sample5.php
Hello BettyHello Carol
```

上記のように出力されればOKです。

### 6 配列（連想配列）（sample6.php）

少し複雑なプログラムも見てみましょう。ここでは`"Andy"`、`"Betty"`、`"Carol"` 3人のデータに対して`"Andy"`は`20`歳、`"Betty"`は`19`歳、`"Carol"`は`21`歳のように、年齢（`age`）データも定義します。また出力の条件も変更して、年齢が`20`歳以上であれば`Hello `と出力するように修正してみましょう。次のプログラムを`sample6.php`という名前保存します。


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

連想配列はダブルアロー演算子`=>`を使って定義します。通常の配列（添字配列）は前から順番に要素番号が割り振られるのに対して、連想配列は要素番号ではなく、キー（`"name"`や`"age"`のような文字列）を割り振ります。

また`for`文の中で、`if`文を使って変数`$names[$i]["age"]`の値が`20`以上かどうか確認しています。

それでは作成したプログラムを実行してみましょう。ターミナル上で`php`コマンドを入力します。

```bash
$ php sample6.php
Hello AndyHello Carol
```

上記のように出力されればOKです。


### 7 関数（sample7.php）

続いて本講座では関数について取り上げます。関数を使うサンプルプログラムを見てみましょう。次のプログラムは`strtoupper`関数を使って`"Andy"`、`"Betty"`、`"Carol"`3人の名前をアルファベット大文字で出力します。次のプログラムを`sample7.php`という名前保存します。

```php
<?php
$names = ["Andy", "Betty", "Carol"];

for ($i = 0; $i < 3; $i++) {
    echo "Hello ";
    echo strtoupper($names[$i]);
}
```

`for`文の繰り返し処理の中で`strtoupper`関数を利用しています。`strtoupper`関数は引数`$names[$i]`に受け取った値を大文字に変換する関数です。

> 引数とは関数の受け取るデータのことです。また関数の返却するデータは戻り値（返り値）などと呼びます。

それでは作成したプログラムを実行してみましょう。ターミナル上で`php`コマンドを入力します。

```bash
$ php sample7.php
Hello ANDYHello BETTYHello CAROL
```

上記のように出力されればOKです。

> アルファベット小文字に変換するにはstrtolower関数を使います。

PHPには`strtoupper`以外にも様々な関数が用意されています。次のサンプルプログラムは`mkdir`関数を使ってディレクトリ（フォルダ）を作成するプログラムです。さきほどのプログラム`sample7.php`を次のように修正してみましょう。

```php
<?php
$names = ["Andy", "Betty", "Carol"];

for ($i = 0; $i < 3; $i++) {
    mkdir($names[$i]);
}
```

`for`文の繰り返し処理の中で`mkdir`関数を利用しています。mkdir関数は引数`$names[$i]`に受け取った値を使ってディレクトリを作成します。

それでは作成したプログラムを実行してみましょう。ターミナル上で`php`コマンドを入力します。

```bash
$ php sample7.php
```

このプログラムは実行結果をターミナルに表示しませんが、Finderや`ls`コマンド（Windowsの場合はExplorerやdirコマンド）で生成されたディレクトリを確認できるでしょう。

```bash
$ ls
Andy    Betty    Carol
```

上記のように生成されたディレクトリを確認できればOKです。


### 8 まとめ（sample8.php）

それではこれまでのまとめとして、配列（連想配列）や制御構造（`for`文や`if`文）、それから関数（`strtoupper`）を使うプログラムを作成してみましょう。次のプログラムを`sample8.php`という名前保存します。

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

### おわりに

以上、駆け足でPHPプログラミングについて紹介しました。

1. データの出力
1. 変数
1. 配列（添字配列）
1. 制御構文（for文）
1. 制御構文（if文）
1. 配列（連想配列）
1. 関数

わずかなプログラムでしたが、これだけでもプログラミングの基礎的な概念は網羅できています。ここで紹介したコードの読み書きができればPHPerとしての道は開けると思います。
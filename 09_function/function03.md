# 配列を扱う関数

ここでは配列を扱う関数について見ていきましょう。以下の関数を取り上げます。

+ count — 変数に含まれるすべての要素を数える
+ array_reverse — 要素を逆順にした配列を返す
+ array_sum — 配列の中の値の合計を計算する
+ array_slice — 配列の一部を展開する
+ array_push — 一つ以上の要素を配列の最後に追加する
+ array_pop — 配列の末尾から要素を取り除く
+ array_unshift — 一つ以上の要素を配列の最初に加える
+ array_shift — 配列の先頭から要素を一つ取り出す

> 配列を扱う関数の詳細については[PHP マニュアル 関数リファレンス 変数・データ型関連 配列](http://php.net/manual/ja/book.array.php)を参照してください。


## count — 変数に含まれるすべての要素を数える

`count`関数は配列の要素数を調べる関数です。テキストエディタを開いて次のプログラム（arr1.php）を作成してみましょう。

```
<?php
$array = ["Andy", "Betty", "Carol"];
$length = count($array);
echo $length . PHP_EOL;
```

`count`関数は引数に、文字列長を調べる対象となる文字列を指定します。上記の場合は`$array`を引数に指定しているので、`$array`に代入されているデータである`["Andy", "Betty", "Carol"]`の要素数が`count`関数の戻り値として返却されます。また戻り値を受け取るために`$length`変数を用意しています。

作成したプログラムを実行してみましょう。ターミナルから次のように実行します。

```
$ php arr1.php
3
```

実行結果から`["Andy", "Betty", "Carol"]`の要素数である`3`が出力されているのがわかります。


## array_reverse — 要素を逆順にした配列を返す

`array_reverse`関数は文字列を逆順にする関数です。次のプログラム（arr2.php）を作成してみましょう。

```
<?php
$array = ["Andy", "Betty", "Carol"];
$reversed_array = array_reverse($array);
print_r($reversed_array);
```

`array_reverse`関数は引数に、逆順の対象となる配列を指定します。上記の場合は`$array`を引数に指定しているので、`$array`に代入されているデータである`["Andy", "Betty", "Carol"]`を逆順にした配列が`array_reverse`関数の戻り値として返却されます。また戻り値を受け取るために`$reversed_array`変数を用意しています。

> 変数$reversed_arrayには配列が代入されるのでprint_r関数で出力しています。

作成したプログラムを実行してみましょう。ターミナルから次のように実行します。

```
$ php arr2.php
Array
(
    [0] => Carol
    [1] => Betty
    [2] => Andy
)
```

実行結果から`["Andy", "Betty", "Carol"]`を逆順にした配列が出力されているのがわかります。

## array_sum — 配列の中の値の合計を計算する

`array_sum`関数は配列の要素の合計を計算する関数です。次のプログラム（arr3.php）を作成してみましょう。

```
<?php
$array = [10, 20, 30];
$sum = array_sum($array);
echo $sum . PHP_EOL;
```

`array_sum`関数は引数に、計算対象となる配列を指定します。上記の場合は`$array`を引数に指定しているので、`$array`に代入されているデータである`[10, 20, 30]`の合計値が`array_sum`関数の戻り値として返却されます。また戻り値を受け取るために`$sum`変数を用意しています。

> 変数$reversed_arrayには配列が代入されるのでprint_r関数で出力しています。

作成したプログラムを実行してみましょう。ターミナルから次のように実行します。

```
$ php arr3.php
60
```

実行結果から`[10, 20, 30]`の合計値である`60`が出力されているのがわかります。

## array_slice — 配列の一部を展開する

`array_slice`関数は配列の一部分を返却する関数です。次のプログラム（arr4.php）を作成してみましょう。

```
<?php
$array = ["Andy", "Betty", "Carol"];
$sliced_array = array_slice($array, 1);
print_r($sliced_array);
```

`array_slice`関数は引数を2つ指定します。

+ 第1引数
  + 一部分の取得対象となる配列
+ 第2引数
  + 開始位置

さきほどのプログラムの場合は`array_slice`関数の第1引数に`$array`、第2引数に`1`を指定しています。この場合、`array_slice`関数は`["Andy", "Betty", "Carol"]`という配列の`1`番目の要素以降を戻り値として返します。

作成したプログラムを実行してみましょう。ターミナルから次のように実行します。

```
❯ php arr4.php
Array
(
    [0] => Betty
    [1] => Carol
)
```

実行結果から`["Andy", "Betty", "Carol"]`を要素番号が1番目以降の要素が出力されているのがわかります。

> 配列の要素番号は0からカウントします。

またarray_slice関数の第3引数に開始位置からの要素数を指定することも可能です。さきほどのプログラム（arr4.php）を修正してみましょう。

```
<?php
$array = ["Andy", "Betty", "Carol"];
$sliced_array = array_slice($array, 1, 1);
print_r($sliced_array);
```

修正したプログラムを実行してみましょう。ターミナルから次のように実行します。

```
❯ php arr4.php
Array
(
    [0] => Betty
)
```

実行結果から`["Andy", "Betty", "Carol"]`を要素番号が1番目以降の要素が1つだけ出力されているのがわかります。

## array_push — 一つ以上の要素を配列の最後に追加する

`array_push`関数は配列の末尾に要素を追加する関数です。次のプログラム（arr5.php）を作成してみましょう。

```
<?php
$array = ["Andy", "Betty", "Carol"];
$length = array_push($array, "Dave");
echo $length . PHP_EOL;
print_r($array);
```

`array_push`関数は引数を2つ指定します。

+ 第1引数
  + 追加の対象となる配列
+ 第2引数
  + 追加する要素

さきほどのプログラムの場合は`array_push`関数の第1引数に`$array`、第2引数に`"Dave"`を指定しています。この場合、`array_push`関数は`["Andy", "Betty", "Carol"]`という配列の末尾に`"Dave"`要素を追加します。ただし、戻り値には配列の要素数を返します。

> 戻り値が配列`["Andy", "Betty", "Carol", "Dave"]`でない点に注意してください。`array_push`関数は引数に指定した変数を更新します。

作成したプログラムを実行してみましょう。ターミナルから次のように実行します。

```
$ php arr5.php
4
Array
(
    [0] => Andy
    [1] => Betty
    [2] => Carol
    [3] => Dave
)
```

実行結果から配列の要素数である`4`と配列の末尾に`"Dave"`が追加されているのがわかります。

> 関数によっては`array_push`関数のように引数で受け取った変数を更新するものもあります。このような関数は"破壊的な関数"とも呼ばれます。

もう一つ`array_push`関数の使い方を確認しておきましょう。`array_push`関数は追加する要素を引数に複数指定することもできます。さきほどのプログラム（arr5.php）を修正してみましょう。

```
<?php
$array = ["Andy", "Betty", "Carol"];
$length = array_push($array, "Dave", "Ellen");
echo $length . PHP_EOL;
print_r($array);
```

ここでは`array_push`関数の引数に`"Dave"`、`"Ellen"`と指定しています。

> このような引数の仕組みは"可変長引数リスト"とも呼ばれます。

修正したプログラムを実行してみましょう。ターミナルから次のように実行します。

```
$ php arr5.php
5
Array
(
    [0] => Andy
    [1] => Betty
    [2] => Carol
    [3] => Dave
    [4] => Ellen
)
```

実行結果から配列の要素数である`5`と配列の末尾に`"Dave"`、`"Ellen"`が追加されているのがわかります。

> 配列に要素を1つ追加するだけなら`array_push`関数を使わずに`$array[] = "Dave"`と記述できます。


## array_pop — 配列の末尾から要素を取り除く

`array_pop`関数は配列の末尾から要素を取り除く関数です。次のプログラム（arr6.php）を作成してみましょう。

```
<?php
$array = ["Andy", "Betty", "Carol"];
$element = array_pop($array);
echo $element . PHP_EOL;
print_r($array);
```

`array_pop`関数は引数に、末尾要素を取り除く対象となる配列を指定します。上記の場合は`$array`を引数に指定しているので、`$array`に代入されているデータである`["Andy", "Betty", "Carol"]`の末尾要素が`array_pop`関数の戻り値として返却されます。また戻り値を受け取るために`$element`変数を用意しています。それから`array_pop`関数で処理した後の配列`$array`を`print_r`関数で出力しています。

作成したプログラムを実行してみましょう。ターミナルから次のように実行します。

```
$ php arr6.php
Carol
Array
(
    [0] => Andy
    [1] => Betty
)
```

実行結果から取得した末尾要素である`"Carol"`と`"Carol"`を取り除いた配列が出力されているのがわかります。

## array_unshift — 一つ以上の要素を配列の最初に加える

`array_unshift`関数は配列の先頭に要素を追加する関数です。次のプログラム（arr7.php）を作成してみましょう。

```
<?php
$array = ["Andy", "Betty", "Carol"];
$length = array_unshift($array, "Dave");
echo $length . PHP_EOL;
print_r($array);
```

`array_unshift`関数は引数を2つ指定します。

+ 第1引数
  + 追加の対象となる配列
+ 第2引数
  + 追加する要素

さきほどのプログラムの場合は`array_unshift`関数の第1引数に`$array`、第2引数に`"Dave"`を指定しています。この場合、`array_unshift`関数は`["Andy", "Betty", "Carol"]`という配列の先頭に`"Dave"`要素を追加します。ただし、戻り値には配列の要素数を返します。

> 戻り値が配列`["Dave", "Andy", "Betty", "Carol"]`でない点に注意してください。`array_unshift`関数は引数に指定した変数を更新します。

作成したプログラムを実行してみましょう。ターミナルから次のように実行します。

```
$ php arr7.php
4
Array
(
    [0] => Dave
    [1] => Andy
    [2] => Betty
    [3] => Carol
)
```

実行結果から配列の要素数である`4`と配列の先頭に`"Dave"`が追加されているのがわかります。

もう一つ`array_unshift`関数の使い方を確認しておきましょう。`array_unshift`関数は追加する要素を引数に複数指定することもできます。さきほどのプログラム（arr7.php）を修正してみましょう。

```
<?php
$array = ["Andy", "Betty", "Carol"];
$length = array_unshift($array, "Dave", "Ellen");
echo $length . PHP_EOL;
print_r($array);
```

ここでは`array_unshift`関数の引数に`"Dave"`、`"Ellen"`と指定しています。

修正したプログラムを実行してみましょう。ターミナルから次のように実行します。

```
$ php arr7.php
5
Array
(
    [0] => Dave
    [1] => Ellen
    [2] => Andy
    [3] => Betty
    [4] => Carol
)
```

実行結果から配列の要素数である`5`と配列の先頭に`"Dave"`、`"Ellen"`が追加されているのがわかります。

## array_shift — 配列の先頭から要素を一つ取り出す

`array_shift`関数は配列の先頭から要素を取り除く関数です。次のプログラム（arr8.php）を作成してみましょう。

```
<?php
$array = ["Andy", "Betty", "Carol"];
$element = array_shift($array);
echo $element . PHP_EOL;
print_r($array);
```

`array_shift`関数は引数に、先頭要素を取り除く対象となる配列を指定します。上記の場合は`$array`を引数に指定しているので、`$array`に代入されているデータである`["Andy", "Betty", "Carol"]`の先頭要素が`array_shift`関数の戻り値として返却されます。また戻り値を受け取るために`$element`変数を用意しています。それから`array_shift`関数で処理した後の配列`$array`を`print_r`関数で出力しています。

作成したプログラムを実行してみましょう。ターミナルから次のように実行します。

```
$ php arr8.php
Andy
Array
(
    [0] => Betty
    [1] => Carol
)
```

実行結果から取得した先頭要素である`"Andy"`と`"Andy"`を取り除いた配列が出力されているのがわかります。


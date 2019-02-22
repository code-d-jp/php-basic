# 要素の変更

配列の要素を変更することもできます。次のプログラム（array6.php）を作成してみましょう。

```
<?php
$names = ["Andy", "Betty", "Carol"];
$names[1] = "Dave";

echo $names[0];
echo $names[1];
echo $names[2];
```

配列の要素を変更（上書き）するときは`$names[1] = "Dave"`のように配列変数に要素番号を指定して代入するようにします。

プログラムを実行してみましょう。

```
$ php array6.php
AndyDaveCarol
```

上記の結果から要素番号が`1`である`Betty`が上書きされて`Dave`と出力されているのがわかります。


## 要素の入れ替え

先ほどのプログラム（array6.php）では配列`$names`に`"Andy"`、`"Betty"`、`"Carol"`と3人の名前が代入されていした。ここで`"Andy"`と`"Carol"`を入れ替えることを考えてみましょう。配列`$names`の要素の並び順を`"Carol"`、`"Betty"`、`"Andy"`とするものとします。まずはよくある誤りから見てみましょう。次のプログラム（array7.php）を作成してみましょう。

```
<?php
$names = ["Andy", "Betty", "Carol"];

$names[0] = $names[2];
$names[2] = $names[0];

var_dump($names);
```

プログラムを実行してみましょう。

```
$ php array7.php
array(3) {
  [0]=>
  string(5) "Carol"
  [1]=>
  string(5) "Betty"
  [2]=>
  string(5) "Carol"
}
```

配列の先頭要素は`"Carol"`となっていますが、3つ目の要素も`"Carol"`となっています。さきほどのプログラムでは`$names[0] = $names[2];`と実行した時点で、配列の先頭要素の`"Andy"`は上書きされてしまうため、このような結果となってしまいます。このようなケースでは次のようにもう一つ変数を使うと解決できます。さきほどのプログラム（array7.php）を次のように修正してみましょう。

```
<?php
$names = ["Andy", "Betty", "Carol"];

$temp = $names[0];
$names[0] = $names[2];
$names[2] = $temp;

var_dump($names);
```

上記のプログラムでは`$temp`という名前の変数を用意することで、先頭要素の`"Andy"`を一時的に$temp変数に保持するようにしています。

> $tempという変数の名前は"Temporary（一時的）"という単語から付けています。プログラミングではよく使う単語なので覚えておくと良いでしょう。

プログラムを実行してみましょう。

```
$ php array7.php
array(3) {
  [0]=>
  string(5) "Carol"
  [1]=>
  string(5) "Betty"
  [2]=>
  string(4) "Andy"
}
```

実行結果から期待通り`"Carol"`、`"Betty"`、`"Andy"`の順に並んでいるのがわかります。


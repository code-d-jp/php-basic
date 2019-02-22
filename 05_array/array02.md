# 要素の追加

PHPの配列は要素を追加することができます。次のプログラム（array5.php）を作成してみましょう。

```
<?php
$names = ["Andy", "Betty", "Carol"];
$names[] = "Dave";

echo $names[3];
```

配列に要素を追加するには`[] = `と記述します。ここでは既存の`"Andy"`、`"Betty"`、`"Carol"`の後に`"Dave"`が追加されることになります。

プログラムを実行してみましょう。

```
$ php array5.php
Dave
```

上記の結果から要素番号が`3`である`Dave`が出力されているのがわかります。

## 要素数の確認

復習として配列の要素数も確認してみましょう。さきほどのプログラム（array5.php）を次のように修正してみましょう。

```php
<?php
$names = ["Andy", "Betty", "Carol"];
$names[] = "Dave";

echo count($names);
```

プログラムを実行してみましょう。

```
$ php array5_2.php
4
```

上記の結果から要素数が`4`となっていることがわかります。






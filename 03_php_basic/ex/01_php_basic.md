# 演習

## ex_basic01.php

メッセージを出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

### 結果

```
Hello World!
```

### プログラム

```
<?php
echo "H____ W_____";
```

<details>
<summary>解答</summary>

```
<?php
echo "Hello World!";
```

echo命令で文字列を出力します。文字列データは`""`ダブルクォーテーションで囲みます。
</details>


---

## ex_basic02.php

メッセージを出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

### 結果

```
HelloAndy
```

### プログラム

```
<?php
echo "Hello";
echo "A___";
```

<details>
<summary>解答</summary>

```
<?php
echo "Hello";
echo "Andy";
```
</details>

---


## ex_basic03.php

メッセージを出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

### 結果

```
Hello Andy
```

> Helloの後に半角スペースがあります。

### プログラム

```
<?php
echo "H____ ";
echo "A___";
```


<details>
<summary>解答</summary>

```
<?php
echo "Hello ";
echo "Andy";
```

スペースを出力する場合は文字列データ（""）の中にスペースを含むようにします。次のように実装しても構いません。


```
<?php
echo "Hello";
echo " ";
echo "Andy";
```

</details>

---


## ex_basic04.php

メッセージを出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

### 結果

```
Hello
Andy
```

> Helloの後に改行があります。

### プログラム

```
<?php
echo "H____" . PHP_EOL;
echo "A___";
```

<details>
<summary>解答</summary>

```
<?php
echo "Hello" . PHP_EOL;
echo "Andy";
```

改行はPHP_EOL定数で表現します。文字列データに改行を付与する場合はドット`.`演算子でPHP_EOL定数をつなぐようにします。

> `.`演算子は文字列データを結合します。詳細については後述します。

</details>

---

## ex_basic05.php

数値を出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

### 結果


```
1
2
3
```

### プログラム

```
<?php
echo 1 . P______;
echo _ . P______;
echo _ . P______;
```

<details>
<summary>解答</summary>

```
<?php
echo 1 . PHP_EOL;
echo 2 . PHP_EOL;
echo 3 . PHP_EOL;
```

数値のみで構成されるデータは`""`ダブルクォーテーションで囲む必要はありません。

</details>

---

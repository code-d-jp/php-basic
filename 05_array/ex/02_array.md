# 演習

## ex_array06.php

合計金額を出力するプログラムを作成します。
次の処理手順に従って、結果のとおり出力するプログラムを作成してください。

### 結果

```
TOTAL:300
```

### 処理手順

+ 配列$pricesを宣言し[100, 200]を代入します。
+ $prices[0]と$prices[1]の合計を求めて変数$totalに代入します。
+ echo命令で"TOTAL:"を出力します。
+ echo命令で$totalを出力します。


<details>
<summary>解答</summary>

```
<?php
$prices = [100, 200];
$total = $prices[0] + $prices[1];
echo "TOTAL:";
echo $total;
```

</details>

---


## ex_array07.php

合計金額を出力するプログラムを作成します。
次の処理手順に従って、結果のとおり出力するプログラムを作成してください。

### 結果

```
TOTAL:600
```

### 処理手順

+ 配列$pricesを宣言し[100, 200, 300]を代入します。
+ 配列$pricesの要素の合計を求めて変数$totalに代入します。
+ echo命令で"TOTAL:"を出力します。
+ echo命令で$totalを出力します。


<details>
<summary>解答</summary>

```
<?php
$prices = [100, 200, 300];
$total = $prices[0] + $prices[1] + $prices[2];
echo "TOTAL:";
echo $total;
```

</details>

---

## ex_array08.php

平均金額を出力するプログラムを作成します。
次の処理手順に従って、結果のとおり出力するプログラムを作成してください。

### 結果

```
AVERAGE:200
```

### 処理手順

+ 配列$pricesを宣言し[100, 200, 300]を代入します。
+ 配列$pricesの要素の平均を求めて出力します。

<details>
<summary>解答</summary>

```
<?php
$prices = [100, 200, 300];
$total = $prices[0] + $prices[1] + $prices[2];
$average = $total / 3;
echo "AVERAGE:";
echo $average;
```

</details>
---


## ex_array09.php

配列を出力するプログラムを作成します。
次の処理手順に従って、結果のとおり出力するプログラムを作成してください。

### 結果

```
array(3) {
  [0]=>
  string(5) "Apple"
  [1]=>
  string(6) "Banana"
  [2]=>
  string(6) "Orange"
}
```

### 処理手順

+ 配列$fruitsを宣言し["Apple", "Banana"]を代入します。
+ 配列$fruitsに"Orange"を追加します。
+ var_dump関数で配列$fruitsを出力します。

<details>
<summary>解答</summary>

```
<?php
$fruits = ["Apple", "Banana"];
$fruits[] = "Orange";
var_dump($fruits);
```

</details>

---


## ex_array10.php

配列の要素数を出力するプログラムを作成します。
次の処理手順に従って、結果のとおり出力するプログラムを作成してください。

### 結果

```
3
```

### 処理手順

+ 配列$fruitsを宣言し["Apple", "Banana", "Orange"]を代入します。
+ 配列の要素数を出力します。

> 配列の要素数を出力するにはcount関数を使います。

<details>
<summary>解答</summary>

```
<?php
$fruits = ["Apple", "Banana", "Orange"];
echo count($fruits);
```

</details>

---

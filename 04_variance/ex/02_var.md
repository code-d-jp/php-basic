# 演習

## ex_var06.php

メッセージを出力するプログラムを作成します。
次の処理手順に従って、結果のとおり出力するプログラムを作成してください。

### 結果

```
Hello Andy
```

### 処理手順

+ 変数$messageを宣言し、"Hello "を代入します。
+ 変数$nameを宣言し、"Andy"を代入します。
+ echo命令で$messageを出力します。
+ echo命令で$nameを出力します。


<details>
<summary>解答</summary>

```
<?php
$message = "Hello ";
$name = "Andy";
echo $message;
echo $name;
```

</details>

---


## ex_var07.php

果物の価格を出力するプログラムを作成します。
次の処理手順に従って、結果のとおり出力するプログラムを作成してください。

### 結果

```
PRICE:300
```

### 処理手順

+ 変数$appleを宣言し、100を代入します。
+ 変数$countを宣言し、3を代入します。
+ 変数$appleと$countを掛け算し、変数$priceに代入します。
+ echo命令で"PRICE:"を出力します。
+ echo命令で$priceを出力します。

<details>
<summary>解答</summary>

```
<?php
$apple = 100;
$count = 3;
$price = 100 * 3;
echo "PRICE:";
echo price;
```

</details>

---


## ex_var08.php

果物の価格（税込み）を出力するプログラムを作成します。
次の処理手順に従って、結果のとおり出力するプログラムを作成してください。

### 結果

```
PRICE:324
```

> ex_var07.phpの問題に税率（1.08）を掛けた値を出力します。

### 処理手順

+ 変数$appleを宣言し、100を代入します。
+ 変数$countを宣言し、3を代入します。
+ 変数$appleと$countを掛け算し、変数$priceに代入します。
+ 変数$taxを宣言し、1.08を代入します。
+ 変数$priceと$taxを掛け算し、変数$priceに代入します。
+ echo命令で"PRICE:"を出力します。
+ echo命令で$priceを出力します。

<details>
<summary>解答</summary>

```
<?php
$apple = 100;
$count = 3;
$price = 100 * 3;
$tax = 1.08;
$price = 100 * $tax;
echo "PRICE:";
echo price;
```

</details>

---


## ex_var09.php

書籍の合計金額を出力するプログラムを作成します。
次の処理手順に従って、結果のとおり出力するプログラムを作成してください。

### 結果

```
TOTAL:6000
```

> ex_var07.phpの問題に税率（1.08）を掛けた値を出力します。

### 処理手順

+ 変数$php_bookを宣言し、3000を代入します。
+ 変数$html_bookを宣言し、1000を代入します。
+ 変数$css_bookを宣言し、2000を代入します。
+ 3つの変数（$php_book、$html_book、$css_book）の合計を出力します。

<details>
<summary>解答</summary>

```
<?php
$php_book = 3000;
$html_book = 1000;
$css_book = 2000;
$total = $php_book + $html_book + $css_book;
echo "TOTAL:" . $total;
```

</details>

---


## ex_var10.php

書籍の合計金額（税込み）を出力するプログラムを作成します。
次の処理手順に従って、結果のとおり出力するプログラムを作成してください。

### 結果

```
TOTAL:6480
```

> ex_var07.phpの問題に税率（1.08）を掛けた値を出力します。

### 処理手順

+ 変数$php_bookを宣言し、3000を代入します。
+ 変数$html_bookを宣言し、1000を代入します。
+ 変数$css_bookを宣言し、2000を代入します。
+ 変数$taxを宣言し、1.08を代入します。
+ 3つの変数（$php_book、$html_book、$css_book）の合計を求め、$taxを掛け算した結果を出力します。

<details>
<summary>解答</summary>

```
<?php
$php_book = 3000;
$html_book = 1000;
$css_book = 2000;
$total = $php_book + $html_book + $css_book;
$total = $total * $tax;
echo "TOTAL:" . $total;
```

</details>

---

# 演習

## ex_loop11.php

1〜9までの合計を出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

> for文を使います。

### 結果

```
45
```

### プログラム

```
<?php
$total = 0;

for ($i = 1; $i <= 9; $i++) {
  $total = $_____ + $_;
}

echo $total;
```

<details>
<summary>解答</summary>

```
<?php
$total = 0;

for ($i = 1; $i <= 9; $i++) {
  $total = $total + $i;
}

echo $total;
```

</details>

---

## ex_loop12.php

1〜10までの合計を出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

> for文を使います。

### 結果

```
55
```

### プログラム

```
<?php
$total = 0;

?

echo $total;
```

<details>
<summary>解答</summary>

```
<?php
$total = 0;

for ($i = 1; $i <= 10; $i++) {
  $total = $total + $i;
}

echo $total;
```

</details>

---


## ex_loop13.php

配列の要素を出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

> for文を使います。

### 結果

```
100
200
300
```

### プログラム

```
<?php
$prices = [100, 200, 300];

for ($i = _; $i < _; $i++) {
  echo $______[$_] . PHP_EOL;
}
```

<details>
<summary>解答</summary>

```
<?php
$prices = [100, 200, 300];

for ($i = 0; $i < 3; $i++) {
  echo $prices[$i] . PHP_EOL;
}
```

</details>

---


## ex_loop14.php

配列の要素の合計値を出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

> for文を使います。

### 結果

```
600
```

### プログラム

```
<?php
$prices = [100, 200, 300];
$total = 0;

for ($i = _; $i < c____($______); $i++) {
  $total = $____ + $______[$_];
}

echo $total;
```

<details>
<summary>解答</summary>

```
<?php
$prices = [100, 200, 300];
$total = 0;

for ($i = 0; $i < count($prices); $i++) {
  $total = $total + $prices[$i];
}

echo $total;
```

</details>

---

## ex_loop15.php

配列の要素の平均値を出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

> for文を使います。

### 結果

```
200
```

### プログラム

```
<?php
$prices = [100, 200, 300];
$total = 0;

for ($i = _; $i < c____($_____); $i++) {
  $total = $____ + $______[$_];
}

echo $total;
```

<details>
<summary>解答</summary>

```
<?php
$prices = [100, 200, 300];
$total = 0;

for ($i = 0; $i < count($prices); $i++) {
  $total = $total + $prices[$i];
}

$average = $total / count(prices);

echo $average;
```

</details>

---

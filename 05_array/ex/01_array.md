# 演習

## ex_array01.php

カラーネームを出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

### 結果

```
Green
```

### プログラム

```
<?php
$colors = ["Red", "Green", "Blue"];
echo $______[_];
```

<details>
<summary>解答</summary>

```
<?php
$colors = ["Red", "Green", "Blue"];
echo $colors[1];
```

</details>

---


## ex_array02.php

カラーネームを出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

### 結果

```
Blue
Green
Red
```

### プログラム

```
<?php
$colors = ["Red", "Green", "Blue"];
echo $______[_] . PHP_EOL;
echo $______[_] . PHP_EOL;
echo $______[_] . PHP_EOL;
```

<details>
<summary>解答</summary>

```
<?php
$colors = ["Red", "Green", "Blue"];
echo $colors[2] . PHP_EOL;
echo $colors[1] . PHP_EOL;
echo $colors[0] . PHP_EOL;
```

</details>

---

## ex_array03.php

カラーネームを出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

### 結果

```
Red
Green
Yellow
```

### プログラム

```
<?php
$colors = ["Red", "Green", "Blue"];

?

echo $colors[0] . PHP_EOL;
echo $colors[1] . PHP_EOL;
echo $colors[2] . PHP_EOL;
```

<details>
<summary>解答</summary>

```
<?php
$colors = ["Red", "Green", "Blue"];
$colors[2] = "Yellow";
echo $colors[0] . PHP_EOL;
echo $colors[1] . PHP_EOL;
echo $colors[2] . PHP_EOL;
```

</details>
---


## ex_array04.php

カラーネームを出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

### 結果

```
Red
Green
Blue
Yellow
```

### プログラム

```
<?php
$colors = ["Red", "Green", "Blue"];

?

echo $colors[0] . PHP_EOL;
echo $colors[1] . PHP_EOL;
echo $colors[2] . PHP_EOL;
echo $colors[3] . PHP_EOL;
```

<details>
<summary>解答</summary>

```
<?php
$colors = ["Red", "Green", "Blue"];
$colors[] = "Yellow";
echo $colors[0] . PHP_EOL;
echo $colors[1] . PHP_EOL;
echo $colors[2] . PHP_EOL;
echo $colors[3] . PHP_EOL;
```
</details>

---


## ex_array05.php

カラーネームを出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

### 結果

```
Red
Blue
```

### プログラム

```
<?php
$colors = ["Red", "Green", "Blue"];
?
echo $colors[0] . PHP_EOL;
echo $colors[1] . PHP_EOL;
```

> 要素の削除にはarray_splice関数を使います。

<details>
<summary>解答</summary>

```
<?php
$colors = ["Red", "Green", "Blue"];
array_splice($colors, 1, 1);
echo $colors[0] . PHP_EOL;
echo $colors[1] . PHP_EOL;
```
</details>

---

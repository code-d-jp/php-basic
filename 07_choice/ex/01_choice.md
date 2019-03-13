# 演習

## ex_loop01.php

0〜2まで出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

> while文を使います。

### 結果

```
0
1
2
3
```

### プログラム

```
<?php
$i = _;
while ($i < _) {
  echo $i . PHP_EOL;
  ?
}
```

<details>
<summary>解答</summary>

```
<?php
$i = 0;
while ($i < 3) {
  echo $i . PHP_EOL;
  $i++;
}
```

</details>

---


## ex_loop02.php

1〜5まで出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

> while文を使います。

### 結果

```
1
2
3
4
5
```

### プログラム

```
<?
$i = 0;
?
```

<details>
<summary>解答</summary>

```
<?php
$i = 1;
while ($i < 6) {
  echo $i . PHP_EOL;
  $i++;
}
```

</details>

---


## ex_loop03.php

メッセージを出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

> while文を使います。

### 結果

```
"Hello"
"Hello"
"Hello"
```

### プログラム

```
<?php
$i = 0;
while ($i < 3) {
  echo "_____" . PHP_EOL;
  $i++;
}
```

<details>
<summary>解答</summary>

```
<?php
$i = 0;
while ($i < 3) {
  echo "Hello" . PHP_EOL;
  $i++;
}
```

</details>

---


## ex_loop04.php

メッセージを出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

> while文を使います。

### 結果

```
"Hello:1"
"Hello:2"
"Hello:3"
```

### プログラム

```
<?php
$i = 1;
while ($i <= 3) {
  echo "______" . $_ . PHP_EOL;
  $i++;
}
```

<details>
<summary>解答</summary>

```
<?php
$i = 1;
while ($i <= 3) {
  echo "Hello:" . $i . PHP_EOL;
  $i++;
}
```

</details>

---


## ex_loop05.php

メッセージを出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

> while文を使います。

### 結果

```
"Hello:3"
"Hello:2"
"Hello:1"
```

### プログラム

```
<?php
?
```

<details>
<summary>解答</summary>

```
<?php
$i = 3;
while ($i >= 1) {
  echo "Hello:" . $i . PHP_EOL;
  $i--;
}
```

</details>

---

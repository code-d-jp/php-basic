# 演習

## ex_loop06.php

0〜2まで出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

> for文を使います。

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
for ($i = _; $i < _; $i__) {
  echo $i . PHP_EOL;
}
```

<details>
<summary>解答</summary>

```
<?php
for ($i = 0; $i < 4; $i++) {
  echo $i . PHP_EOL;
}
```

</details>

---


## ex_loop07.php

1〜5まで出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

> for文を使います。

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
<?php
?
```

<details>
<summary>解答</summary>

```
<?php
for ($i = 1; $i < 6; $i++) {
  echo $i . PHP_EOL;
}
```

</details>

---


## ex_loop08.php

メッセージを出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

> for文を使います。


### 結果

```
"Hello"
"Hello"
"Hello"
```

### プログラム

```
<?php
for ($i = _; $i < _; $i++) {
  echo "_____" . PHP_EOL;  
}
```

<details>
<summary>解答</summary>

```
<?php
for ($i = 0; $i < 3; $i++) {
  echo "Hello" . PHP_EOL;  
}
```

</details>

---


## ex_loop09.php

メッセージを出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

> for文を使います。

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
for ($i = 1; $i <= 3; $i++) {
  echo "______" . $_ . PHP_EOL;
}
```

</details>

---


## ex_loop10.php

メッセージを出力するプログラムを作成します。
次の結果のとおり出力するプログラムを作成してください。

> for文を使います。

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
for ($i = 3; $i >= 1; $i--) {
  echo "Hello:" . $i . PHP_EOL;
}
```

</details>

---

<?php
// 以下をfor文を使用して表示してください。

// 6
// 54
// 321

$num = 6;

for ($i = 1; $i <= 3; $i++) {
    for ($j = $i; $j >= 1; $j--) {
        echo $num;
        $num--;
    }
    echo '<br>';
}

<?php
// 以下をfor文を使用して表示してください。

// 987
// 654
// 321

for ($i = 9; $i >= 3; $i -= 3) {
    for ($j = $i; $j > $i - 3; $j--) {
        echo $j;
    }
    echo '<br>';
}

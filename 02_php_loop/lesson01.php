﻿<?php
// 以下をfor文を使用して表示してください。

// 1
// 21
// 321

for ($i = 1; $i <= 3; $i++) {
    for ($j = $i; $j >= 1; $j--) {
        echo $j;
    }
    echo '<br>';
}

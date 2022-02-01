<?php
// 以下配列の中身をfor文を使用して表示してください。
// 表示はHTMLの<table>タグを使用すること

/**
 * 表示イメージ
 *  _________________________
 *  |_____|_c1|_c2|_c3|横合計|
 *  |___r1|_10|__5|_20|___35|
 *  |___r2|__7|__8|_12|___27|
 *  |___r3|_25|__9|130|__164|
 *  |縦合計|_42|_22|162|__226|
 *  ‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾
 */

$arr = [
    'r1' => ['c1' => 10, 'c2' => 5, 'c3' => 20],
    'r2' => ['c1' => 7, 'c2' => 8, 'c3' => 12],
    'r3' => ['c1' => 25, 'c2' => 9, 'c3' => 130]
];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>テーブル表示</title>
    <style>
        table {
            border: 1px solid #000;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
        }
    </style>
</head>

<body>
    <!-- ここにテーブル表示 -->
    <table>
        <tr>
            <th></th>
            <th>c1</th>
            <th>c2</th>
            <th>c3</th>
            <th>横合計</th>
        </tr>
        <!-- 横合計の行 -->
        <?php for ($row = 1; $row <= 3; $row++) : ?>
            <tr>
                <td>
                    <?php
                    echo 'r' . $row
                    ?>
                </td>
                <?php $sumRow = 0 //横合計」の値を初期化
                ?>
                <?php for ($col = 1; $col <= 3; $col++) : ?>
                    <td>
                        <?php
                        echo $arr['r' . $row]['c' . $col];
                        $sumRow += $arr['r' . $row]['c' . $col]; //横合計を計算
                        ?>
                    </td>
                <?php endfor ?>
                <td><?php echo $sumRow ?></td>
            </tr>
        <?php endfor ?>
        <!-- 「横合計」の行終了 -->
        <!-- 「縦合計」の列 -->
        <tr>
            <td>縦合計</td>
            <?php $ttl = 0 // 合計の値を初期化 
            ?>
            <?php for ($col = 1; $col <= 3; $col++) : ?>
                <?php $sumCol = 0 //縦合計の値を初期化 
                ?>
                <td>
                    <?php for ($row = 1; $row <= 3; $row++) : ?>
                        <?php
                        $sumCol += $arr['r' . $row]['c' . $col]; //縦合計を計算
                        ?>
                    <?php endfor ?>
                    <?php
                    echo $sumCol;
                    $ttl += $sumCol; //縦合計の値を加算
                    ?>
                </td>
            <?php endfor ?>
            <td><?php echo $ttl ?></td>
        </tr>
        <!-- 「縦合計」の列終了 -->
    </table>
</body>

</html>
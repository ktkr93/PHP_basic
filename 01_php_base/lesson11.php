<?php
date_default_timezone_set('Asia/Tokyo');
// 以下をそれぞれ表示してください。
// 表示するタイミングによって自動で算出すること
// ・現在日時（yyyy年mm月dd日 H時i分s秒）
echo '・現在日時（yyyy年mm月dd日 H時i分s秒）：' . date('Y年m月d日 H時i分s秒');
echo '<br>';

// ・現在日時から３日後
echo '・現在日時から３日後：' . date('Y年m月d日 H時i分s秒', strtotime("+3 day"));
echo '<br>';

// ・現在日時から１２時間前
echo '・現在日時から１２時間前：' . date('Y年m月d日 H時i分s秒', strtotime("-12 hour"));
echo '<br>';

// ・2020年元旦から現在までの経過日数
$timeNow = new DateTime();
$timeBefore = new DateTime('2020-01-01 00:00:00');
$diff = $timeBefore->diff($timeNow);

echo '・2020年元旦から現在までの経過日数：' . $diff->format('%R %y年 %mヶ月 %d日 %h時間 %i分 %s秒');

// 日時がおかしい場合、PHPのタイムゾーン設定を行ってください

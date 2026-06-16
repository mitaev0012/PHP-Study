<?php

// 配列を引数として受け取り、その配列内の数値の平均値を計算して返す関数を完成させなさい

$values = array(1, 2, 3, 4, 5);
$result = average($values);
echo "平均値: " . $result . "\n";

// ↓確認用コード↓(編集しないこと)ph
$values = array(1, 2, 3, 4, 5);

if (average($values) === 3) {
    echo("テスト1:OK\n");
} else {
    echo("テスト1:NG\n");
}

$values = array(0);

if (average($values) === 0) {
    echo("テスト2:OK\n");
} else {
    echo("テスト2:NG\n");
}

$values = array(10, -10);

if (average($values) === 0) {
    echo("テスト3:OK\n");
} else {
    echo("テスト3:NG\n");
}
// ↑確認用コード↑(編集しないこと)

// ここにコードを追記
function average($values) {
    return array_sum($values) / count($values);
}

<?php

// 引数として受け取った数値を2倍にして返す関数を完成させなさい。

// ↓確認用コード↓(編集しないこと)
if (double(2) === 4) {
    echo("テスト1:OK\n");
} else {
    echo("テスト1:NG\n");
}

if (double(0) === 0) {
    echo("テスト2:OK\n");
} else {
    echo("テスト2:NG\n");
}

if (double(-2) === -4) {
    echo("テスト3:OK\n");
} else {
    echo("テスト3:NG\n");
}

// ↑確認用コード↑(編集しないこと)

// ここにコードを追記
function double($num) {
return ($num * 2);
}
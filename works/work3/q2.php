<?php

// 引数として受け取った2つの数値を掛け算して返す関数を完成させなさい

// ↓確認用コード↓(編集しないこと)
if (multiply(2,2) === 4) {
    echo("テスト1:OK\n");
} else {
    echo("テスト1:NG\n");
}

if (multiply(-2,-2) === 4) {
    echo("テスト2:OK\n");
} else {
    echo("テスト2:NG\n");
}

if (multiply(2,0) === 0) {
    echo("テスト3:OK\n");
} else {
    echo("テスト3:NG\n");
}

// ↑確認用コード↑(編集しないこと)

// ここにコードを追記
function multiply($num1,$num2) {
    return ($num1 * $num2);
}


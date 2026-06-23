<?php

// 以下の関数に型宣言(引数・戻り値)を追加して完成させなさい。
// 整数の配列を受け取り、全て正の数(0より大きい)であればtrue、そうでなければfalseを返す関数

// ↓確認用コード↓(編集しないこと)
if (isAllPositive(array(1, 2, 3)) === true) {
    echo ("テスト1:OK\n");
} else {
    echo ("テスト1:NG\n");
}

if (isAllPositive(array(1, -2, 3)) === false) {
    echo ("テスト2:OK\n");
} else {
    echo ("テスト2:NG\n");
}

if (isAllPositive(array(0)) === false) {
    echo ("テスト3:OK\n");
} else {
    echo ("テスト3:NG\n");
}
// ↑確認用コード↑(編集しないこと)

// TODO: 引数と戻り値に型を付けて完成させなさい
function isAllPositive(array $numbers)
{
    foreach ($numbers as $num) {
        if ($num <= 0) {
            return false;
        }
    }
    return true;
}

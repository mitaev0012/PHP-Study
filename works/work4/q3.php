<?php
declare(strict_types=1);

// strict_typesが有効な状態で、以下の関数に型宣言を追加して完成させなさい。
// 小数(float)を受け取り、小数点以下を切り捨てた整数(int)を返す関数

// ↓確認用コード↓(編集しないこと)
if (truncate(3.7) === 3) {
    echo("テスト1:OK\n");
} else {
    echo("テスト1:NG\n");
}

if (truncate(-2.5) === -2) {
    echo("テスト2:OK\n");
} else {
    echo("テスト2:NG\n");
}

if (truncate(0.0) === 0) {
    echo("テスト3:OK\n");
} else {
    echo("テスト3:NG\n");
}
// ↑確認用コード↑(編集しないこと)

// TODO: 引数と戻り値に型を付けて完成させなさい
function truncate(float $value):int 
 {
    return (int)$value;
}

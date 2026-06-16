<?php

// 以下の関数に型宣言(引数・戻り値)を追加して完成させなさい。
// 名前(string)と年齢(int)を受け取り、「○○さんは○○歳です」という文字列を返す関数

// ↓確認用コード↓(編集しないこと)
if (introduce("田中", 20) === "田中さんは20歳です") {
    echo("テスト1:OK\n");
} else {
    echo("テスト1:NG\n");
}

if (introduce("佐藤", 0) === "佐藤さんは0歳です") {
    echo("テスト2:OK\n");
} else {
    echo("テスト2:NG\n");
}
// ↑確認用コード↑(編集しないこと)

// TODO: 引数と戻り値に型を付けて完成させなさい
function introduce(string $name, string $age): string 
 {
    return $name . "さんは" . $age . "歳です";
}

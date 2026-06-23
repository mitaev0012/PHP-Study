<?php

declare(strict_types=1);

// strict_typesが有効な状態で以下のコードを実行するとエラーになります。
// エラーにならないように修正しなさい。(関数の型宣言は変更しないこと)

function multiply(int $a, int $b): int
{
    return $a * $b;
}

// TODO: 以下のコードを修正してエラーを解消しなさい
$result = multiply(3, 4);
echo "結果: " . $result . "\n";

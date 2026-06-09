<?php
// 配列の全ての要素を2倍にして表示するコードを記述してください(for文を使うこと)
$numbers = array(1, 2, 3, 4, 5);
for ($i = 0; $i < count($numbers); $i++) {

    $num = $numbers[$i] * 2;
    echo "$num\n";
}

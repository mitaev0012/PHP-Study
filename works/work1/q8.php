<?php
//変数 score の値に応じて成績を表示するコードを書いてください。
//80以上: 「優秀です」
//60以上80未満: 「合格です」
//60未満: 「不合格です」
$score = 75;

// TODO: ここにコードを追記
echo $score;
if ($score > 80) {
    echo "優秀です\n";
} elseif ($score < 60) {
    echo "不合格です\n";
} else {
    echo "合格です\n";
}

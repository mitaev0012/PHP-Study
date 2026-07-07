<?php

// Userクラスの読み込み
require 'User.php';

$mainUser = new User(1111, "田中", 21, "");
$subUser = new User(2222, "伊藤", 21, "大阪");

showUserStatus($mainUser);
showUserStatus($subUser);

$mainUser->setName("佐藤");
$mainUser->setAge(30);
$mainUser->getOlder();

showUserStatus($mainUser);
//showUserStatus($subUser);


// バリデーションの確認用(問題2ができたら以下のコメントを外して実行してみよう)
//$mainUser->setAge(-5);   // "不正な年齢です" と表示されるはず
//$mainUser->setAge(200);  // "不正な年齢です" と表示されるはず
//showUserStatus($mainUser); // 年齢は30のまま変わらないはず

function showUserStatus(User $user): void
{
    echo "========ユーザー情報========" . "\n";
    echo "ID: " . $user->getId() . "\n";
    echo "名前: " . $user->getName() . "\n";
    echo "年齢: " . $user->getAge() . "\n";
    echo "住所: " . $user->getaddress() . "\n";
}

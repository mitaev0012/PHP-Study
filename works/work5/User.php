<?php
class User
{

    // ↓フィールド============================
    private int $id;
    private string $name;
    private int $age;
    private string $address;

    // ↑フィールド============================

    // コンストラクタ
    function __construct(int $id, string $name, int $age, string $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    // idを取得
    function getId(): int
    {
        return $this->id;
    }

    // 住所を変更
    function setAddress(string $address): void
    {
        if ($address === "") {
            echo "住所を空にできません";
            return;
        }

        $this->address = $address;
    }

    //　住所を取得
    function getAddress(): string
    {
        return $this->address;
    }

    // 名前を変更
    function setName(string $name): void
    {
        $this->name = $name;
    }

    // 名前を取得
    function getName(): string
    {
        return $this->name;
    }

    // 年齢を変更(問題2: バリデーションを追加すること)
    function setAge(int $age): void
    {
        if ($age < 0 || $age > 150) {
            echo "不正な年齢です\n";
            return;
        }
        $this->age = $age;
    }

    // 年齢を取得
    function getAge(): int
    {
        return $this->age;
    }

    // 問題3
    function getOlder(): void
    {
        if ($this->age < 150) {
            $this->age++;
        }
    }
}

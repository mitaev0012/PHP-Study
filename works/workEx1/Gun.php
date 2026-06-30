<?php
class Gun
{

    // ↓フィールド============================
    // 銃の名前
    private string $name;
    // 最大装弾数
    private int $maxMagazine;
    // 残弾
    private int $currentMagazine;
    // ↑フィールド============================
    private int $setExtendedMagazine;

    // コンストラクタ
    function __construct($name, $maxMagazine)
    {
        // 問題
        $this->name = $name;
        $this->maxMagazine = $maxMagazine;
        $this->currentMagazine = 0;
        $this->setExtendedMagazine = 0;
    }

    // 現在の状態を表示
    function echoStatus()
    {
        echo "======現在の状態======" . "\n";
        echo "武器名: " . $this->name . "\n";
        echo "最大装弾数: " . $this->maxMagazine . "\n";
        echo "残弾数: " . $this->currentMagazine . "\n";
        echo "======================" . "\n";
    }

    // リロード
    function reload()
    {
        if ($this->currentMagazine === $this->maxMagazine) {
            echo "リロードは必要ありません\n";
            return;
        }

        $this->currentMagazine = $this->maxMagazine;
        // 問題2
    }

    // 発砲
    function fire()
    {
        if ($this->currentMagazine === 0) {
            echo "リロードしてください\n";
            return;
        }
        $this->currentMagazine--;
        echo $this->name . "を発砲しました。残弾" . $this->currentMagazine . "発\n";
        if ($this->currentMagazine === 0) {
            echo "リロードしてください\n";
        }
        // 問題3
    }

    // 拡張マガジンを装着
    function setExtendedMagazine($tama)
    {
        if ($tama <= 0) {
            echo "引数が不正です";
            return;
        }
        $this->maxMagazine += $tama;
        $this->setExtendedMagazine += $tama;


        // 問題4
    }

    // 拡張マガジンを取外し
    function unsetExtendedMagazine()
    {
        if ($this->setExtendedMagazine === 0) {
            echo "拡張マガジンは装着されていません\n";
            return;
        }
        $this->maxMagazine -= $this->setExtendedMagazine;
        $this->setExtendedMagazine = 0;

        if ($this->currentMagazine > $this->maxMagazine) {
            $this->reload();
        }
        // 問題4
    }
}

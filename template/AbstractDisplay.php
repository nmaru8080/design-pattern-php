<?php

namespace DesignPattern\Template;

/**
 * AbstractClass クラスに相当する
 * テンプレートメソッドパターンの抽象クラス
 */
abstract class AbstractDisplay {

    /**
     * 表示するデータ
     * @var array
     */
    private array $data;

    /**
     * コンストラクタ
     * @param mixed $data 表示するデータ
     */
    public function __construct(mixed $data) {
        if (!is_array($data)) {
            $data = [$data];
        }
        $this->data = $data;
    }
    
    /**
     * template methodに相当する
     * 表示処理のテンプレートメソッド
     * @return void
     */
    public function display(): void {
        $this->displayHeader();
        $this->displayBody();
        $this->displayFooter();
    }

    /**
     * データを取得する
     * @return array 表示するデータ
     */
    public function getData(): array {
        return $this->data;
    }

    /**
     * ヘッダーを表示する
     * サブクラスに実装を任せる抽象メソッド
     * @return void
     */
    abstract protected function displayHeader(): void;

    /**
     * ボディ(クライアントから渡された内容)を表示する
     * サブクラスに実装を任せる抽象メソッド
     * @return void
     */
    abstract protected function displayBody(): void;

    /**
     * フッターを表示する
     * サブクラスに実装を任せる抽象メソッド
     * @return void
     */
    abstract protected function displayFooter(): void;
}
<?php

namespace DesignPattern\Template;

require_once 'AbstractDisplay.php';

/**
 * ConcreateClass クラスに相当する
 */
class ListDisplay extends AbstractDisplay {

    /**
     * ヘッダを表示する
     */
    protected function displayHeader(): void {
        echo '<dl>';
    }

    /**
     * ボディ(クライアントから渡された内容)を表示する
     */
    protected function displayBody(): void {
        foreach ($this->getData() as $key => $value) {
            echo '<dt>Item ' . $key . '</dt>';
            echo '<dd>' . $value . '</dd>';
        }
    }

    /**
     * フッタを表示する
     */
    protected function displayFooter(): void {
        echo '</dl>';
    }
}
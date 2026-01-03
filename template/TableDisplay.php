<?php

namespace DesignPattern\Template;

require_once 'AbstractDisplay.php';

/**
 * ConcreateClass クラスに相当する
 */
class TableDisplay extends AbstractDisplay {

    /**
     * ヘッダを表示する
     */
    protected function displayHeader(): void {
        echo '<table border="1" cellpadding="2" cellspacing="2">';
    }

    /**
     * ボディ(クライアントから渡された内容)を表示する
     */
    protected function displayBody(): void {
        foreach ($this->getData() as $key => $value) {
            echo '<tr>';
            echo '<th>' . $key . '</th>';
            echo '<td>' . $value . '</td>';
            echo '</tr>';
        }
    }

    /**
     * フッタを表示する
     */
    protected function displayFooter(): void {
        echo '</table>';
    }
}
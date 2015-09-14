<?php

namespace app\components\widgets;

use yii\base\Widget;
use yii\helpers\HTML;

class Popup extends Widget {
    public $title;
    public $content;
    public $contentParams = [];
    public $hidden = true;

    public function init() {
        if (!$this->hidden) {
            $this->view->registerJs("$('#{$this->id}').arcticmodal()");
        }
    }

    public function run() {
        ob_start();
        echo HTML::beginTag('div', ['style' => 'display: none;']);
        echo HTML::beginTag('div', ['id' => $this->id, 'class' => 'modal']);
        echo HTML::tag('div', $this->title, ['class' => 'title']);
        echo $this->view->render($this->content, $this->contentParams);
        echo HTML::endTag('div');
        echo HTML::endTag('div');
        return ob_get_clean();
    }
}
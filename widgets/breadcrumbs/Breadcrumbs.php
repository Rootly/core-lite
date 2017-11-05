<?php


namespace core\widgets\breadcrumbs;


use core\base\Widget;
use core\web\Html;

class Breadcrumbs extends Widget
{
    private $_elements = [];

    public function init(){
        $this->_elements = $this->_config;
    }

    public function run()
    {
        ob_start();
        ob_implicit_flush(false);
        echo Html::startTag('ol', ['class' => 'breadcrumbs']);
        foreach ($this->_elements as $key => $url){
            echo "<li><a href=\"$url\">$key</a></li>";
        }
        echo Html::endTag('ol');
        return ob_get_clean();
    }
}
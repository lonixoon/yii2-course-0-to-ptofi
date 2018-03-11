<?php
/**
 * Created by PhpStorm.
 * User: RUS9211689
 * Date: 11.03.2018
 * Time: 11:32
 */

namespace app\components;

use yii\base\Widget;

class MyWidget extends Widget
{
    public $name;

    public function init()
    {
        parent::init();
        // пример просто виджета 1
//        if ($this->name === null) $this->name = 'Гость';

        // пример просто виджета 2
//        ob_start();
    }

    public function run()
    {
        // пример просто виджета 1
//        return "<h1>{$this->name}, привет МИРР</h1>";
//        return $this->render('my', ['name' => $this->name]);

        // пример просто виджета 2
//        $content = ob_get_clean();
//        $content = mb_strtoupper($content);
//        return $this->render('my', compact('content'));
    }
}
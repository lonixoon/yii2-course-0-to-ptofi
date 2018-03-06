<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 06.03.2018
 * Time: 17:58
 */

namespace app\controllers;

use Yii;

class PostController extends AppController
{
    public function actionTest1()
    {
        $names = ['Иванов', 'Петров', 'Сидоров'];
        dump($names);
        return $this->render('test1', [
            'names' => $names,
        ]);
    }
}
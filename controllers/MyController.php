<?php

namespace app\controllers;

//use yii\web\Controller;


class MyController extends AppController
{
    public function actionIndex($id = null)
    {
        $hello = 'Hello World';
        $names = ['Иванов', 'Петров', 'Сидоров'];
        if (!$id) {
            $id = 'test';
        }

        return $this->render('index', [
            'hello' => $hello,
            'names' => $names,
            'id' => $id,
        ]);
    }

    public function actionBlogPost()
    {
        return 'Блог';
    }
}
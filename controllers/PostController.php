<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 06.03.2018
 * Time: 17:58
 */

namespace app\controllers;

use Yii;
use app\models\TestForm;

class PostController extends AppController
{
    // устанавливаем отдельный шаблон для конекретного класса
    public $layout = 'basic';

    // если не требуется csrf защита на отправляемый action
    public  function beforeAction($action)
    {
        if ($action->id == 'index') {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        $this->view->title = 'Все статьи';
        // проверка на аякс запрос
        if (Yii::$app->request->isAjax) {
            print_r(Yii::$app->request->post());
        }

        $model = new TestForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }


        return $this->render('index', compact('model'));
    }



    public function actionShow()
    {
        // устанавливаем отдельный шаблон для конкретной страницы
//        $this->layout = 'basic';

        // передаём загаловок на страницу
        $this->view->title = 'Статья';
        // передаём метатеги
        $this->view->registerMetaTag([
            'name' => 'keywords',
            'content' => 'ключивые теги',
        ]);
        $this->view->registerMetaTag([
            'name' => 'description',
            'content' => 'описание страницы',
        ]);

        return $this->render('show');
    }
}
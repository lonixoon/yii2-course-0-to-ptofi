<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 06.03.2018
 * Time: 17:58
 */

namespace app\controllers;

use app\models\Category;
use Yii;
use app\models\TestForm;
use yii\data\ActiveDataProvider;

class PostController extends AppController
{
    // устанавливаем отдельный шаблон для конекретного класса
    public $layout = 'basic';

    // если не требуется csrf защита на отправляемый action
    public function beforeAction($action)
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
//        if (Yii::$app->request->isAjax) {
//            print_r(Yii::$app->request->post());
//        }
        // изменить запись
//        $post = TestForm::findOne(3);
//        $post->email = 'ya@ya.ru';
//        $post->save();

        // удалить запись
//        $post = TestForm::findOne(1);
//        $post->delete();

        // массовое удаление (обезательно передаём параметры!!!)
//        TestForm::deleteAll(['>', 'id', 1]);

        // добавить данные
        $model = new TestForm();
        // вставляем данные в ручную для проверки
//        $model->name = 'Автор';
//        $model->email = 'mail@mail.com';
//        $model->text = 'Текст сообщения';
//        $model->save();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
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
//        $this->view->registerMetaTag([
//            'name' => 'keywords',
//            'content' => 'ключивые теги',
//        ]);
//        $this->view->registerMetaTag([
//            'name' => 'description',
//            'content' => 'описание страницы',
//        ]);

        // вугрузить все данные
//        $cats = Category::find()->all();

        // делаем сортировку
//        $cats = Category::find()->orderBy(['id' => SORT_DESC])->all();

        // данные в виде массива (работает быстрее при больших запросах)
//        $cats = Category::find()->asArray()->all();

        // задаём условие для выгрузки данных
//        $cats = Category::find()->asArray()->where('parent=691')->all();
//        $cats = Category::find()->asArray()->where(['parent'=> 691])->all();

        // задаём условие для выгрузки данных - содержит в поле title сочитание pp
//        $cats = Category::find()->asArray()->where(['like', 'title', 'pp'])->all();

        //задаём условие для выгрузки данных - где поле id <= 695
//        $cats = Category::find()->asArray()->where(['<=', 'id', '695'])->all();

        // вытаскиваем не все записи
//        $cats = Category::find()->asArray()->where(['parent' => 691])->limit(2)->all();
//        $cats = Category::find()->asArray()->where(['parent' => 691])->limit(1)->one();

        // выводим количество записей
//        $cats = Category::find()->asArray()->where(['parent' => 691])->count();

        // извлекаем данные по ключу или значению других полей
//        $cats = Category::findOne(['parent' => 691]);
//        $cats = Category::findAll(['parent' => 691]);

        // пример использования чистого, защёщенного SQL запроса
//        $query = "SELECT * FROM categories WHERE title LIKE :search";
//        $cats = Category::findBySql($query, [':search' => '%pp%'])->all();

        // ленивая (отложенная) загрузка
//        $cats = Category::findOne(694);
        // жадная загрузка
        new ActiveDataProvider;
        $cats = Category::find()->with('products')->all();
        return $this->render('show', compact('cats'));
    }
}
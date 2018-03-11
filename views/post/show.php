<?php
use app\components\MyWidget;
?>
<!--передача данных из вида в шаблон-->
<?php //$this->beginBlock('block1') ?>
<!--<h1>Заголовок страницы</h1>-->
<?php //$this->endBlock() ?>

<!--<h1>Show action</h1>-->

<?php //foreach ($cats as $cat): ?>
<!--Отображение в виде объекта-->
<!--    --><? //= $cat->title . '<br>' ?>
<!--Отображение в виде массива-->
<!--    --><? //= $cat['title'] . '<br>' ?>
<?php //endforeach; ?>

<!--<button class="btn btn-success" id="btn">Кнопка</button>-->
<!--подключаем файл со скриптами только к текущей странице-->
<?php //$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']) ?>
<?php //$this->registerJs('$(\'.container\').append(\'<p>SHOP2</p>\');')?>

<!--подключаем блок кода-->
<?php
//$js = <<<JS
//$('#btn').on('click', function() {
//  $.ajax({
//    url: 'index.php?r=post/index',
//    data: {test: '123'},
//    type: 'POST',
//    success: function(res) {
//      console.log(res)
//    },
//    error: function() {
//      alert('Ошибка')
//    }
//  })
//})
//JS;
//$this->registerJs($js);
//?>


<?php //print_r($cats) ?>
<?php //dump($cats[0]->products) ?>
<?php //dump($cats) ?>

<!--выводим котерогии и в них выводим товары которые в этих категориях-->
<?php //foreach ($cats as $cat): ?>
<!--    <ul>-->
<!--        <li>-->
<!--            <b>--><?//= $cat->title ?><!--</b>-->
<!--            --><?php //foreach ($cat->products as $product): ?>
<!--                <ul>-->
<!--                    <li>--><?//= $product->title ?><!--</li>-->
<!--                </ul>-->
<!--            --><?php //endforeach; ?>
<!--        </li>-->
<!--    </ul>-->
<?php //endforeach; ?>

<!--пример виджета 1-->
<?php //echo MyWidget::widget(['name' => 'Вася']); ?>
<?php //echo MyWidget::widget(); ?>

<!--пример виджета 2-->
<?php //MyWidget::begin() ?>
<!--    <h1>Привет мир</h1>-->
<?php //MyWidget::end() ?>




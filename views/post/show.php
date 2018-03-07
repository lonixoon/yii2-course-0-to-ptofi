<!--передача данных из вида в шаблон-->
<?php $this->beginBlock('block1') ?>
    <h1>Заголовок страницы</h1>
<?php $this->endBlock() ?>

<h1>Show action</h1>
<button class="btn btn-success" id="btn">Кнопка</button>
<!--подключаем файл со скриптами только к текущей странице-->
<?php //$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']) ?>
<?php //$this->registerJs('$(\'.container\').append(\'<p>SHOP2</p>\');')?>

<!--подключаем блок кода-->
<?php
$js = <<<JS
$('#btn').on('click', function() {
  $.ajax({
    url: 'index.php?r=post/index',
    data: {test: '123'},
    type: 'POST',
    success: function(res) {
      console.log(res)
    },
    error: function() {
      alert('Ошибка')
    }
  })
})
JS;
$this->registerJs($js);
?>

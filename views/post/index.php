<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<?php //dump($model);?>
<h1>Форма</h1>
<?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']]); ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email')->input('email') ?>
<?= $form->field($model, 'text')->textarea(['rows' => 5]) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end(); ?>

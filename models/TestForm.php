<?php

namespace app\models;

use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'Почта',
            'text' => 'Текст сообщения',
        ];
    }

    public function rules()
    {

    }
}
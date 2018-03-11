<?php

namespace app\models;

use yii\db\ActiveRecord;

class TestForm extends ActiveRecord
{
//    public $name;
//    public $email;
//    public $text;

    public static function tableName()
    {
        return 'posts';
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст сообщения',
        ];
    }

    public function rules()
    {
        return [
//            [['name','email'], 'required', 'message' => 'Обезательное поле'],
            [['name','text'], 'required'],

            // проверка поле - почта
            ['email', 'email'],

//            ['name', 'string', 'min' => 2],
//            ['name', 'string', 'min' => 2, 'tooShort' => 'Мало букв'],
//            ['name', 'string', 'max' => 5, 'tooLong' => 'Много букв'],
//            ['name', 'string', 'length' => [2, 5]],

//            ['text', 'trim'],
        ];
    }
}
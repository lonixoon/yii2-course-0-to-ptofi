<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 10.03.2018
 * Time: 16:59
 */
namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'categories';
    }
}
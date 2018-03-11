<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 10.03.2018
 * Time: 16:59
 */
namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'products';
    }

    public function getCategories()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent']);
    }
}
<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Подписчик
 */
class Subscriber extends ActiveRecord {

    public static function tableName() {
	return '{{%subscriber}}';
    }
    
}
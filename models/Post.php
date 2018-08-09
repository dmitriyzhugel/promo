<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use app\models\Category;

class Post extends ActiveRecord {

    public static function tableName() {
	return '{{%post}}';
    }

    /**
     * Текущая категория
     * @return type
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['ID' => 'CATEGORY']);
    }
    
    public function beforeSave($insert) {
	if (parent::beforeSave($insert)) {
	    if ($this->isNewRecord) {
		$this->C_DATE = date('Y-m-d H:i:s');
		$this->UP_DATE = date('Y-m-d H:i:s');
	    }else{
		$this->UP_DATE = date('Y-m-d H:i:s');
	    }
	    return true;
	}
	return false;
    }

}

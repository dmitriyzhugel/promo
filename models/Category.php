<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use app\models\Post;

class Category extends ActiveRecord {
    
    public static function tableName() {
	return '{{%category}}';
    }
	
	public function getPosts()
    {
        return $this->hasMany(Post::className(), ['CATEGORY' => 'ID']);
    }
    
}
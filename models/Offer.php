<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Offer extends ActiveRecord {
    
    const TYPE_CREDIT = 'CREDIT';
    const TYPE_LOAN = 'LOAN';
    const TYPE_CARD = 'CARD';
    const TYPE_IPOTEKA = 'IPOTEKA';
    
    public static function tableName() {
	return '{{%offer}}';
    }
    
}
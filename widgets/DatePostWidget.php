<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;

/**
 * Виджет даты для статьи
 * @author Dmitriy Zhugel <dzhugel@mail.ru>
 */
class DatePostWidget extends Widget {
    
    public $c_date;
    
    public function init() {
    	parent::init();
    }
    
    public function run() {
	$up_date_obj = new \DateTime($this->c_date);
	$day = $up_date_obj->format('d');
	$month = (int)$up_date_obj->format('m');
	$months_desc = [
	    'Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'
	];
	$month_str = $months_desc[ $month-1 ]; 
    	return $this->render('_date_post_widget',['day'=>$day,'month_str'=>$month_str]);
    }
    
}
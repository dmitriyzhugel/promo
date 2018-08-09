<?php

namespace app\widgets;

use Yii;
use yii\base\Widget;
use app\models\Category;
use app\models\Post;

/**
 * Виджет шапки сайта
 * @author Dmitriy Zhugel <dzhugel@mail.ru>
 */
class HeaderWidget extends Widget {
    
    private $_banki_items = [];
    private $_mfo_items = [];
    private $_main_category_alias = '';
    
    public function init() {
	parent::init();
	
	$category_banki = Category::findOne(['ALIAS'=>'banki']);
	$category_mfo = Category::findOne(['ALIAS'=>'mfo']);
	if(!empty($category_banki)){
	    $this->_banki_items = Category::findAll(['PARENT'=>$category_banki->ID,'VISIBLE'=>1,'VISIBLE_MENU'=>1]);
	}
	if(!empty($category_mfo)){
	    $this->_mfo_items = Category::findAll(['PARENT'=>$category_mfo->ID,'VISIBLE'=>1,'VISIBLE_MENU'=>1]);
	}
	$this->_main_category_alias = Yii::$app->view->params['main_category_alias'];
    }
    
    public function run() {
	return $this->render('_header',[
	    'banki_items'=>$this->_banki_items,
	    'mfo_items'=>$this->_mfo_items,
	    'main_category_alias'=>$this->_main_category_alias
	]);
    }
    
}
<?php

namespace app\modules\adm\widgets;

use Yii;
use yii\base\Widget;
use app\models\Category;

/**
 * Виджет главного меню
 * @author Dmitriy Zhugel <dzhugel@mail.ru>
 */
class MainMenuWidget extends Widget {
    
    private $_items = [];   // Пункты меню
    private $_controller_id;
    
    public function init() {
	parent::init();
	
	$this->_controller_id = Yii::$app->controller->id;
	$this->_items[] = ['text' => 'Dashboard','href' => '/adm/dashboard/','icon' => 'fa fa-th-large', 'active' => $this->_controller_id == 'dashboard'];
	$this->_items[] = ['text' => 'Категории','href' => '/adm/category/','icon' => 'fa fa-folder', 'active' => $this->_controller_id == 'category'];
	
	$categories = Category::findAll(['PARENT'=>0]);
	$pages_items = [];
	foreach($categories as $category){
	    $pages_items[] = ['text' => $category->NAME,'href' => '/adm/pages/' . $category->ALIAS . '/'];
	}
	
	$this->_items[] = ['text' => 'Статьи','href' => '/adm/pages/','icon' => 'fa fa-file-word-o', 'subnav' => $pages_items, 'active' => $this->_controller_id == 'pages'];
	$this->_items[] = ['text' => 'Оффера','href' => '/adm/offers/','icon' => 'fa fa-briefcase', 'active' => $this->_controller_id == 'offers'];
	
    }
    
    public function run() {
	return $this->render('mainmenu',['items'=>$this->_items]);
    }
    
}
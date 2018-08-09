<?php

namespace app\modules\adm\controllers;

use Yii;
use app\modules\adm\components\ControllerAdm;
use app\models\Category;

/**
 * Управление категориями
 */
class CategoryController extends ControllerAdm {

    public $enableCsrfValidation = false;
    
    public function init(){
	parent::init();
	Yii::$app->params['asset_css'] = [
	    'css/bootstrap.min.css',
	    'font-awesome/css/font-awesome.css',
	    'css/plugins/dataTables/dataTables.bootstrap.css',
	    'css/plugins/dataTables/dataTables.responsive.css',
	    'css/plugins/dataTables/dataTables.tableTools.min.css',
	    'css/plugins/jsTree/style.min.css',
	    'css/animate.css',
	    'css/style.css'
	];
	Yii::$app->params['asset_js'] = [
	    'js/jquery-2.1.1.js',
	    'js/bootstrap.min.js',
	    'js/plugins/metisMenu/jquery.metisMenu.js',
	    'js/plugins/slimscroll/jquery.slimscroll.min.js',
	    'js/plugins/jeditable/jquery.jeditable.js',
	    'js/plugins/dataTables/jquery.dataTables.js',
	    'js/plugins/dataTables/dataTables.bootstrap.js',
	    'js/plugins/dataTables/dataTables.responsive.js',
	    'js/plugins/dataTables/dataTables.tableTools.min.js',
	    'js/inspinia.js',
	    'js/plugins/pace/pace.min.js',
	    'js/plugins/jsTree/jstree.min.js'
	];
	Yii::$app->params['controller_js'] = 'js/controllers/category.js';
    }
    
    /**
     * Основной раздел
     * @return type
     */
    public function actionIndex(){
	$categories = Category::find()->all();
	$parents = Category::findAll(['PARENT'=>0]);
	return $this->render('index',['categories'=>$categories,'parents'=>$parents]);
    }
    
    /**
     * Создание категории
     */
    public function actionCreate(){
	$name = Yii::$app->request->post('name');
	$alias = Yii::$app->request->post('alias');
	$parent = Yii::$app->request->post('parent');
	if(!empty($alias)){
	    $category = Category::findOne(['ALIAS'=>$alias]);
	    if(empty($category)){
		$category = new Category();
		$category->NAME = $name;
		$category->ALIAS = $alias;
		$category->PARENT = $parent;
		$category->save(false);
	    }
	}
	return json_encode(['status'=>'OK']);
    }
    
    /**
     * Редактирование категории
     * @return type
     */
    public function actionUpdate(){
	$id = Yii::$app->request->post('id');
	$value = Yii::$app->request->post('value');
	$column = Yii::$app->request->post('column');
	
	if(!empty($id)){
	    $category = Category::findOne($id);
	    switch($column){
		case 1: $category->NAME = $value;  break;
		case 2: $category->ALIAS = $value; break;
	    }
	    $category->save(false);
	}else{
	    $category = new Category();
	    switch($column){
		case 1: $category->NAME = $value;  break;
		case 2: $category->ALIAS = $value; break;
	    }
	    $category->save(false);
	    return $value;
	}
	
	return $value;
    }
    
	/**
	 * Получение данных по категории
	 * @return type
	 */
	public function actionView(){
		$id = Yii::$app->request->post('id');
		$category = Category::findOne($id);
		if(!empty($category)){
			return json_encode(['status'=>'OK','data'=>$category->getAttributes()]);
		}
	}
	
	/**
	 * Редактирование категории в форме
	 * @return type
	 */
	public function actionUpdate_form(){
	    $id = Yii::$app->request->post('id');
	    $name = Yii::$app->request->post('name');
	    $alias = Yii::$app->request->post('alias');
	    $parent = Yii::$app->request->post('parent');
	    $visible = Yii::$app->request->post('visible');
	    $visible_menu = Yii::$app->request->post('visible_menu');
	    $category = Category::findOne($id);
	    if(!empty($category)){
		
		$category->NAME = $name;
		$category->ALIAS = $alias;
		$category->PARENT = $parent;
		$category->VISIBLE = $visible;
		$category->VISIBLE_MENU = $visible_menu;
		$category->save(false);
		
		return json_encode(['status'=>'OK']);
	    }else{
		return json_encode(['status'=>'ERROR']);
	    }
	    
	}
	
}
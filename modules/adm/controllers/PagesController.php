<?php

namespace app\modules\adm\controllers;

use Yii;
use app\modules\adm\components\ControllerAdm;
use app\models\Post;
use app\models\Category;

/**
 * Управление статьями
 */
class PagesController extends ControllerAdm {

    public $enableCsrfValidation = false;
    
    public function init(){
	parent::init();
	Yii::$app->params['asset_css'] = [
	    'css/bootstrap.min.css',
	    'font-awesome/css/font-awesome.css',
	    'css/plugins/dataTables/dataTables.bootstrap.css',
	    'css/plugins/dataTables/dataTables.responsive.css',
	    'css/plugins/dataTables/dataTables.tableTools.min.css',
	    'css/animate.css',
	    'css/plugins/summernote/summernote.css',
	    'css/plugins/summernote/summernote-bs3.css',
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
	    'js/plugins/summernote/summernote.min.js'
	];
	Yii::$app->params['controller_js'] = 'js/controllers/pages.js';
    }
    public function actionIndex($category_alias){
	$main_category = Category::findOne(['ALIAS'=>$category_alias]);
	$categories = Category::findAll(['PARENT'=>$main_category->ID]);	
	$posts_storage = [];
	foreach($categories as $sub_category){
	    $posts_storage[ $sub_category->ID ] = Post::findAll(['CATEGORY'=>$sub_category->ID]);
	}	
	return $this->render('index',['posts_storage'=>$posts_storage,'main_category'=>$main_category,'categories'=>$categories]);
    }
    
    /**
     * Создание статьи
     */
    public function actionCreate(){
	$name = Yii::$app->request->post('name');
	$alias = Yii::$app->request->post('alias');
	$title = Yii::$app->request->post('title');
	$description = Yii::$app->request->post('description');
	$h1 = Yii::$app->request->post('h1');
	$visible = (int)Yii::$app->request->post('visible');
	$visible_menu = (int)Yii::$app->request->post('visible_menu');
	$preview = Yii::$app->request->post('preview');
	$content = Yii::$app->request->post('content');
	$category = Yii::$app->request->post('category');
	if(!empty($name) && !empty($alias)){
	    $post = new Post();
	    $post->NAME = $name;
	    $post->ALIAS = $alias;
	    $post->TITLE = $title;
	    $post->DESCRIPTION = $description;
	    $post->H1 = $h1;
	    $post->VISIBLE = $visible;
	    $post->VISIBLE_MENU = $visible_menu;
	    $post->PREVIEW = $preview;
	    $post->CONTENT = $content;
	    $post->CATEGORY = $category;
	    $post->save(false);
	}
	return json_encode(['status'=>'OK']);
    }
    
    /**
     * Получение данных по статье
     * @return type
     */
    public function actionView(){
	$id = Yii::$app->request->post('id');
	$post = Post::findOne($id);
	if(!empty($post)){
	    return json_encode(['status'=>'OK','data'=>$post->getAttributes()]);
	}
    }
    
    /**
     * Редактирование статьи
     */
    public function actionUpdate(){
	$id = Yii::$app->request->post('id');
	$post = Post::findOne($id);
	if(!empty($post)){
	    
	    $name = Yii::$app->request->post('name');
	    $alias = Yii::$app->request->post('alias');
	    $title = Yii::$app->request->post('title');
	    $description = Yii::$app->request->post('description');
	    $h1 = Yii::$app->request->post('h1');
	    $visible = (int)Yii::$app->request->post('visible');
	    $visible_menu = (int)Yii::$app->request->post('visible_menu');
	    $preview = Yii::$app->request->post('preview');
	    $content = Yii::$app->request->post('content');
	    $category = Yii::$app->request->post('category');
	    
	    $post->NAME = $name;
	    $post->ALIAS = $alias;
	    $post->TITLE = $title;
	    $post->DESCRIPTION = $description;
	    $post->H1 = $h1;
	    $post->VISIBLE = $visible;
	    $post->VISIBLE_MENU = $visible_menu;
	    $post->PREVIEW = $preview;
	    $post->CONTENT = $content;
	    $post->CATEGORY = $category;
	    $post->save(false);
	    
	    return json_encode(['status'=>'OK']);
	}else{
	    return json_encode(['status'=>'ERROR']);
	}
    }
    
}
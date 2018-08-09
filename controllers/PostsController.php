<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Category;
use app\models\Post;
use app\components\Mobile_Detect;

/**
 * Категория: группа статей
 */
class PostsController extends Controller {

    public function actionIndex($category_alias){	
	$this->layout = 'biznex';		
	$sub_category = Category::findOne(['ALIAS'=>$category_alias]);
	$main_category = Category::findOne($sub_category->PARENT);
	$co_categories = Category::findAll(['PARENT'=>$sub_category->PARENT]);
	Yii::$app->view->params['body_class'] = 'blog-classic boxed-menu';
	Yii::$app->view->params['main_category_alias'] = $main_category->ALIAS;
	$posts = Post::findAll(['CATEGORY'=>$sub_category->ID]);
        $detect = new Mobile_Detect();
        $is_mobile = $detect->isMobile();
	return $this->render('index',[
	    'sub_category'=>$sub_category,
	    'co_categories'=>$co_categories,
	    'main_category'=>$main_category,
	    'posts'=>$posts,
            'is_mobile'=>$is_mobile
	]);
    }
    
}
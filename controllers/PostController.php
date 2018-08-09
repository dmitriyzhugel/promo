<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Category;
use app\models\Post;
use app\components\Mobile_Detect;

/**
 * Отдельная статья
 */
class PostController extends Controller {
    
    public function actionIndex($category_alias,$post_alias){
		$this->layout = 'biznex';
		$sub_category = Category::findOne(['ALIAS'=>$category_alias]);
		$main_category = Category::findOne($sub_category->PARENT);
		$co_categories = Category::findAll(['PARENT'=>$sub_category->PARENT]);
		$post = Post::findOne(['CATEGORY'=>$sub_category->ID,'ALIAS'=>$post_alias]);
		//Yii::$app->view->params['body_class'] = 'blog-single-post boxed-menu';
                Yii::$app->view->params['body_class'] = 'blog-classic boxed-menu';
		Yii::$app->view->params['main_category_alias'] = $main_category->ALIAS;
                $detect = new Mobile_Detect();
                $is_mobile = $detect->isMobile();
		return $this->render('index2',[
			'post'=>$post,
			'co_categories'=>$co_categories,
			'sub_category'=>$sub_category,
			'main_category'=>$main_category,
                        'is_mobile'=>$is_mobile
		]);
    }
	
}
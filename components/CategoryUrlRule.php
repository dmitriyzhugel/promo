<?php

namespace app\components;

use Yii;
use yii\web\UrlRuleInterface;
use yii\base\BaseObject;
use app\models\Category;
use app\models\Post;

class CategoryUrlRule implements UrlRuleInterface {
    
    public function createUrl($manager, $route, $params)
    {
	if ($route === 'post/index') {
	    if (isset($params['category_alias'], $params['post_alias'])) {		
                return $params['category_alias'] . '/' . $params['post_alias'];
            }
	}
	if ($route === 'posts/index'){
	    if(isset($params['category_alias'])){
		return $params['category_alias'] . '/index';
	    }
	}
	return false; // this rule does not apply
    }
 
    /**
     * Parse request
     * @param \yii\web\Request|UrlManager $manager
     * @param \yii\web\Request $request
     * @return array|boolean
     */
    public function parseRequest($manager, $request)
    {
	$pathInfo = $request->getPathInfo();
	if (preg_match('%^(\w+)/?$%', $pathInfo, $matches)) {
	    $category_alias = $matches[1];
	    $params = ['category_alias'=>$category_alias];
	    $category = Category::findOne(['ALIAS'=>$category_alias]);
	    if(empty($category)){
		return false;
	    }
	    return ['posts/index', $params];
	}
	if (preg_match('%^(\w+)(/([a-zA-Z0-9_\-]+)/)?$%', $pathInfo, $matches)) {
            // check $matches[1] and $matches[3] to see
            // if they match a manufacturer and a model in the database.
            // If so, set $params['manufacturer'] and/or $params['model']
            // and return ['car/index', $params]
	    $category_alias = $matches[1];
	    $post_alias = $matches[3];	    
	    $params = ['category_alias'=>$category_alias,'post_alias'=>$post_alias];
	    
	    $category = Category::findOne(['ALIAS'=>$category_alias]);
	    if(!empty($category)){
		$post = Post::findOne(['ALIAS'=>$post_alias]);
	    }else {
		$post = null;
	    }
	    if(empty($category) || empty($post)){
		return false;
	    }
	    
	    return ['post/index', $params];
        }
	return false;
    }
    
}
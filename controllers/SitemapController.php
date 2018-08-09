<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

/**
 * Карта сайта - xml
 */
class SitemapController extends Controller {
	
	public function actionIndex(){
		$sql = "SELECT zc.ALIAS as CATEGORY_ALIAS,zp.ALIAS as POST_ALIAS,zp.UP_DATE"
				. " FROM `z_post` zp LEFT JOIN `z_category` zc ON zc.ID = zp.CATEGORY";
		$urls = Yii::$app->db->createCommand($sql)->queryAll();
		$site = $_SERVER['SITE_TYPE'];
		echo '<?xml version="1.0" encoding="UTF-8"?>';
		$sitemap_content = $this->renderPartial('sitemap',['urls'=>$urls,'site'=>$site]);
                file_put_contents('sitemap.xml',$sitemap_content);
                return $sitemap_content;
	}
	
}
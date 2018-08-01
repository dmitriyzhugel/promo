<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\LsPhoto;
use app\components\ControllerApp;
use app\models\LsGuest;

/**
 * Профиль пользователя
 */
class ProfileController extends ControllerApp {
	
	public $enableCsrfValidation = false;
	
	public function actionIndex(){
		$user = $this->user;
		$this->layout = 'profile';
		$photos = LsPhoto::find()->where(['owner_id' => $user->uid])->all();
		return $this->render('index',array('user'=>$user,'photos'=>$photos));
	}
	
	public function actionView($id = 0){
		if(empty($id)){
			$user = $this->user;
		}else{
			$user = User::findOne($id);
			// Фиксируем заход на страницу
			$ls_guest = new LsGuest();
			$ls_guest->user_id = $user->id;
			$ls_guest->guest_id = $this->user->id;
			$ls_guest->save(false);
		}
		$self_view = ($user->id == $this->user->id);		
		$this->layout = 'profile';
		$photos = LsPhoto::find()->where(['owner_id' => $user->uid])->all();
		return $this->render('view',array('user'=>$user,'photos'=>$photos,'self_view'=>$self_view));
	}
	
	public function actionEdit(){
		$user = $this->user;
		$this->layout = 'profile';
		return $this->render('edit',array('user'=>$user));
	}
	
	/**
	 * Сохранение профиля
	 */
	public function actionSave(){
		$first_name = Yii::$app->request->post('first_name');
		$age = Yii::$app->request->post('age');
		$city = Yii::$app->request->post('city');
		$city_title = Yii::$app->request->post('city_title');
		$ls_user = User::findOne($this->user->id);
		if(!empty($ls_user)){
			$ls_user->first_name = $first_name;
			$ls_user->age = $age;
			$ls_user->city = $city;
			$ls_user->city_title = $city_title;
			$ls_user->save(false);
			
			$this->user->first_name = $first_name;
			$this->user->age = $age;
			$this->user->city = $city;
			$this->user->city_title = $city_title;
			$this->user->save();
			
			echo json_encode(array('status'=>'OK'));
		}else{
			echo json_encode(array('status'=>'ERROR'));
		}
	}
	
	/**
	 * Запрос к API для получения списка городов
	 */
	public function actionCities(){
		$q = Yii::$app->request->post('q');
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, 'https://api.vk.com/method/database.getCities');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, 'country_id=1&count=1000&q=' . $q);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$cities_res = json_decode(curl_exec($ch),1);
		curl_close($ch);
		
		echo json_encode(array('status'=>'OK','cities'=>$cities_res));
	}
	
	/**
	 * Редактирование обьекта фотографии
	 */
	public function actionPhoto(){
		$photo_id = (int)Yii::$app->request->post('photo_id');
		$visible = (int)Yii::$app->request->post('visible');
		$sql = "UPDATE ls_photo SET visible = {$visible} WHERE id = {$photo_id} AND owner_id = {$this->user->uid}";
		Yii::$app->db->createCommand($sql)->execute();
		echo json_encode(array('status'=>'OK'));
	}
	
	/**
	 * Установка фотографии профиля
	 */
	public function actionPhotomain(){
		$photo_id = (int)Yii::$app->request->post('photo_id');
		if(empty($photo_id)){
			return json_encode(array('status'=>'ERROR'));
		}
		$photo = LsPhoto::findOne($photo_id);
		$this->user->photo_400_orig = $photo->src_big;
		$this->user->photo_100 = $photo->src;
		$this->user->photo = $photo->src_small;
		$this->user->main_photo_id = $photo->id;
		$this->user->save();
		echo json_encode(array('status'=>'OK'));
	}
	
	/*
	 * Добавление фотографий
	 */
	public function actionAdd_photo(){
		
		$add_photos = Yii::$app->request->post('add_photos');
		$check_photo_add = Yii::$app->request->post('check-photo-add');
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://api.vk.com/method/photos.get');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, 'owner_id='.$this->user->uid.'&album_id=profile&rev=1');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$response = json_decode(curl_exec($ch),1);
		curl_close($ch);
		$photos = $response['response'];
		
		if(!empty($add_photos) && !empty($check_photo_add)){
			$pids = array_keys($check_photo_add);
			foreach($photos as $photo){
				if(in_array($photo['pid'],$pids)){
					$ls_photo = LsPhoto::findOne(['pid'=>$photo['pid'],'owner_id'=>$this->user->uid]);
					if(empty($ls_photo)){
						$ls_photo = new LsPhoto();
						$ls_photo->pid = isset($photo['pid'])?$photo['pid']:0;
						$ls_photo->aid = isset($photo['aid'])?$photo['aid']:0;
						$ls_photo->owner_id = isset($photo['owner_id'])?$photo['owner_id']:0;
						$ls_photo->src = isset($photo['src'])?$photo['src']:'';
						$ls_photo->src_big = isset($photo['src_big'])?$photo['src_big']:'';
						$ls_photo->src_small = isset($photo['src_small'])?$photo['src_small']:'';
						$ls_photo->src_xbig = isset($photo['src_xbig'])?$photo['src_xbig']:'';
						$ls_photo->src_xxbig = isset($photo['src_xxbig'])?$photo['src_xxbig']:'';
						$ls_photo->src_xxxbig = isset($photo['src_xxxbig'])?$photo['src_xxxbig']:'';
						$ls_photo->width = isset($photo['width'])?$photo['width']:0;
						$ls_photo->height = isset($photo['height'])?$photo['height']:0;
						$ls_photo->created = isset($photo['created'])?date('Y-m-d H:i:s',$photo['created']):date('Y-m-d H:i:s');
						$ls_photo->save(false);
					}
				}
			}
			return $this->redirect('/profile/');
		}
		
		$user = $this->user;
		$this->layout = 'profile';
		return $this->render('add_photo',array('user'=>$user,'photos'=>$photos));
		
	}
}
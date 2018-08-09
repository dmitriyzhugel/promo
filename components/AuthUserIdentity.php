<?php

namespace app\components;

use Yii;
use yii\web\IdentityInterface;

class AuthUserIdentity implements IdentityInterface {

	public $user_id;
	public $authKey;

	public static function findIdentity($id) {
	}

	public static function findIdentityByAccessToken($token, $type = null) {
	}

	public function getId() {
		return $this->user_id;
	}

	public function getAuthKey() {
		return $this->authKey;
	}

	public function validateAuthKey($authKey) {
		return $this->authKey === $authKey;
	}

}
<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use app\components\AuthUserIdentity;

class ZmkUser extends ActiveRecord implements IdentityInterface {
    
    private static $_user;
    
    public static function tableName() {
	return '{{%user}}';
    }
    
    /**
     * Finds an identity by the given ID.
     *
     * @param string|integer $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */
    public static function findIdentity($id) {
	if (!isset(Yii::$app->session['zmk_user'])) {
	    return static::findOne($id);
	} else {
	    $identity = new AuthUserIdentity();
	    $identity->authKey = Yii::$app->session['zmk_user']['authKey'];
	    $identity->user_id = Yii::$app->session['zmk_user']['user_id'];
	    return $identity;
	}
    }
    
    /**11111
     * Finds an identity by the given token.
     *
     * @param string $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null) {
    }
    
    /**
     * Finds user by username
     *
     * @param  string $username
     * @return static|null
     */
    public static function findByUsername($username) {
	    return static::findOne(array('user_name' => $username));
    }

    /**
     * @return int|string current user ID
     */
    public function getId() {
	    return $this->user_id;
    }

    /**
     * @return string current user auth key
     */
    public function getAuthKey() {
	    return $this->auth_key;
    }

    /**
     * @param string $authKey
     * @return boolean if auth key is valid for current user
     */
    public function validateAuthKey($authKey) {
	    return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password) {
	    return Yii::$app->security->validatePassword($password, $this->user_password);
	    //return md5(md5($password)) === $this->user_password;
    }
    
    /*
     * Экземпляр пользователя
     */

    public static function authorized() {
	    if (!empty(self::$_user)) {
		    return self::$_user;
	    }
	    if (!Yii::$app->user->isGuest) {
		    if (!isset(Yii::$app->session['zmk_user'])) {
			    $user = static::findOne(Yii::$app->user->id);
			    if (!empty($user)) {
				    Yii::$app->session['zmk_user'] = $user->attributes;
			    } else {
				    $cache_user = null;
			    }
		    } else {
			    $cache_user = CacheUser::getInstance();
			    $cache_user->setAttributes(Yii::$app->session['zmk_user']);
		    }

		    if (empty($cache_user)) {
			    return null;
		    }
		    return self::$_user = $cache_user;
	    }
	    return null;
    }
    
}
<?php

namespace app\models;

use Yii;
use app\models\ZmkUser;

/*
 * Класс реализющий кэширование атрибутов пользователя
 * @author Zhugel Dmitriy
 */

class CacheUser {

    private $_user_data;
    private $_user_session;
    private $_roles;
    private static $_instance = null;

    private function __construct() {
	$this->_user_data = array();
	$this->_roles = array();
    }

    static public function getInstance() {
	if (is_null(self::$_instance)) {
	    self::$_instance = new self();
	}
	return self::$_instance;
    }

    public function __get($name) {
	return isset($this->_user_data[$name]) ? $this->_user_data[$name] : null;
    }

    public function __set($name, $value) {
	$this->_user_data[$name] = $value;
    }

    public function setAttributes($attributes) {

	foreach ($attributes as $attribute_key => $attribute_value) {
	    $this->_user_data[$attribute_key] = $attribute_value;
	}
    }

    public function can($role) {
	return in_array($role, $this->_roles);
    }

    public function getUserSession() {
	return $this->_user_session;
    }

    public function setUserSession($session) {
	$this->_user_session = $session;
    }

    public function addRole($role) {
	$this->_roles[] = $role;
    }

    public function save() {
	Yii::$app->session['zmk_user'] = $this->_user_data;
	if (isset($this->_user_data['user_id'])) {
	    $user = ZmkUser::findOne($this->_user_data['user_id']);
	    if (!empty($user)) {
		$user->setAttributes($this->_user_data, false);
		$user->save();
	    }
	}
	return true;
    }

}

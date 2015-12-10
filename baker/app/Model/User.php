<?php

App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

	public $validate = array(
		'username' => array(
			'username-not-blank' => array(
				'rule' => 'notEmpty',
				'message' => 'Поле обязательно для заполнения'
			),
			'username-length-diapason' => array(
				'rule' => array('lengthBetween', 2, 50),
				'message' => 'Длина логина должна быть в диапазоне 2-50'
			),
			'username-unique' => array(
				'rule' => 'isUnique',
				'message' => 'Логин должен быть уникальным.'
			)
		),
		'password' => array(
			'password-not-blank' => array(
				'rule' => 'notEmpty',
				'message' => 'Поле обязательно для заполнения'
			),
			'password-length' => array(
				'rule' => array('minLength', '8'),
				'message' => 'Минимальная длина пароля: 8 символов'
			)
		)
	);
	
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
				$this->data[$this->alias]['password']
			);
		}
		return true;
	}

}

?>
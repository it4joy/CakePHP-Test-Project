<?php

class Post extends AppModel {
    
	public $validate = array(
		'title' => array(
			'title-not-blank' => array(
				'rule' => 'notEmpty',
				'message' => 'Поле обязательно для заполнения'
			),
			'title-length-diapason' => array(
				'rule' => array('lengthBetween', 3, 30),
				'message' => 'Длина заголовка должна быть в диапазоне 3-30'
			),
			'title-unique' => array(
				'rule' => 'isUnique',
				'message' => 'Существует запись с идентичным заголовком. Измените заголовок.'
			)
		),
		'body' => array(
			'rule' => 'notEmpty',
			'message' => 'Поле обязательно для заполнения'
		)
	);
	
}


?>
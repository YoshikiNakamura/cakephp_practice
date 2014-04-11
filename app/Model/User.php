<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

/**
 * User Model
 */
class User extends AppModel
{
	/**
	 * no recursive
	 */
	public $recursive = -1;

	/**
	 * validation
	 */
	public $validate = array(
			'email' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A email is required'
					)
			),
			'password' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A password is required'
					)
			),
			'role' => array(
					'valid' => array(
							'rule' => array('inList', array('admin', 'author')),
							'message' => 'Please enter a valid role',
							'allowEmpty' => false
					)
			)
	);

	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'name';

	/**
	 * hasMany associations
	 */
	public $hasMany = array(
			'Article' => array(
					'className' => 'Article',
					'foreignKey' => 'user_id',
					'dependent' => false,
					'conditions' => '',
					'fields' => '',
					'order' => '',
					'limit' => '',
					'offset' => '',
					'exclusive' => '',
					'finderQuery' => '',
					'counterQuery' => ''
			)
	);

	public function beforeSave($options = array())
	{
		$passwordHasher = new SimplePasswordHasher();
		$this->data['User']['password'] = $passwordHasher->hash($this->data['User']['password']);
		return true;
	}
}

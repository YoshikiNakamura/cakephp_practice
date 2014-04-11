<?php
App::uses('AppModel', 'Model');

/**
 * Article Model
 */
class Article extends AppModel
{
	/**
	 * Validation
	 */
	public $validate = array(
			'title' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A title is required.'
					)
			),
			'body' => array(
					'required' => array(
							'rule' => array('notEmpty'),
							'message' => 'A body is required.'
					)
			),
			'user_id' => array(
					'valid' => array(
							'rule' => array('notEmpty'),
							'message' => 'A authors user id is required.',
							'allowEmpty' => false
					)
			)
	);

	/**
	 * Display field
	 */
	public $displayField = 'title';

	/**
	 * belongsTo associations
	 */
	public $belongsTo = array(
			'User' => array(
					'className' => 'User',
					'foreignKey' => 'user_id',
					'conditions' => '',
					'fields' => '',
					'order' => ''
			)
	);


}

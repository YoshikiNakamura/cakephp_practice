<?php
App::uses('Controller', 'Controller');

/**
 * Application Controller
 */
class AppController extends Controller
{
	/**
	 * components you need
	 */
	public $components = array(
			'DebugKit.Toolbar',
			'Session',
			'Auth' => array(
					'authenticate' => array(
							'Form' => array(
									'userModel' => 'User',
									'fields' => array(
											'username' => 'email',
											'password' => 'password'
									)
							)
					),
					'loginAction' => array(
							'controller' => 'users',
							'action' => 'login'
					),
					'loginRedirect' => array(
							'controller' => 'articles',
							'action' => 'index'
					),
					'logoutRedirect' => array(
							'controller' => 'users',
							'action' => 'login'
					),
					//'authorize' => array('Controller')
			)
	);

	/**
	 * set common leyout you use
	 */
	public $layout = 'original';

	public function beforeFilter()
	{
		debug($this->Auth->user());
		parent::beforeFilter();
	}

	/*
	public function isAuthorized($user)
	{
		if(isset($user['role']) && $user['role'] === 'admin')
		{
			return true;
		}
		return false;
	}
	*/
}

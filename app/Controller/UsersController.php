<?php
class UsersController extends AppController
{
	/**
	 * set models used by each action
	 */
	public $uses = array('User');

	public function beforeFilter()
	{
		parent::beforeFilter();
		//$this->Auth->allow('index');
	}

	/**
	 *
	 */
	public function index()
	{
		$users = $this->User->findAll();
		$this->set('users', $users);
	}

	/**
	 *
	 */
	public function view($id = null)
	{

	}

	/**
	 *
	 */
	public function add($)
	{

	}
}
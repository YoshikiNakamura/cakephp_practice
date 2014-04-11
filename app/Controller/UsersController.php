<?php
App::uses('AppModel', 'Model');

class UsersController extends AppController
{
	/**
	 * set models used by each action
	 */
	public $uses = array('User');

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('login', 'add', 'index');
	}

	/**
	 * login page
	 * when the user has logined, redirect user's mypage
	 */
	public function login()
	{
		$user = $this->Auth->user();
		if($user)
		{
			return $this->redirect(array('controller'=>'users', 'action'=>'view', $user['id']));
		}
		if ($this->request->is('post'))
		{
			if ($this->Auth->login())
			{
				return $this->redirect($this->Auth->redirect());
			}
			else
			{
				$this->Session->setFlash(__('Invalid username or password, try again'));
			}
		}
	}

	/**
	 * logout
	 * this action just do only logout and redirect
	 */
	public function logout()
	{
		return $this->redirect($this->Auth->logout());
	}

	/**
	 * view user list
	 */
	public function index()
	{
		$users = $this->User->find('all');
		$this->set('users', $users);
	}

	/**
	 * view a user whose user_id is $id
	 */
	public function view($id = null)
	{
		$user = $this->User->find('first', array('conditions'=>array('User.id'=>$id)));
		if(!$user)
		{
			throw new NotFoundException();
		}
		$this->set('user', $user);
	}

	/**
	 * add new user
	 */
	public function add()
	{
		if($this->request->is('post'))
		{
			try
			{
				$this->User->create();
				$this->User->save($this->request->data);
				return $this->redirect(array('action' => 'index'));
			}
			catch(Exception $e)
			{
				$e->getMessage();
			}
		}
	}

	/**
	 * edit existing user
	 */
	public function edit()
	{
		$authedUser = $this->Auth->user();
		$user = $this->User->find('first', array('conditions'=>array('User.id'=>$authedUser['id'])));
		if(!$user)
		{
			throw new BadRequestException();
		}
		if($this->request->is('put'))
		{
			try
			{
				$this->User->save($this->request->data);
				return $this->redirect(array('action' => 'index'));
			}
			catch(Exception $e)
			{
				$e->getMessage();
			}
		}
		if(!$this->request->data)
		{
			$user['User']['password'] = '';
			$this->request->data = $user;
		}
	}

	/*
	public function delete($id = null)
	{
		if($this->request->is('delete'))
		{
			try
			{
				$this->User->delete($id);
				return $this->redirect(array('action' => 'index'));
			}
			catch(Exception $e)
			{
				$e->getMessage();
			}
		}
	}
	*/
}
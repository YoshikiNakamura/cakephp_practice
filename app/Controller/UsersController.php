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
		$this->set('user', $user);
	}

	/**
	 * add new user
	 */
	public function add()
	{
		if($this->request->is('post'))
		{
			$this->User->create();
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
	}

	public function edit()
	{
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
	}

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
}
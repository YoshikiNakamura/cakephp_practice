<?php
App::uses('AppController', 'Controller');
use Guzzle\Http\Client as GuzzleClient;

/**
 *
 */
class UsersControllerTest extends ControllerTestCase
{
	public $fixtures = array('app.user');

	public function setUp()
	{
		$client = new GuzzleClient('localhost');
	}

	public function testLogin()
	{
		$data = array(
				'email' => '1st@example.com'
				'password' => '123456'
		);
		$request = $client->post('/action.php', null, $data);
		$response = $request->send();
	}
/*
	public function testIndex()
	{
		$result = $this->testAction('/users/index', array('method'=>'get', 'return'=>'vars'));
		$expected = array(
				array(
						'User' => array(
								'id' => 1,
								'email' => 'sample1@example.com',
								'password' => 'sample1',
								'created' => '2013-02-19 19:46:34',
								'updated' => '2013-02-19 19:46:34',
						),
				),
				array(
						'User' => array(
								'id' => 2,
								'email' => 'sample2@example.com',
								'password' => 'sample2',
								'created' => '2013-02-19 19:46:34',
								'updated' => '2013-02-19 19:46:34',
						)
				)
		);
		$this->assertEqual($result['users'], $expected);
    }

	public function testAdd()
	{
		$data = array(
				'id' => 3,
				'email' => 'sample3@example.com',
				'password' => 'sample3',
		);
		$this->testAction('/users/add', array('method'=>'post', 'data'=>$data));
		$result = $this->controller->User->find('first', array('conditions'=>array('User.id'=>3)));
		$this->assertEqual($result['User']['email'], 'sample3@example.com');
	}

	public function testEdit()
	{
		$data = array(
				'id' => 2,
				'email' => 'sample2.5@example.com',
				'password' => 'sample2.5',
		);
		$this->testAction('/users/edit', array('method'=>'put', 'data'=>$data));
		$result = $this->controller->User->find('first', array('conditions'=>array('User.id'=>2)));
		$this->assertEqual($result['User']['email'], 'sample2.5@example.com');
	}

	public function testDelete()
	{
		$this->testAction('/users/delete/2', array('method'=>'delete'));
		$result = $this->controller->User->find('count');
		$this->assertEqual($result, 1);
	}
*/
}
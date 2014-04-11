<?php
App::uses('User', 'Model');
/**
 * User Test Case
 */
class UserTest extends CakeTestCase
{
	public $fixtures = array('app.user');

	public function setUp()
	{
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

	public function tearDown()
	{
		unset($this->User);
		parent::tearDown();
	}

	public function testFind()
	{
		$result = $this->User->find('all');
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
		$this->assertEqual($result, $expected);
	}

	public function testSave()
	{
		try
		{
			$this->User->create();
			$data = array(
					'id' => 3,
					'email' => 'sample3@example.com',
					'password' => 'sample3',
			);
			debug($data);
			$this->User->save($data);
			$result = $this->User->find('first', array('conditions'=>array('User.id'=>3)));
			debug($result['User']);
			$this->assertEqual($result['User']['email'], $data['email']);
		}
		catch(Exception $e)
		{
			$e->getMessage();
			debug($e->getMessage());
		}
	}
}

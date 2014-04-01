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

	public function testIndex()
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
}

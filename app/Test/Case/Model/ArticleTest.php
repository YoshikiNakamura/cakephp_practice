<?php
App::uses('Article', 'Model');
/**
 * Article Test Case
 */
class ArticleTest extends CakeTestCase
{
	public $fixtures = array('app.user', 'app.article');

	public function setUp()
	{
		parent::setUp();
		$this->Article = ClassRegistry::init('Article');
	}

	public function tearDown()
	{
		unset($this->Article);
		parent::tearDown();
	}

	public function testFind()
	{
		$result = $this->Article->find('all');
		$expected = array(
				array(
						'Article' => array(
								'id' => 1,
								'title' => 'first sample article',
								'body' => 'Hello first sample article. Hello first sample article. Hello first sample article.',
								'user_id' => 1,
								'created' => '2013-02-19 19:46:34',
								'updated' => '2013-02-19 19:46:34'
						),
						'User' => array(
								'password' => 'sample1',
								'id' => '1',
								'email' => 'sample1@example.com',
								'created' => '2013-02-19 19:46:34',
								'updated' => '2013-02-19 19:46:34'
						)
				),
				array(
						'Article' => array(
								'id' => 2,
								'title' => 'second sample article',
								'body' => 'Hello second sample article. Hello second sample article. Hello second sample article.',
								'user_id' => 2,
								'created' => '2013-02-19 19:46:34',
								'updated' => '2013-02-19 19:46:34'
						),
						'User' => array(
								'password' => 'sample2',
								'id' => '2',
								'email' => 'sample2@example.com',
								'created' => '2013-02-19 19:46:34',
								'updated' => '2013-02-19 19:46:34'
						)
				)
		);
		debug($result);
		debug($expected);
		$this->assertEqual($result, $expected);
	}

	public function testSave()
	{
		try
		{
			$this->Article->create();
			$data = array(
					'id' => 3,
					'title' => '3rd sample article',
					'body' => 'Hello 3rd sample article!',
					'user_id' => 2
			);
			$this->Article->save($data);
			$result = $this->Article->find('first', array('conditions'=>array('Article.id'=>3)));
			debug($result['Article']);
			debug($data);
			$this->assertEqual($result['Article']['title'], $data['title']);
		}
		catch(Exception $e)
		{
			$e->getMessage();
			debug($e->getMessage());
		}
	}
}

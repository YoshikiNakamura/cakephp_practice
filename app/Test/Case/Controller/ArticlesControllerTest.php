<?php
App::uses('AppController', 'Controller');
/**
 *
 */
class ArticlesControllerTest extends ControllerTestCase
{
	public $fixtures = array('app.user', 'app.article');

	public function testIndex()
	{
		$result = $this->testAction('/articles/index', array('method'=>'get', 'return'=>'vars'));
		debug($result);
		$expected = array(
				array(
						'Article' => array(
								'id' => '1',
								'title' => 'first sample article',
								'body' => 'Hello first sample article. Hello first sample article. Hello first sample article.',
								'user_id' => '1',
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
								'id' => '2',
								'title' => 'second sample article',
								'body' => 'Hello second sample article. Hello second sample article. Hello second sample article.',
								'user_id' => '2',
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
		$this->assertEqual($result['articles'], $expected);
    }

	public function testAdd()
	{
		$data = array(
				'id' => 3,
				'title' => '3rd sample article',
				'body' => 'Hello 3rd sample article!',
				'user_id' => 2
		);
		$this->testAction('/articles/add', array('method'=>'post', 'data'=>$data));
		$result = $this->controller->Article->find('first', array('conditions'=>array('Article.id'=>3)));
		debug($result);
		$this->assertEqual($result['Article']['title'], '3rd sample article');
		$this->assertEqual($result['Article']['body'], 'Hello 3rd sample article!');
		$this->assertEqual($result['Article']['user_id'], 2);
	}

	public function testEdit()
	{
		$data = array(
				'id' => 2,
				'title' => 'modified title',
				'body' => 'modified body',
		);
		$this->testAction('/articles/edit', array('method'=>'put', 'data'=>$data));
		$result = $this->controller->Article->find('first', array('conditions'=>array('Article.id'=>2)));
		debug($result);
		$this->assertEqual($result['Article']['title'], 'modified title');
		$this->assertEqual($result['Article']['body'], 'modified body');
	}

	public function testDelete()
	{
		$this->testAction('/articles/delete/2', array('method'=>'delete'));
		$result = $this->controller->Article->find('count');
		$this->assertEqual($result, 1);
	}

}
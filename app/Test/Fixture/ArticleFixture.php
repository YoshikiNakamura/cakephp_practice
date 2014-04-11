<?php
/**
 * ArticleFixture
 */
class ArticleFixture extends CakeTestFixture
{
	/**
	 * Fields
	 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'body' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	/**
	 * Records
	 */
	public $records = array(
		array(
			'id' => 1,
			'title' => 'first sample article',
			'body' => 'Hello first sample article. Hello first sample article. Hello first sample article.',
			'user_id' => 1,
			'created' => '2013-02-19 19:46:34',
			'updated' => '2013-02-19 19:46:34'
		),
		array(
			'id' => 2,
			'title' => 'second sample article',
			'body' => 'Hello second sample article. Hello second sample article. Hello second sample article.',
			'user_id' => 2,
			'created' => '2013-02-19 19:46:34',
			'updated' => '2013-02-19 19:46:34'
		)
	);
}

<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture
{

	/**
	 * Fields
	 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'email' => 'sample1@example.com',
			'password' => 'sample1',
			'created' => '2013-02-19 19:46:34',
			'updated' => '2013-02-19 19:46:34',
		),
		array(
			'id' => 2,
			'email' => 'sample2@example.com',
			'password' => 'sample2',
			'created' => '2013-02-19 19:46:34',
			'updated' => '2013-02-19 19:46:34',
		)
	);
}

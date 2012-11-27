<?php
/**
 * OrderFixture
 *
 */
class OrderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'last_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'billing_address_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'shipping_address_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'CC_number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'CC_code' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'CC_type' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'CC_exp_month' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 2),
		'CC_exp_year' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'phone' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'phone2' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'isnew' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'special_request' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'shipping_price_dollars' => array('type' => 'float', 'null' => false, 'default' => null),
		'shipping_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'discount_dollars' => array('type' => 'float', 'null' => false, 'default' => null),
		'tax_dollars' => array('type' => 'float', 'null' => false, 'default' => null),
		'total_dollars' => array('type' => 'float', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'billing_address_id' => 1,
			'shipping_address_id' => 1,
			'CC_number' => 'Lorem ipsum dolor ',
			'CC_code' => 1,
			'CC_type' => 'Lorem ipsum dolor sit amet',
			'CC_exp_month' => 1,
			'CC_exp_year' => 1,
			'phone' => 'Lorem ipsum dolor sit amet',
			'phone2' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'isnew' => 1,
			'special_request' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'shipping_price_dollars' => 1,
			'shipping_id' => 1,
			'discount_dollars' => 1,
			'tax_dollars' => 1,
			'total_dollars' => 1,
			'created' => '2012-11-23 15:51:56',
			'modified' => '2012-11-23 15:51:56'
		),
	);

}

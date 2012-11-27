<?php
/**
 * ItemFixture
 *
 */
class ItemFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'sub_category_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'item_number' => array('type' => 'string', 'null' => false, 'default' => null, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'price_dollars' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'cost_dollars' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'qty' => array('type' => 'integer', 'null' => false, 'default' => '1'),
		'shipping_price_dollars' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'short_description' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cart_count' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'item_number' => array('column' => 'item_number', 'unique' => 1)
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
			'category_id' => 1,
			'sub_category_id' => 1,
			'status_id' => 1,
			'item_number' => 'Lorem ipsum dolor sit amet',
			'price_dollars' => 1,
			'cost_dollars' => 1,
			'qty' => 1,
			'shipping_price_dollars' => 1,
			'short_description' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'cart_count' => 1,
			'created' => '2012-11-23 15:51:46',
			'modified' => '2012-11-23 15:51:46'
		),
	);

}

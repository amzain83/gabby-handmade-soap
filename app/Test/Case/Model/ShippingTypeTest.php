<?php
App::uses('ShippingType', 'Model');

/**
 * ShippingType Test Case
 *
 */
class ShippingTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shipping_type',
		'app.sale',
		'app.item',
		'app.category',
		'app.sub',
		'app.sub_category',
		'app.status',
		'app.upload',
		'app.order',
		'app.user',
		'app.billing_address',
		'app.shipping_address',
		'app.shipping'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ShippingType = ClassRegistry::init('ShippingType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ShippingType);

		parent::tearDown();
	}

}

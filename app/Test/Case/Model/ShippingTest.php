<?php
App::uses('Shipping', 'Model');

/**
 * Shipping Test Case
 *
 */
class ShippingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.shipping',
		'app.order',
		'app.user',
		'app.billing_address',
		'app.shipping_address',
		'app.sale',
		'app.item',
		'app.category',
		'app.sub',
		'app.sub_category',
		'app.status',
		'app.upload',
		'app.shipping_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Shipping = ClassRegistry::init('Shipping');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Shipping);

		parent::tearDown();
	}

}

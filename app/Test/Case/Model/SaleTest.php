<?php
App::uses('Sale', 'Model');

/**
 * Sale Test Case
 *
 */
class SaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.shipping',
		'app.shipping_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sale = ClassRegistry::init('Sale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sale);

		parent::tearDown();
	}

}

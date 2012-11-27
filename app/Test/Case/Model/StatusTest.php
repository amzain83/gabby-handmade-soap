<?php
App::uses('Status', 'Model');

/**
 * Status Test Case
 *
 */
class StatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.status',
		'app.item',
		'app.category',
		'app.sub',
		'app.sub_category',
		'app.sale',
		'app.order',
		'app.user',
		'app.billing_address',
		'app.shipping_address',
		'app.shipping',
		'app.shipping_type',
		'app.upload'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Status = ClassRegistry::init('Status');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Status);

		parent::tearDown();
	}

}

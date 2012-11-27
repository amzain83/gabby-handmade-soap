<?php
App::uses('SubCategory', 'Model');

/**
 * SubCategory Test Case
 *
 */
class SubCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sub_category',
		'app.category',
		'app.item',
		'app.status',
		'app.sale',
		'app.order',
		'app.user',
		'app.billing_address',
		'app.shipping_address',
		'app.shipping',
		'app.shipping_type',
		'app.upload',
		'app.sub'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SubCategory = ClassRegistry::init('SubCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubCategory);

		parent::tearDown();
	}

}

<?php
App::uses('Upload', 'Model');

/**
 * Upload Test Case
 *
 */
class UploadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.upload',
		'app.item',
		'app.category',
		'app.sub',
		'app.sub_category',
		'app.status',
		'app.sale',
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
		$this->Upload = ClassRegistry::init('Upload');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Upload);

		parent::tearDown();
	}

}

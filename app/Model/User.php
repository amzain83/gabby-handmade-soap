<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property BillingAddress $BillingAddress
 * @property ShippingAddress $ShippingAddress
 * @property Order $Order
 */
class User extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Please use a valid email address'
			),
			'unique' => array(
				'rule' => array('isUnique'),
				'message' => 'Email already taken'
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Password is required',
			),
			'confirmed' => array(
		    'rule' => 'confirmPasswordCheck',
		    'message' => 'Passwords did not match'
		  ),
		),
		'first_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter your first name',
			),
		),
		'last_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'billing_address_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'shipping_address_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'verified' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'code' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'group' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'BillingAddress' => array(
			'className' => 'Address',
			'foreignKey' => 'billing_address_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ShippingAddress' => array(
			'className' => 'Address',
			'foreignKey' => 'shipping_address_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Order' => array(
			'className' => 'Order',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	/**
	* To change the password you need the current password
	* @param array of data
	*/
	public function changePassword($data){
		if(isset($data['User']['current_password']) && isset($data['User']['id'])){
			if($this->checkPassword($data['User']['id'], $data['User']['current_password'])){
				unset($data['User']['current_password']);
				return $this->save($data);
			}	else {
				$this->invalidate('current_password', 'Your current password is not correct.');
			}
		}
		return false;
	}
	
	/**
	  * If confirm_password is set, make sure it matches the passed in password
	  * or return a validation error
	  */
	public function confirmPasswordCheck($check = null){
	  if(isset($this->data[$this->alias]['confirm_password'])){
	    if($this->hashPassword($this->data[$this->alias]['confirm_password']) != $this->data[$this->alias]['password']){
	      return false;
	    }
	  }
	  return true;
	}
	
	public function checkPassword($user_id, $password){
		$official_pass = $this->field('password', array('User.id' => $user_id));
		if($official_pass == $this->hashPassword($password)){
			return true;
		}
		return false;
	}
	
	public function register($data){
		if($data['User']['password'] != $data['User']['confirm_password']){
			$this->invalidate('password', 'Password and Confirmation Password don\'t match.');
			return false;
		}
		$data['User']['password'] = $this->hashPassword($data['User']['password']);
		return $this->save($data);
	}
	
	/**
	* Find the user by email or username
	* @param username_or_email
	* @param password
	* @return user found, or null
	*/
	function findByEmailAndPassword($email, $password){
		return $this->find('first', array(
			'conditions' => array(
				'email' => $email,
				'password' => $password
			),
			'recursive' => -1
		));
	}
	
	/**
	* Hash the password.
	* @param string to hash
	* @return string hashed password.
	*/
	function hashPassword($password){
		return Security::hash($password, null, true);
	}

}

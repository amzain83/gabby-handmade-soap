<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {
	public $components = array(
		'Session',
		'Auth' => array(
      'authorize' => array('Controller'),
      'loginAction' => array('controller' => 'users', 'action' => 'login'),
      'allowedActions' => array('search','view','index','get','display'),
      'logoutRedirect' => array('controller' => 'pages', 'action' => 'home'),
      'authError' => 'Please Login',
      'autoRedirect' => false,
      'authenticate' => array(
      	'Form' => array(
      		'fields' => array('username' => 'email')
      	)
      )
    ),
		'DebugKit.Toolbar',
		'Icing.IcingCart' => array(
			'model' => 'Item',
			'contain' => array()
		)
	);
	public $helpers = array(
		'WebTechNick.Google',
		'Seo.Seo',
		'TB' => array(
			'className' => 'TwitterBootstrap.TwitterBootstrap'
		),
		'Js'
	);
	
	public function beforeFilter(){
		$this->set('user', $this->Auth->user());
		$this->set('cart', $this->IcingCart->get());
		return parent::beforeFilter();
	}
	
	/**
	* Auth authorization function
	*/
	public function isAuthorized($user, $request = null) {
		if (strpos($this->request->action,"admin") !== false){
			return $this->isAdmin();
		}
		return true;
	}
	
	function isAdmin(){
    return ($this->Auth->user('group') == 'admin'); 
  }
  
  function goodFlash($message){
    $this->Session->setFlash($message,'goodFlash');
  }
  
  function badFlash($message){
    $this->Session->setFlash($message,'badFlash');
  }
  
  function infoFlash($message){
    $this->Session->setFlash($message,'infoFlash');
  }
  
  /**
  * Create new detector to exclude ipad
  */
  function newDetector(){
  	$this->request->addDetector('phone', array(
			'env' => 'HTTP_USER_AGENT', 
			'options' => array(
				'Android', 'AvantGo', 'BlackBerry', 'DoCoMo', 'Fennec', 'iPod', 'iPhone', 
				'J2ME', 'MIDP', 'NetFront', 'Nokia', 'Opera Mini', 'Opera Mobi', 'PalmOS', 'PalmSource',
				'portalmmm', 'Plucker', 'ReqwirelessWeb', 'SonyEricsson', 'Symbian', 'UP\\.Browser',
				'webOS', 'Windows CE', 'Windows Phone OS', 'Xiino'
			)
		));
		$this->request->addDetector('ipad', array(
			'env' => 'HTTP_USER_AGENT', 
			'options' => array(
				'iPad'
			)
		));
  }
  /**
    * Take all the data[search] and puts it into params named
    */
  protected function dataToNamed(){
  	$params = is_array($this->request->params['named']) ? $this->request->params['named'] : array();
  	$data = isset($this->request->data['Search']) ? $this->request->data['Search'] : array();
  	$this->request->params['named'] = array_merge($data, $params);
  }
}

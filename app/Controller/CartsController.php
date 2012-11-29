<?php
App::uses('AppController', 'Controller');
class CartsController extends AppController{
	public $uses = array();
  
  public function beforeFilter(){
    parent::beforeFilter();
    $this->Auth->allow();
  }
  
  public function beforeRender(){
    parent::beforeRender();
    $this->set('cart', $this->Cart->get());
  }
  
  
  /**
	*  Show my cart.
	*/
  public function index(){
  }
  
  public function add($item_id = null, $to_order = false){
    if($this->IcingCart->add($item_id)){
    	if($to_order){
    		$this->redirect(array('controller' => 'orders', 'action' => 'edit'));
    	}
    } else {
    	$this->badFlash('Unable to add item to cart.');
    }
    
    if($this->request->isAjax()){
      $this->render('update');
    } else {
      $this->render('index');
    }
  }
  
  public function remove($item_id = null, $redirect = false){
  	if($this->IcingCart->remove($item_id)){
  		if($redirect){
				$this->redirect(str_replace("|","/",$redirect));
			}
  	} else {
  		$this->badFlash('Unable to remove item from cart.');
  	}
    
    if($this->request->isAjax()){
      $this->render('update');
    }
    else {
      $this->render('index');
    }
  }
}

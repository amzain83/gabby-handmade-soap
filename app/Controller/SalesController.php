<?php
App::uses('AppController', 'Controller');
/**
 * Sales Controller
 *
 * @property Sale $Sale
 */
class SalesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sale->recursive = 0;
		$this->set('sales', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Sale->id = $id;
		if (!$this->Sale->exists()) {
			throw new NotFoundException(__('Invalid sale'));
		}
		$this->set('sale', $this->Sale->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sale->create();
			if ($this->Sale->save($this->request->data)) {
				$this->Session->setFlash(__('The sale has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale could not be saved. Please, try again.'));
			}
		}
		$items = $this->Sale->Item->find('list');
		$orders = $this->Sale->Order->find('list');
		$shippingTypes = $this->Sale->ShippingType->find('list');
		$this->set(compact('items', 'orders', 'shippingTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Sale->id = $id;
		if (!$this->Sale->exists()) {
			throw new NotFoundException(__('Invalid sale'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Sale->save($this->request->data)) {
				$this->Session->setFlash(__('The sale has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Sale->read(null, $id);
		}
		$items = $this->Sale->Item->find('list');
		$orders = $this->Sale->Order->find('list');
		$shippingTypes = $this->Sale->ShippingType->find('list');
		$this->set(compact('items', 'orders', 'shippingTypes'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Sale->id = $id;
		if (!$this->Sale->exists()) {
			throw new NotFoundException(__('Invalid sale'));
		}
		if ($this->Sale->delete()) {
			$this->Session->setFlash(__('Sale deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sale was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * ShippingTypes Controller
 *
 * @property ShippingType $ShippingType
 */
class ShippingTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ShippingType->recursive = 0;
		$this->set('shippingTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ShippingType->id = $id;
		if (!$this->ShippingType->exists()) {
			throw new NotFoundException(__('Invalid shipping type'));
		}
		$this->set('shippingType', $this->ShippingType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ShippingType->create();
			if ($this->ShippingType->save($this->request->data)) {
				$this->Session->setFlash(__('The shipping type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shipping type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ShippingType->id = $id;
		if (!$this->ShippingType->exists()) {
			throw new NotFoundException(__('Invalid shipping type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ShippingType->save($this->request->data)) {
				$this->Session->setFlash(__('The shipping type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shipping type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ShippingType->read(null, $id);
		}
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
		$this->ShippingType->id = $id;
		if (!$this->ShippingType->exists()) {
			throw new NotFoundException(__('Invalid shipping type'));
		}
		if ($this->ShippingType->delete()) {
			$this->Session->setFlash(__('Shipping type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Shipping type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

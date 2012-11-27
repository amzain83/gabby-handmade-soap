<?php
App::uses('AppController', 'Controller');
/**
 * SubCategories Controller
 *
 * @property SubCategory $SubCategory
 */
class SubCategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SubCategory->recursive = 0;
		$this->set('subCategories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SubCategory->id = $id;
		if (!$this->SubCategory->exists()) {
			throw new NotFoundException(__('Invalid sub category'));
		}
		$this->set('subCategory', $this->SubCategory->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubCategory->create();
			if ($this->SubCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The sub category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub category could not be saved. Please, try again.'));
			}
		}
		$categories = $this->SubCategory->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SubCategory->id = $id;
		if (!$this->SubCategory->exists()) {
			throw new NotFoundException(__('Invalid sub category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SubCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The sub category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub category could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SubCategory->read(null, $id);
		}
		$categories = $this->SubCategory->Category->find('list');
		$this->set(compact('categories'));
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
		$this->SubCategory->id = $id;
		if (!$this->SubCategory->exists()) {
			throw new NotFoundException(__('Invalid sub category'));
		}
		if ($this->SubCategory->delete()) {
			$this->Session->setFlash(__('Sub category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sub category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

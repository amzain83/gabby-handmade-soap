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
	public function admin_index() {
		$this->SubCategory->recursive = 0;
		$this->set('subCategories', $this->paginate());
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SubCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The sub category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub category could not be saved. Please, try again.'));
			}
		} elseif($id) {
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
	public function admin_delete($id = null) {
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

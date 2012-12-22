<?php
App::uses('AppController', 'Controller');
/**
 * Items Controller
 *
 * @property Item $Item
 */
class ItemsController extends AppController {
	
	public $helpers = array('WebTechNick.Ckeditor');
	public $paginate = array(
		'Item' => array(
			'contain' => array(
				'Category',
				'SubCategory',
				'Upload',
				'Status'
			),
			'limit' => 25,
		)
	);

/**
 * index method
 *
 * @return void
 */
	public function index($filter = null) {
		if(isset($this->request->data['Search']['filter'])){
			$filter = $this->request->data['Search']['filter'];
		}
		$this->dataToNamed();
		$conditions = array_merge(
      $this->Item->search($this->request->params['named']),
      $this->Item->generateFilterConditions($filter)
    );
    $items = $this->paginate('Item', $conditions);
    if($this->request->params['paging']['Item']['count'] == 1){
    	$this->redirect(array('action' => 'view', $items[0]['Item']['slug']));
    }
		$this->set('items', $items);
		$this->set('filter', $filter);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($slug = null) {
		$item = $this->Item->findBySlug($slug, $this->isAdmin());
		if(empty($item)){
			$this->infoFlash("Unable to find item $slug");
			$this->redirect(array('action' => 'index'));
		}
		$this->set('item', $item);
	}
	
	/**
	* Admin functions
	*/
	public function admin_index(){
		$this->Item->recursive = 0;
		$this->set('items', $this->paginate());
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
			if ($this->Item->saveAll($this->request->data)) {
				$this->goodFlash(__('The item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->badFlash(__('The item could not be saved. Please, try again.'));
			}
		} elseif($id) {
			$this->request->data = $this->Item->read(null, $id);
		}
		$categories = $this->Item->Category->find('list');
		$subCategories = $this->Item->SubCategory->find('list');
		$statuses = $this->Item->Status->find('list');
		$this->set(compact('categories', 'subCategories', 'statuses'));
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
		$this->Item->id = $id;
		if (!$this->Item->exists()) {
			throw new NotFoundException(__('Invalid item'));
		}
		if ($this->Item->delete()) {
			$this->goodFlash(__('Item deleted'));
		} else {
			$this->badFlash(__('Item was not deleted'));
		}
		$this->redirect(array('action' => 'index'));
	}
}

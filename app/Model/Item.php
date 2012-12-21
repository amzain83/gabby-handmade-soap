<?php
App::uses('AppModel', 'Model');
/**
 * Item Model
 *
 * @property Category $Category
 * @property SubCategory $SubCategory
 * @property Status $Status
 * @property Sale $Sale
 * @property Upload $Upload
 */
class Item extends AppModel {
	
	public $searchFields = array('Item.title','Item.short_description','Item.description');

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'category_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sub_category_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Item name required',
			),
		),
		'slug' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Slug required',
			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => 'Slug must be unique.',
			),
		),
		'qty' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Specify a quantity',
			),
		),
		'price_dollars' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Please specify the price',
			),
		),
		'cost_dollars' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Please specify cost',
			),
		),
		'shipping_price_dollars' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Please specify custom shipping cost',
			),
		),
		'short_description' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Short description is required, this is the line item text',
			),
		),
		'description' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Description of product.',
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
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SubCategory' => array(
			'className' => 'SubCategory',
			'foreignKey' => 'sub_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Status' => array(
			'className' => 'Status',
			'foreignKey' => 'status_id',
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
		'Sale' => array(
			'className' => 'Sale',
			'foreignKey' => 'item_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Upload' => array(
			'className' => 'Upload',
			'foreignKey' => 'item_id',
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
	* Slug if we need it.
	*/
	public function beforeValidate($options = array()){
		if(isset($this->data[$this->alias]['title']) && isset($this->data[$this->alias]['slug']) && empty($this->data[$this->alias]['slug'])){
			$this->data[$this->alias]['slug'] = slugify($this->data[$this->alias]['title']);
		}
		return true;
	}
	
	/**
	* Slug by id
	*/
	public function slug($id = null){
		if($id) $this->id = $id;
		if($this->id && $this->exists()){
			return $this->saveField('slug', slugify($this->field('title')));
		}
		return false;
	}
	/**
	* Find the item id by slug
	*/
	public function findIdBySlug($slug = null){
		return $this->field('id', array('Item.slug' => $slug));
	}
	/**
	* find the item by slug this is for the view
	* @param string slug
	*/
	public function findBySlug($slug = null, $show_all = false){
		if(!$slug){
			return false;
		}
		$conditions = array('Item.slug' => $slug);
		if(!$show_all){
			$conditions['Status.name'] = 'Available';
		}
		return $this->find('first', array(
			'conditions' => $conditions
		));
	}
	
	/**
	* Set the item status programatically
	* @param string status (Available, Unavailable, Sold)
	* @param int id of item to set
	* @return boolean success
	*/
	public function setStatus($status, $id = null){
		if($id) $this->id = $id;
		if($this->exists()){
			//TODO
		}
		return false;
	}
	
	/**
    * Take in a search string and build the complex SQL conditions to use in pagination or 
    * flat query
    * 
    * @param string search string (ie "Bracelets,Rings", "45134,J3879", etc..
    * @param boolean exact match.  If true, do not use wildcards (%).  false by default
    * @param boolean view_all, if true, do not filter by status => Available. false by default
    */
  function buildKeywordSearchConditions($search = null, $exact_match = false, $view_all = false){
	  $wildcard = $exact_match ? '' : '%';
	  $status = $view_all ? '%' : 'Available';
	  $keywords = explode(',',$search);
	  
	  $conditions = array();
	  foreach($keywords as $keyword){
	    $keyword = trim($keyword);
	    $words = explode(' ',$keyword);
	    
	    if(!$exact_match){
	      $keyword = str_replace(' ', $wildcard, $keyword);
	    }
	    $value = $wildcard.$keyword.$wildcard;
	    
	    $sub_conditions = array(
        'AND' => array(
          'Status.name LIKE' => $status
        ),
        'OR' => array(
          'Item.description LIKE' => $value,
          'Item.price_dollars LIKE' => $value,
          'Category.name LIKE' => $value,
          'SubCategory.name LIKE' => $value,
          'Item.title LIKE' => $value,
          'Item.slug LIKE' => $value,
          'Item.id LIKE' => $value,
        ),
      );
      
      foreach($words as $word){
        $word = Inflector::singularize($word);
        $space = (strtolower($word) == 'ring') ? ' ' : '';
        $sub_conditions['OR']['AND'][] = array('Item.description LIKE' => $wildcard.$space.$word.$wildcard);
      }
      
	    $conditions['OR'][] = $sub_conditions;
	  }
	  
	  return $conditions;
	}
	
	/**
	* Overwrite the filter conditions to build from keywords, much more advanced.
	* @param string filter
	* @return array of conditions.
	*/
	public function generateFilterConditions($filter = null){
		return $this->buildKeywordSearchConditions($filter);
	}
}

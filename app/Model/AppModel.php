<?php
App::uses('Model', 'Model');
class AppModel extends Model {
	public $actsAs = array('Containable');
	public $searchFields = array();
	
	/**
	* Return the last query executed
	* @return array last query
	*/
	public function getLastQuery(){
		return array_pop(array_shift($this->getDataSource()->getLog(false, false)));
	}
	/**
	* Overwrite find so I can do some nice things with it.
	* @param string find type
	* - last : find last record by created date
	* @param array of options
	*/
	public function find($type, $options = array()){
		switch($type){
			case 'last':
				$options = array_merge(
					$options,
					array('order' => "{$this->alias}.{$this->primaryKey} DESC")
					);
				return parent::find('first', $options);
			case 'superlist':
				$total_fields = count($options['fields']);
				
				if(!isset($options['fields']) || $total_fields < 3){
					return parent::find('list', $options);
				}
				if(!isset($options['separator'])){
					$options['separator'] = ' ';
				}
				
				if(!isset($options['format'])){
					$options['format'] = '%s';
					for($i = 2; $i<$total_fields;$i++){
						$options['format'] .= "{$options['separator']}%s";
					}
				}
				$options['recursive'] = -1;              
				$list = parent::find('all', $options);
				
				$formatVals = array();
				$formatVals[0] = $options['format'];
				for($i = 1; $i < $total_fields; $i++){
					$formatVals[$i] = "{n}.{$this->alias}.".str_replace("{$this->alias}.", '', $options['fields'][$i]);
				}
				
				return Set::combine(
					$list,
					"{n}.{$this->alias}.{$this->primaryKey}",
					$formatVals
				);
				break;
			default: 
				return parent::find($type, $options);
		}
	}
	/**
	* returns the user_id/member_id for a logged in member/user
	* @param mixed $user usually blank -or- array('id'=>$user_id)
	* @return int $user_id
	*/
	function getUserId($user=null) {
		if (is_numeric($user)) {
			return intval($user);
		}
		App::uses('AuthComponent','Controller/Component');
		return AuthComponent::user('id');
	}
	/**
	* return conditions based on searchable fields and filter
	* @param string filter
	* @return conditions array
	*/
	function generateFilterConditions($filter = null, $pre = ''){
		$retval = array();
		if($filter){
			foreach($this->searchFields as $field){
				$retval['OR']["$field LIKE"] = $pre . $filter . '%';
			}
		}
		return $retval;
	}
	/**
	* Generate a find or the conditions for a find
	* based on the search criteria  passed into it.
	*
	* @param array params to search on
	* @param array of options
	*  - order => array of how to order it (Model.created ASC by default)
	*  - recursive => int of recursive type (0 by default)
	*  - find => 'all' for find all to be preformed, 'first' for find first to be preformed, false if you just want conditions (false by default)
	*  - fields => array of fields to select. (* by default)
	*/
	function search($params = array(), $options = array()){
		$options = array_merge(
			array(
				'order' => array("{$this->alias}.created ASC"),
				'recursive' => 0,
				'fields' => array('*'),
				'find' => false,
				),
			$options
			);
		if(empty($this->_fields)){
			$this->_fields = $this->getColumnTypes();
		}
		
		//search through params, make sure there is a field that coresponds.
		$conditions = array();
		$field_options = array('LIKE','>=','<=','>','<');
		foreach($params as $key => $value){
			if(isset($this->_fields[$key]) && $value){
				if(is_array($value)){
					if(!empty($value['year'])){
						$conditions['AND']["{$this->alias}.$key"] = $value['year'] ."-". $value['month'] . "-" . $value['day'];
					}
				} else {
					$values = explode('[or]', $value);
					foreach($values as $value){
						$query_opt = (strpos($value, '%') !== false || strpos($value, '*') !== false) ? ' LIKE' :'';
						if(strpos($value, '*') !== false){
							$value = str_replace('*','%', $value);
						}
						if(count($values) == 1){
							$conditions['AND']["{$this->alias}.$key$query_opt"] = $value;
						} else {
							$conditions['AND']['OR'][] = array("{$this->alias}.$key$query_opt" => $value);
						}
					}
				}
			} elseif(isset($this->_fields['modified']) && ($key == 'start_date' || $key == 'end_date') && !empty($value['year'])){
				$opt = $key == 'start_date' ? '>=' : '<=';
				$conditions['AND']["{$this->alias}.created $opt"] = $params[$key]['year'] ."-". $params[$key]['month'] . "-" . $params[$key]['day'];
			} else{
				foreach($field_options as $opt){
					if(strpos($key, $opt)){
						$field = substr($key, 0, strlen($key) - (strlen($opt) + 1));
						if(isset($this->_fields[$field]) && $value){
							$conditions['AND']["{$this->alias}.$key"] = $value;
							break;
						}
					}
				}
			}
		}
		if($options['find']){
			return $this->find($options['find'], array(
				'conditions' => $conditions,
				'order' => $options['order'],
				'recursive' => $options['recursive'],
				'fields' => $options['fields'],
				));
		}
		else {
			return $conditions;
		}
	}
  /**
  * String to datetime stamp
  * @param string that is parsable by str2time
  * @return date time string for MYSQL
  */
  function str2datetime($str = 'now'){
  	if(is_array($str) && isset($str['month']) && isset($str['day']) && isset($str['year'])){
  		$str = "{$str['month']}/{$str['day']}/{$str['year']}";
  	}
  	return date("Y-m-d H:i:s", strtotime($str));
  }
}

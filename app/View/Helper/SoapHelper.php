<?php
App::uses('AppHelper', 'View');
class SoapHelper extends AppHelper {
	/**
	* Decides if the current page is active or not
	* @param string title
	* @return string null or 'active' based on current controller
	*/
	public function admin_active($title = null){
		if($this->request->params['controller'] == $title){
			return 'active';
		}
		return null;
	}
}

<?php
class Controller {
	
	public $model;
	public $view;

	public function __construct($controllerName) {
		$this->view = new View($this);
		$this->model = Model::factory_model($controllerName);
	}
	
	function action_index() {
		$this->view->generate();
	}
	
	function get_name_controller() {
		$className = get_class($this);
		$className = explode('_', $className);
		if (isset($className[1])) {
			return strtolower($className[1]);
		}
		
		return 'main';
	}
}

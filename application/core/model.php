<?php
class Model {
	public $pdo;

	function  __construct() {
		
	}

	static function factory_model($nameModel) {
		$classModel = "Model_$nameModel";
		$modelFile = strtolower($classModel).".php";
		$pathModel = "application/models/".$modelFile;
		if(file_exists($pathModel)) {
			include "application/models/".$modelFile;
			return new $classModel();
		}
		else {
			return new Model();
		}
	}
	
	function __destruct() {
		
	}
}
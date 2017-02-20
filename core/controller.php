<?php
class controller {

	protected $db; 

	public function __construct(){
		global $config;

		
		$this->db= new PDO("mysql:dbname=".$config['dbname'].';host='.$config['host'],$config['dbuser'],$config['dbpass']);

	}

	public function loadView($viewsName,$viewsData = array()){
		
		extract($viewsData);
		include 'views/'.$viewsName.'.php';

	}

	public function loadTemplate($viewsName,$viewsData = array()){
		include 'views/template.php';
	}

	public function loadViewInTemplate($viewsName,$viewsData = array()){
		extract($viewsData);
		include 'views/'.$viewsName.'.php';

	}



}

?>
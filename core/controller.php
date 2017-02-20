<?php
class controller {

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
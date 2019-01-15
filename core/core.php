<?php
class Core{

	public function run(){

		$url = '/';

		$params = array();

		if(isset($_GET['url'])){
			$url.=$_GET['url'];
		}

		if (!empty($url) && $url!='/'){

			$url = explode('/',$url);

			array_shift($url);			

			$currentController =$url[0].'Controller';

			array_shift($url);

			if(isset($url[0]) && $url != '/'){

				$currentAction = $url[0];
				array_shift($url);

			}else{

				$currentAction = 'index';
			}

			if(count($url)){
				$params=$url;
			}
		}else{

			$currentController =  'homeController';
			$currentAction = 'index';
		}
		if(!file_exists('controllers/'.$currentController.'.php') || !method_exists($currentController, $currentAction)){
			$p = new Pages();
			
			$name = explode('Controller', $currentController);
			$page = $p->existPage($name[0], 'Controller');
			
			if( $page == 0){
				$currentController='notfoundController';
				$currentAction = 'index';
			}else{
								
				$currentController='pagesController';
				$currentAction = 'index';
				$params = array($name[0]);	
			} 				
		}
		$c = new $currentController();
		
		call_user_func_array( array($c, $currentAction), $params);

			
	}
}

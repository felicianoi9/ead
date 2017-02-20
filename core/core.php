<?php

class core{
	
	public function teste(){
		echo "Teste core";
	}

	public function run(){
		//$url=substr($_SERVER['PHP_SELF'],14);
		$url = explode("index.php", $_SERVER['PHP_SELF']);
		$url = end($url);

		$params = array();

		if(!empty($url)){
			$url=explode('/',$url);
			array_shift($url);
			
			$currentController = $url[0].'controller';
			array_shift($url);

			if(isset($url[0])){
				$currentAction=$url[0];
				array_shift($url);

			}else{
				$currentAction="index";

			}

			if(Count($url)>0){
				$params = $url;
			}

		}else{
			$currentController= 'homeController';
			$currentAction ='index';

		}

		
		require_once 'core/controller.php';

		$c = new $currentController();
		call_user_func_array(array($c,$currentAction), $params);
	}

}
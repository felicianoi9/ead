<?php
class homeController extends controller{

	public function __construct(){
		parent::__construct();

		$alunos = new alunos();

		if(!$alunos->isLogged()){
			header("Location:".BASE_URL."login");
		}
	}
	
	public function index(){
		
		$dados=array();

		
		
		$this->loadTemplate('home', $dados);

		
	}

	

}
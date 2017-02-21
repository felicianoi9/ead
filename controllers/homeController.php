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
		
		$dados=array(
			'info'=>array(),
			'cursos'=>array()

			);

		$alunos = new alunos();

		$alunos->setAluno($_SESSION['lgaluno']);

		$dados['info']= $alunos;

		$cursos= new cursos();

		$dados['cursos'] = $cursos->getCursosDoAluno($alunos->getID());  
		
		$this->loadTemplate('home', $dados);

		
	}

	

}
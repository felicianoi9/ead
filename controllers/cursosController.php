<?php
class cursosController extends controller{

	public function __construct(){
		parent::__construct();

		$alunos = new alunos();

		if(!$alunos->isLogged()){
			header("Location:".BASE_URL."login");
		}
	}
	
	public function index(){
		
		header("Location:".BASE_URL);		
	}

	public function entrar($id){
		$dados=array(
			'info'=>array(),
			'curso'=>array(),
			'aulas'=>array()

			);
		$alunos=new alunos();
		$alunos->setAluno($_SESSION['lgaluno']);
		$dados['info']= $alunos;


		if($alunos->isInscrito($id)){
			$curso=new cursos();
			$curso->setCurso($id);
			$dados['curso']=$curso;
			
			$this->loadTemplate('curso_entrar',$dados);
		}else{
			header("Location:".BASE_URL);

		}

		

	}

	

}


?>
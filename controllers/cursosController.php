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
			'modulos'=>array()

			);
		$alunos=new alunos();
		$alunos->setAluno($_SESSION['lgaluno']);
		$dados['info']= $alunos;


		if($alunos->isInscrito($id)){
			$curso=new cursos();
			$curso->setCurso($id);
			$dados['curso']=$curso;

			$modulos = new modulos();
			$dados['modulos']=$modulos->getModulos($id);
			
			$this->loadTemplate('curso_entrar',$dados);
		}else{
			header("Location:".BASE_URL);

		}

	}

	public function aula($id_aula){
		$dados=array(
			'info'=>array(),
			'curso'=>array(),
			'modulos'=>array(),
			'aula_info' => array()

			);
		$alunos=new alunos();
		$alunos->setAluno($_SESSION['lgaluno']);
		$dados['info']= $alunos;

		$aula= new aulas();
		$id=$aula->getCursoDeAula($id_aula);




		if($alunos->isInscrito($id)){
			$curso=new cursos();
			$curso->setCurso($id);
			$dados['curso']=$curso;

			$modulos = new modulos();
			$dados['modulos']=$modulos->getModulos($id);
			$dados['aula_info'] = $aula->getAula($id_aula);

			if($dados['aula_info']['tipo']=='video'){
				$view='curso_aula_video';
			}else{
				$view='curso_aula_poll';
			}

			if(isset($_POST['duvida']) && !empty($_POST['duvida'])){

				$duvida = addslashes($_POST['duvida']);

				$aula->setDuvida($duvida, $alunos->getId());

			}
			
			$this->loadTemplate($view, $dados);
		}else{
			header("Location:".BASE_URL);

		}
			

	}

	

}


?>
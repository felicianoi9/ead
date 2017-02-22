<?php
class cursos extends model{
	private $info;

	public function getCursosDoAluno($id){
		$array = array();

		$sql = "
			SELECT 
				aluno_curso.id_curso ,
				cursos.nome,
				cursos.imagem,
				cursos.descricao
			FROM 
				aluno_curso 
			LEFT JOIN cursos
				ON aluno_curso.id_curso = cursos.id 		
			WHERE 
				aluno_curso.id_aluno='$id' ";
		$sql = $this->db->query($sql);
		

		if ($sql->rowCount()>0){
			$array = $sql->fetchAll();
		}	

	return $array;	

	}

	public function setCurso($id){

		$sql = "SELECT * FROM cursos WHERE id='$id' ";
		$sql = $this->db->query($sql);

		if($sql->rowCount()>0){
			$this->info = $sql->fetchAll();


		}

		

	}

	public function getNome(){
		return $this->info[0]['nome'];
	}

	public function getImagem(){
		return $this->info[0]['imagem'];
	}

	public function getDescricao(){
		return $this->info[0]['descricao'];
	}
}



?>
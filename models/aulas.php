<?php
class aulas extends model{

	public function getAulasDoModulo($id){

		$array= array();

		$sql = "SELECT * FROM aulas WHERE id_modulo='$id' ORDER BY ordem ";
		$sql = $this->db->query($sql);

		if($sql->rowCount()>0){

			$array = $sql->fetchAll();

			foreach ($array as $aulaChave => $aula) {
				if($aula['tipo']=='video'){
					$sql = "SELECT nome FROM videos WHERE id_aula='".$aula['id']."' ";
					$sql = $this->db->query($sql)->fetch();
					
					$array[$aulaChave]['nome']=$sql['nome']; 


				}elseif($aula['tipo']=='poll'){
					
					
					$array[$aulaChave]['nome']='Teste seus conhecimentos'; 

				}
			}

		}


		return $array;

	}

	public function getCursoDeAula($id_aula){

		$sql = "SELECT id_curso FROM aulas WHERE id='$id_aula' ";
		$sql = $this->db->query($sql);

		if($sql->rowCount()>0){

			$row=$sql->fetch();
			return $row['id_curso'];

		}else{
			return 0;
		}

	}

	public function getAula($id_aula){
		$array=array();
		$sql= "SELECT tipo FROM aulas WHERE id='$id_aula' ";
		$sql=$this->db->query($sql);

		if($sql->rowCount()>0){

			$row=$sql->fetch();
			
			if($row['tipo']=='video'){

				$sql = "SELECT * FROM videos WHERE id='$id_aula' ";
				$sql = $this->db->query($sql);

				$array= $sql->fetch();
				$array['tipo']='video';

			}elseif($row['tipo']=='poll'){

				$sql = "SELECT * FROM questionario WHERE id='$id_aula' ";
				$sql = $this->db->query($sql);

				$array= $sql->fetch();
				$array['tipo']='poll';
			}

		}


		return $array;
	}

	public function setDuvida($duvida, $aluno){

		$sql ="INSERT INTO duvidas SET data_duvida=NOW() , duvida='$duvida', id_aluno='$aluno'  ";
		$this->db->query($sql);

	}

}




?>
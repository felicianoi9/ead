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
}




?>
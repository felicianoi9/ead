<?php
class postsController extends controller{
	public function index(){
		echo "Lista das POsgtagens!";
	}

	public function ver($nome,$sobrenome){
		echo "A notiicia é : ".$nome."  ".$sobrenome;
	}

}

?>
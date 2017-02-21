<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
<body>	

<h1>Seus Cursos:</h1>


<?php foreach($cursos as $curso): ?>
<a href="<?php echo BASE_URL;?>curos/entrar/<?php echo $curso['id_curso'];?>">	
<div class="cursoitem">
	<img src="" border="0" width="300" height="200"  /><br/><br/>
	<strong><?php echo $curso['nome'];?></strong><br/><br/>
	<?php echo $curso['descricao'];?>
</div>
</a>
<?php endforeach; ?>
</body>
</html>

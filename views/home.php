<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
<body>	

<h1>Seus Cursos:</h1>


<?php foreach($cursos as $curso): ?>
<a href="<?php echo BASE_URL; ?>cursos/entrar/<?php echo $curso['id_curso']; ?>">	
<div class="cursoitem">
	<img src="<?php echo BASE_URL;?>assets/images/cursos/<?php echo $curso['imagem'];?>" border="0" width="176" height="120"  /><br/>
	<strong><?php echo $curso['nome'];?></strong><br/>	<?php echo $curso['descricao'];?>
</div>
</a>
<?php endforeach; ?>
</body>
</html>

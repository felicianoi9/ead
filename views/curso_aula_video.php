<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<div class="cursoinfo">

	<img src="<?php echo BASE_URL;?>assets/images/cursos/<?php echo $curso->getImagem();?>" border="0" width="80" height="60"  />
	<h3><?php echo $curso->getNome(); ?></h3>
	<?php echo $curso->getDescricao(); ?>
	
</div>

<div class="curso_left" >
	<?php foreach ($modulos as $modulo): ?>
		<div class="modulo"  > <?php echo $modulo['nome'];?> </div>
		<?php foreach ($modulo['aulas'] as $aula): ?>
		<a href="<?php echo BASE_URL; ?>cursos/aula/<?php echo $aula['id']; ?>"><div class="aula"  > <?php echo $aula['nome'];?> </div></a>
	<?php endforeach; ?>
	<?php endforeach; ?>

</div>

<div class="curso_right" >

<h1>Vídeos - <?php echo $aula_info['nome'];?></h1>
<iframe id="video" style="width: 100%" frameborder="0" src="//player.vimeo.com/video/<?php echo $aula_info['url'];?>"></iframe><br/>
<?php echo $aula_info['descricao'];?><br/>
<hr/>
<h3>Dúvidas? Envia sua pergunta!</h3>
<form method="POST" class="form_duvida">
	<textarea name="duvida" ></textarea><br/><br/>
	<input type="submit" value="Enviar Dúvida"  />
</form>

</div>
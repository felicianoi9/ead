<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
<html>
	<head>
		<meta  http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Titulo da pagina</title>
		
		<link type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet" />
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.1.1.min.js" ></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js" ></script>

	</head>
	<body>
		<div class="topo" >
			<a href="<?php echo BASE_URL;?>login/logout" ><div> Sair </div> </a>
			
			<div class="topousuario"><?php echo $viewsData['info']->getNome(); ?></div>
			
		
		</div>
		

		<?php  $this->loadViewInTemplate($viewsName,$viewsData );?>
			

		

	</body>



</html>
<?php require INSTALL_PATH . 'templates/header.php';?>
	<div class="section">
		<div class="main">
			<div class="success_tip cc"> 
				<a href="../admin">La instalación está completa, ingrese a la administración de fondo</a>
				<p><?php echo $config['alreadyInstallInfo']?><p>
			</div>
		</div>
	</div>
	<div class="btn-box">
		<a href="../index.php" class="btn">Sitio web</a>
		<a href="../admin" class="btn">Administrar</a>
	</div>
<?php require INSTALL_PATH . 'templates/footer.php';?>
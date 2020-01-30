<?php require INSTALL_PATH . 'templates/header.php';?>
	<div class="section">
		<div class="main server">
			<table width="100%">
				<tr>
					<td class="td1">Requisitos</td>
					<td class="td1" width="25%">Recomendado</td>
					<td class="td1" width="25%">Estado actual</td>
					<td class="td1" width="25%">Requisitos mínimos</td>
				</tr>
				<tr>
					<td>Sistema operativo</td>
					<td>Tipo UNIX</td>
					<td><span class="correct_span">&radic;</span> <?php echo $server['os']; ?></td>
					<td>No restringido</td>
				</tr>
				<tr>
					<td>Versión PHP</td>
					<td>>5.3.x</td>
					<td><span class="correct_span">&radic;</span> <?php echo $server['php']; ?></td>
					<td>5.3.0</td>
				</tr>
				<tr>
					<td>Versión Mysql</td>
					<td>>5.x.x</td>
					<td><?php echo $server['mysql']; ?></td>
					<td>5.0</td>
				</tr>
				<tr>
					<td>Subir archivo adjunto</td>
					<td>>2M</td>
					<td><?php echo $server['uploadSize']; ?></td>
					<td>No restringido</td>
				</tr>
				<tr>
					<td>session</td>
					<td>Abierto</td>
					<td><?php echo $server['session']; ?></td>
					<td>Abierto</td>
				</tr>
				<tr>
					<td>Extencion curl</td>
					<td>Abierto</td>
					<td><?php echo $server['curl']; ?></td>
					<td>Abierto</td>
				</tr>
			</table>
			<table width="100%">
				<tr>
					<td class="td1">Verificación de permisos de directorio y archivo</td>
					<td class="td1" width="25%">Escribir</td>
					<td class="td1" width="25%">Leer</td>
				</tr>
				<?php
                foreach ($folder as $dir) {
                    $Testdir = $site_path.$dir;
                    dir_create($Testdir);
                    if (TestWrite($Testdir)) {
                        $w = '<span class="correct_span">&radic;</span>Escribible ';
                    } else {
                        $w = '<span class="correct_span error_span">&radic;</span>No escribible ';
                        $error++;
                    }
                    if (is_readable($Testdir)) {
                        $r = '<span class="correct_span">&radic;</span>Legible' ;
                    } else {
                        $r = '<span class="correct_span error_span">&radic;</span>Ilegible';
                        $error++;
                    } ?>
				<tr>
					<td><?php echo $dir; ?></td>
					<td><?php echo $w; ?></td>
					<td><?php echo $r; ?></td>
				</tr>
				<?php
                } ?>
			</table>
			</div>
		</div>
		<div class="btn-box">
		<a href="./index.php?step=2" class="btn">Actualizar</a>
		<?php if (empty($error)) {
                    ?>
			<a href="./index.php?step=3" class="btn">Siguiente</a>
		<?php
                } else {
                    ?>
			<button href="#" class="btn error" disabled>Error actual </button>
		<?php
                } ?>
		</div>
<?php require INSTALL_PATH . 'templates/footer.php';?>
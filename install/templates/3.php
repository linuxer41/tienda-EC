<?php require INSTALL_PATH . 'templates/header.php';?>
	<form id="J_install_form" action="index.php?step=4" method="post">
		<div class="section">
			<div class="main server">
				<table width="100%">
					<tr>
						<td class="td1" width="100">Información de la base de datos</td>
						<td class="td1" width="200">&nbsp;</td>
						<td class="td1">&nbsp;</td>
					</tr>
					<tr>
						<td class="tar">Servidor de base de datos:</td>
						<td><input type="text" name="dbhost" id="dbhost" value="<?php echo $config['dbHost'] ?>" class="input"></td>
						<td><div id="J_install_tip_dbhost"><span class="gray">Dirección del servidor de la base de datos, generalmente localhost o 127.0.0.1</span></div></td>
					</tr>
					<tr>
						<td class="tar">Puerto de base de datos:</td>
						<td><input type="text" name="dbport" id="dbport" value="<?php echo $config['dbPort'] ?>" class="input"></td>
						<td><div id="J_install_tip_dbport"><span class="gray">Puerto del servidor de bases de datos, generalmente 3306</span></div></td>
					</tr>
					<tr>
						<td class="tar">Nombre de usuario de la base de datos:</td>
						<td><input type="text" name="dbuser" id="dbuser" value="<?php echo $config['dbUser'] ?>" class="input"></td>
						<td><div id="J_install_tip_dbuser"></div></td>
					</tr>
					<tr>
						<td class="tar">Contraseña de la base de datos:</td>
						<td><input type="text" name="dbpw" id="dbpw" value="<?php echo $config['dbPass'] ?>" class="input" autoComplete="off"></td>
						<td><div id="J_install_tip_dbpw"><span class="gray">Contraseña de la base de datos, no establezca caracteres especiales, como '*', '&', '<', '>', '\', espacio, etc.</span></div></td>
					</tr>
					<tr>
						<td class="tar">Probar la conexión de la base de datos:</td>
						<td><button type="button" class="btn" onclick="TestDbPwd()">Prueba de conexión</button></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td class="tar">Nombre de la base de datos:</td>
						<td><input type="text" name="dbname" id="dbname" value="<?php echo $config['dbName'] ?>" class="input"></td>
						<td><div id="J_install_tip_dbname"></div></td>
					</tr>
					<tr>
						<td class="tar">Prefijo de tabla de base de datos:</td>
						<td><input type="text" name="dbprefix" id="dbprefix" value="<?php echo $config['dbPrefix'] ?>" class="input"></td>
						<td><div id="J_install_tip_dbprefix"><span class="gray">Se recomienda utilizar el </span></div></td>
					</tr>
				</table>
				<?php if ($independent):?>
				<table width="100%">
					<tr>
						<td class="td1" width="100">Configuración del sitio web</td>
						<td class="td1" width="200">&nbsp;</td>
						<td class="td1">&nbsp;</td>
					</tr>
					<tr>
						<td class="tar">Nombre del sitio：</td>
						<td><input type="text" name="sitename" value="<?php echo $config['siteName'] ?>" class="input"></td>
						<td><div id="J_install_tip_sitename"></div></td>
					</tr>
					<tr>
						<td class="tar">Nombre de dominio del sitio web:</td>
						<td><input type="text" name="siteurl" value="http://<?php echo $domain ?>" id="siteurl" class="input" autoComplete="off"></td>
						<td><div id="J_install_tip_siteurl"><span class="gray">Por favor no termine con "/"</span></div></td>
					</tr>
					<tr>
						<td class="tar">Palabras clave:</td>
						<td><input type="text" name="sitekeywords" value="<?php echo $config['siteKeywords'] ?>" class="input" autoComplete="off"></td>
						<td><div id="J_install_tip_sitekeywords"></div></td>
					</tr>
					<tr>
						<td class="tar">Descripción:</td>
						<td><input type="text" name="sitedescription" class="input" value="<?php echo $config['siteDescription']?>"></td>
						<td><div id="J_install_tip_siteinfo"></div></td>
					</tr>
				</table>
				<table width="100%">
					<tr>
						<td class="td1" width="100">Información del fundador</td>
						<td class="td1" width="200">&nbsp;</td>
						<td class="td1">&nbsp;</td>
					</tr>
					<tr>
						<td class="tar">Cuenta de administrador：</td>
						<td><input type="text" name="manager" value="admin" class="input"></td>
						<td><div id="J_install_tip_manager"></div></td>
					</tr>
					<tr>
						<td class="tar">Contraseña:</td>
						<td><input type="text" name="manager_pwd" id="J_manager_pwd" class="input" autoComplete="off"></td>
						<td><div id="J_install_tip_manager_pwd"></div></td>
					</tr>
					<tr>
						<td class="tar">Repetir contraseña:</td>
						<td><input type="text" name="manager_ckpwd" class="input" autoComplete="off"></td>
						<td><div id="J_install_tip_manager_ckpwd"></div></td>
					</tr>
					<tr>
						<td class="tar">Email：</td>
						<td><input type="text" name="manager_email" class="input" value=""></td>
						<td><div id="J_install_tip_manager_email"></div></td>
					</tr>
				</table>
				<?php else:?>
				<input type="hidden" name="siteurl" value="http://<?php echo $domain ?>" />
				<?php endif;?>
				<input type="hidden" name="independent" value="<?php echo $independent;?>" />
				<div id="J_response_tips" style="display:none;"></div>
			</div>
		</div>
		<div class="btn-box">
			<a href="./index.php?step=2" class="btn">anterior</a>
			<button type="submit" class="btn btn_submit J_install_btn">Crear datos</button>
		</div>
	</form>
	<script src="./templates/js/jquery.js"></script> 
	<script src="./templates/js/validate.js"></script> 
	<script>
		function TestDbPwd(){
		$.ajax({
			type: "POST",
			dataType:'json',
			url: "./index.php?step=3&testdbpwd=1",
			data: {'dbhost':$('#dbhost').val(),'dbuser':$('#dbuser').val(),'dbpw':$('#dbpw').val(),'dbname':$('#dbname').val(),'dbport':$('#dbport').val()},
			success: function(data){
				if(data.status != 1){
					$('#'+ data.type).focus();
				}
				alert(data.info);
			},
			error:function(){
				alert('La configuración del enlace de la base de datos falló');
				$('#dbpw').focus();
			}
		});
	}
	$(function(){
		//聚焦时默认提示
		var focus_tips = {
			dbhost : 'Dirección del servidor de la base de datos, generalmente localhost',
			dbport : 'Puerto del servidor de bases de datos, generalmente 3306',
			dbuser : 'Por favor ingrese el nombre de usuario de la base de datos',
			dbpw : 'Por favor ingrese la contraseña de la base de datos',
			dbname : 'Por favor ingrese un nombre de base de datos',
			dbprefix : 'Se recomienda usar el predeterminado, que debe modificarse cuando se instalan varias bases de datos',
			manager : 'Cuenta fundadora, con todos los derechos administrativos en el fondo del sitio',
			manager_pwd : 'Por favor ingrese la contraseña de administrador',
			manager_ckpwd : 'Por favor ingrese la contraseña de administrador nuevamente',
			sitename : '',
			siteurl : 'Por favor no termine con "/"',
			sitekeywords : '',
			siteinfo : '',
			manager_email : ''
		};


		var install_form = $("#J_install_form"),
			response_tips = $('#J_response_tips');				//后端返回提示

		//validate插件修改了remote ajax验证返回的response处理方式；增加密码强度提示 passwordRank
		install_form.validate({
			//debug : true,
			//onsubmit : false,
			errorPlacement: function(error, element) {
				//错误提示容器
				$('#J_install_tip_'+ element[0].name).html(error);
			},
			errorElement: 'span',
			//invalidHandler : , 未验证通过 回调
			//ignore : '.ignore' 忽略验证
			//onkeyup : true,
			errorClass : 'tips_error',
			validClass		: 'tips_error',
			onkeyup : false,
			focusInvalid : false,
			rules: {
				dbhost: {
					required	: true
				},
				dbport:{
					required	: true
				},
				dbuser: {
					required	: true
				},
				dbname: {
					required	: true
				},
				dbprefix : {
					required	: true
				},
				manager: {
					required	: true
				},
				manager_pwd: {
					required	: true
				},
				manager_ckpwd: {
					required	: true,
					equalTo : '#J_manager_pwd'
				},
				manager_email: {
					required	: true,
					email : true
				}
			},
			highlight	: false,
			unhighlight	: function(element, errorClass, validClass) {
				var tip_elem = $('#J_install_tip_'+ element.name);

					tip_elem.html('<span class="'+ validClass +'" data-text="text"><span>');

			},
			onfocusin	: function(element){
				var name = element.name;
				$('#J_install_tip_'+ name).html('<span data-text="text">'+ focus_tips[name] +'</span>');
				$(element).parents('tr').addClass('current');
			},
			onfocusout	:	function(element){
				var _this = this;
				$(element).parents('tr').removeClass('current');
				
				if(element.name === 'email') {
					//邮箱匹配点击后，延时处理
					setTimeout(function(){
						_this.element(element);
					}, 150);
				}else{
				
					_this.element(element);
					
				}
				
			},
			messages: {
				dbhost: {
					required	: 'La dirección del servidor de la base de datos no puede estar vacía'
				},
				dbport:{
					required	: 'El puerto del servidor de la base de datos no puede estar vacío'
				},
				dbuser: {
					required	: 'El nombre de usuario de la base de datos no puede estar vacío'
				},
				dbname: {
					required	: 'El nombre de la base de datos no puede estar vacío'
				},
				dbprefix : {
					required	: 'El prefijo de la tabla de la base de datos no puede estar vacío'
				},
				manager: {
					required	: 'La cuenta de administrador no puede estar vacía'
				},
				manager_pwd: {
					required	: 'La contraseña no puede estar vacía'
				},
				manager_ckpwd: {
					required	: 'Por favor ingrese la contraseña de administrador nuevamente',
					equalTo : 'Las contraseñas ingresadas dos veces no coinciden. Por favor, vuelva a ingresar入'
				},
				manager_email: {
					required	: 'El correo electrónico no puede estar vacío ',
					email : 'Por favor ingrese la dirección de correo electrónico correcta'
				}
			},
			submitHandler:function(form) {
				form.submit();
				return true;
			}
		});
	});
	</script> 
<?php require INSTALL_PATH . 'templates/footer.php';?>
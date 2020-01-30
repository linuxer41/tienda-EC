<?php
/**
 * 短信模块语言文件
*/

/* 导航条 */
$_LANG['register_sms'] = 'Registrarse o habilitar cuenta SMS';

/* 注册和启用短信功能 */
$_LANG['email'] = 'Dirección de correo electrónico';
$_LANG['password'] = 'Contraseña de acceso';
$_LANG['domain'] = 'Dominio de la tienda en línea';
$_LANG['register_new'] = 'Registrar nueva cuenta';
$_LANG['error_tips'] = '¡Vaya a Configuración de la tienda-> Configuración de SMS, primero registre el servicio de SMS y configure el servicio de SMS correctamente!';
$_LANG['enable_old'] = 'Habilitar cuenta existente';

/* 短信特服信息 */
$_LANG['sms_user_name'] = 'Nombre de usuario';
$_LANG['sms_password'] = 'Contraseña';
$_LANG['sms_domain'] = 'Nombre de dominio:';
$_LANG['sms_num'] = 'Número de servicio especial de SMS:';
$_LANG['sms_count'] = 'Enviar SMS:';
$_LANG['sms_total_money'] = 'Cantidad de compensación total:';
$_LANG['sms_balance'] = 'Balance:';
$_LANG['sms_last_request'] = 'Hora de la última solicitud:';
$_LANG['disable'] = 'Cancelar servicio de SMS';

/* 发送短信 */
$_LANG['phone'] = 'Recibe un número de móvil';
$_LANG['user_rand'] = 'Enviar SMS por nivel de usuario';
$_LANG['phone_notice'] = 'Separe varios números móviles con comas';
$_LANG['msg'] = 'Contenido del mensaje';
$_LANG['msg_notice'] = 'La longitud máxima es de 67 caracteres. La firma se ha configurado de manera predeterminada. No es necesario agregar una firma. ';
$_LANG['send_date'] = 'Tiempo de envío programado';
$_LANG['send_date_notice'] = 'El formato es AAAA-MM-DD HH: II. ';
$_LANG['back_send_history'] = 'Volver a la lista de historial de envíos';
$_LANG['back_charge_history'] = 'Volver a la lista de historial de recarga';

/* 记录查询界面 */
$_LANG['start_date'] = 'Fecha de inicio';
$_LANG['date_notice'] = 'El formato es AAAA-MM-DD. ';
$_LANG['end_date'] = 'Fecha de finalización';
$_LANG['page_size'] = 'Mostrar cantidad por página';
$_LANG['page_size_notice'] = 'Puede estar vacío, indicando 20 registros por página';
$_LANG['page'] = 'Páginas';
$_LANG['page_notice'] = 'Puede estar vacío, que muestra 1 página';
$_LANG['charge'] = 'Por favor ingrese la cantidad que desea recargar';

/* 动作确认信息 */
$_LANG['history_query_error'] = 'Lo sentimos, se produjo un error durante la consulta.';
$_LANG['enable_ok'] = '¡Felicitaciones, ha activado con éxito el servicio de SMS!';
$_LANG['enable_error'] = 'Lo sentimos, no pudo habilitar el servicio de SMS.';
$_LANG['disable_ok'] = 'Has cerrado sesión correctamente en el servicio de SMS.';
$_LANG['disable_error'] = 'El cierre de sesión del servicio de SMS falló.';
$_LANG['register_ok'] = '¡Felicitaciones, se ha registrado con éxito en el servicio de SMS!';
$_LANG['register_error'] = 'Lo sentimos, su registro para el servicio de SMS falló.';
$_LANG['send_ok'] = '¡Felicitaciones, su mensaje de texto ha sido enviado con éxito!';
$_LANG['send_error'] = 'Lo sentimos, se produjo un error al enviar el mensaje de texto.';
$_LANG['error_no'] = 'Identificación de error';
$_LANG['error_msg'] = 'Descripción del error';
$_LANG['empty_info'] = 'Su mensaje de servicio especial de SMS está vacío.';

/* 充值记录 */
$_LANG['order_id'] = 'Número de orden';
$_LANG['money'] = 'Cantidad de recarga';
$_LANG['log_date'] = 'Fecha de recarga';

/* 发送记录 */
$_LANG['sent_phones'] = 'Enviar número de móvil';
$_LANG['content'] = 'Enviar contenido';
$_LANG['charge_num'] = 'Número de facturación';
$_LANG['sent_date'] = 'Fecha de envío';
$_LANG['send_status'] = 'Enviar estado';
$_LANG['status'][0] = 'Fallar';
$_LANG['status'][1] = 'El éxito';
$_LANG['user_list'] = 'Todos los miembros';
$_LANG['please_select'] = 'Por favor seleccione el nivel de membresía';

/* 提示 */
$_LANG['test_now'] = '<span style="color:red;"></span>';
$_LANG['msg_price'] = '<span style="color:green;">SMS 0.20 Bolivianos (BOB)</span>';

/* API返回的错误信息 */
//--注册
$_LANG['api_errors']['register'][1] = 'El nombre de dominio no puede estar vacío.';
$_LANG['api_errors']['register'][2] = 'La dirección de correo electrónico es incorrecta.';
$_LANG['api_errors']['register'][3] = 'El nombre de usuario ya existe.';
$_LANG['api_errors']['register'][4] = 'Error desconocido';
$_LANG['api_errors']['register'][5] = 'Error de interfaz';
//--获取余额
$_LANG['api_errors']['get_balance'][1] = 'El nombre de usuario y la contraseña son incorrectos.';
$_LANG['api_errors']['get_balance'][2] = 'El usuario está deshabilitado.';
//--发送短信
$_LANG['api_errors']['send'][1] = 'El nombre de usuario y la contraseña son incorrectos.';
$_LANG['api_errors']['send'][2] = 'El mensaje de texto es demasiado largo.';
$_LANG['api_errors']['send'][3] = 'La fecha de envío debe ser mayor que la hora actual.';
$_LANG['api_errors']['send'][4] = 'Número equivocado';
$_LANG['api_errors']['send'][5] = 'El saldo de la cuenta es insuficiente.';
$_LANG['api_errors']['send'][6] = 'La cuenta ha sido deshabilitada.';
$_LANG['api_errors']['send'][7] = 'Error de interfaz';
//--历史记录
$_LANG['api_errors']['get_history'][1] = 'El nombre de usuario y la contraseña son incorrectos.';
$_LANG['api_errors']['get_history'][2] = 'No se encontraron registros.';
//--用户验证
$_LANG['api_errors']['auth'][1] = 'Contraseña incorrecta';
$_LANG['api_errors']['auth'][2] = 'El usuario no existe.';

/* 用户服务器检测到的错误信息 */
$_LANG['server_errors'][1] = 'La información de registro no es válida.';//ERROR_INVALID_REGISTER_INFO
$_LANG['server_errors'][2] = 'La información de activación no es válida.';//ERROR_INVALID_ENABLE_INFO
$_LANG['server_errors'][3] = 'La información enviada es incorrecta.';//ERROR_INVALID_SEND_INFO
$_LANG['server_errors'][4] = 'La información de consulta completada es incorrecta.';//ERROR_INVALID_HISTORY_QUERY
$_LANG['server_errors'][5] = 'Información de identidad inválida.';//ERROR_INVALID_PASSPORT
$_LANG['server_errors'][6] = 'La URL es incorrecta.';//ERROR_INVALID_URL
$_LANG['server_errors'][7] = 'El cuerpo de la respuesta HTTP está vacío.';//ERROR_EMPTY_RESPONSE
$_LANG['server_errors'][8] = 'Archivo XML no válido';//ERROR_INVALID_XML_FILE
$_LANG['server_errors'][9] = 'Nombre de nodo no válido';//ERROR_INVALID_NODE_NAME
$_LANG['server_errors'][10] = 'El almacenamiento falló.';//ERROR_CANT_STORE
$_LANG['server_errors'][11] = 'La función de SMS no se ha activado.';//ERROR_INVALID_PASSPORT

/* 客户端JS语言项 */
//--注册或启用
$_LANG['js_languages']['password_empty_error'] = 'La contraseña no puede estar en blanco.';
$_LANG['js_languages']['username_empty_error'] = 'El nombre de usuario no puede estar vacío.';
$_LANG['js_languages']['username_format_error'] = 'El nombre de usuario está mal formado.';
$_LANG['js_languages']['domain_empty_error'] = 'El nombre de dominio no puede estar vacío.';
$_LANG['js_languages']['domain_format_error'] = 'El nombre de dominio está mal formado.';
$_LANG['js_languages']['send_empty_error'] = '¡Complete al menos uno de los números de teléfono móvil y el nivel de envío!';
//--发送
$_LANG['js_languages']['phone_empty_error'] = 'Por favor complete el número de teléfono móvil.';
$_LANG['js_languages']['phone_format_error'] = 'El formato del número de teléfono móvil es incorrecto.';
$_LANG['js_languages']['msg_empty_error'] = 'Por favor complete el contenido del mensaje.';
$_LANG['js_languages']['send_date_format_error'] = 'El formato de hora de la transmisión programada es incorrecto.';
//--历史记录
$_LANG['js_languages']['start_date_format_error'] = 'La fecha de inicio está mal formada.';
$_LANG['js_languages']['end_date_format_error'] = 'La fecha final está malformada.';
//--充值
$_LANG['js_languages']['money_empty_error'] = 'Ingrese la cantidad que desea recargar.';
$_LANG['js_languages']['money_format_error'] = 'El formato de la cantidad es incorrecto.';



$_LANG['insert_sign'] = 'Por favor, introduzca la firma de SMS';
$_LANG['insert_succ'] = 'Agregado exitosamente';
$_LANG['error_smg'] = 'Error de información';
$_LANG['edit_succ'] = 'Modificado exitosamente';
$_LANG['default_succ'] = 'La firma se realiza correctamente por defecto';
$_LANG['no_default'] = 'No existe ese incumplimiento';
$_LANG['add_sign'] = 'Nueva firma de SMS';
$_LANG['new_default_sign'] = 'La firma predeterminada actual es';
$_LANG['default_sign'] = 'Firma original';
$_LANG['add'] = 'Agregar';
$_LANG['edited'] = 'Modificar a';
$_LANG['edit'] = 'Modificar';
$_LANG['set_default_sign'] = 'Establecer como firma predeterminada';

$_LANG ['sms'] = 'Método de SMS';
$_LANG ['sms_name'] = 'Nombre del método SMS';
$_LANG ['sms_desc'] = 'Descripción del modo SMS';
$_LANG ['version'] = 'Versión enchufable';
$_LANG ['short_pay_fee'] = 'Costo';
$_LANG ['sms_author'] = 'Autor del complemento';
$_LANG ['sms_is_cod'] = 'Contra reembolso';
$_LANG ['sms_is_online'] = 'SMS';

$_LANG ['name_is_null'] = 'No ingresaste un nombre de método de texto';
$_LANG ['name_exists'] = 'El nombre del método SMS ya existe';

$_LANG ['back_list'] = 'Volver a la lista del modo SMS';
$_LANG ['install_ok'] = 'Instalado exitosamente';
$_LANG ['edit_ok'] = 'Editado con éxito';
$_LANG ['uninstall_ok'] = 'Desinstalar exitosamente';

$_LANG ['edit_after_install'] = 'Este método de SMS no se ha instalado, edítelo después de la instalación';
$_LANG ['sms_not_available'] = 'El complemento de SMS no existe o no se ha instalado';

$_LANG ['js_languages'] ['lang_removeconfirm'] = '¿Está seguro de que desea desinstalar este método de SMS?';

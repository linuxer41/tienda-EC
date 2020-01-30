<?php

/**
 * 红包类型/红包管理程序
*/
/* 红包类型字段信息 */
$_LANG['bonus_type'] = 'Tipo de sobre rojo';
$_LANG['bonus_list'] = 'Lista de sobres rojos';
$_LANG['type_name'] = 'Nombre del tipo';
$_LANG['type_money'] = 'Cantidad de sobre rojo';
$_LANG['min_goods_amount'] = 'Cantidad mínima de pedido';
$_LANG['notice_min_goods_amount'] = 'Este sobre rojo solo se puede usar para pedidos con una cantidad total de productos';
$_LANG['min_amount'] = 'Límite de orden';
$_LANG['max_amount'] = 'Orden cap';
$_LANG['send_startdate'] = 'Fecha de inicio de lanzamiento';
$_LANG['send_enddate'] = 'Fecha de finalización de lanzamiento';

$_LANG['use_startdate'] = 'Usar fecha de inicio';
$_LANG['use_enddate'] = 'Usar fecha de finalización';
$_LANG['send_count'] = 'Cantidad emitida';
$_LANG['use_count'] = 'Cantidad usada';
$_LANG['send_method'] = 'Cómo emitir este tipo de sobre rojo';
$_LANG['send_type'] = 'Tipo de lanzamiento';
$_LANG['param'] = 'Parámetro';
$_LANG['no_use'] = 'No utilizado';
$_LANG['yuan'] = 'Yuan';
$_LANG['user_list'] = 'Lista de miembros';
$_LANG['type_name_empty'] = '¡El nombre del tipo de sobre rojo no puede estar vacío!';
$_LANG['type_money_empty'] = '¡La cantidad de sobres rojos no puede estar vacía!';
$_LANG['min_amount_empty'] = '¡El límite inferior de la orden de tipo de sobre rojo no puede estar vacío!';
$_LANG['max_amount_empty'] = '¡El límite de orden del tipo de sobre rojo no puede estar vacío!';
$_LANG['send_count_empty'] = '¡El número de sobres rojos emitidos no puede estar vacío!';

$_LANG['send_by'][SEND_BY_USER] = 'Problema por usuario';
$_LANG['send_by'][SEND_BY_GOODS] = 'Distribución por producto';
$_LANG['send_by'][SEND_BY_ORDER] = 'Emisión por importe del pedido';
$_LANG['send_by'][SEND_BY_PRINT] = 'Sobres rojos emitidos fuera de línea';
$_LANG['report_form'] = 'Informe';
$_LANG['send'] = 'Problema';
$_LANG['bonus_excel_file'] = 'Lista de información de sobres rojos sin conexión';

$_LANG['goods_cat'] = 'Seleccione categoría de producto';
$_LANG['goods_brand'] = 'Marca de productos básicos';
$_LANG['goods_key'] = 'Palabras clave del producto';
$_LANG['all_goods'] = 'Bienes opcionales';
$_LANG['send_bouns_goods'] = 'Bienes emitidos con este tipo de sobre rojo';
$_LANG['remove_bouns'] = 'Retire el sobre rojo';
$_LANG['all_remove_bouns'] = 'Eliminar todo';
$_LANG['goods_already_bouns'] = '¡Este producto ya ha emitido otros tipos de sobres rojos!';
$_LANG['send_user_empty'] = 'No ha seleccionado miembros que necesiten emitir sobres rojos, ¡devuelva!';
$_LANG['batch_drop_success'] = 'Se eliminaron con éxito los sobres rojos de %d usuario';
$_LANG['sendbonus_count'] = 'Se envió un total de %d paquetes rojos.';
$_LANG['send_bouns_error'] = 'Error al enviar el sobre rojo del miembro, por favor regrese e intente nuevamente';
$_LANG['no_select_bonus'] = 'No seleccionó el sobre rojo del usuario para eliminar';
$_LANG['bonustype_edit'] = 'Editar tipo de sobre rojo';
$_LANG['bonustype_view'] = 'Ver detalles';
$_LANG['drop_bonus'] = 'Eliminar sobre rojo';
$_LANG['send_bonus'] = 'Sobre rojo';
$_LANG['continus_add'] = 'Continúa agregando tipos de sobres rojos';
$_LANG['back_list'] = 'Devuelve una lista de tipos de sobres rojos';
$_LANG['continue_add'] = 'Continúa agregando sobres rojos';
$_LANG['back_bonus_list'] = 'Volver a la lista de sobres rojos';
$_LANG['validated_email'] = 'Emita sobres rojos solo para los usuarios que hayan pasado la verificación por correo electrónico';

/* 提示信息 */
$_LANG['attradd_succed'] = '¡Operación exitosa!';
$_LANG['js_languages']['type_name_empty'] = '¡Ingrese el nombre del tipo de sobre rojo!';
$_LANG['js_languages']['type_money_empty'] = '¡Ingrese el precio del tipo de sobre rojo!';
$_LANG['js_languages']['order_money_empty'] = 'Por favor, introduzca el importe del pedido!';
$_LANG['js_languages']['type_money_isnumber'] = '¡La cantidad de texto debe estar en formato numérico!';
$_LANG['js_languages']['order_money_isnumber'] = '¡El monto del pedido debe estar en formato digital!';
$_LANG['js_languages']['bonus_sn_empty'] = '¡Ingrese el número de serie del sobre rojo!';
$_LANG['js_languages']['bonus_sn_number'] = '¡El número de serie del sobre rojo debe ser un número!';
$_LANG['send_count_error'] = '¡El número de sobres rojos emitidos debe ser un número entero!';
$_LANG['js_languages']['bonus_sum_empty'] = '¡Ingrese el número de sobres rojos que desea emitir!';
$_LANG['js_languages']['bonus_sum_number'] = '¡El número de sobres rojos emitidos debe ser un número entero!';
$_LANG['js_languages']['bonus_type_empty'] = '¡Elija el tipo de sobre rojo!';
$_LANG['js_languages']['user_rank_empty'] = '¡No ha especificado un nivel de membresía!';
$_LANG['js_languages']['user_name_empty'] = '¡Debe seleccionar al menos un miembro!';
$_LANG['js_languages']['invalid_min_amount'] = 'Ingrese el límite inferior del pedido (un número mayor que 0)';
$_LANG['js_languages']['send_start_lt_end'] = 'La fecha de inicio del problema del sobre rojo no puede ser mayor que la fecha de finalización';
$_LANG['js_languages']['use_start_lt_end'] = 'La fecha de inicio del uso del sobre rojo no puede ser mayor que la fecha de finalización';

$_LANG['order_money_notic'] = 'Mientras el importe del pedido alcance este valor, se emitirá un sobre rojo para el usuario';
$_LANG['type_money_notic'] = 'La cantidad que este tipo de sobre rojo puede compensar';
$_LANG['send_startdate_notic'] = 'Este tipo de sobre rojo solo puede emitirse si la hora actual es entre la fecha de inicio y la fecha límite';
$_LANG['use_startdate_notic'] = 'Este tipo de sobre rojo solo se puede usar si la hora actual está entre las fechas de inicio y finalización';
$_LANG['type_name_exist'] = '¡El nombre de este tipo ya existe!';
$_LANG['type_money_error'] = '¡La cantidad debe ser un número y no puede ser menor que 0!';
$_LANG['bonus_sn_notic'] = 'Consejo: El número de serie del sobre rojo consta de un número de serie de seis dígitos más cuatro números aleatorios.';
$_LANG['creat_bonus'] = 'Generado';
$_LANG['creat_bonus_num'] = 'Número de serie del sobre rojo';
$_LANG['bonus_sn_error'] = '¡El número de serie del sobre rojo debe ser un número!';
$_LANG ['send_user_notice'] = 'Al emitir un sobre rojo a un usuario específico, ingrese el nombre de usuario aquí, separe a varios usuarios con comas (,) <br/> Por ejemplo: lry, wjz, zwj' ;
/* 红包信息字段 */
$_LANG['bonus_id'] = 'Numero';
$_LANG['bonus_type_id'] = 'Cantidad de tipo';
$_LANG['send_bonus_count'] = 'Cantidad de sobres rojos';
$_LANG['start_bonus_sn'] = 'Número de secuencia inicial';
$_LANG['bonus_sn'] = 'Número de serie del sobre rojo';
$_LANG['user_id'] = 'Uso de miembros';
$_LANG['used_time'] = 'Usar el tiempo';
$_LANG['order_id'] = 'Número de orden';
$_LANG['send_mail'] = 'Enviar email';
$_LANG['emailed'] = 'Notificación por correo electrónico';
$_LANG['mail_status'][BONUS_NOT_MAIL] = 'No enviado';
$_LANG['mail_status'][BONUS_MAIL_FAIL] = 'Enviado fallido';
$_LANG['mail_status'][BONUS_MAIL_SUCCEED] = 'Enviado con éxito';

$_LANG['sendtouser'] = 'Emitir sobres rojos a los usuarios designados';
$_LANG['senduserrank'] = 'Sobres rojos por nivel de usuario';
$_LANG['userrank'] = 'Nivel de usuario';
$_LANG['select_rank'] = 'Seleccionar nivel de membresía ...';
$_LANG['keywords'] = 'Palabras clave:';
$_LANG['userlist'] = 'Lista de miembros:';
$_LANG['send_to_user'] = 'Sobres rojos para los siguientes usuarios';
$_LANG['search_users'] = 'Buscar miembros';
$_LANG['confirm_send_bonus'] = 'OK para enviar un sobre rojo';
$_LANG['bonus_not_exist'] = 'El sobre rojo no existe';
$_LANG['success_send_mail'] = 'Se han agregado %d mensajes a la lista de correo';
$_LANG['send_continue'] = 'Continúe emitiendo sobres rojos';

<?php

/**
 * 管理中心团购商品语言文件
*/

/* 当前页面标题及可用链接名称 */
$_LANG['group_buy_list'] = 'Lista de actividades de compra grupal';
$_LANG['add_group_buy'] = 'Agregar evento de compra grupal';
$_LANG['edit_group_buy'] = 'Editar actividades de compra grupales';

/* 活动列表页 */
$_LANG['goods_name'] = 'Nombre del producto';
$_LANG['start_date'] = 'Hora de inicio';
$_LANG['end_date'] = 'Hora final';
$_LANG['deposit'] = 'Margen';
$_LANG['restrict_amount'] = 'Compra restringida';
$_LANG['gift_integral'] = 'Puntos de regalo';
$_LANG['valid_order'] = 'Orden';
$_LANG['valid_goods'] = 'Ordenar bienes';
$_LANG['current_price'] = 'Precio actual';
$_LANG['current_status'] = 'Estado';
$_LANG['view_order'] = 'Ver orden';

/* 添加/编辑活动页 */
$_LANG['goods_cat'] = 'Categorias';
$_LANG['all_cat'] = 'Todas las categorias';
$_LANG['goods_brand'] = 'Marca de productos básicos';
$_LANG['all_brand'] = 'Todas las marcas';

$_LANG['label_goods_name'] = 'Compra de bienes grupales:';
$_LANG['notice_goods_name'] = 'Busque el producto primero para generar una lista de opciones aquí ...';
$_LANG['label_start_date'] = 'Hora de inicio del evento:';
$_LANG['label_end_date'] = 'Hora de finalización del evento:';
$_LANG['notice_datetime'] = '(Año, mes, día y hora)';
$_LANG['label_deposit'] = 'Margen:';
$_LANG['label_restrict_amount'] = 'Cantidad restringida:';
$_LANG['notice_restrict_amount']= 'Cuando se alcanza este monto, la actividad de compra grupal finaliza automáticamente. ';
$_LANG['label_gift_integral'] = 'Puntos de regalo:';
$_LANG['label_price_ladder'] = 'Escalera de precios:';
$_LANG['notice_ladder_amount'] = 'Cantidad alcanzada';
$_LANG['notice_ladder_price'] = 'Disfruta el precio';
$_LANG['label_desc'] = 'Descripción de la actividad:';
$_LANG['label_status'] = 'Estado actual activo:';
$_LANG['gbs'][GBS_PRE_START] = 'No empezado';
$_LANG['gbs'][GBS_UNDER_WAY] = 'En progreso';
$_LANG['gbs'][GBS_FINISHED] = 'Final sin procesar';
$_LANG['gbs'][GBS_SUCCEED] = 'Final exitoso';
$_LANG['gbs'][GBS_FAIL] = 'Fin del fracaso';
$_LANG['label_order_qty'] = 'Pedidos / Pedidos válidos:';
$_LANG['label_goods_qty'] = 'Número de productos / Número de productos activos:';
$_LANG['label_cur_price'] = 'Precio actual:';
$_LANG['label_end_price'] = 'Precio final:';
$_LANG['label_handler'] = 'Operación';
$_LANG['error_group_buy'] = 'La actividad de compra grupal que desea operar no existe';
$_LANG['error_status'] = '¡Esta operación no se puede realizar en el estado actual!';
$_LANG['button_finish'] = 'Fin de evento';
$_LANG['notice_finish'] = '(Modifique la hora de finalización del evento a la hora actual)';
$_LANG['button_succeed'] = 'Éxito de campaña';
$_LANG['notice_succeed'] = '(Actualizar precio del pedido)';
$_LANG['button_fail'] = 'Actividad fallida';
$_LANG['notice_fail'] = '(Cancele el pedido, devuelva el depósito al saldo de la cuenta, y el motivo de la falla se puede escribir en la descripción del evento)';
$_LANG['cancel_order_reason'] = 'Compra grupal fallida';
$_LANG['js_languages']['succeed_confirm'] = 'Esta operación es irreversible. ¿Está seguro de que desea configurar esta actividad de compra grupal con éxito?';
$_LANG['js_languages']['fail_confirm'] = 'Esta operación es irreversible. ¿Está seguro de que desea configurar este evento de compra grupal para que falle?';
$_LANG['button_mail'] = 'Enviar correo';
$_LANG['notice_mail'] = '(Notificar al cliente para pagar el saldo del envío)';
$_LANG['mail_result'] = 'Esta compra grupal tiene %s pedidos activos y %s correos electrónicos fueron enviados con éxito.';
$_LANG['invalid_time'] = 'Ingresó un tiempo de compra grupal no válido.';

$_LANG['add_success'] = 'Agregue la actividad de compra grupal con éxito.';
$_LANG['edit_success'] = 'La actividad de edición de compra grupal fue exitosa.';
$_LANG['back_list'] = 'Devuelve la lista de actividades de compra grupal.';
$_LANG['continue_add'] = 'Continúe agregando actividades de compra grupal.';

/* 添加/编辑活动提交 */
$_LANG['error_goods_null'] = '¡No has elegido comprar bienes!';
$_LANG['error_goods_exist'] = '¡Actualmente hay una actividad de compra grupal para el producto que seleccionó!';
$_LANG['error_price_ladder'] = '¡No ingresó una escala de precios válida!';
$_LANG['error_restrict_amount'] = 'La cantidad restringida no puede ser inferior a la cantidad máxima en la escala de precios';

$_LANG['js_languages']['error_goods_null'] = '¡No has elegido comprar bienes!';
$_LANG['js_languages']['error_deposit'] = '¡El margen que ingresó no es un número!';
$_LANG['js_languages']['error_restrict_amount'] = '¡La cantidad que ordenó no es un número entero!';
$_LANG['js_languages']['error_gift_integral'] = '¡El número de puntos de bonificación que ingresó no es un entero!';
$_LANG['js_languages']['search_is_null'] = 'No se ha encontrado ningún producto, busque nuevamente';

/* 删除团购活动 */
$_LANG['js_languages']['batch_drop_confirm'] = '¿Está seguro de que desea eliminar el evento de compra grupal seleccionado?';
$_LANG['error_exist_order'] = '¡Este evento de compra grupal ya tiene un pedido y no se puede eliminar!';
$_LANG['batch_drop_success'] = 'Se eliminaron correctamente los registros de actividad de compra grupal de %s (las actividades de compra grupal que ya tienen pedidos no se pueden eliminar)';
$_LANG['no_select_group_buy'] = '¡No tiene registro de actividad de compra grupal ahora!';

/* 操作日志 */
$_LANG['log_action']['group_buy'] = 'Compras grupales';


$_LANG['touch_img'] = 'Comprar pancarta';
$_LANG['drop_touch_img'] = 'Eliminar banner de compra grupal';
$_LANG['confirm_drop_img'] = '¿Estás seguro de que deseas eliminar el banner de compra grupal?';

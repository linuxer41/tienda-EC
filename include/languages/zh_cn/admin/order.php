<?php

/**
 * 订单管理语言文件
 */

/* 订单搜索 */
$_LANG['order_sn'] = 'Número de orden';
$_LANG['consignee'] = 'Consignatario';
$_LANG['all_status'] = 'Estado del pedido';

$_LANG['cs'][OS_UNCONFIRMED] = 'Por confirmar';
$_LANG['cs'][CS_AWAIT_PAY] = 'Pago pendiente';
$_LANG['cs'][CS_AWAIT_SHIP] = 'Para ser enviado';
$_LANG['cs'][CS_FINISHED] = 'Completado';
$_LANG['cs'][PS_PAYING] = 'Pagando';
$_LANG['cs'][OS_CANCELED] = 'Cancelar';
$_LANG['cs'][OS_INVALID] = 'Inválido';
$_LANG['cs'][OS_RETURNED] = 'Devoluciones';
$_LANG['cs'][OS_SHIPPED_PART] = 'Entrega parcial';

/* 订单状态 */
$_LANG['os'][OS_UNCONFIRMED] = 'Sin confirmar';
$_LANG['os'][OS_CONFIRMED] = 'Confirmado';
$_LANG['os'][OS_CANCELED] = '<font color="red">Cancelado</font>';
$_LANG['os'][OS_INVALID] = '<font color="red">Inválido</font>';
$_LANG['os'][OS_RETURNED] = '<font color="red">Devuelto</font>';
$_LANG['os'][OS_SPLITED] = 'Ordenado';
$_LANG['os'][OS_SPLITING_PART] = 'Orden parcial';

$_LANG['ss'][SS_UNSHIPPED] = 'No enviado';
$_LANG['ss'][SS_PREPARING] = 'Fuera de stock';
$_LANG['ss'][SS_SHIPPED] = 'Enviado';
$_LANG['ss'][SS_RECEIVED] = 'Confirmación de recibo';
$_LANG['ss'][SS_SHIPPED_PART] = 'Enviado (algunos productos)';
$_LANG['ss'][SS_SHIPPED_ING] = 'Envío';

$_LANG['ps'][PS_UNPAYED] = 'Impago';
$_LANG['ps'][PS_PAYING] = 'Pagando';
$_LANG['ps'][PS_PAYED] = 'Pagado';

$_LANG['ss_admin'][SS_SHIPPED_ING] = 'En entrega (estado de recepción: no entregado)';
/* 订单操作 */
$_LANG['label_operable_act'] = 'Operaciones actualmente disponibles:';
$_LANG['label_action_note'] = 'Observaciones de la operación:';
$_LANG['label_invoice_note'] = 'Nota de envío:';
$_LANG['label_invoice_no'] = 'Número de factura:';
$_LANG['label_cancel_note'] = 'Motivo de la cancelación:';
$_LANG['notice_cancel_note'] = '(Se registrará en el mensaje del comerciante al cliente)';
$_LANG['op_confirm'] = 'Confirmar';
$_LANG['op_pay'] = 'Pago';
$_LANG['op_prepare'] = 'Recogiendo';
$_LANG['op_ship'] = 'Envío';
$_LANG['op_cancel'] = 'Cancelar';
$_LANG['op_invalid'] = 'Inválido';
$_LANG['op_return'] = 'Devoluciones';
$_LANG['op_unpay'] = 'Hacer sin pagar';
$_LANG['op_unship'] = 'No enviado';
$_LANG['op_cancel_ship'] = 'Cancelar entrega';
$_LANG['op_receive'] = 'Recibido';
$_LANG['op_assign'] = 'Asignado a';
$_LANG['op_after_service'] = 'Después de la venta';
$_LANG['act_ok'] = 'Operación exitosa';
$_LANG['act_false'] = 'Operación fallida';
$_LANG['act_ship_num'] = 'La cantidad de este pedido no puede exceder la cantidad del producto pedido';
$_LANG['act_good_vacancy'] = 'Producto agotado';
$_LANG['act_good_delivery'] = 'Enviado';
$_LANG['notice_gb_ship'] = 'Nota: La actividad de compra grupal no se puede entregar hasta que se procese como exitosa';
$_LANG['back_list'] = 'Volver a la lista de pedidos';
$_LANG['op_remove'] = 'Eliminar';
$_LANG['op_you_can'] = 'Que puedes hacer';
$_LANG['op_split'] = 'Generar factura';
$_LANG['op_to_delivery'] = 'Para enviar';

/* 订单列表 */
$_LANG['order_amount'] = 'Monto a pagar';
$_LANG['total_fee'] = 'Cantidad total';
$_LANG['shipping_name'] = 'Método de entrega';
$_LANG['pay_name'] = 'Forma de pago';
$_LANG['address'] = 'Dirección';
$_LANG['order_time'] = 'Tiempo de pedido';
$_LANG['detail'] = 'Vista';
$_LANG['phone'] = 'Teléfono';
$_LANG['group_buy'] = '(Compra grupal)';
$_LANG['error_get_goods_info'] = 'Error al obtener la información del producto del pedido';
$_LANG['exchange_goods'] = '(Canje de puntos)';

$_LANG['js_languages']['remove_confirm'] = 'Eliminar un pedido borrará toda la información sobre el pedido. ';

/* 订单搜索 */
$_LANG['label_order_sn'] = 'Número de pedido:';
$_LANG['label_all_status'] = 'Estado del pedido:';
$_LANG['label_user_name'] = 'Comprador:';
$_LANG['label_consignee'] = 'Destinatario';
$_LANG['label_email'] = 'Correo electrónico:';
$_LANG['label_address'] = 'Dirección:';
$_LANG['label_zipcode'] = 'Código postal:';
$_LANG['label_tel'] = 'Teléfono:';
$_LANG['label_mobile'] = 'Teléfono:';
$_LANG['label_shipping'] = 'Método de entrega:';
$_LANG['label_payment'] = 'Forma de pago:';
$_LANG['label_order_status'] = 'Estado del pedido:';
$_LANG['label_pay_status'] = 'Estado de pago:';
$_LANG['label_shipping_status'] = 'Estado de entrega:';
$_LANG['label_area'] = 'Área:';
$_LANG['label_time'] = 'Tiempo de pedido:';

/* 订单详情 */
$_LANG['prev'] = 'Orden anterior';
$_LANG['next'] = 'Orden siguiente';
$_LANG['print_order'] = 'Orden de impresión';
$_LANG['print_shipping'] = 'Imprimir nota expresa';
$_LANG['print_order_sn'] = 'Número de pedido:';
$_LANG['print_buy_name'] = 'Comprador:';
$_LANG['label_consignee_address'] = 'Dirección de entrega:';
$_LANG['no_print_shipping'] = 'Lo sentimos, no has configurado una plantilla para imprimir la entrega urgente en este momento. No se puede imprimir';
$_LANG['suppliers_no'] = 'No especifique el proveedor.';
$_LANG['restaurant'] = 'Nuestra tienda';

$_LANG['order_info'] = 'Información del pedido';
$_LANG['base_info'] = 'Información básica';
$_LANG['other_info'] = 'Otra información';
$_LANG['consignee_info'] = 'Información del consignatario';
$_LANG['fee_info'] = 'Información de costos';
$_LANG['action_info'] = 'Información de la operación';
$_LANG['shipping_info'] = 'Información de entrega';

$_LANG['label_how_oos'] = 'Procesamiento fuera de stock:';
$_LANG['label_how_surplus'] = 'Procesamiento de saldo:';
$_LANG['label_pack'] = 'Embalaje:';
$_LANG['label_card'] = 'Tarjeta de felicitación:';
$_LANG['label_card_message'] = 'Saludos de tarjetas de felicitación:';
$_LANG['label_order_time'] = 'Tiempo de pedido:';
$_LANG['label_pay_time'] = 'Tiempo de pago:';
$_LANG['label_shipping_time'] = 'Tiempo de entrega:';
$_LANG['label_sign_building'] = 'Hitos:';
$_LANG['label_best_time'] = 'Mejor tiempo de entrega:';
$_LANG['label_inv_type'] = 'Tipo de factura:';
$_LANG['label_inv_text_id'] = 'Número de identificación del contribuyente:';
$_LANG['label_inv_payee'] = 'Encabezado de factura:';
$_LANG['label_inv_content'] = 'Contenido de la factura:';
$_LANG['label_postscript'] = 'Mensaje del cliente al comerciante:';
$_LANG['label_region'] = 'Área:';

$_LANG['label_shop_url'] = 'URL:';
$_LANG['label_shop_address'] = 'Dirección:';
$_LANG['label_service_phone'] = 'Teléfono:';
$_LANG['label_print_time'] = 'Tiempo de impresión:';

$_LANG['label_suppliers'] = 'Seleccionar proveedor:';
$_LANG['label_agency'] = 'Oficina:';
$_LANG['suppliers_name'] = 'Proveedor';

$_LANG['product_sn'] = 'Número de artículo';
$_LANG['goods_info'] = 'Información del producto';
$_LANG['goods_name'] = 'Nombre del producto';
$_LANG['goods_name_brand'] = 'Nombre del producto [Marca]';
$_LANG['goods_sn'] = 'Número de artículo';
$_LANG['goods_price'] = 'Precio';
$_LANG['goods_number'] = 'Cantidad';
$_LANG['goods_attr'] = 'Atributo';
$_LANG['goods_delivery'] = 'Cantidad enviada';
$_LANG['goods_delivery_curr'] = 'Cantidad de este pedido';
$_LANG['storage'] = 'Inventario';
$_LANG['subtotal'] = 'Subtotal';
$_LANG['label_total'] = 'Total:';
$_LANG['label_total_weight'] = 'Peso de los productos básicos:';

$_LANG['label_goods_amount'] = 'Cantidad total de bienes:';
$_LANG['label_discount'] = 'Descuento:';
$_LANG['label_tax'] = 'Impuesto de factura:';
$_LANG['label_shipping_fee'] = 'Gastos de envio:';
$_LANG['label_insure_fee'] = 'Costo asegurado:';
$_LANG['label_insure_yn'] = 'Ya sea para asegurar:';
$_LANG['label_pay_fee'] = 'Tarifa de pago:';
$_LANG['label_pack_fee'] = 'Costo de embalaje:';
$_LANG['label_card_fee'] = 'Tarjeta de felicitación cuesta:';
$_LANG['label_money_paid'] = 'Monto pagado:';
$_LANG['label_surplus'] = 'Usar saldo:';
$_LANG['label_integral'] = 'Use puntos:';
$_LANG['label_bonus'] = 'Usando sobres rojos:';
$_LANG['label_order_amount'] = 'Importe total del pedido:';
$_LANG['label_money_dues'] = 'Monto a pagar:';
$_LANG['label_money_refund'] = 'Cantidad a reembolsar:';
$_LANG['label_to_buyer'] = 'Mensajes de clientes a clientes:';
$_LANG['save_order'] = 'Guardar orden';
$_LANG['notice_gb_order_amount'] = '(Nota: si hay un depósito para la compra grupal, solo debe pagar el depósito y la tarifa de pago correspondiente por primera vez)';

$_LANG['action_user'] = 'operador:';
$_LANG['action_time'] = 'Tiempo de funcionamiento';
$_LANG['order_status'] = 'Estado del pedido';
$_LANG['pay_status'] = 'Estado de pago';
$_LANG['shipping_status'] = 'Estado de entrega';
$_LANG['action_note'] = 'Nota';
$_LANG['pay_note'] = 'Nota de pago:';

$_LANG['sms_time_format'] = 'ma día j';
$_LANG['order_shipped_sms'] = 'Su pedido %s ha sido enviado desde %s'; //wang
$_LANG['order_splited_sms'] = 'Tu pedido %s, %s está en %s [ %s]';
$_LANG['order_removed'] = 'El pedido se eliminó correctamente.';
$_LANG['return_list'] = 'Volver a la lista de pedidos';

/* 订单处理提示 */
$_LANG['surplus_not_enough'] = 'El pedido se pagó con un saldo de %s y el saldo del usuario ahora es insuficiente';
$_LANG['integral_not_enough'] = 'El pedido se pagó con %s puntos, y ahora el usuario no tiene puntos suficientes';
$_LANG['bonus_not_available'] = 'Este pedido se paga con sobres rojos, ahora los sobres rojos no están disponibles';

/* 购货人信息 */
$_LANG['display_buyer'] = 'Mostrar información del comprador';
$_LANG['buyer_info'] = 'Información del comprador';
$_LANG['pay_points'] = 'Puntos de consumo';
$_LANG['rank_points'] = 'Puntos de nivel';
$_LANG['user_money'] = 'Saldo de cuenta';
$_LANG['email'] = 'Correo electrónico';
$_LANG['rank_name'] = 'Nivel de miembro';
$_LANG['bonus_count'] = 'Cantidad de sobres rojos';
$_LANG['zipcode'] = 'Código postal';
$_LANG['tel'] = 'Teléfono';
$_LANG['mobile'] = 'Teléfono de respaldo';

/* 合并订单 */
$_LANG['order_sn_not_null'] = 'Complete el número de pedido para fusionar';
$_LANG['two_order_sn_same'] = 'Los dos números de orden a fusionar no pueden ser iguales';
$_LANG['order_not_exist'] = 'El pedido %s no existe';
$_LANG['os_not_unconfirmed_or_confirmed'] = 'El estado del pedido para %s no es \"Sin confirmar\" o \"Confirmado\"';
$_LANG['ps_not_unpayed'] = 'El estado de pago del pedido %s no es \"impago\"';
$_LANG['ss_not_unshipped'] = 'El pedido %s tiene un estado de entrega diferente a \"No enviado\"';
$_LANG['order_user_not_same'] = 'Los dos pedidos a fusionar no los realiza el mismo usuario';
$_LANG['merge_invalid_order'] = 'Lo sentimos, el orden que eligió fusionar no permite la operación de fusión.';

$_LANG['from_order_sn'] = 'Del pedido:';
$_LANG['to_order_sn'] = 'Orden maestra:';
$_LANG['merge'] = 'Fusionar';
$_LANG['notice_order_sn'] = 'Cuando los dos pedidos son inconsistentes, la información combinada del pedido (como: método de pago, método de entrega, empaque, tarjeta de felicitación, sobre rojo, etc.) está sujeta al pedido principal.';
$_LANG['js_languages']['confirm_merge'] = '¿Estás seguro de que deseas fusionar las dos órdenes?';

/* 批处理 */
$_LANG['pls_select_order'] = 'Por favor seleccione el orden que desea operar';
$_LANG['no_fulfilled_order'] = 'No hay pedidos que cumplan las condiciones de funcionamiento.';
$_LANG['updated_order'] = 'Pedidos actualizados:';
$_LANG['order'] = 'Orden:';
$_LANG['confirm_order'] = 'Los siguientes pedidos no pueden establecerse en estado confirmado';
$_LANG['invalid_order'] = 'Los siguientes pedidos no pueden establecerse como inválidos';
$_LANG['cancel_order'] = 'Los siguientes pedidos no se pueden cancelar.';
$_LANG['remove_order'] = 'Los siguientes pedidos no se pueden eliminar';

/* 编辑订单打印模板 */
$_LANG['edit_order_templates'] = 'Editar plantilla de impresión de pedido';
$_LANG['template_resetore'] = 'Restaurar plantilla';
$_LANG['edit_template_success'] = '¡La operación de edición de la plantilla de impresión del pedido se realizó correctamente!';
$_LANG['remark_fittings'] = '(Accesorios)';
$_LANG['remark_gift'] = '(Regalo)';
$_LANG['remark_favourable'] = '(Oferta especial)';
$_LANG['remark_package'] = '(Paquete de regalo)';

/* 订单来源统计 */
$_LANG['from_order'] = 'Fuente de la orden:';
$_LANG['from_ad_js'] = 'Publicidad:';
$_LANG['from_goods_js'] = 'JS fuera del sitio';
$_LANG['from_self_site'] = 'De este sitio';
$_LANG['from'] = 'Desde el sitio:';

/* 添加、编辑订单 */
$_LANG['add_order'] = 'Añadir pedido';
$_LANG['edit_order'] = 'Editar orden';
$_LANG['step']['user'] = 'Seleccione el miembro para el que desea realizar un pedido';
$_LANG['step']['goods'] = 'Seleccione producto';
$_LANG['step']['consignee'] = 'Configurar información del destinatario';
$_LANG['step']['shipping'] = 'Elige un método de envío';
$_LANG['step']['payment'] = 'Elige un método de pago';
$_LANG['step']['other'] = 'Establecer otra información';
$_LANG['step']['money'] = 'Cuota de instalación';
$_LANG['anonymous'] = 'Usuario anónimo';
$_LANG['by_useridname'] = 'Buscar por número de miembro o nombre de miembro';
$_LANG['button_prev'] = 'Paso anterior';
$_LANG['button_next'] = 'Paso siguiente';
$_LANG['button_finish'] = 'Completa';
$_LANG['button_cancel'] = 'Cancelar';
$_LANG['name'] = 'Nombre';
$_LANG['desc'] = 'Descripción';
$_LANG['shipping_fee'] = 'Tarifa de entrega';
$_LANG['free_money'] = 'Cuota libre';
$_LANG['insure'] = 'Cuota de seguro';
$_LANG['pay_fee'] = 'Tarifa de manipulación';
$_LANG['pack_fee'] = 'Tarifa de embalaje';
$_LANG['card_fee'] = 'Tarifa de tarjeta de felicitación';
$_LANG['no_pack'] = 'No empaques';
$_LANG['no_card'] = 'Sin tarjeta de felicitación';
$_LANG['add_to_order'] = 'Añadir pedido';
$_LANG['calc_order_amount'] = 'Calcular el monto del pedido';
$_LANG['available_surplus'] = 'Saldo disponible:';
$_LANG['available_integral'] = 'Puntos disponibles:';
$_LANG['available_bonus'] = 'Sobres rojos disponibles:';
$_LANG['admin'] = 'Administrador agregar';
$_LANG['search_goods'] = 'Buscar por número de producto o nombre de producto o número de artículo de producto';
$_LANG['category'] = 'Categoría';
$_LANG['brand'] = 'Marca';
$_LANG['user_money_not_enough'] = 'Saldo de usuario insuficiente';
$_LANG['pay_points_not_enough'] = 'Puntos de usuario insuficientes';
$_LANG['money_paid_enough'] = 'El monto pagado es mayor que el monto total del producto y las diferentes tarifas, reembolse primero';
$_LANG['price_note'] = 'Nota: El marcado de atributo está incluido en el precio del producto.';
$_LANG['select_pack'] = 'Seleccionar embalaje';
$_LANG['select_card'] = 'Elegir tarjeta de felicitación';
$_LANG['select_shipping'] = 'Seleccione primero un método de envío';
$_LANG['want_insure'] = 'Quiero asegurar';
$_LANG['update_goods'] = 'Actualizar producto';
$_LANG['notice_user'] = '<strong>注意：</strong>搜索结果只显示前20条记录，如果没有找到相' .
        '应会员，请更精确地查找。另外，如果该会员是从论坛注册的且没有在商城登录过，' .
        '也无法找到，需要先在商城登录。';
$_LANG['amount_increase'] = 'El monto total de su pedido ha aumentado debido a su pedido modificado y debe pagar nuevamente';
$_LANG['amount_decrease'] = 'Debido a su pedido modificado, el monto total del pedido se reduce y se requiere un reembolso';
$_LANG['continue_shipping'] = 'El método de envío original ya no está disponible porque ha modificado la región del destinatario. Elija un nuevo método de envío';
$_LANG['continue_payment'] = 'El método de pago original ya no está disponible porque modificó el método de envío. Elija un nuevo método de envío';
$_LANG['refund'] = 'Reembolso';
$_LANG['cannot_edit_order_shipped'] = 'No puede modificar un pedido enviado';
$_LANG['address_list'] = 'Seleccione de una dirección de envío existente:';
$_LANG['order_amount_change'] = 'El importe total del pedido cambió de %sa %s';
$_LANG['shipping_note'] = 'Nota: Debido a que el pedido ha sido enviado, la modificación del método de entrega no cambiará la tarifa de entrega ni la prima del seguro.';
$_LANG['change_use_surplus'] = 'Edite el pedido %s para cambiar el monto pagado con el prepago';
$_LANG['change_use_integral'] = 'Edite el pedido %s para cambiar la cantidad pagada con puntos';
$_LANG['return_order_surplus'] = 'Pago por adelantado utilizado para devolver el pedido %s debido a cancelación, invalidación o devolución';
$_LANG['return_order_integral'] = 'Créditos devueltos para la orden de pago %s debido a cancelación, invalidación o devolución';
$_LANG['order_gift_integral'] = 'Puntos por pedido %s';
$_LANG['return_order_gift_integral'] = 'Crédito devuelto para el pedido %s debido a una operación de devolución o no enviada';
$_LANG['invoice_no_mall'] = 'Para números de albaranes múltiples, sepárelos con comas (\",\") en inglés.';

$_LANG['js_languages']['input_price'] = 'Precio personalizado';
$_LANG['js_languages']['pls_search_user'] = 'Por favor busque y seleccione miembros';
$_LANG['js_languages']['confirm_drop'] = '¿Estás seguro de que deseas eliminar este producto?';
$_LANG['js_languages']['invalid_goods_number'] = 'El número de artículos es incorrecto.';
$_LANG['js_languages']['pls_search_goods'] = 'Por favor busque y seleccione productos';
$_LANG['js_languages']['pls_select_area'] = 'Por favor seleccione su área';
$_LANG['js_languages']['pls_select_shipping'] = 'Por favor seleccione un método de envío';
$_LANG['js_languages']['pls_select_payment'] = 'Por favor seleccione un método de pago';
$_LANG['js_languages']['pls_select_pack'] = 'Por favor, elija el embalaje';
$_LANG['js_languages']['pls_select_card'] = 'Por favor seleccione una tarjeta de felicitación';
$_LANG['js_languages']['pls_input_note'] = 'Por favor complete los comentarios!';
$_LANG['js_languages']['pls_input_cancel'] = '¡Por favor complete el motivo de cancelación!';
$_LANG['js_languages']['pls_select_refund'] = 'Por favor, elija un método de reembolso!';
$_LANG['js_languages']['pls_select_agency'] = 'Por favor seleccione una oficina!';
$_LANG['js_languages']['pls_select_other_agency'] = 'El pedido pertenece a esta oficina ahora, ¡elija otra oficina!';
$_LANG['js_languages']['loading'] = 'Cargando ...';

/* 订单操作 */
$_LANG['order_operate'] = 'Operación de orden:';
$_LANG['label_refund_amount'] = 'Cantidad de reembolso:';
$_LANG['label_handle_refund'] = 'Método de reembolso:';
$_LANG['label_refund_note'] = 'Descripción del reembolso:';
$_LANG['return_user_money'] = 'Reembolso del saldo del usuario';
$_LANG['create_user_account'] = 'Generar solicitud de reembolso';
$_LANG['not_handle'] = 'No maneje, seleccione esto cuando la operación incorrecta';

$_LANG['order_refund'] = 'Reembolso del pedido: %s';
$_LANG['order_pay'] = 'Pago del pedido: %s';

$_LANG['send_mail_fail'] = 'Correo electrónico fallido';

$_LANG['send_message'] = 'Enviar / Ver mensaje';

/* 发货单操作 */
$_LANG['delivery_operate'] = 'Operación de factura:';
$_LANG['delivery_sn_number'] = 'Número de serie de la factura:';
$_LANG['invoice_no_sms'] = '¡Por favor complete el número de factura!';

/* 发货单搜索 */
$_LANG['delivery_sn'] = 'Factura';

/* 发货单状态 */
$_LANG['delivery_status'][0] = 'Enviado';
$_LANG['delivery_status'][1] = 'Devoluciones';
$_LANG['delivery_status'][2] = 'Normal';

/* 发货单标签 */
$_LANG['label_delivery_status'] = 'Estado de la factura';
$_LANG['label_suppliers_name'] = 'Proveedor';
$_LANG['label_delivery_time'] = 'Tiempo de construcción';
$_LANG['label_delivery_sn'] = 'Número de serie de la factura';
$_LANG['label_add_time'] = 'Tiempo de pedido';
$_LANG['label_update_time'] = 'Tiempo de entrega';
$_LANG['label_send_number'] = 'Cantidad de envío';

/* 发货单提示 */
$_LANG['tips_delivery_del'] = '¡El albarán de entrega se eliminó con éxito!';

/* 退货单操作 */
$_LANG['back_operate'] = 'Operación de orden de devolución:';

/* 退货单标签 */
$_LANG['return_time'] = 'Hora de regreso:';
$_LANG['label_return_time'] = 'Hora de regreso';

/* 退货单提示 */
$_LANG['tips_back_del'] = '¡El pedido de devolución se eliminó correctamente!';

$_LANG['goods_num_err'] = 'Stock insuficiente, ¡elija de nuevo!';

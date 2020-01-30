<?php

/**
 * 购物流程相关语言
 */

$_LANG['flow_login_register']['username_not_null'] = 'Por favor ingrese su nombre de usuario.';
$_LANG['flow_login_register']['username_invalid'] = 'Ingresaste un nombre de usuario no válido.';
$_LANG['flow_login_register']['password_not_null'] = 'Por favor ingrese su contraseña.';
$_LANG['flow_login_register']['email_not_null'] = 'Por favor ingrese su correo electrónico.';
$_LANG['flow_login_register']['email_invalid'] = 'El correo electrónico que ingresó es incorrecto.';
$_LANG['flow_login_register']['password_not_same'] = 'La contraseña que ingresó no coincide con la contraseña de confirmación.';
$_LANG['flow_login_register']['password_lt_six'] = 'La contraseña debe tener al menos 6 caracteres.';

$_LANG['regist_success'] = '¡Felicitaciones, el registro de su cuenta %s fue exitoso!';
$_LANG['login_success'] = 'Felicidades ';

/* 购物车 */
$_LANG['update_cart'] = 'Actualizar carrito de compras';
$_LANG['back_to_cart'] = 'Volver al carro';
$_LANG['update_cart_notice'] = 'El carrito de compras se actualizó correctamente, vuelva a seleccionar los regalos que necesita.';
$_LANG['direct_shopping'] = 'No planea iniciar sesión, compre directamente';
$_LANG['goods_not_exists'] = 'Lo sentimos, el producto especificado no existe';
$_LANG['drop_goods_confirm'] = '¿Estás seguro de que deseas eliminar el artículo del carrito de compras?';
$_LANG['goods_number_not_int'] = 'Por favor, introduzca la cantidad correcta de productos.';
$_LANG['stock_insufficiency'] = 'Lo sentimos, el artículo %s que seleccionó solo tiene %d en existencia. Solo puede comprar hasta %d piezas.';
$_LANG['package_stock_insufficiency'] = 'Lo sentimos, la cantidad de paquetes premium que seleccionó ha excedido el inventario. ';
$_LANG['shopping_flow'] = 'Proceso de compra';
$_LANG['username_exists'] = 'El nombre de usuario que ingresó ya existe, intente con otro.';
$_LANG['email_exists'] = 'El correo electrónico que ingresó ya existe, intente con otro.';
$_LANG['surplus_not_enough'] = 'El saldo que utiliza no puede exceder su saldo actual.';
$_LANG['integral_not_enough'] = 'Los puntos que usa no pueden exceder sus puntos existentes.';
$_LANG['integral_too_much'] = 'No puede usar más de %d';
$_LANG['invalid_bonus'] = 'El sobre rojo que seleccionó no existe.';
$_LANG['no_goods_in_cart'] = '¡No tiene artículos en su carrito de compras!';
$_LANG['not_submit_order'] = 'Su pedido para participar en esta compra grupal ha sido enviado, ¡no repita la operación!';
$_LANG['pay_success'] = 'Este pago ha sido exitoso.';
$_LANG['pay_fail'] = 'Este pago falló, contáctenos a tiempo.';
$_LANG['pay_disabled'] = 'El método de pago que eligió ha sido deshabilitado.';
$_LANG['pay_invalid'] = 'Has elegido un método de pago no válido. ';
$_LANG['flow_no_shipping'] = 'Debe seleccionar un método de envío.';
$_LANG['flow_no_payment'] = 'Debes elegir un método de pago.';
$_LANG['pay_not_exist'] = 'El método de pago seleccionado no existe.';
$_LANG['storage_short'] = 'Fuera de stock';
$_LANG['subtotal'] = 'Subtotal';
$_LANG['accessories'] = 'Accesorios';
$_LANG['largess'] = 'Sorteo';
$_LANG['shopping_money'] = 'Subtotal %s de compra';
$_LANG['than_market_price'] = ' %s ( %s) ahorro sobre el precio de mercado %s';
$_LANG['your_discount'] = 'Dependiendo de la oferta <a href="activity.php"> <font color=red> %s </font> </a>, puede disfrutar de un descuento de %s';
$_LANG['no'] = 'Ninguno';
$_LANG['not_support_virtual_goods'] = 'Hay productos no físicos en el carrito de compras. No se admiten compras anónimas. Inicie sesión para comprar';
$_LANG['not_support_insure'] = 'No es compatible con el seguro';
$_LANG['clear_cart'] = 'Carrito de compras vacío';
$_LANG['drop_to_collect'] = 'Añadir a favoritos';
$_LANG['password_js']['show_div_text'] = 'Por favor, haga clic en el botón Actualizar carrito';
$_LANG['password_js']['show_div_exit'] = 'Cerrar';
$_LANG['goods_fittings'] = 'Accesorios relacionados con el producto';
$_LANG['parent_name'] = 'Productos relacionados:';
$_LANG['remark_package'] = 'Paquete de regalo';

/* 优惠活动 */
$_LANG['favourable_name'] = 'Nombre del evento:';
$_LANG['favourable_period'] = 'Periodo de promoción:';
$_LANG['favourable_range'] = 'Rango preferencial:';
$_LANG['far_ext'][FAR_ALL] = 'Todos los productos';
$_LANG['far_ext'][FAR_BRAND] = 'Siguientes marcas';
$_LANG['far_ext'][FAR_CATEGORY] = 'Las siguientes categorías';
$_LANG['far_ext'][FAR_GOODS] = 'Los siguientes productos';
$_LANG['favourable_amount'] = 'Rango de cantidad:';
$_LANG['favourable_type'] = 'Método preferencial:';
$_LANG['fat_ext'][FAT_DISCOUNT] = 'Disfruta %d % %de descuento';
$_LANG['fat_ext'][FAT_GOODS] = 'Elija %d de los siguientes regalos (0 para cantidad ilimitada)';
$_LANG['fat_ext'][FAT_PRICE] = 'Reducción directa de efectivo %d';

$_LANG['favourable_not_exist'] = 'La oferta que desea agregar a su carrito no existe';
$_LANG['favourable_not_available'] = 'No puedes disfrutar esta oferta';
$_LANG['favourable_used'] = 'Esta promoción ha sido agregada al carrito';
$_LANG['pls_select_gift'] = 'Por favor seleccione un sorteo (oferta especial)';
$_LANG['gift_count_exceed'] = 'Ha excedido el número máximo de regalos (ofertas especiales)';
$_LANG['gift_in_cart'] = 'Su obsequio (oferta especial) ya está en su carrito: %s';
$_LANG['label_favourable'] = 'Promociones';
$_LANG['label_collection'] = 'Mi coleccion';
$_LANG['collect_to_flow'] = 'Comprar ahora';

/* 登录注册 */
$_LANG['forthwith_login'] = 'Iniciar sesión';
$_LANG['forthwith_register'] = 'Registrar nuevo usuario';
$_LANG['signin_failed'] = 'Lo sentimos, no se pudo iniciar sesión, verifique que su nombre de usuario y contraseña sean correctos';
$_LANG['gift_remainder'] = 'Nota: Después de iniciar sesión o registrarse, vaya a la página del carrito de compras para volver a seleccionar los regalos.';

/* 收货人信息 */
$_LANG['flow_js']['consignee_not_null'] = '¡El nombre del destinatario no puede estar vacío!';
$_LANG['flow_js']['country_not_null'] = '¡Seleccione el país donde se encuentra el destinatario!';
$_LANG['flow_js']['province_not_null'] = '¡Seleccione la provincia donde se encuentra el destinatario!';
$_LANG['flow_js']['city_not_null'] = '¡Seleccione la ciudad donde se encuentra el destinatario!';
$_LANG['flow_js']['district_not_null'] = '¡Seleccione el área donde se encuentra el destinatario!';
$_LANG['flow_js']['invalid_email'] = 'La dirección de correo electrónico que ingresó no es válida.';
$_LANG['flow_js']['address_not_null'] = '¡La dirección detallada del destinatario no puede estar vacía!';
$_LANG['flow_js']['tele_not_null'] = '¡El teléfono no puede estar vacío!';
$_LANG['flow_js']['shipping_not_null'] = 'Por favor, elija su método de envío!';
$_LANG['flow_js']['payment_not_null'] = 'Por favor, elija su forma de pago!';
$_LANG['flow_js']['goodsattr_style'] = 1;
$_LANG['flow_js']['tele_invaild'] = 'El número de teléfono no es válido.';
$_LANG['flow_js']['zip_not_num'] = 'El código postal solo puede completar números';
$_LANG['flow_js']['mobile_invaild'] = 'El número de móvil no es un número legal.';

$_LANG['new_consignee_address'] = 'Nueva dirección de envío';
$_LANG['consignee_address'] = 'Dirección de envío';
$_LANG['consignee_name'] = 'Nombre del consignatario';
$_LANG['country_province'] = 'Área de entrega';
$_LANG['please_select'] = 'Por favor seleccione';
$_LANG['city_district'] = 'Ciudad / área';
$_LANG['email_address'] = 'Dirección de correo electrónico';
$_LANG['detailed_address'] = 'Dirección detallada';
$_LANG['postalcode'] = 'Código postal';
$_LANG['phone'] = 'Teléfono';
$_LANG['mobile'] = 'Teléfono móvil';
$_LANG['backup_phone'] = 'Teléfono móvil';
$_LANG['sign_building'] = 'Edificio emblemático';
$_LANG['deliver_goods_time'] = 'Mejor tiempo de entrega';
$_LANG['default'] = 'Por defecto';
$_LANG['default_address'] = 'Dirección predeterminada';
$_LANG['confirm_submit'] = 'Confirmar envío';
$_LANG['confirm_edit'] = 'Confirmar modificación';
$_LANG['country'] = 'Pais';
$_LANG['province'] = 'Provincia';
$_LANG['city'] = 'La ciudad';
$_LANG['area'] = 'Area';
$_LANG['consignee_add'] = 'Agregar nueva dirección de envío';
$_LANG['shipping_address'] = 'Enviar a esta dirección';
$_LANG['address_amount'] = 'Su dirección de envío debe ser como máximo tres';
$_LANG['not_fount_consignee'] = 'Lo sentimos, la dirección de entrega que seleccionó no existe.';

/*------------------------------------------------------ */
//-- 订单提交
/*------------------------------------------------------ */

$_LANG['goods_amount_not_enough'] = 'El artículo que compró no alcanza el monto mínimo de compra %s de esta tienda. No puede enviar un pedido.';
$_LANG['balance_not_enough'] = 'Su saldo no es suficiente para cubrir todo el pedido, elija otro método de pago';
$_LANG['select_shipping'] = 'El método de envío seleccionado es';
$_LANG['select_payment'] = 'El método de pago seleccionado es';
$_LANG['order_amount'] = 'Su cantidad pagadera es';
$_LANG['remember_order_number'] = '¡Gracias por comprar en nuestra tienda! ';
$_LANG['back_home'] = '<a href="index.php">Volver a Home</a>';
$_LANG['goto_user_center'] = '<a href="user.php">Centro de usuarios</a>';
$_LANG['order_submit_back'] = 'Puedes %s o ir a %s';

$_LANG['order_placed_sms'] = 'Tiene un nuevo pedido Destinatario: %s Teléfono: %s';
$_LANG['sms_paid'] = 'Pagado';

$_LANG['notice_gb_order_amount'] = '(Nota: si hay un depósito para la compra grupal, solo debe pagar el depósito y la tarifa de pago correspondiente por primera vez)';

$_LANG['pay_order'] = 'Orden de pago %s';
$_LANG['validate_bonus'] = 'Verificar sobre rojo';
$_LANG['input_bonus_no'] = 'O ingrese el número de serie del sobre rojo';
$_LANG['select_bonus'] = 'Seleccione un sobre rojo existente';
$_LANG['bonus_sn_error'] = 'El número de serie del sobre rojo es incorrecto';
$_LANG['bonus_min_amount_error'] = 'La cantidad del producto pedido no ha alcanzado la cantidad mínima %s para usar este sobre rojo';
$_LANG['bonus_is_ok'] = 'El número de serie del sobre rojo se puede usar y se puede deducir de %s';


$_LANG['shopping_myship'] = 'Mi entrega';
$_LANG['shopping_activity'] = 'Lista de actividades';
$_LANG['shopping_package'] = 'Lista de paquetes de valor';

return $_LANG;

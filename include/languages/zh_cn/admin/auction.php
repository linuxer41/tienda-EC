<?php

/**
 * 管理中心拍卖活动语言文件
 */

/* menu */
$_LANG['auction_list'] = 'Lista de actividades de subasta';
$_LANG['add_auction'] = 'Añadir subasta';
$_LANG['edit_auction'] = 'Editar subasta';
$_LANG['auction_log'] = 'Historial de ofertas de actividad de subasta';
$_LANG['continue_add_auction'] = 'Continuar agregando subastas';
$_LANG['back_auction_list'] = 'Volver a la lista de subastas';
$_LANG['add_auction_ok'] = 'Añadir subasta con éxito';
$_LANG['edit_auction_ok'] = 'Editar subasta exitosa';
$_LANG['settle_deposit_ok'] = 'Margen congelado procesado con éxito';

/* list */
$_LANG['act_is_going'] = 'Mostrar solo actividades activas';
$_LANG['act_name'] = 'Nombre del evento de subasta';
$_LANG['goods_name'] = 'Nombre del producto';
$_LANG['start_time'] = 'Hora de inicio';
$_LANG['end_time'] = 'Hora final';
$_LANG['deposit'] = 'Margen';
$_LANG['start_price'] = 'Precio inicial';
$_LANG['end_price'] = 'Precio';
$_LANG['amplitude'] = 'Marcado';
$_LANG['auction_not_exist'] = 'La subasta que desea operar no existe';
$_LANG['auction_cannot_remove'] = 'Esta subasta ya está pujando y no se puede eliminar.';
$_LANG['js_languages']['batch_drop_confirm'] = '¿Está seguro de que desea eliminar la subasta seleccionada?';
$_LANG['batch_drop_ok'] = 'Operación completada (las subastas que ya se han ofertado no se pueden eliminar)';
$_LANG['no_record_selected'] = 'Ningún registro seleccionado';

/* info */
$_LANG['label_act_name'] = 'Nombre del evento de subasta:';
$_LANG['notice_act_name'] = 'Si se deja en blanco, tome el nombre del artículo de la subasta (este nombre solo se usa en segundo plano y no se mostrará en el frente)';
$_LANG['label_act_desc'] = 'Descripción de la actividad de subasta:';
$_LANG['label_search_goods'] = 'Busque artículos por número de producto, nombre o número de artículo';
$_LANG['label_goods_name'] = 'Nombre del producto de la subasta:';
$_LANG['label_start_time'] = 'Hora de inicio de la subasta:';
$_LANG['label_end_time'] = 'Hora de finalización de la subasta:';
$_LANG['label_status'] = 'Estado actual:';
$_LANG['label_start_price'] = 'Precio inicial:';
$_LANG['label_end_price'] = 'Precio:';
$_LANG['label_no_top'] = 'Sin gorra';
$_LANG['label_amplitude'] = 'Marcado:';
$_LANG['label_deposit'] = 'Margen:';
$_LANG['bid_user_count'] = ' %s compradores han ofertado';
$_LANG['settle_frozen_money'] = '¿Cómo lidiar con los fondos congelados de los compradores?';
$_LANG['unfreeze'] = 'Margen de descongelación';
$_LANG['deduct'] = 'Deducción de margen';
$_LANG['invalid_status'] = 'El estado actual es incorrecto';
$_LANG['no_deposit'] = 'No se necesita procesar margen';
$_LANG['unfreeze_auction_deposit'] = 'Margen para descongelar subastas: %s';
$_LANG['deduct_auction_deposit'] = 'Deducción por actividad de subasta: %s';

$_LANG['auction_status'][PRE_START] = 'No empezado';
$_LANG['auction_status'][UNDER_WAY] = 'En progreso';
$_LANG['auction_status'][FINISHED] = 'Terminó';
$_LANG['auction_status'][SETTLED] = 'Terminó';

$_LANG['pls_search_goods'] = 'Por favor busque el producto primero';
$_LANG['search_result_empty'] = 'No se ha encontrado ningún producto, busque nuevamente';

$_LANG['pls_select_goods'] = 'Por favor seleccione un artículo de subasta';
$_LANG['goods_not_exist'] = 'El artículo que está subastando no existe';

$_LANG['js_languages']['start_price_not_number'] = 'El precio inicial es incorrecto (número)';
$_LANG['js_languages']['end_price_not_number'] = 'La fórmula del precio de la mordida es incorrecta (número)';
$_LANG['js_languages']['end_gt_start'] = 'El precio debe ser mayor que el precio inicial.';
$_LANG['js_languages']['amplitude_not_number'] = 'Formato de marcado incorrecto (número)';
$_LANG['js_languages']['deposit_not_number'] = 'El formato del margen es incorrecto (número)';
$_LANG['js_languages']['start_lt_end'] = 'La hora de inicio de la subasta no puede ser mayor que la hora de finalización';
$_LANG['js_languages']['search_is_null'] = 'No se ha encontrado ningún producto, busque nuevamente';

/* log */
$_LANG['bid_user'] = 'El comprador';
$_LANG['bid_price'] = 'Oferta';
$_LANG['bid_time'] = 'Tiempo';
$_LANG['status'] = 'Estado';

<?php

/**
 * 商品批量上传、修改语言文件
 */

$_LANG['select_method'] = 'Cómo elegir un artículo:';
$_LANG['by_cat'] = 'Por categoría de producto, marca';
$_LANG['by_sn'] = 'De acuerdo con el número de artículo';
$_LANG['select_cat'] = 'Seleccione categoría de producto:';
$_LANG['select_brand'] = 'Seleccione marca de producto:';
$_LANG['goods_list'] = 'Lista de productos:';
$_LANG['src_list'] = 'Lista de tareas pendientes:';
$_LANG['dest_list'] = 'Lista seleccionada:';
$_LANG['input_sn'] = 'Ingrese el número de artículo: <br/> (uno por línea)';
$_LANG['edit_method'] = 'Modo de edición:';
$_LANG['edit_each'] = 'Edite uno por uno';
$_LANG['edit_all'] = 'Edición unificada';
$_LANG['go_edit'] = 'Ingrese editar';

$_LANG['notice_edit'] = 'El precio de miembro de -1 significa que el precio de miembro se calculará en función de la tasa de descuento de nivel de membresía';

$_LANG['goods_class'] = 'Categoría de producto';
$_LANG['g_class'][G_REAL] = 'Bienes fisicos';
$_LANG['g_class'][G_CARD] = 'Tarjeta virtual';

$_LANG['goods_sn'] = 'Número de artículo';
$_LANG['goods_name'] = 'Nombre del producto';
$_LANG['market_price'] = 'Precio de mercado';
$_LANG['shop_price'] = 'Nuestro precio';
$_LANG['integral'] = 'Compra de puntos';
$_LANG['give_integral'] = 'Puntos de regalo';
$_LANG['goods_number'] = 'Inventario';
$_LANG['brand'] = 'Marca';

$_LANG['batch_edit_ok'] = 'Edición por lotes exitosa';

$_LANG['export_format'] = 'Formato de datos';
$_LANG['export_ecshop'] = 'formato de datos de soporte de ecshop';
$_LANG['export_taobao'] = 'Taobao Assistant admite formatos de datos';
$_LANG['export_taobao46'] = 'Taobao Assistant 4.6 admite el formato de datos';
$_LANG['export_paipai'] = 'El asistente de datos admite el formato de datos';
$_LANG['export_paipai3'] = 'Paipai Assistant 3.0 admite formatos de datos';
$_LANG['goods_cat'] = 'Categoría:';
$_LANG['csv_file'] = 'Sube archivos csv masivos:';
$_LANG['notice_file'] = '(El número de productos cargados en un archivo CSV no debe exceder 1,000, y el tamaño del archivo CSV no debe exceder 500K).';
$_LANG['file_charset'] = 'Codificación de archivo:';
$_LANG['download_file'] = 'Descargar archivo CSV masivo ( %s)';
$_LANG['use_help'] = '使用说明：' .
        '<ol>' .
          '<li>根据使用习惯，下载相应语言的csv文件，例如中国内地用户下载简体中文语言的文件，港台用户下载繁体语言的文件；</li>' .
          '<li>填写csv文件，可以使用excel或文本编辑器打开csv文件；<br />' .
              '碰到“是否精品”之类，填写数字0或者1，0代表“否”，1代表“是”；<br />' .
              '商品图片和商品缩略图请填写带路径的图片文件名，其中路径是相对于 [根目录]/images/ 的路径，例如图片路径为[根目录]/images/200610/abc.jpg，只要填写 200610/abc.jpg 即可；<br />' .
               '<font style="color:#FE596A;">如果是淘宝助理格式请确保cvs编码为在网站的编码，如编码不正确，可以用编辑软件转换编码。</font></li>' .
          '<li>将填写的商品图片和商品缩略图上传到相应目录，例如：[根目录]/images/200610/；<br />'.
              '<font style="color:#FE596A;">请首先上传商品图片和商品缩略图再上传csv文件，否则图片无法处理。</font></li>' .
          '<li>选择所上传商品的分类以及文件编码，上传csv文件</li>' .
        '</ol>';

$_LANG['js_languages']['please_select_goods'] = 'Por favor elige tu producto';
$_LANG['js_languages']['please_input_sn'] = 'Por favor ingrese el número de artículo';
$_LANG['js_languages']['goods_cat_not_leaf'] = 'Por favor seleccione la clasificación inferior';
$_LANG['js_languages']['please_select_cat'] = 'Por favor seleccione su categoría';
$_LANG['js_languages']['please_upload_file'] = 'Sube archivos csv masivos';

// 批量上传商品的字段
$_LANG['upload_goods']['goods_name'] = 'Nombre del producto';
$_LANG['upload_goods']['goods_sn'] = 'Número de producto';
$_LANG['upload_goods']['brand_name'] = 'Marca de productos básicos';   // 需要转换成brand_id
$_LANG['upload_goods']['market_price'] = 'Precio de mercado';
$_LANG['upload_goods']['shop_price'] = 'Precio de la tienda';
$_LANG['upload_goods']['integral'] = 'Cuota de compra de crédito';
$_LANG['upload_goods']['original_img'] = 'Imagen original del producto';
$_LANG['upload_goods']['goods_img'] = 'Fotos del producto';
$_LANG['upload_goods']['goods_thumb'] = 'Miniatura del producto';
$_LANG['upload_goods']['keywords'] = 'Palabras clave del producto';
$_LANG['upload_goods']['goods_brief'] = 'Breve descripcion';
$_LANG['upload_goods']['goods_desc'] = 'Descripción detallada';
$_LANG['upload_goods']['goods_weight'] = 'Peso del producto (kg)';
$_LANG['upload_goods']['goods_number'] = 'Cantidad de stock';
$_LANG['upload_goods']['warn_number'] = 'Cantidad de advertencia de inventario';
$_LANG['upload_goods']['is_best'] = 'Si bien';
$_LANG['upload_goods']['is_new'] = 'Si nuevo';
$_LANG['upload_goods']['is_hot'] = 'Hace calor';
$_LANG['upload_goods']['is_on_sale'] = '¿Está en los estantes?';
$_LANG['upload_goods']['is_alone_sale'] = '¿Se puede vender como mercancía general?';
$_LANG['upload_goods']['is_real'] = 'Si bienes físicos';

$_LANG['batch_upload_ok'] = 'La carga masiva se realizó correctamente';
$_LANG['goods_upload_confirm'] = 'Confirmación de carga por lotes';

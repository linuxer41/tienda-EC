<?php

/**
 * 商品分类管理语言文件
*/

/* 商品分类字段信息 */
$_LANG['cat_id'] = 'Numero';
$_LANG['cat_name'] = 'Nombre de categoría';
$_LANG['isleaf'] = 'No permitido';
$_LANG['noleaf'] = 'Permitir';
$_LANG['keywords'] = 'Palabras clave';
$_LANG['cat_desc'] = 'Descripción de la categoría';
$_LANG['parent_id'] = 'Clasificación superior';
$_LANG['sort_order'] = 'Ordenar';
$_LANG['measure_unit'] = 'Unidad de cantidad';
$_LANG['delete_info'] = 'Eliminar seleccionado';
$_LANG['category_edit'] = 'Editar categoría de producto';
$_LANG['move_goods'] = 'Transferir bienes';
$_LANG['cat_top'] = 'Clasificación superior';
$_LANG['show_in_nav'] = 'Si mostrar en la barra de navegación';
$_LANG['cat_style'] = 'Archivos clasificados de hojas de estilo';
$_LANG['is_show'] = 'Ya sea para mostrar';
$_LANG['show_in_index'] = 'Establecer como recomendación de página de inicio';
$_LANG['notice_show_in_index'] = 'Esta configuración puede mostrar los productos recomendados en esta categoría en los lugares más recientes, populares y recomendados de la página de inicio.';
$_LANG['goods_number'] = 'Numero de productos';
$_LANG['grade'] = 'Cantidad de rangos de precios';
$_LANG['notice_grade'] = 'Esta opción indica el número de divisiones entre el precio más bajo y el precio más alto del producto en la categoría. Completar 0 significa que no hay calificación, y el máximo no puede exceder 10.';
$_LANG['short_grade'] = 'Clasificación de precios';

$_LANG['nav'] = 'Barra de navegación';
$_LANG['index_new'] = 'El más nuevo';
$_LANG['index_best'] = 'Boutique';
$_LANG['index_hot'] = 'Caliente';

$_LANG['back_list'] = 'Regresar a la lista de categorías';
$_LANG['continue_add'] = 'Continuar agregando categorías';

$_LANG['notice_style'] = 'Puede especificar un archivo de hoja de estilo para cada categoría de producto. ';

/* 操作提示信息 */
$_LANG['catname_empty'] = '¡El nombre de la categoría no puede estar vacío!';
$_LANG['catname_exist'] = '¡Ya existe el mismo nombre de categoría!';
$_LANG["parent_isleaf"] = '¡La categoría seleccionada no puede ser la última categoría!';
$_LANG["cat_isleaf"] = 'No es la última categoría o todavía hay productos en esta categoría, ¡no puede eliminarla!';
$_LANG["cat_noleaf"] = '¡Hay otras subcategorías a continuación, que no se pueden modificar a la categoría de último nivel!';
$_LANG["is_leaf_error"] = '¡La categoría superior seleccionada no puede ser la categoría actual o una categoría subordinada de la categoría actual!';
$_LANG['grade_error'] = 'La cantidad de calificación de precios solo puede ser un número entero entre 0-10';

$_LANG['catadd_succed'] = '¡Nueva categoría de producto agregada con éxito!';
$_LANG['catedit_succed'] = '¡La categoría de producto se edita correctamente!';
$_LANG['catdrop_succed'] = '¡Categoría de producto eliminada con éxito!';
$_LANG['catremove_succed'] = '¡Transferencia de clasificación de producto exitosa!';
$_LANG['move_cat_success'] = '¡La clasificación del producto de transferencia se ha completado con éxito!';

$_LANG['cat_move_desc'] = '¿Qué es una clasificación de producto de transferencia?';
$_LANG['select_source_cat'] = 'Seleccione una categoría para transferir';
$_LANG['select_target_cat'] = 'Seleccionar categoría objetivo';
$_LANG['source_cat'] = 'Ordenar de esto';
$_LANG['target_cat'] = 'Transferir a';
$_LANG['start_move_cat'] = 'Comience a transferir';
$_LANG['cat_move_notic'] = 'Al agregar un producto o en la administración del producto, si necesita cambiar la clasificación del producto, puede usar esta función para administrar correctamente la clasificación de su producto.';

$_LANG['cat_move_empty'] = '¡No elegiste la categoría de producto correcta!';

$_LANG['sel_goods_type'] = 'Por favor seleccione el tipo de producto';
$_LANG['sel_filter_attr'] = 'Por favor seleccione un atributo de filtro';
$_LANG['filter_attr'] = 'Filtrar atributos';
$_LANG['filter_attr_notic'] = 'Filtrar propiedades para filtrar elementos en la página de categoría anterior';
$_LANG['filter_attr_not_repeated'] = 'Las propiedades del filtro no son repetibles';

/*JS 语言项*/
$_LANG['js_languages']['catname_empty'] = '¡El nombre de la categoría no puede estar vacío!';
$_LANG['js_languages']['unit_empyt'] = '¡La unidad de cantidad no puede estar vacía!';
$_LANG['js_languages']['is_leafcat'] = 'La categoría que seleccionó es una categoría de último nivel. ';
$_LANG['js_languages']['not_leafcat'] = 'La categoría que seleccionó no es una categoría de último nivel. ';
$_LANG['js_languages']['filter_attr_not_repeated'] = 'Las propiedades del filtro no son repetibles';
$_LANG['js_languages']['filter_attr_not_selected'] = 'Por favor seleccione un atributo de filtro';

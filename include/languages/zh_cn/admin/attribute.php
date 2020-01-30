<?php
/**
 * 商品类型管理语言文件
*/

/* 列表 */
$_LANG['by_goods_type'] = 'Mostrar por tipo de producto:';
$_LANG['all_goods_type'] = 'Todos los tipos de productos';

$_LANG['attr_id'] = 'Numero';
$_LANG['cat_id'] = 'Tipo de producto';
$_LANG['attr_name'] = 'Nombre del atributo';
$_LANG['attr_input_type'] = 'Cómo ingresar valores de atributos';
$_LANG['attr_values'] = 'Lista de valores opcionales.';
$_LANG['attr_type'] = '¿Necesita seleccionar el valor de este atributo al comprar el producto?';

$_LANG['value_attr_input_type'][ATTR_TEXT] = 'Entrada manual';
$_LANG['value_attr_input_type'][ATTR_OPTIONAL] = 'Seleccionar de la lista';
$_LANG['value_attr_input_type'][ATTR_TEXTAREA] = 'Cuadro de texto multilínea';

$_LANG['drop_confirm'] = '¿Seguro que quieres eliminar este atributo?';

/* 添加/编辑 */
$_LANG['label_attr_name'] = 'Nombre de propiedad:';
$_LANG['label_cat_id'] = 'Tipo de producto:';
$_LANG['label_attr_index'] = 'Puede recuperar:';
$_LANG['label_is_linked'] = '¿Están asociados los productos con el mismo valor de atributo?';
$_LANG['no_index'] = 'No se requiere recuperación';
$_LANG['keywords_index'] = 'Búsqueda por palabra clave';
$_LANG['range_index'] = 'Búsqueda de rango';
$_LANG['note_attr_index'] = 'Si no se requiere que este atributo sea una condición de búsqueda de productos, seleccione No se requiere búsqueda. Seleccione esta búsqueda de palabras clave cuando necesite este atributo para productos de búsqueda de palabras clave. Si desea especificar un cierto rango durante esta búsqueda de atributos, seleccione una búsqueda de rango.';
$_LANG['label_attr_input_type'] = 'Cómo ingresar el valor del atributo:';
$_LANG['text'] = 'Entrada manual';
$_LANG['select'] = 'Seleccione de la lista a continuación (una fila representa un valor opcional)';
$_LANG['text_area'] = 'Cuadro de texto multilínea';
$_LANG['label_attr_values'] = 'Lista de valores opcionales:';
$_LANG['label_attr_group'] = 'Agrupación de atributos:';
$_LANG['label_attr_type'] = 'Si el atributo es opcional';
$_LANG['note_attr_type'] = 'Cuando selecciona \"Seleccionar/Verificar atributo individual\", puede establecer múltiples valores para el atributo del producto, y también puede especificar diferentes aumentos de precio para diferentes valores de atributo. Los usuarios deben seleccionar valores de atributo específicos al comprar el producto. ';
$_LANG['attr_type_values'][0] = 'Atributo único';
$_LANG['attr_type_values'][1] = 'Atributo de radio';
$_LANG['attr_type_values'][2] = 'Verificar atributo';


$_LANG['add_next'] = 'Agregar siguiente atributo';
$_LANG['back_list'] = 'Volver a la lista de propiedades';

$_LANG['add_ok'] = 'Agregar el atributo [ %s] se realizó correctamente.';
$_LANG['edit_ok'] = 'La propiedad de edición [ %s] se realizó correctamente.';

/* 提示信息 */
$_LANG['name_exist'] = 'El nombre del atributo ya existe. Cambíelo.';
$_LANG['drop_confirm'] = '¿Seguro que quieres eliminar este atributo?';
$_LANG['notice_drop_confirm'] = 'Este atributo ya lo utilizan los elementos %s. ¿Está seguro de que desea eliminar este atributo?';
$_LANG['name_not_null'] = 'El nombre del atributo no puede estar vacío.';

$_LANG['no_select_arrt'] = 'No seleccionó el nombre del atributo que desea eliminar';
$_LANG['drop_ok'] = 'Se eliminaron correctamente los atributos de %d elemento';

$_LANG['js_languages']['name_not_null'] = 'Por favor, introduzca un nombre de propiedad.';
$_LANG['js_languages']['values_not_null'] = 'Ingrese un valor opcional para este atributo.';
$_LANG['js_languages']['cat_id_not_null'] = 'Seleccione el tipo de producto al que pertenece este atributo.';

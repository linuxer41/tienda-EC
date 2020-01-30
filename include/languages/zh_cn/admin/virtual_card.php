<?php

/**
 * 虚拟卡管理
*/

/*------------------------------------------------------ */
//-- 卡片信息
/*------------------------------------------------------ */
$_LANG['virtual_card_list'] = 'Lista de bienes virtuales';
$_LANG['lab_goods_name'] = 'Nombre del producto';
$_LANG['replenish'] = 'Reabastecimiento';
$_LANG['lab_card_id'] = 'Numero';
$_LANG['lab_card_sn'] = 'Número de serie de la tarjeta';
$_LANG['lab_card_password'] = 'Contraseña de la tarjeta';
$_LANG['lab_end_date'] = 'A partir de la fecha';
$_LANG['lab_is_saled'] = 'Ya sea vendido';
$_LANG['lab_order_sn'] = 'Número de orden';
$_LANG['action_success'] = 'Operación exitosa';
$_LANG['action_fail'] = 'Operación fallida';
$_LANG['card'] = 'Lista de tarjetas';

$_LANG['batch_card_add'] = 'Añadir reposición a granel';
$_LANG['download_file'] = 'Descargar archivo CSV masivo';
$_LANG['separator'] = 'Delimitador';
$_LANG['uploadfile'] = 'Subir archivo';
$_LANG['sql_error'] = 'Error en %s: <br/>';

/* 提示信息 */
$_LANG['replenish_no_goods_id'] = 'Falta el parámetro ID del producto, no se puede reponer la operación';
$_LANG['replenish_no_get_goods_name'] = 'El parámetro ID del producto es incorrecto y no se puede obtener el nombre del producto.';
$_LANG['drop_card_success'] = 'El registro fue eliminado exitosamente';
$_LANG['batch_drop'] = 'Eliminación masiva';
$_LANG['drop_card_confirm'] = '¿Seguro que quieres eliminar este registro?';
$_LANG['card_sn_exist'] = 'El número de tarjeta %s ya existe, vuelva a ingresar';
$_LANG['go_list'] = 'Volver a la lista de reabastecimiento';
$_LANG['continue_add'] = 'Sigue reponiendo';
$_LANG['uploadfile_fail'] = 'Error al cargar el archivo';
$_LANG['batch_card_add_ok'] = 'Se agregaron correctamente los mensajes de reposición %s';

$_LANG['js_languages']['no_card_sn'] = 'El número de serie y la contraseña de la tarjeta no pueden estar en blanco.';
$_LANG['js_languages']['separator_not_null'] = 'El delimitador no puede estar vacío.';
$_LANG['js_languages']['uploadfile_not_null'] = 'Por favor seleccione un archivo para cargar.';

$_LANG['use_help'] = 'Instrucciones de uso：' .
        '<ol>' .
          '<li>El archivo de carga debe ser un archivo CSV<br />' .
              'La primera columna del archivo CSV es el número de serie de la tarjeta; la segunda columna es la contraseña de la tarjeta; y la tercera columna es la fecha de vencimiento.<br />'.
              '(El método para crear un archivo csv con EXCEL: complete los datos en el orden de número de tarjeta, contraseña de la tarjeta y fecha límite en EXCEL, y guárdelo como un archivo csv directamente después de completarlo)'.
          '<li>La contraseña y la fecha límite pueden dejarse en blanco. La fecha límite es 2006-11-6 o 2006/11/6.'.
          '<li>No use chino en el número de tarjeta, contraseña de la tarjeta y fecha límite</li>' .
        '</ol>';

/*------------------------------------------------------ */
//-- 改变加密串
/*------------------------------------------------------ */

$_LANG['virtual_card_change'] = 'Cambiar cadena encriptada';
$_LANG['user_guide'] = 'Instrucciones de uso：' .
        '<ol>' .
          '<li>La cadena de cifrado se utiliza al cifrar el número de tarjeta y la contraseña de los productos de tarjetas virtuales.</li>' .
          '<li>La cadena encriptada se almacena en el archivo data/config.php, y la constante correspondiente es AUTH_KEY</li>' .
          '<li>Si desea cambiar la cadena encriptada, ingrese la cadena encriptada original y la nueva cadena encriptada en el cuadro de texto a continuación, y haga clic en el botón "Aceptar".</li>' .
        '</ol>';
$_LANG['label_old_string'] = 'Cadena cifrada original';
$_LANG['label_new_string'] = 'Nueva cadena encriptada';

$_LANG['invalid_old_string'] = 'La cadena encriptada original es incorrecta';
$_LANG['invalid_new_string'] = 'La nueva cadena encriptada es incorrecta';
$_LANG['change_key_ok'] = 'Cambiar cadena encriptada con éxito';
$_LANG['same_string'] = 'La nueva cadena encriptada es la misma que la cadena encriptada original';

$_LANG['update_log'] = 'Actualizar registro';
$_LANG['old_stat'] = 'Hay %s registros en total. ';
$_LANG['new_stat'] = '<strong> Actualización completada </ strong>, ahora hay %s registros cifrados con la nueva cadena y %s registros cifrados con la cadena desconocida.';
$_LANG['update_error'] = 'Error durante la actualización: %s';
$_LANG['js_languages']['updating_info'] = '<strong> Actualización </ strong> (100 registros a la vez)';
$_LANG['js_languages']['updated_info'] = '<strong> Actualizó </strong> <span id=\"updated\">0</ span> registros.';

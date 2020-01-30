<?php

/**
 * 转换程序语言文件
 */

$_LANG['confirm_convert'] = 'Nota: Realizar el procedimiento de conversión hará que se pierdan los datos existentes, ¡piénselo dos veces! ';
$_LANG['backup_data'] = 'Si los datos existentes pueden ser valiosos para usted, primero haga una copia de seguridad.';
$_LANG['backup'] = 'Regresa ahora';
$_LANG['select_system'] = 'Seleccione el sistema que desea convertir:';
$_LANG['note_select_system'] = '(Si su sistema no está en la lista de la izquierda, puede ir a <a href="http://www.ecshop.com" target="_blank"><strong> ';
$_LANG['select_charset'] = 'Seleccione el conjunto de caracteres utilizado por el sistema que desea convertir:';
$_LANG['note_select_charset'] = '(Si su sistema no está usando el juego de caracteres UTF-8, la conversión puede demorar más)';
$_LANG['dir_notes'] = 'Tenga en cuenta que la ruta del directorio raíz del centro comercial original utiliza una ruta relativa al directorio de administración. ';
$_LANG['your_config'] = 'Establezca la información de configuración del sistema original:';
$_LANG['your_host'] = 'Nombre de host o dirección:';
$_LANG['your_user'] = 'Cuenta de inicio de sesión:';
$_LANG['your_pass'] = 'Contraseña de inicio de sesión:';
$_LANG['your_db'] = 'Nombre de la base de datos:';
$_LANG['your_prefix'] = 'Prefijo de tabla de base de datos:';
$_LANG['your_path'] = 'El directorio raíz original del centro comercial:';
$_LANG['convert'] = 'Datos de conversión';
$_LANG['remark'] = 'Observaciones:';
$_LANG['remark_info'] = '<ul>' .
        '<li>对于特价的商品，您需要编辑其原价（本店售价）和促销期；</li>' .
        '<li>请重新设置水印；</li>' .
        '<li>请重新设置广告；</li>' .
        '<li>请重新设置配送方式；</li>' .
        '<li>请重新设置支付方式；</li>' .
        '<li>请把原来不属于末级分类的商品转移到末级分类；</li>' .
        '</ul>';

$_LANG['connect_db_error'] = 'No se puede conectar a la base de datos, verifique la información de configuración.';
$_LANG['table_error'] = 'Falta la tabla requerida %s, verifique la información de configuración.';
$_LANG['dir_error'] = 'Falta el directorio requerido %s, verifique la información de configuración.';
$_LANG['dir_not_readable'] = 'El directorio no es legible %s';
$_LANG['dir_not_writable'] = 'El directorio no se puede escribir';
$_LANG['file_not_readable'] = 'El archivo no se puede leer %s';
$_LANG['js_languages']['check_your_db'] = 'Comprobando la base de datos de su sistema ...';
$_LANG['js_languages']['act_ok'] = '¡Felicidades, la operación fue exitosa!';

$_LANG['js_languages']['no_system'] = 'No hay convertidor disponible';
$_LANG['js_languages']['host_not_null'] = 'El nombre o la dirección del host no pueden estar vacíos';
$_LANG['js_languages']['db_not_null'] = 'El nombre de la base de datos no puede estar vacío';
$_LANG['js_languages']['user_not_null'] = 'La cuenta de inicio de sesión no puede estar vacía';
$_LANG['js_languages']['path_not_null'] = 'El directorio raíz original del centro comercial no puede estar vacío';

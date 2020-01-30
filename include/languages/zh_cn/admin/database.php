<?php



$_LANG['db_manage'] = 'Gestión de bases de datos';
$_LANG['start_backup'] = 'Iniciar copia de seguridad';
$_LANG['backup_name'] = 'Nombre de respaldo';
$_LANG['backup_time'] = 'Tiempo de respaldo';
$_LANG['backup_size'] = 'Tamaño de copia de seguridad';
$_LANG['restore'] = 'Restaurar copia de seguridad';
$_LANG['restore_ok'] = 'Recuperación exitosa';
$_LANG['download'] = 'Descargar';
$_LANG['restored'] = 'La copia de seguridad ha sido restaurada';
$_LANG['upload_sql'] = 'Subir archivo de copia de seguridad';

$_LANG['table'] = 'Hoja de datos';
$_LANG['type'] = 'Tipo de tabla de datos';
$_LANG['rec_num'] = 'Numero de registros';
$_LANG['rec_size'] = 'Datos';
$_LANG['rec_chip'] = 'Fragmento';
$_LANG['start_optimize'] = 'Comience la optimización de la tabla de datos';
$_LANG['chip_count'] = 'Fragmentos totales';
$_LANG['charset'] = 'Conjunto de caracteres';
$_LANG['status'] = 'Estado';

$_LANG['backup_type'] ='Tipo de copia de seguridad';
$_LANG['full_backup'] ='Copia de seguridad de todo';
$_LANG['full_backup_note'] ='Copia de seguridad de todas las tablas en la base de datos';
$_LANG['stand_backup'] ='Copia de seguridad estándar (recomendado)';
$_LANG['stand_backup_note'] ='Copia de seguridad de tablas de datos de uso frecuente';
$_LANG['min_backup'] ='Copia de seguridad mínima';
$_LANG['min_backup_note'] ='Incluir solo tabla de productos, tabla de pedidos, tabla de usuario';
$_LANG['custom_backup'] ='Copia de seguridad personalizada';
$_LANG['custom_backup_note'] ='Copia de seguridad de la tabla de datos según su elección';

$_LANG['option'] = 'Otras opciones';
$_LANG['ext_insert'] = 'Uso de inserción extendida';
$_LANG['is_pack'] = 'Si se deben empaquetar datos de respaldo';
$_LANG['notice_is_pack'] = 'El empaquetado puede reducir el tamaño de la copia de seguridad, pero debe descomprimir la copia de seguridad antes de cargarla para restaurar';
$_LANG['vol_size'] = 'Límite de longitud del archivo de respaldo de volumen (kb)';
$_LANG['sql_name'] = 'Nombre del archivo de respaldo';
$_LANG['backup_failure'] = 'Error de respaldo';

$_LANG['sqlfile'] = 'Archivo sql local';
$_LANG['update_table_pre'] = 'Cambiar el prefijo de la tabla';
$_LANG['old_table_pre'] = 'Prefijo de tabla original';
$_LANG['new_table_pre'] = 'Nuevo prefijo de tabla';
$_LANG['use_new_pre'] = 'Usar nuevo prefijo de tabla';
$_LANG['notice_use_new_pre'] = 'Solo puede seleccionar \"Sí\" al restaurar todas las copias de seguridad; de lo contrario, las tablas sin copias de seguridad no estarán disponibles. ';$_LANG['upload_and_exe'] = 'Subir y ejecutar archivo sql';

/* 提示信息 */
$_LANG['fail_get_tables'] = 'Error al obtener la tabla de datos de respaldo';
$_LANG['fail_open_file'] = 'El archivo no se pudo abrir';
$_LANG['fail_remove'] = 'Error al eliminar el archivo';
$_LANG['fail_get_content'] = 'Error al obtener el contenido de la tabla de datos';
$_LANG['fail_upload'] = 'Error al cargar el archivo';
$_LANG['fail_upload_move'] = 'Error al mover el archivo cargado';
$_LANG['unrecognize_version'] = 'No se puede identificar la versión del sistema de copia de seguridad SQL';
$_LANG['unrecognize_mysql_version'] = 'No se puede identificar la versión mysql de la copia de seguridad sql';
$_LANG['mysql_version_error'] = 'La versión actual de mysql %s es diferente de la versión de mysql %s de los datos de la copia de seguridad. ¿Está seguro de que desea importar el archivo de copia de seguridad?';
$_LANG['confirm_ver'] = 'Sí, confirmar importación';
$_LANG['unconfirm_ver'] = 'No, cancelar importación';
$_LANG['version_error'] = 'La versión actual %s es diferente de la versión de datos de respaldo %s, y la restauración de respaldo falla';
$_LANG['not_sql_file'] = 'Su carga no parece ser un archivo sql. Si el archivo es realmente un archivo sql, cambie la extensión del archivo a .sql';
$_LANG['sqlfile_error'] = 'El archivo sql cargado se ejecuta incorrectamente y la copia de seguridad y la restauración fallan';
$_LANG['restore_success'] = 'Recuperación exitosa';
$_LANG['fail_optimize'] = 'Error al optimizar la tabla de datos %s';
$_LANG['optimize_ok'] = 'Tabla de datos optimizada con éxito, limpiado un total de %d';
$_LANG['restore_confirm'] = 'La recuperación de la base de datos borra todo lo que tiene. ¿Está seguro de que desea recuperarlo?';
$_LANG['fail_import'] = 'La importación de datos falló';
$_LANG['no_file'] = 'El archivo no existe';
$_LANG['not_support_zip_format'] = 'El servidor no admite el formato zip. Descomprima el archivo antes de cargarlo.';

/* js */
$_LANG['js_languages']['remove_confirm'] = '¿Estás seguro de que deseas eliminar la copia de seguridad?';
$_LANG['js_languages']['lang_remove'] = 'Eliminar';
$_LANG['js_languages']['lang_restore'] = 'Restaurar copia de seguridad';
$_LANG['js_languages']['lang_download'] = 'Descargar';
$_LANG['js_languages']['sql_name_not_null'] = 'El nombre del archivo no puede estar vacío';
$_LANG['js_languages']['vol_size_not_null'] = 'Por favor, complete el tamaño de la copia de seguridad';

/* 数据备份 */
$_LANG['backup_title'] = 'El archivo de datos %s se creó correctamente y el programa continuará automáticamente.';
$_LANG['backup_notice'] = 'Si su navegador no redirige automáticamente, haga clic aquí';
$_LANG['backup_success'] = 'Copia de seguridad exitosa';

$_LANG['name'] = 'Nombre de archivo';
$_LANG['ver'] = 'Versión';
$_LANG['add_time'] = 'Tiempo';
$_LANG['file_size'] = 'Tamaño';
$_LANG['empty_upload'] = 'Subiste un archivo vacío';
$_LANG['fail_write_file'] = 'El archivo de respaldo %s no se puede escribir';
$_LANG['vol'] = 'Volumen';
$_LANG['import'] = 'Importar';
$_LANG['server_sql'] = 'Copia de seguridad de archivos en el servidor';
$_LANG['submit_remove'] = 'Eliminar';
$_LANG['remove_success'] = 'Eliminado exitosamente';
$_LANG['confirm_import'] = 'Importar un volumen puede causar datos incompletos, ya sea para importar otros datos de volumen juntos';
$_LANG['also_continue'] = 'Sí, quiero importar otros datos de volumen.';

$_LANG['dir_priv'] = 'Los siguientes problemas con los permisos del directorio %s:';
$_LANG['dir_not_exist'] = 'El directorio %s no existe, créelo manualmente';
$_LANG['cannot_read'] = 'Ilegible';
$_LANG['cannot_write'] = 'No escribible';
$_LANG['cannot_add'] = 'Agregar datos';
$_LANG['cannot_modify'] = 'No se puede modificar el archivo';

$_LANG['confirm_remove'] = '¿Estás seguro de que deseas eliminar los datos seleccionados?';

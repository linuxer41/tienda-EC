<?php

/**
 * 管理中心会员数据整合插件管理程序语言文件
*/

$_LANG['integrate_name'] = 'Nombre';
$_LANG['integrate_version'] = 'Versión';
$_LANG['integrate_author'] = 'Autor';

/* 插件列表 */
$_LANG['update_success'] = 'La configuración del complemento de integración de datos de membresía ha sido exitosa.';
$_LANG['install_confirm'] = '¿Está seguro de que desea instalar este complemento de integración de datos de membresía?';
$_LANG['need_not_setup'] = 'Cuando utiliza el sistema de membresía predeterminado, no se requiere configuración.';
$_LANG['different_domain'] = 'El objeto de integración que establezca no está en el mismo dominio que el sistema predeterminado. ';
$_LANG['points_set'] = 'Configuración de canje de puntos';
$_LANG['view_user_list'] = 'Ver usuarios del foro';
$_LANG['view_install_log'] = 'Ver registros de instalación';

$_LANG['integrate_setup'] = 'Configurar el complemento de integración de datos de membresía';
$_LANG['continue_sync'] = 'Continuar sincronizando datos de miembros';
$_LANG['go_userslist'] = 'Volver a la lista de cuentas de miembros';
$_LANG['user_help'] = '<pre>
Cómo utilizar:
          1: Si necesita integrar otros sistemas de usuario, puede instalar el complemento de número de versión apropiado para la integración.
          2: Si necesita reemplazar el sistema de usuario integrado, instale el complemento de destino directamente para completar la integración y desinstale automáticamente el último complemento integrado.
          3: Si no necesita integrar ningún sistema de usuario, elija instalar el complemento para desinstalar todos los complementos integrados.
                            </pre>';

/* 查看安装日志 */
$_LANG['lost_install_log'] = 'Registro de instalación no encontrado';
$_LANG['empty_install_log'] = 'El registro de instalación está vacío.';

/* 表单相关语言项 */
$_LANG['db_notice'] = 'Al hacer clic en "<font color="#000000"> Siguiente </font>"podrá sincronizar los datos de usuario de la tienda con el foro de integración. Si no necesita sincronizar datos, haga clic en "<font color ="#000000"> Guardar información de configuración directamente </font>"';

$_LANG['lable_db_host'] = 'Nombre de host del servidor de la base de datos:';
$_LANG['lable_db_name'] = 'Nombre de la base de datos:';
$_LANG['lable_db_chartset'] = 'Conjunto de caracteres de la base de datos:';
$_LANG['lable_is_latin1'] = 'Si codificar latin1';
$_LANG['lable_db_user'] = 'Cuenta de base de datos:';
$_LANG['lable_db_pass'] = 'Contraseña de la base de datos:';
$_LANG['lable_prefix'] = 'Prefijo de tabla de datos:';
$_LANG['lable_url'] = 'URL completa del sistema integrado:';
/* 表单相关语言项(discus5x) */
$_LANG['cookie_prefix']          = 'COOKIE prefijo:';
$_LANG['cookie_salt']          = 'Cadena cifrada COOKIE:';
$_LANG['button_next'] = 'Paso siguiente';
$_LANG['button_force_save_config'] = 'Guardar información de configuración directamente';
$_LANG['save_confirm'] = '¿Está seguro de que desea guardar la información de configuración directamente?';
$_LANG['button_save_config'] = 'Guardar información de configuración';

$_LANG['error_db_msg'] = 'La dirección de la base de datos, el usuario o la contraseña son incorrectos';
$_LANG['error_db_exist'] = 'La base de datos no existe.';
$_LANG['error_table_exist'] = 'El formulario de datos clave del foro de integración no existe y la información que completó es incorrecta';

$_LANG['notice_latin1'] = 'Si esta opción se rellena incorrectamente, no se puede usar el nombre de usuario chino';
$_LANG['error_not_latin1'] = '¡La base de datos integrada ha detectado que no está codificando latin1! ';
$_LANG['error_is_latin1'] = '¡La base de datos integrada detectó que estaba codificando Lantin1! ';
$_LANG['invalid_db_charset'] = 'La base de datos consolidada detectó el conjunto de caracteres %s en lugar del conjunto de caracteres %s';
$_LANG['error_latin1'] = 'La información de integración que complete causará serios errores y la integración no puede completarse';

/* 检查同名用户 */
$_LANG['conflict_username_check'] = 'Compruebe si el usuario del centro comercial tiene el mismo nombre que el usuario del foro de integración';
$_LANG['check_notice'] = 'Esta página detectará si los usuarios existentes y los usuarios del foro tienen el mismo nombre. Haga clic en \"Antes de verificar\", seleccione un método de procesamiento predeterminado para los usuarios del mismo nombre en la tienda';
$_LANG['default_method'] = 'Si se detectan usuarios duplicados en el centro comercial, elija un método de procesamiento predeterminado para estos usuarios';
$_LANG['shop_user_total'] = 'Hay %s usuarios para verificar en el centro comercial';
$_LANG['lable_size'] = 'Número de usuarios controlados a la vez';
$_LANG['start_check'] = 'Comience a verificar';
$_LANG['next'] = 'Paso siguiente';
$_LANG['checking'] = 'Comprobando ... (por favor no cierre su navegador)';
$_LANG['notice'] = 'Comprobado %s / %s';
$_LANG['check_complete'] = 'Cheque completado';

/* 同名用户处理 */
$_LANG['conflict_username_modify'] = 'Lista de usuarios duplicados en el centro comercial.';
$_LANG['modify_notice'] = 'A continuación se enumeran los usuarios duplicados y los métodos de procesamiento para todos los centros comerciales y foros. ';
$_LANG['page_default_method'] = 'Método predeterminado para usuarios duplicados en esta página';
$_LANG['lable_rename'] = 'Usuario duplicado de centro comercial con sufijo';
$_LANG['lable_delete'] = 'Eliminar usuarios duplicados y datos relacionados en el centro comercial';
$_LANG['lable_ignore'] = 'Mantenga a los usuarios duplicados en el centro comercial, los usuarios con el mismo nombre en el foro son tratados como el mismo usuario';
$_LANG['short_rename'] = 'Usuarios del centro comercial renombrados';
$_LANG['short_delete'] = 'Eliminar usuario del centro comercial';
$_LANG['short_ignore'] = 'Usuarios de centros comerciales reservados';
$_LANG['user_name'] = 'Nombre de usuario del centro comercial';
$_LANG['correo electronico'] = 'correo electronico';
$_LANG['reg_date'] = 'Fecha de registro';
$_LANG['all_user'] = 'Todos los usuarios con el mismo nombre en el centro comercial.';
$_LANG['error_user'] = 'Usuarios de centros comerciales que necesitan volver a seleccionar la operación';
$_LANG['rename_user'] = 'Usuarios de centros comerciales que necesitan cambiar el nombre';
$_LANG['delete_user'] = 'Usuarios del centro comercial para eliminar';
$_LANG['ignore_user'] = 'Almacenar usuarios que necesitan ser retenidos';

$_LANG['submit_modify'] = 'Guardar esta página cambia';
$_LANG['button_confirm_next'] = 'Iniciar integración';


/* 用户同步 */
$_LANG['user_sync'] = 'Sincronice los datos del centro comercial con el foro y complete la integración';
$_LANG['button_pre'] = 'Paso anterior';
$_LANG['task_name'] = 'Nombre de la tarea';
$_LANG['task_status'] = 'Estado de la tarea';
$_LANG['task_del'] = 'Se eliminará %s usuario del centro comercial';
$_LANG['task_rename'] = 'Los usuarios de %s mall necesitan cambiar el nombre';
$_LANG['task_sync'] = 'Los usuarios de %s mall necesitan sincronizarse con el foro';
$_LANG['task_save'] = 'Guardar información de configuración e integración completa';
$_LANG['task_uncomplete'] = 'Inacabado';
$_LANG['task_run'] = 'Corriendo ( %s / %s)';
$_LANG['task_complete'] = 'Completado';
$_LANG['start_task'] = 'Iniciar tarea';
$_LANG['sync_status'] = ' %s / %s sincronizado';
$_LANG['sync_size'] = 'Número de usuarios procesados a la vez';
$_LANG['sync_ok'] = 'Felicidades ';


$_LANG['save_ok'] = 'Guardado exitosamente';

/* 积分设置 */
$_LANG['no_points'] = 'No se detectaron puntos de foro que puedan canjearse';
$_LANG['bbs'] = 'A';
$_LANG['shop_pay_points'] = 'Puntos de consumo del centro comercial';
$_LANG['shop_rank_points'] = 'Puntos de nivel de centro comercial';
$_LANG['add_rule'] = 'Agregar regla';
$_LANG['modify'] = 'Modificar';
$_LANG['rule_name'] = 'Reglas de intercambio';
$_LANG['rule_rate'] = 'Relación de conversión';

/* JS语言项 */
$_LANG['js_languages']['no_host'] = 'El nombre de host del servidor de bases de datos no puede estar vacío.';
$_LANG['js_languages']['no_user'] = 'La cuenta de la base de datos no puede estar vacía.';
$_LANG['js_languages']['no_name'] = 'El nombre de la base de datos no puede estar vacío.';
$_LANG['js_languages']['no_integrate_url'] = 'Ingrese la URL completa del objetivo de integración';
$_LANG['js_languages']['install_confirm'] = 'No cambie al azar el objetivo de integración mientras el sistema se está ejecutando. ';
$_LANG['js_languages']['num_invalid'] = 'El número de registros para datos sincronizados no es un entero';
$_LANG['js_languages']['start_invalid'] = 'La posición inicial de los datos de sincronización no es un número entero.';
$_LANG['js_languages']['sync_confirm'] = 'La sincronización de datos de miembros reconstruirá la tabla de datos de destino. ';

$_LANG['cookie_prefix_notice'] = 'La versión UTF8 del prefijo de cookie tiene como valor predeterminado xnW_, la versión GB2312 / GBK del prefijo de cookie tiene el valor predeterminado KD9_.';

$_LANG['js_languages']['no_method'] = 'Elija un método de procesamiento predeterminado';

$_LANG['js_languages']['rate_not_null'] = 'La proporción no puede estar vacía';
$_LANG['js_languages']['rate_not_int'] = 'La razón solo puede ser un número entero';
$_LANG['js_languages']['rate_invailed'] = 'Has completado una proporción no válida';
$_LANG['js_languages']['user_importing'] = 'Importar usuarios a UCenter ...';

/* UCenter设置语言项 */
$_LANG['ucenter_tab_base'] = 'Ajustes básicos';
$_LANG['ucenter_tab_show'] = 'Configuraciones de pantalla';
$_LANG['ucenter_lab_id'] = 'ID de la aplicación UCenter:';
$_LANG['ucenter_lab_key'] = 'Clave de comunicación UCenter:';
$_LANG['ucenter_lab_url'] = 'Dirección de acceso de UCenter:';
$_LANG['ucenter_lab_ip'] = 'Dirección IP de UCenter:';
$_LANG['ucenter_lab_connect'] = 'Método de conexión UCenter:';
$_LANG['ucenter_lab_db_host'] = 'Servidor de base de datos UCenter:';
$_LANG['ucenter_lab_db_user'] = 'Nombre de usuario de la base de datos UCenter:';
$_LANG['ucenter_lab_db_pass'] = 'Contraseña de la base de datos de UCenter:';
$_LANG['ucenter_lab_db_name'] = 'Nombre de la base de datos de UCenter:';
$_LANG['ucenter_lab_db_pre'] = 'Prefijo de tabla UCenter:';
$_LANG['ucenter_lab_tag_number'] = 'Número de visualización de la etiqueta TAG:';
$_LANG['ucenter_lab_credit_0'] = 'Nombre de crédito de nivel:';
$_LANG['ucenter_lab_credit_1'] = 'Nombre de crédito de gasto:';
$_LANG['ucenter_opt_database'] = 'Modo de base de datos';
$_LANG['ucenter_opt_interface'] = 'Método de interfaz';

$_LANG['ucenter_notice_id'] = 'El valor es el ID de la aplicación de la tienda actual en UCenter. Generalmente, no lo cambie.';
$_LANG['ucenter_notice_key'] = 'La clave de comunicación se utiliza para cifrar la información transmitida entre UCenter y el sistema comercial. Puede contener letras y números. Configure la misma clave de comunicación entre UCenter y el sistema comercial para garantizar que los dos sistemas puedan comunicarse normalmente.';
$_LANG['ucenter_notice_url'] = 'Este valor se inicializará después de instalar UCenter. Si se cambia la dirección o el directorio de UCenter, modifique este elemento. Generalmente, no lo cambie. Por ejemplo: http://www.sitename.com/uc_server (No agregue \" ';
$_LANG['ucenter_notice_ip'] = 'Si su servidor no puede acceder a UCenter por nombre de dominio, puede ingresar la dirección IP del servidor de UCenter';
$_LANG['ucenter_notice_connect'] = 'Seleccione el método de conexión apropiado de acuerdo con el entorno de red de su servidor';
$_LANG['ucenter_notice_db_host'] = 'Puede ser un servidor de base de datos local o remoto. Si el puerto MySQL no es el 3306 predeterminado, complete el siguiente formulario: 127.0.0.1:6033';
$_LANG['uc_notice_ip'] = 'Hubo un problema durante la conexión. Complete la dirección IP del servidor. Si su UC y el sistema del centro comercial están instalados en el mismo servidor, le sugerimos que intente completar 127.0.0.1';

$_LANG['uc_lab_url'] = 'URL de UCenter:';
$_LANG['uc_lab_pass'] = 'Contraseña de fundador de UCenter:';
$_LANG['uc_lab_ip'] = 'IP de UCenter:';

$_LANG['uc_msg_verify_failur'] = 'Verificación fallida';
$_LANG['uc_msg_password_wrong'] = 'Error de contraseña del fundador';
$_LANG['uc_msg_data_error'] = 'Error de datos de instalación';

$_LANG['ucenter_import_username'] = 'Los datos de miembros se importan a UCenter';
$_LANG['uc_import_notice'] = 'Recordatorio: pause cada aplicación antes de importar datos de miembros (como Discuz!, SupeSite, etc.)';
$_LANG['uc_members_merge'] = 'Método de consolidación de miembros';
$_LANG['user_startid_intro'] = '<p> Este ID de miembro inicial es% s. Si la ID original es 888, el valor se convertirá en %s+888. </ p>';
$_LANG['uc_members_merge_way1'] = 'Forzar a los usuarios con el mismo nombre de usuario y contraseña de UC que el mismo usuario';
$_LANG['uc_members_merge_way2'] = 'No importe usuarios con el mismo nombre de usuario y contraseña de UC que los usuarios de UC';
$_LANG['start_import'] = 'Iniciar importación';
$_LANG['import_user_success'] = 'Datos de miembros importados con éxito en UCenter';
$_LANG['uc_points'] = 'La configuración de canje de puntos de UCenter debe realizarse en el fondo de administración de UCenter';
$_LANG['uc_set_credits'] = 'Establecer un plan de canje de puntos';
$_LANG['uc_client_not_exists'] = 'El directorio uc_client no existe, cargue el directorio uc_client en el directorio raíz del centro comercial antes de integrar';
$_LANG['uc_client_not_write'] = 'El directorio uc_client / data no se puede escribir, primero configure el permiso del directorio uc_client / data en 777';
$_LANG['uc_lang']['credits'][0][0] = 'Puntos de nivel';
$_LANG['uc_lang']['credits'][0][1] = '';
$_LANG['uc_lang']['credits'][1][0] = 'Puntos de consumo';
$_LANG['uc_lang']['credits'][1][1] = '';
$_LANG['uc_lang']['exchange'] = 'Canje de puntos UCenter';

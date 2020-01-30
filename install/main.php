<?php
//网站域名
$site_url = trim($_POST['siteurl']);
if ($independent) {
    $username = trim($_POST['manager']);
    $password = trim($_POST['manager_pwd']);
    //网站名称
    $site_name = addslashes(trim($_POST['sitename']));

    //描述
    $seo_description = trim($_POST['sitedescription']);
    //关键词
    $seo_keywords = trim($_POST['sitekeywords']);
    //更新配置信息
    mysqli_query($conn, "UPDATE `{$dbPrefix}shop_config` SET  `value` = '$site_name' WHERE code='shop_name'");
    mysqli_query($conn, "UPDATE `{$dbPrefix}shop_config` SET  `value` = '$site_name' WHERE code='shop_title' ");
    mysqli_query($conn, "UPDATE `{$dbPrefix}shop_config` SET  `value` = '$seo_description' WHERE code='shop_desc'");
    mysqli_query($conn, "UPDATE `{$dbPrefix}shop_config` SET  `value` = '$seo_keywords' WHERE code='shop_keywords'");
    mysqli_query($conn, "UPDATE `{$dbPrefix}shop_config` SET  `value` = 'default' WHERE code='template'");
    mysqli_query($conn, "UPDATE `{$dbPrefix}shop_config` SET  `value` = '".time()."' WHERE code='install_date'");
}

//插入微信菜单
$query = "INSERT INTO `{$dbPrefix}wechat_menu` (`id`, `wechat_id`, `pid`, `name`, `type`, `key`, `url`, `sort`, `status`) VALUES
(1, 1, 0, 'WeChat', 'click', '', '#', 1, 1),
(2, 1, 0, 'Microinteracción', 'click', '', '#', 2, 1),
(3, 1, 0, 'Centro personal', 'click', '', '#', 3, 1),
(4, 1, 1, 'Inicio', 'view', '', '{$site_url}', 1, 1),
(5, 1, 1, 'Nuevos productos', 'click', 'news', '', 2, 1),
(6, 1, 1, 'Productos recomendados', 'click', 'best', '', 3, 1),
(7, 1, 1, 'Productos calientes', 'click', 'hot', '', 4, 1),
(8, 1, 2, 'Placa giratoria grande', 'click', 'dzp', '', 1, 1),
(9, 1, 2, 'Rompiendo huevos de oro', 'click', 'zjd', '', 2, 1),
(10, 1, 2, 'Tarjeta de rascar', 'click', 'ggk', '', 3, 1),
(11, 1, 3, 'Centro de miembros', 'view', '', '{$site_url}/?c=user', 1, 1),
(12, 1, 3, 'Consulta de pedido', 'click', 'ddcx', '', 2, 1),
(13, 1, 3, 'Consulta de puntos', 'click', 'jfcx', '', 3, 1),
(14, 1, 3, 'Inicia sesión para enviar puntos', 'click', 'sign', '', 4, 1)";
mysqli_query($conn, $query);

//读取配置文件，并替换真实配置数据
$strConfig = file_get_contents(INSTALL_PATH . $config['dbSetFile']);
$strConfig = str_replace('#DB_HOST#', $dbHost, $strConfig);
$strConfig = str_replace('#DB_NAME#', $dbName, $strConfig);
$strConfig = str_replace('#DB_USER#', $dbUser, $strConfig);
$strConfig = str_replace('#DB_PWD#', $dbPwd, $strConfig);
$strConfig = str_replace('#DB_PORT#', $dbPort, $strConfig);
$strConfig = str_replace('#DB_PREFIX#', $dbPrefix, $strConfig);
@file_put_contents(ROOT_PATH . $config['dbConfig'], $strConfig);

if ($independent) {
    //插入管理员
    $verify = rand(1000, 9999); //生成随机认证码
    $time = time();
    $ip = get_client_ip();
    $password = md5(md5($password).$verify);
    $email = trim($_POST['manager_email']);
    $query = "INSERT INTO `{$dbPrefix}admin_user` (user_name, password, ec_salt, email, add_time, last_ip, action_list, nav_list, agency_id) VALUES ('{$username}', '{$password}', '{$verify}', '{$email}', '{$time}', '{$ip}', 'all', '', 0)";
    if (mysqli_query($conn, $query)) {
        return array('status'=>2,'info'=>'Administrador agregado con éxito <br /> Escribir archivo de configuración con éxito <br> La instalación se ha completado ...');
    }
} else {
    return array('status'=>2,'info'=>'Archivo de configuración escrito correctamente <br> La instalación se ha completado ...');
}
return array('status'=>0,'info'=>'La instalación falló ...');

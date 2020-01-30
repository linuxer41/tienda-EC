<?php
return array(
    /* ------系统------ */
    //系统名称
    'name'=>'CoolStore',
    //系统版本
    'version'=>'2.0',
    //系统powered
    'powered'=>'Powered by CoolStore',
    //系统脚部信息
    'footerInfo'=>'Copyright &copy; '. date('Y') .' CoolStore All Rights Reserved.',
    /* ------站点------ */
    //数据库文件
    'sqlFileName'=>array('structure.sql', 'data.sql', 'mobile.sql', 'wechat.sql'),
    //数据库配置文件
    'dbConfig'=>'data/database.php',
    //数据库名
    'dbName' => 'ectouch_db',
    //数据库表前缀
    'dbPrefix' => 'ecs_',
    //站点名称
    'siteName' => 'CoolStore',
    //站点关键字
    'siteKeywords' => 'CoolStore',
    //站点描述
    'siteDescription' => 'CoolStore la mejor tienda en linea',
    //需要读写权限的目录
    'dirAccess' => array(
        '/',
        '/data',
        '/data/attached',
        '/data/backup',
        '/data/caches',
        '/data/certificate',
        '/data/migrates',
        '/data/session',
        '/themes',
    ),
    /* ------写入数据库完成后处理的文件------ */
    'handleFile' => 'main.php',
    /* ------生成数据库配置文件的模板------ */
    'dbSetFile'=> 'config.ini',
    /* ------安装验证/生成文件;非云平台安装有效------ */
    'installFile' => '../data/install.lock',
    'alreadyInstallInfo' => 'Ya ha instalado el sistema, si desea reinstalar, elimine el archivo install.lock en el directorio de datos del sitio, ¡y luego intente instalarlo!',
);

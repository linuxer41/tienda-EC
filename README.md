# ECTouch v2

ECTouch es un sistema de comercio electrónico de código abierto que proporciona la mejor solución minorista para pymes.

Desarrollado con un marco MVC estable, la eficiencia de ejecución, la escalabilidad y la estabilidad son confiables. MVC es una forma de separar las capas lógicas y de presentación de una aplicación. La creación de capas MVC ayuda a administrar aplicaciones complejas porque puede centrarse en un aspecto a la vez. Por ejemplo, puede centrarse en el diseño de la vista sin depender de la lógica empresarial. También facilita las pruebas de aplicaciones. La estratificación MVC también simplifica el desarrollo grupal. Diferentes desarrolladores pueden desarrollar simultáneamente vistas, lógica de controlador y lógica de negocios.

## Requisitos de la plataforma

curl
allow_url_fopen
Biblioteca de extensiones GD
MySQL
Funciones del sistema —— phpinfo、dir

### Estructura básica de directorios
* /
* /admin       Directorio de administración de fondo predeterminado (se puede renombrar arbitrariamente)
* /api         API 
* /data        Directorio de recursos estáticos y cachés del sistema y elementos de configuración [debe poder escribirse]
* /images      Catálogo de imágenes del producto
* /include     Directorio del programa principal
* /install     Instalador del programa
* /plugins     Directorio de programa de complemento
* /themes      Directorio de plantillas predeterminado del sistema
* /vendor      Paquetes de terceros

### Incompatibilidades encontradas fácilmente en el entorno PHP
* El directorio de datos no tiene permisos de escritura, lo que hace que el fondo de administración no pueda cargar archivos;
* La carpeta de carga temporal de php no está configurada o no tiene permiso de escritura, lo que hará que la función de carga de archivos sea inutilizable
* Un error inexplicable, como una pantalla en blanco durante la instalación, puede deberse a que el sistema no carga la extensión mysql.
  
## Instalación y uso del programa
* Visite http://www.domain.com/install/index.php en su navegador (domain.com significa su nombre de dominio)
* La primera visita ingresará a la interfaz de instalación, siga las instrucciones de instalación para instalar el programa

## Características

* Función de código de verificación de SMS
* Admite el acoplamiento WeChat Mall y el pago WeChat
* Seguimiento de paquetes de pedidos
* Inicio de sesión de terceros en el teléfono móvil
* Ancho de adaptación del módulo de estación completa
* Soporte de pago inalámbrico Alipay
* Todos los datos están perfectamente conectados con el fondo ecshop

## Comunicación comunitaria

* Sitio web oficial de ECTouch http://www.ectouch.cn
* Foro de soporte técnico http://bbs.ecmoban.com
* Tecnología de red Shanghai Shangchuang http://www.ecmoban.com

## Preguntas frecuentes de acabado

http://bbs.ecmoban.com/thread-28767-1-1.html

## Seguridad y defecto

Si encuentra un agujero de seguridad, envíe un correo electrónico a wanganlin@ecmoban.com. Todos los agujeros de seguridad se resolverán de manera oportuna.

## Traduccion al español

la traduccion se realizó con la api gratuita de google porlo tanto puede encontrar algunas inconsistencias
las herramientads de traduccion se encuentran en /incude/languages/tool.py y /incude/languages/trans.py
* falta cambiar los banners de publicidad personalizado a su tienda


## Licencia

ECTouch está bajo la licencia de código abierto [licencia GPL] (https://opensource.org/licenses/GPL-3.0).

## Escaparate

Instalacion

![Alt text](demo_img/3.jpeg?raw=true "Title")

Admin

![Alt text](demo_img/5.png?raw=true "Title")

User

![Alt text](demo_img/1.jpeg?raw=true "Title")
![Alt text](demo_img/2.jpeg?raw=true "Title")
![Alt text](demo_img/4li.jpeg?raw=true "Title")
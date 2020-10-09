# Giving Theme!

Te doy la bienvenida al proyecto **Giving Theme** 


# Instalación

Te explico la manera para poder llevar a cabo la instalación de este tema

 1. Primero necesitas descargar el programa LocalWP y lo puedes encontrar en este enlace: [Aquí](https://localwp.com)
 2. Descarga el siguiente archivo: [Aquí](https://drive.google.com/file/d/1t4UVpd1kMAK9Qws6UKT7qpQ0a987zGNu/view?usp=sharing)
 3. Luego de instalado **LocalWP** lo abres y en el menú (el ícono con tres rayitas) selecciona la opción **Import Site** y buscar el archivo giving.zip que descargaste
 4. Y eso es todo!!!

Para el acceso del admin de wordpress es: 
user: admin
password: Web@Admin

## Estructura de archivos

Te doy un pequeño resumen de lo que encontrarás en este repositorio
 - **/mu-plugins:** Es donde está el código para la creación del custom post type "portfolio" 
 - **/themes/giving-theme:** En esta ruta puedes encontrar el tema del proyecto
 - **/themes/giving-theme/inc:** Para esta ruta encontrarás los archivos para los breadcrumbs y para los tags que verás debajo del título principal de cada post
 - **/themes/giving-theme/template-parts:** Cada bloque de contenido lo vas a encontrar aquí 
 - **/themes/giving-theme/webpack:** Mi carpeta favorita!! Aquí es donde puedes editar los archivos sass, javascript y html (luego te explico cómo)
 - **/themes/giving-theme/giving-home-template.php:** Este archivo es el template personalizado del home
 - **/themes/giving-theme/single-portfolio.php:** Es para ver en detalle cada post de portfolio

## Webpack

Sobre webpack recuerda tener [nodejs](https://nodejs.org/es/) instalado y te indico los pasos para instalar los módulos y la compilación del proyecto:

 - Abres la **terminal** en la siguiente ruta: **/themes/giving-theme/webpack** y escribe el comando: **npm i**
 - Luego que termine de descargar tienes varios comandos para llevar a cabo la compilación de sass, html y javascript:
	 - **npm start** lanzará un servidor de prueba y puedes revisar el sitio 
	 - **npm production** va a crear la carpeta **dist** y allí tendrás todo el html, sass y javascript compilado y comprimido. Este hay que usarlo para que wordpress reconozca los cambios

Respecto al html se utilizó handlebars y todo está divido por módulos, lo puedes ver en la ruta **/themes/giving-theme/webpack/html** y para sass de igual módo



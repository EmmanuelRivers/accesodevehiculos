# accesodevehiculos
Programa examen

XAMPP
link para su descarga: https://www.apachefriends.org/es/index.html
primero se descarga y se instala con todas las opciones por defecto, una vez instalado, dentro del programa se inician los servicios de APACHE y MySQL

Descargar la carpeta del proyecto y guardarlo en la siguiente dirección: C:\xampp\htdocs\accesodevehiculos

la base de datos vine dentro de este mismo repositorio, su nombre es "accesovehiculos.sql". Para importar la base de datos en el programa XAMPP en el servicio de MySQL clic en admin, redirigirá al navegador a PhpMyAdmin ahí buscar la pestaña de "Importar", ahí se examina y se busca el archivo .sql

Es necesario registrar el usuario: empleado01 con contraseña:GGLp0s31d0n para que se pueda hacer conexion con la base de datos

Para acceder a la página del sistema introducir la dirección: localhost/accesodevehiculos/home.php en la barra de direcciones del navegador 

¿QUÉ ES LO QUE HACE?
- Primero la página da al usuario las opciones disponibles a realizar (registrar entrada, registrar salida, informe)
- Se registra la ENTRADA de vehículos con su placa, fecha de entrada y hora de entrada y el tipo de vehículo
- AL registrar una SALIDA se piden los datos de la placa y la hora de salida, se calcula conforme a la diferencia entre las horas de entrada y salida el número de minutos que que el vihículo estuvo estacionado, estos datos aún no se guardan en la base de datos, hasta que se de clic en el botón de cobrar para confirmar que se realizó el pago y guardar la información en la base de datos 

¿QUÉ QUEDÓ PENDIENTE?
- Corregir error al registrar una placa de salida cuando dentro sus caractéres hay una letra
- Mostrar los informes

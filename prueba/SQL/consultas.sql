USE persona

/*Consulta para calcular la cantidad de personas que nacieron en el mes de mayo*/

SELECT COUNT(id) AS cantidad FROM persona WHERE MONTH(fecha_nacimiento) = '05'

/*Consulta para calcular la cantidad de personas que son mayores de 21 años¨*/

SELECT count(id) FROM persona WHERE TIMESTAMPDIFF(YEAR, fecha_nacimiento, DATE(NOW())) >= 21

/*Consulta para mostrar cuales personas son mayores de 21 años*/

SELECT * FROM persona WHERE TIMESTAMPDIFF(YEAR, fecha_nacimiento, DATE(NOW())) >= 21

/*Consulta para mostrar los nombres y el tipo de documento de cada persona*/

SELECT p.nombres, p.apellidos, tp.nombre AS documento FROM persona p JOIN 
(
	SELECT id, nombre FROM tipo_documento
) AS tp 
ON p.tipo_documento = tp.id

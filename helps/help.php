<?php 


/**
 * Funcion para limplia y validar un campo
 * @param  input $campo Recibido de un post
 * @return String       El campo seteado o limpiado
 */
function validar_campo($campo){
	$campo = trim($campo);
	// Elimina barras inclinadas
	$campo = stripcslashes($campo);
	// limpia etiquetas html o tags scripts
	$campo = htmlspecialchars($campo);


	return $campo;
}

 ?>
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

function getPrivilegio($privilegio){

$auxiliar = '';

	switch ($privilegio) {
		case 1:
			$auxiliar = 'Administrador';
			break;

		case 2:
			$auxiliar = 'Usuario';
			break;
		
		default:
			$auxiliar = "- No definido -";
			break;
	}


	return $auxiliar;
}

 ?>
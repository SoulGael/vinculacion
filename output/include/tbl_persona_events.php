<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */
 
 class eventclass_tbl_persona  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		$values['nombres']=strtoupper($values['nombres']);
$values['apellidos']=strtoupper($values['apellidos']);


$sql = "INSERT INTO tbl_persona(cedula, nro_matricula, nombres, apellidos, telefono, email_institucional, email, id_ciudad, direccion, pass, foto, id_extension, id_carrera, nivel, id_periodo, id_rol, id_modalidad) 
values ('".$values['cedula']."', '".$values['nro_matricula']."', '".$values['nombres']."', '".$values['apellidos']."', '".$values['telefono']."', '".$values['email_institucional']."', '".$values['email']."', ".$values['id_ciudad'].", '".$values['direccion']."', '".$values['cedula']."', '".$values['foto']."', ".$values['id_extension'].", ".$values['id_carrera'].", '".$values['nivel']."', '".$values['id_periodo']."', '".$values['id_rol']."', '".$values['id_modalidad']."')";
CustomQuery($sql);


$pageObject->setMessageType(MESSAGE_SUCCESS);

$pageObject->setMessage("Carrera Guardada Correctamente");

// Place event code here.
// Use "Add Action" button to add code snippets.

return false;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
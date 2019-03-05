<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");

$params = (array)my_json_decode(postvalue('params'));
$buttId = $params['buttId'];
$eventId = postvalue('event');
$table = $params['table'];
$page = $params['page'];

// todo security check

if($buttId=='New_Button')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES && GetTableURL( $table ) )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button($params);
}





// create table and non table handlers
function buttonHandler_New_Button($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$record = $button->getCurrentRecord();
$id_distributivo = $record["id_distributivo_proyectos"];
$cedula = $record["cedula"];
$id_carrera = $record["id_carrera"];

$hrs_proyecto_vinculacion = $params["hrs_proyecto_vinculacion"];
$hrs_docente_tutor = $params["hrs_docente_tutor"];
$hrs_docente_participante = $params["hrs_docente_participante"];
$hrs_seguimiento_graduados = $params["hrs_seguimiento_graduados"];
$hrs_supervision_pasantias_comunitario = $params["hrs_supervision_pasantias_comunitario"];
$id_periodo = $params["id_periodo"];

//Consulta a la base
$sql = "UPDATE tbl_distributivo_proyectos set estado='Inactivo' 
where id_distributivo_proyectos=".$id_distributivo.";";
if(DB::Exec($sql)){
	$sqlInsert = "INSERT INTO tbl_distributivo_proyectos(cedula, 
		hrs_proyecto_vinculacion, hrs_docente_tutor, hrs_docente_participante, 
		hrs_seguimiento_graduados, hrs_supervision_pasantias_comunitario, 
		id_carrera, id_periodo)
		values ('".$cedula."',".$hrs_proyecto_vinculacion.", ".$hrs_docente_tutor.", 
		".$hrs_docente_participante.", ".$hrs_seguimiento_graduados.", 
		".$hrs_supervision_pasantias_comunitario.", ".$id_carrera.", 
		".$id_periodo." );";
	if(DB::Exec($sqlInsert)){
		$result["mensaje"] = "Distributivo guardado correctamente";
	}else{
		$result["mensaje"] = "Se cambio el estado pero no se guardo el distributivo nuevo";
	}
}else{
	$result["mensaje"] = "Algo Ocurrio al Guardar";
}

;
	RunnerContext::pop();
	echo my_json_encode($result);
}


		
?>

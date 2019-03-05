<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["tbl_provincia"]["tbl_ciudad.id_provincia"]["edit"] = array("table" => "tbl_ciudad", "field" => "id_provincia", "page" => "edit");
	$lookupTableLinks["tbl_provincia"]["tbl_ciudad.provincia"]["edit"] = array("table" => "tbl_ciudad", "field" => "provincia", "page" => "edit");
	$lookupTableLinks["tbl_facultad"]["tbl_carrera.id_facultad"]["edit"] = array("table" => "tbl_carrera", "field" => "id_facultad", "page" => "edit");
	$lookupTableLinks["tbl_extension"]["tbl_carrera.id_extension"]["edit"] = array("table" => "tbl_carrera", "field" => "id_extension", "page" => "edit");
	$lookupTableLinks["tbl_modalidad"]["tbl_carrera.id_modalidad"]["edit"] = array("table" => "tbl_carrera", "field" => "id_modalidad", "page" => "edit");
	$lookupTableLinks["tbl_ciudad"]["tbl_extension.id_ciudad"]["edit"] = array("table" => "tbl_extension", "field" => "id_ciudad", "page" => "edit");
	$lookupTableLinks["tbl_provincia"]["tbl_extension.id_provincia"]["edit"] = array("table" => "tbl_extension", "field" => "id_provincia", "page" => "edit");
	$lookupTableLinks["tbl_extension"]["tbl_facultad.id_extension"]["edit"] = array("table" => "tbl_facultad", "field" => "id_extension", "page" => "edit");
	$lookupTableLinks["tbl_ciudad"]["tbl_persona.id_ciudad"]["edit"] = array("table" => "tbl_persona", "field" => "id_ciudad", "page" => "edit");
	$lookupTableLinks["tbl_carrera"]["tbl_persona.id_carrera"]["edit"] = array("table" => "tbl_persona", "field" => "id_carrera", "page" => "edit");
	$lookupTableLinks["tbl_periodo"]["tbl_persona.id_periodo"]["edit"] = array("table" => "tbl_persona", "field" => "id_periodo", "page" => "edit");
	$lookupTableLinks["tbl_rol"]["tbl_persona.id_rol"]["edit"] = array("table" => "tbl_persona", "field" => "id_rol", "page" => "edit");
	$lookupTableLinks["tbl_provincia"]["tbl_persona.id_provincia"]["edit"] = array("table" => "tbl_persona", "field" => "id_provincia", "page" => "edit");
	$lookupTableLinks["tbl_facultad"]["tbl_persona.id_facultad"]["edit"] = array("table" => "tbl_persona", "field" => "id_facultad", "page" => "edit");
	$lookupTableLinks["tbl_extension"]["tbl_persona.id_extension"]["edit"] = array("table" => "tbl_persona", "field" => "id_extension", "page" => "edit");
	$lookupTableLinks["tbl_modalidad"]["tbl_persona.id_modalidad"]["edit"] = array("table" => "tbl_persona", "field" => "id_modalidad", "page" => "edit");
	$lookupTableLinks["tbl_persona"]["tbl_distributivo_proyectos.cedula"]["edit"] = array("table" => "tbl_distributivo_proyectos", "field" => "cedula", "page" => "edit");
	$lookupTableLinks["tbl_carrera"]["tbl_distributivo_proyectos.id_carrera"]["edit"] = array("table" => "tbl_distributivo_proyectos", "field" => "id_carrera", "page" => "edit");
	$lookupTableLinks["tbl_periodo"]["tbl_distributivo_proyectos.id_periodo"]["edit"] = array("table" => "tbl_distributivo_proyectos", "field" => "id_periodo", "page" => "edit");
	$lookupTableLinks["tbl_facultad"]["tbl_distributivo_proyectos.id_facultad"]["edit"] = array("table" => "tbl_distributivo_proyectos", "field" => "id_facultad", "page" => "edit");
	$lookupTableLinks["tbl_extension"]["tbl_distributivo_proyectos.id_extension"]["edit"] = array("table" => "tbl_distributivo_proyectos", "field" => "id_extension", "page" => "edit");
	$lookupTableLinks["tbl_carrera"]["tbl_convenio.areas"]["edit"] = array("table" => "tbl_convenio", "field" => "areas", "page" => "edit");
	$lookupTableLinks["tbl_institucion"]["tbl_convenio.id_institucion"]["edit"] = array("table" => "tbl_convenio", "field" => "id_institucion", "page" => "edit");
	$lookupTableLinks["tbl_extension"]["tbl_convenio.id_extension"]["edit"] = array("table" => "tbl_convenio", "field" => "id_extension", "page" => "edit");
	$lookupTableLinks["tbl_ciudad"]["tbl_institucion.id_ciudad"]["edit"] = array("table" => "tbl_institucion", "field" => "id_ciudad", "page" => "edit");
	$lookupTableLinks["tbl_carrera"]["tbl_linea_investigacion.id_carrera"]["edit"] = array("table" => "tbl_linea_investigacion", "field" => "id_carrera", "page" => "edit");
	$lookupTableLinks["tbl_linea_investigacion"]["tbl_programa_vinculacion.id_linea_investigacion"]["edit"] = array("table" => "tbl_programa_vinculacion", "field" => "id_linea_investigacion", "page" => "edit");
	$lookupTableLinks["tbl_carrera"]["tbl_programa_vinculacion.id_carrera"]["edit"] = array("table" => "tbl_programa_vinculacion", "field" => "id_carrera", "page" => "edit");
	$lookupTableLinks["tbl_programa_vinculacion"]["tbl_proyecto_vinculacion.id_programa_vinculacion"]["edit"] = array("table" => "tbl_proyecto_vinculacion", "field" => "id_programa_vinculacion", "page" => "edit");
	$lookupTableLinks["tbl_persona"]["tbl_proyecto_vinculacion.docente_responsable"]["edit"] = array("table" => "tbl_proyecto_vinculacion", "field" => "docente_responsable", "page" => "edit");
	$lookupTableLinks["tbl_persona"]["tbl_proyecto_vinculacion.docente_tutor"]["edit"] = array("table" => "tbl_proyecto_vinculacion", "field" => "docente_tutor", "page" => "edit");
	$lookupTableLinks["tbl_persona"]["tbl_proyecto_vinculacion.docente_participante"]["edit"] = array("table" => "tbl_proyecto_vinculacion", "field" => "docente_participante", "page" => "edit");
	$lookupTableLinks["tbl_carrera"]["tbl_proyecto_vinculacion.id_carrera"]["edit"] = array("table" => "tbl_proyecto_vinculacion", "field" => "id_carrera", "page" => "edit");
	$lookupTableLinks["tbl_persona"]["tbl_vinculacion_estudiantes.cedula"]["edit"] = array("table" => "tbl_vinculacion_estudiantes", "field" => "cedula", "page" => "edit");
	$lookupTableLinks["tbl_proyecto_vinculacion"]["tbl_vinculacion_estudiantes.id_proyecto_vinculacion"]["edit"] = array("table" => "tbl_vinculacion_estudiantes", "field" => "id_proyecto_vinculacion", "page" => "edit");
	$lookupTableLinks["tbl_periodo"]["tbl_vinculacion_estudiantes.id_periodo"]["edit"] = array("table" => "tbl_vinculacion_estudiantes", "field" => "id_periodo", "page" => "edit");
	$lookupTableLinks["tbl_carrera"]["tbl_vinculacion_estudiantes.id_carrera"]["edit"] = array("table" => "tbl_vinculacion_estudiantes", "field" => "id_carrera", "page" => "edit");
}

?>
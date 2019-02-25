<?php
$strTableName="tbl_carrera";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tbl_carrera";

$gstrOrderBy="ORDER BY tbl_extension.extension, tbl_facultad.facultad, tbl_modalidad.modalidad, tbl_carrera.carrera";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tbl_carrera");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tbl_carrera"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
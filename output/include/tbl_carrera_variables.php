<?php
$strTableName="tbl_carrera";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tbl_carrera";

$gstrOrderBy="ORDER BY tbl_facultad.id_extension, tbl_carrera.id_facultad, tbl_carrera.carrera";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tbl_carrera");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tbl_carrera"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
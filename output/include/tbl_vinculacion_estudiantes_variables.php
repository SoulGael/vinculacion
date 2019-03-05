<?php
$strTableName="tbl_vinculacion_estudiantes";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tbl_vinculacion_estudiantes";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tbl_vinculacion_estudiantes");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tbl_vinculacion_estudiantes"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
<?php
$strTableName="tbl_linea_investigacion";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tbl_linea_investigacion";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tbl_linea_investigacion");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tbl_linea_investigacion"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
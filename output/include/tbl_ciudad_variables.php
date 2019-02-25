<?php
$strTableName="tbl_ciudad";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tbl_ciudad";

$gstrOrderBy="order by tbl_provincia.provincia, tbl_ciudad.ciudad";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tbl_ciudad");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tbl_ciudad"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
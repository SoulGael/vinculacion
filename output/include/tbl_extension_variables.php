<?php
$strTableName="tbl_extension";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tbl_extension";

$gstrOrderBy="ORDER BY tbl_provincia.provincia, tbl_ciudad.ciudad, tbl_extension.extension";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tbl_extension");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tbl_extension"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
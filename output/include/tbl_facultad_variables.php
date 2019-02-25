<?php
$strTableName="tbl_facultad";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tbl_facultad";

$gstrOrderBy="ORDER BY tbl_extension.extension, tbl_facultad.facultad";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("tbl_facultad");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["tbl_facultad"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>
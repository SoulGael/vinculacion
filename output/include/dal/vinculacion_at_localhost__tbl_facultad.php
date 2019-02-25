<?php
$dalTabletbl_facultad = array();
$dalTabletbl_facultad["id_facultad"] = array("type"=>3,"varname"=>"id_facultad", "name" => "id_facultad");
$dalTabletbl_facultad["facultad"] = array("type"=>200,"varname"=>"facultad", "name" => "facultad");
$dalTabletbl_facultad["estado"] = array("type"=>200,"varname"=>"estado", "name" => "estado");
$dalTabletbl_facultad["id_extension"] = array("type"=>3,"varname"=>"id_extension", "name" => "id_extension");
	$dalTabletbl_facultad["id_facultad"]["key"]=true;

$dal_info["vinculacion_at_localhost__tbl_facultad"] = &$dalTabletbl_facultad;
?>
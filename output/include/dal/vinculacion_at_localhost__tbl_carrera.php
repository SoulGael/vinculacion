<?php
$dalTabletbl_carrera = array();
$dalTabletbl_carrera["id_carrera"] = array("type"=>3,"varname"=>"id_carrera", "name" => "id_carrera");
$dalTabletbl_carrera["carrera"] = array("type"=>200,"varname"=>"carrera", "name" => "carrera");
$dalTabletbl_carrera["codigo"] = array("type"=>200,"varname"=>"codigo", "name" => "codigo");
$dalTabletbl_carrera["estado"] = array("type"=>200,"varname"=>"estado", "name" => "estado");
$dalTabletbl_carrera["id_facultad"] = array("type"=>3,"varname"=>"id_facultad", "name" => "id_facultad");
$dalTabletbl_carrera["id_modalidad"] = array("type"=>201,"varname"=>"id_modalidad", "name" => "id_modalidad");
	$dalTabletbl_carrera["id_carrera"]["key"]=true;

$dal_info["vinculacion_at_localhost__tbl_carrera"] = &$dalTabletbl_carrera;
?>
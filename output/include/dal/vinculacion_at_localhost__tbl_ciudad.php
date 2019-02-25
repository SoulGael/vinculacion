<?php
$dalTabletbl_ciudad = array();
$dalTabletbl_ciudad["id_ciudad"] = array("type"=>3,"varname"=>"id_ciudad", "name" => "id_ciudad");
$dalTabletbl_ciudad["ciudad"] = array("type"=>200,"varname"=>"ciudad", "name" => "ciudad");
$dalTabletbl_ciudad["estado"] = array("type"=>200,"varname"=>"estado", "name" => "estado");
$dalTabletbl_ciudad["id_provincia"] = array("type"=>3,"varname"=>"id_provincia", "name" => "id_provincia");
	$dalTabletbl_ciudad["id_ciudad"]["key"]=true;

$dal_info["vinculacion_at_localhost__tbl_ciudad"] = &$dalTabletbl_ciudad;
?>
<?php
$dalTabletbl_convenio = array();
$dalTabletbl_convenio["id_convenio"] = array("type"=>3,"varname"=>"id_convenio", "name" => "id_convenio");
$dalTabletbl_convenio["convenio"] = array("type"=>201,"varname"=>"convenio", "name" => "convenio");
$dalTabletbl_convenio["objeto"] = array("type"=>201,"varname"=>"objeto", "name" => "objeto");
$dalTabletbl_convenio["duracion"] = array("type"=>200,"varname"=>"duracion", "name" => "duracion");
$dalTabletbl_convenio["fecha_inicio"] = array("type"=>7,"varname"=>"fecha_inicio", "name" => "fecha_inicio");
$dalTabletbl_convenio["fecha_fin"] = array("type"=>7,"varname"=>"fecha_fin", "name" => "fecha_fin");
$dalTabletbl_convenio["tipo_convenio"] = array("type"=>200,"varname"=>"tipo_convenio", "name" => "tipo_convenio");
$dalTabletbl_convenio["documentos"] = array("type"=>201,"varname"=>"documentos", "name" => "documentos");
$dalTabletbl_convenio["areas"] = array("type"=>201,"varname"=>"areas", "name" => "areas");
$dalTabletbl_convenio["id_institucion"] = array("type"=>3,"varname"=>"id_institucion", "name" => "id_institucion");
$dalTabletbl_convenio["estado"] = array("type"=>200,"varname"=>"estado", "name" => "estado");
$dalTabletbl_convenio["id_extension"] = array("type"=>3,"varname"=>"id_extension", "name" => "id_extension");
	$dalTabletbl_convenio["id_convenio"]["key"]=true;

$dal_info["vinculacion_at_localhost__tbl_convenio"] = &$dalTabletbl_convenio;
?>
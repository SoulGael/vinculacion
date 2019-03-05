<?php
$dalTabletbl_institucion = array();
$dalTabletbl_institucion["id_institucion"] = array("type"=>3,"varname"=>"id_institucion", "name" => "id_institucion");
$dalTabletbl_institucion["institucion"] = array("type"=>201,"varname"=>"institucion", "name" => "institucion");
$dalTabletbl_institucion["telefono"] = array("type"=>200,"varname"=>"telefono", "name" => "telefono");
$dalTabletbl_institucion["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTabletbl_institucion["direccion"] = array("type"=>201,"varname"=>"direccion", "name" => "direccion");
$dalTabletbl_institucion["responsable"] = array("type"=>200,"varname"=>"responsable", "name" => "responsable");
$dalTabletbl_institucion["telefono_responsable"] = array("type"=>200,"varname"=>"telefono_responsable", "name" => "telefono_responsable");
$dalTabletbl_institucion["email_responsable"] = array("type"=>200,"varname"=>"email_responsable", "name" => "email_responsable");
$dalTabletbl_institucion["tipo_institucion"] = array("type"=>200,"varname"=>"tipo_institucion", "name" => "tipo_institucion");
$dalTabletbl_institucion["id_ciudad"] = array("type"=>3,"varname"=>"id_ciudad", "name" => "id_ciudad");
$dalTabletbl_institucion["estado"] = array("type"=>200,"varname"=>"estado", "name" => "estado");
	$dalTabletbl_institucion["id_institucion"]["key"]=true;

$dal_info["vinculacion_at_localhost__tbl_institucion"] = &$dalTabletbl_institucion;
?>
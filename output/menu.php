<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');



if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}




$layout = new TLayout("menu_bootstrap1", "OfficeOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "yeti";
		$layout->customCssPageName = "_menu";
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"hdr" );
$layout->containers["hdr"] = array();
$layout->container_properties["hdr"] = array(  );
$layout->containers["hdr"][] = array("name"=>"logo",
	"block"=>"logo_block", "substyle"=>1  );

$layout->containers["hdr"][] = array("name"=>"bsnavbarcollapse",
	"block"=>"collapse_block", "substyle"=>1  );

$layout->skins["hdr"] = "";


$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"menu_1" );
$layout->containers["menu_1"] = array();
$layout->container_properties["menu_1"] = array(  );
$layout->containers["menu_1"][] = array("name"=>"hmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->containers["menu_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"login" );
$layout->containers["login"] = array();
$layout->container_properties["login"] = array(  );
$layout->containers["login"][] = array("name"=>"morebutton",
	"block"=>"more_list", "substyle"=>1  );

$layout->containers["login"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["login"] = "";


$layout->skins["menu_1"] = "";


$layout->skins["menu"] = "";

$layout->blocks["top"][] = "menu";
$layout->containers["center"] = array();
$layout->container_properties["center"] = array(  );
$layout->containers["center"][] = array("name"=>"welcome",
	"block"=>"", "substyle"=>1  );

$layout->skins["center"] = "";

$layout->blocks["top"][] = "center";
$page_layouts["menu"] = $layout;




require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/tbl_ciudad_events.php"));
$tableEvents["tbl_ciudad"] = new eventclass_tbl_ciudad;
include_once(getabspath("include/tbl_carrera_events.php"));
$tableEvents["tbl_carrera"] = new eventclass_tbl_carrera;
include_once(getabspath("include/tbl_extension_events.php"));
$tableEvents["tbl_extension"] = new eventclass_tbl_extension;
include_once(getabspath("include/tbl_facultad_events.php"));
$tableEvents["tbl_facultad"] = new eventclass_tbl_facultad;
include_once(getabspath("include/tbl_modalidad_events.php"));
$tableEvents["tbl_modalidad"] = new eventclass_tbl_modalidad;
include_once(getabspath("include/tbl_rol_events.php"));
$tableEvents["tbl_rol"] = new eventclass_tbl_rol;
include_once(getabspath("include/tbl_provincia_events.php"));
$tableEvents["tbl_provincia"] = new eventclass_tbl_provincia;
include_once(getabspath("include/tbl_persona_events.php"));
$tableEvents["tbl_persona"] = new eventclass_tbl_persona;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>
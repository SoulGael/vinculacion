<?php




$tdatatbl_proyecto_vinculacion = array();
$tdatatbl_proyecto_vinculacion[".searchableFields"] = array();
	$tdatatbl_proyecto_vinculacion[".truncateText"] = true;
	$tdatatbl_proyecto_vinculacion[".NumberOfChars"] = 80;
	$tdatatbl_proyecto_vinculacion[".ShortName"] = "tbl_proyecto_vinculacion";
	$tdatatbl_proyecto_vinculacion[".OwnerID"] = "";
	$tdatatbl_proyecto_vinculacion[".OriginalTable"] = "tbl_proyecto_vinculacion";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatbl_proyecto_vinculacion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_proyecto_vinculacion[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstbl_proyecto_vinculacion = array();
$fieldToolTipstbl_proyecto_vinculacion = array();
$pageTitlestbl_proyecto_vinculacion = array();
$placeHolderstbl_proyecto_vinculacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstbl_proyecto_vinculacion["Spanish"] = array();
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"] = array();
	$placeHolderstbl_proyecto_vinculacion["Spanish"] = array();
	$pageTitlestbl_proyecto_vinculacion["Spanish"] = array();
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["id_proyecto_vinculacion"] = "Id Proyecto Vinculacion";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["id_proyecto_vinculacion"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["id_proyecto_vinculacion"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["poa"] = "Poa";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["poa"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["poa"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["id_programa_vinculacion"] = "Id Programa Vinculacion";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["id_programa_vinculacion"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["id_programa_vinculacion"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["nombre_programa"] = "Nombre Programa";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["nombre_programa"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["nombre_programa"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["codigo_proyecto"] = "Codigo Proyecto";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["codigo_proyecto"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["codigo_proyecto"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["nombre_proyecto"] = "Nombre Proyecto";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["nombre_proyecto"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["nombre_proyecto"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["linea_investigacion"] = "Linea Investigacion";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["linea_investigacion"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["linea_investigacion"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["numero_beneficiarios"] = "Numero Beneficiarios";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["numero_beneficiarios"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["numero_beneficiarios"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["beneficiarios"] = "Beneficiarios";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["beneficiarios"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["beneficiarios"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["coordinador_entidad"] = "Coordinador Entidad";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["coordinador_entidad"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["coordinador_entidad"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["monto_proyecto"] = "Monto Proyecto";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["monto_proyecto"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["monto_proyecto"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["objetivo_general"] = "Objetivo General";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["objetivo_general"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["objetivo_general"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["objetivo_especifico"] = "Objetivo Especifico";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["objetivo_especifico"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["objetivo_especifico"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["metas"] = "Metas";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["metas"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["metas"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["fecha_inicio"] = "Fecha Inicio";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["fecha_inicio"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["fecha_inicio"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["fecha_fin"] = "Fecha Fin";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["fecha_fin"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["fecha_fin"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["impacto_social"] = "Impacto Social";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["impacto_social"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["impacto_social"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["impacto_cientifico"] = "Impacto Cientifico";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["impacto_cientifico"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["impacto_cientifico"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["impacto_economico"] = "Impacto Economico";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["impacto_economico"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["impacto_economico"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["impacto_politico"] = "Impacto Politico";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["impacto_politico"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["impacto_politico"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["otro_impacto"] = "Otro Impacto";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["otro_impacto"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["otro_impacto"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["docente_responsable"] = "Docente Responsable";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["docente_responsable"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["docente_responsable"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["docente_tutor"] = "Docente Tutor";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["docente_tutor"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["docente_tutor"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["docente_participante"] = "Docente Participante";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["docente_participante"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["docente_participante"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["id_carrera"] = "Id Carrera";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["id_carrera"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["id_carrera"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["estado"] = "Estado";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["estado"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["estado"] = "";
	$fieldLabelstbl_proyecto_vinculacion["Spanish"]["documento_proyecto_vinculacion"] = "Documento Proyecto Vinculacion";
	$fieldToolTipstbl_proyecto_vinculacion["Spanish"]["documento_proyecto_vinculacion"] = "";
	$placeHolderstbl_proyecto_vinculacion["Spanish"]["documento_proyecto_vinculacion"] = "";
	if (count($fieldToolTipstbl_proyecto_vinculacion["Spanish"]))
		$tdatatbl_proyecto_vinculacion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_proyecto_vinculacion["English"] = array();
	$fieldToolTipstbl_proyecto_vinculacion["English"] = array();
	$placeHolderstbl_proyecto_vinculacion["English"] = array();
	$pageTitlestbl_proyecto_vinculacion["English"] = array();
	if (count($fieldToolTipstbl_proyecto_vinculacion["English"]))
		$tdatatbl_proyecto_vinculacion[".isUseToolTips"] = true;
}


	$tdatatbl_proyecto_vinculacion[".NCSearch"] = true;



$tdatatbl_proyecto_vinculacion[".shortTableName"] = "tbl_proyecto_vinculacion";
$tdatatbl_proyecto_vinculacion[".nSecOptions"] = 0;

$tdatatbl_proyecto_vinculacion[".mainTableOwnerID"] = "";
$tdatatbl_proyecto_vinculacion[".entityType"] = 0;

$tdatatbl_proyecto_vinculacion[".strOriginalTableName"] = "tbl_proyecto_vinculacion";

	



$tdatatbl_proyecto_vinculacion[".showAddInPopup"] = false;

$tdatatbl_proyecto_vinculacion[".showEditInPopup"] = false;

$tdatatbl_proyecto_vinculacion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_proyecto_vinculacion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_proyecto_vinculacion[".listAjax"] = false;
//	temporary
$tdatatbl_proyecto_vinculacion[".listAjax"] = false;

	$tdatatbl_proyecto_vinculacion[".audit"] = false;

	$tdatatbl_proyecto_vinculacion[".locking"] = false;


$pages = $tdatatbl_proyecto_vinculacion[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_proyecto_vinculacion[".edit"] = true;
	$tdatatbl_proyecto_vinculacion[".afterEditAction"] = 1;
	$tdatatbl_proyecto_vinculacion[".closePopupAfterEdit"] = 1;
	$tdatatbl_proyecto_vinculacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_proyecto_vinculacion[".add"] = true;
$tdatatbl_proyecto_vinculacion[".afterAddAction"] = 1;
$tdatatbl_proyecto_vinculacion[".closePopupAfterAdd"] = 1;
$tdatatbl_proyecto_vinculacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_proyecto_vinculacion[".list"] = true;
}



$tdatatbl_proyecto_vinculacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_proyecto_vinculacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_proyecto_vinculacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_proyecto_vinculacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_proyecto_vinculacion[".printFriendly"] = true;
}



$tdatatbl_proyecto_vinculacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_proyecto_vinculacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_proyecto_vinculacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_proyecto_vinculacion[".isUseAjaxSuggest"] = true;

$tdatatbl_proyecto_vinculacion[".rowHighlite"] = true;



									
$tdatatbl_proyecto_vinculacion[".flexibleSearch"] = true;


$tdatatbl_proyecto_vinculacion[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_proyecto_vinculacion[".buttonsAdded"] = false;

$tdatatbl_proyecto_vinculacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_proyecto_vinculacion[".isUseTimeForSearch"] = false;


$tdatatbl_proyecto_vinculacion[".badgeColor"] = "BC8F8F";


$tdatatbl_proyecto_vinculacion[".allSearchFields"] = array();
$tdatatbl_proyecto_vinculacion[".filterFields"] = array();
$tdatatbl_proyecto_vinculacion[".requiredSearchFields"] = array();

$tdatatbl_proyecto_vinculacion[".googleLikeFields"] = array();
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "id_proyecto_vinculacion";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "poa";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "id_programa_vinculacion";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "nombre_programa";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "codigo_proyecto";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "nombre_proyecto";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "linea_investigacion";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "numero_beneficiarios";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "beneficiarios";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "coordinador_entidad";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "monto_proyecto";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "objetivo_general";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "objetivo_especifico";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "metas";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "fecha_inicio";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "fecha_fin";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "impacto_social";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "impacto_cientifico";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "impacto_economico";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "impacto_politico";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "otro_impacto";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "docente_responsable";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "docente_tutor";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "docente_participante";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "id_carrera";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "estado";
$tdatatbl_proyecto_vinculacion[".googleLikeFields"][] = "documento_proyecto_vinculacion";



$tdatatbl_proyecto_vinculacion[".tableType"] = "list";

$tdatatbl_proyecto_vinculacion[".printerPageOrientation"] = 0;
$tdatatbl_proyecto_vinculacion[".nPrinterPageScale"] = 100;

$tdatatbl_proyecto_vinculacion[".nPrinterSplitRecords"] = 40;

$tdatatbl_proyecto_vinculacion[".nPrinterPDFSplitRecords"] = 40;


$tdatatbl_proyecto_vinculacion[".geocodingEnabled"] = false;










$tdatatbl_proyecto_vinculacion[".pageSize"] = 20;

$tdatatbl_proyecto_vinculacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_proyecto_vinculacion[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_proyecto_vinculacion[".orderindexes"] = array();

$tdatatbl_proyecto_vinculacion[".sqlHead"] = "SELECT id_proyecto_vinculacion,  	poa,  	id_programa_vinculacion,  	nombre_programa,  	codigo_proyecto,  	nombre_proyecto,  	linea_investigacion,  	numero_beneficiarios,  	beneficiarios,  	coordinador_entidad,  	monto_proyecto,  	objetivo_general,  	objetivo_especifico,  	metas,  	fecha_inicio,  	fecha_fin,  	impacto_social,  	impacto_cientifico,  	impacto_economico,  	impacto_politico,  	otro_impacto,  	docente_responsable,  	docente_tutor,  	docente_participante,  	id_carrera,  	estado,  	documento_proyecto_vinculacion";
$tdatatbl_proyecto_vinculacion[".sqlFrom"] = "FROM tbl_proyecto_vinculacion";
$tdatatbl_proyecto_vinculacion[".sqlWhereExpr"] = "";
$tdatatbl_proyecto_vinculacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_proyecto_vinculacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_proyecto_vinculacion[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_proyecto_vinculacion[".highlightSearchResults"] = true;

$tableKeystbl_proyecto_vinculacion = array();
$tableKeystbl_proyecto_vinculacion[] = "id_proyecto_vinculacion";
$tdatatbl_proyecto_vinculacion[".Keys"] = $tableKeystbl_proyecto_vinculacion;


$tdatatbl_proyecto_vinculacion[".hideMobileList"] = array();




//	id_proyecto_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_proyecto_vinculacion";
	$fdata["GoodName"] = "id_proyecto_vinculacion";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","id_proyecto_vinculacion");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_proyecto_vinculacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_proyecto_vinculacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["id_proyecto_vinculacion"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "id_proyecto_vinculacion";
//	poa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "poa";
	$fdata["GoodName"] = "poa";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","poa");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "poa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "poa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["poa"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "poa";
//	id_programa_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_programa_vinculacion";
	$fdata["GoodName"] = "id_programa_vinculacion";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","id_programa_vinculacion");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_programa_vinculacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_programa_vinculacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_programa_vinculacion";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_programa_vinculacion";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "codigo_programa";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["id_programa_vinculacion"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "id_programa_vinculacion";
//	nombre_programa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre_programa";
	$fdata["GoodName"] = "nombre_programa";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","nombre_programa");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "nombre_programa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_programa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["nombre_programa"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "nombre_programa";
//	codigo_proyecto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "codigo_proyecto";
	$fdata["GoodName"] = "codigo_proyecto";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","codigo_proyecto");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "codigo_proyecto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo_proyecto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["codigo_proyecto"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "codigo_proyecto";
//	nombre_proyecto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombre_proyecto";
	$fdata["GoodName"] = "nombre_proyecto";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","nombre_proyecto");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "nombre_proyecto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_proyecto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["nombre_proyecto"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "nombre_proyecto";
//	linea_investigacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "linea_investigacion";
	$fdata["GoodName"] = "linea_investigacion";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","linea_investigacion");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "linea_investigacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "linea_investigacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["linea_investigacion"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "linea_investigacion";
//	numero_beneficiarios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "numero_beneficiarios";
	$fdata["GoodName"] = "numero_beneficiarios";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","numero_beneficiarios");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "numero_beneficiarios";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numero_beneficiarios";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["numero_beneficiarios"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "numero_beneficiarios";
//	beneficiarios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "beneficiarios";
	$fdata["GoodName"] = "beneficiarios";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","beneficiarios");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "beneficiarios";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "beneficiarios";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["beneficiarios"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "beneficiarios";
//	coordinador_entidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "coordinador_entidad";
	$fdata["GoodName"] = "coordinador_entidad";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","coordinador_entidad");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "coordinador_entidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "coordinador_entidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["coordinador_entidad"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "coordinador_entidad";
//	monto_proyecto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "monto_proyecto";
	$fdata["GoodName"] = "monto_proyecto";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","monto_proyecto");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "monto_proyecto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "monto_proyecto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["monto_proyecto"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "monto_proyecto";
//	objetivo_general
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "objetivo_general";
	$fdata["GoodName"] = "objetivo_general";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","objetivo_general");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "objetivo_general";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "objetivo_general";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["objetivo_general"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "objetivo_general";
//	objetivo_especifico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "objetivo_especifico";
	$fdata["GoodName"] = "objetivo_especifico";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","objetivo_especifico");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "objetivo_especifico";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "objetivo_especifico";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["objetivo_especifico"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "objetivo_especifico";
//	metas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "metas";
	$fdata["GoodName"] = "metas";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","metas");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "metas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "metas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["metas"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "metas";
//	fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "fecha_inicio";
	$fdata["GoodName"] = "fecha_inicio";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","fecha_inicio");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha_inicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_inicio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 5;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["fecha_inicio"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "fecha_inicio";
//	fecha_fin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "fecha_fin";
	$fdata["GoodName"] = "fecha_fin";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","fecha_fin");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha_fin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_fin";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 5;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["fecha_fin"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "fecha_fin";
//	impacto_social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "impacto_social";
	$fdata["GoodName"] = "impacto_social";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","impacto_social");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "impacto_social";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "impacto_social";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["impacto_social"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "impacto_social";
//	impacto_cientifico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "impacto_cientifico";
	$fdata["GoodName"] = "impacto_cientifico";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","impacto_cientifico");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "impacto_cientifico";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "impacto_cientifico";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["impacto_cientifico"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "impacto_cientifico";
//	impacto_economico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "impacto_economico";
	$fdata["GoodName"] = "impacto_economico";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","impacto_economico");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "impacto_economico";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "impacto_economico";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["impacto_economico"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "impacto_economico";
//	impacto_politico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "impacto_politico";
	$fdata["GoodName"] = "impacto_politico";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","impacto_politico");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "impacto_politico";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "impacto_politico";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["impacto_politico"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "impacto_politico";
//	otro_impacto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "otro_impacto";
	$fdata["GoodName"] = "otro_impacto";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","otro_impacto");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "otro_impacto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "otro_impacto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["otro_impacto"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "otro_impacto";
//	docente_responsable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "docente_responsable";
	$fdata["GoodName"] = "docente_responsable";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","docente_responsable");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "docente_responsable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "docente_responsable";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_persona";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cedula";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "apellidos";

				$edata["LookupWhere"] = "tbl_persona.estado='Activo'";


	
	$edata["LookupOrderBy"] = "apellidos";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["docente_responsable"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "docente_responsable";
//	docente_tutor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "docente_tutor";
	$fdata["GoodName"] = "docente_tutor";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","docente_tutor");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "docente_tutor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "docente_tutor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_persona";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cedula";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "apellidos";

				$edata["LookupWhere"] = "tbl_persona.estado='Activo'";


	
	$edata["LookupOrderBy"] = "apellidos";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["docente_tutor"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "docente_tutor";
//	docente_participante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "docente_participante";
	$fdata["GoodName"] = "docente_participante";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","docente_participante");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "docente_participante";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "docente_participante";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_persona";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cedula";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "apellidos";

				$edata["LookupWhere"] = "tbl_persona.estado='Activo'";


	
	$edata["LookupOrderBy"] = "apellidos";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["docente_participante"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "docente_participante";
//	id_carrera
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "id_carrera";
	$fdata["GoodName"] = "id_carrera";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","id_carrera");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_carrera";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_carrera";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_carrera";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_carrera";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "carrera";

				$edata["LookupWhere"] = "tbl_carrera.estado='Activo'";


	
	$edata["LookupOrderBy"] = "carrera";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["id_carrera"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "id_carrera";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","estado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Activo";
	$edata["LookupValues"][] = "Inactivo";

	
	
// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["estado"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "estado";
//	documento_proyecto_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "documento_proyecto_vinculacion";
	$fdata["GoodName"] = "documento_proyecto_vinculacion";
	$fdata["ownerTable"] = "tbl_proyecto_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_proyecto_vinculacion","documento_proyecto_vinculacion");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "documento_proyecto_vinculacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documento_proyecto_vinculacion";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "docs_vinculacion";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	
	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_proyecto_vinculacion["documento_proyecto_vinculacion"] = $fdata;
		$tdatatbl_proyecto_vinculacion[".searchableFields"][] = "documento_proyecto_vinculacion";


$tables_data["tbl_proyecto_vinculacion"]=&$tdatatbl_proyecto_vinculacion;
$field_labels["tbl_proyecto_vinculacion"] = &$fieldLabelstbl_proyecto_vinculacion;
$fieldToolTips["tbl_proyecto_vinculacion"] = &$fieldToolTipstbl_proyecto_vinculacion;
$placeHolders["tbl_proyecto_vinculacion"] = &$placeHolderstbl_proyecto_vinculacion;
$page_titles["tbl_proyecto_vinculacion"] = &$pageTitlestbl_proyecto_vinculacion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_proyecto_vinculacion"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tbl_proyecto_vinculacion"] = array();



	
				$strOriginalDetailsTable="tbl_carrera";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_carrera";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_carrera";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_proyecto_vinculacion"][0] = $masterParams;
				$masterTablesData["tbl_proyecto_vinculacion"][0]["masterKeys"] = array();
	$masterTablesData["tbl_proyecto_vinculacion"][0]["masterKeys"][]="id_carrera";
				$masterTablesData["tbl_proyecto_vinculacion"][0]["detailKeys"] = array();
	$masterTablesData["tbl_proyecto_vinculacion"][0]["detailKeys"][]="id_carrera";
		
	
				$strOriginalDetailsTable="tbl_programa_vinculacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_programa_vinculacion";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_programa_vinculacion";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_proyecto_vinculacion"][1] = $masterParams;
				$masterTablesData["tbl_proyecto_vinculacion"][1]["masterKeys"] = array();
	$masterTablesData["tbl_proyecto_vinculacion"][1]["masterKeys"][]="id_programa_vinculacion";
				$masterTablesData["tbl_proyecto_vinculacion"][1]["detailKeys"] = array();
	$masterTablesData["tbl_proyecto_vinculacion"][1]["detailKeys"][]="id_programa_vinculacion";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_proyecto_vinculacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_proyecto_vinculacion,  	poa,  	id_programa_vinculacion,  	nombre_programa,  	codigo_proyecto,  	nombre_proyecto,  	linea_investigacion,  	numero_beneficiarios,  	beneficiarios,  	coordinador_entidad,  	monto_proyecto,  	objetivo_general,  	objetivo_especifico,  	metas,  	fecha_inicio,  	fecha_fin,  	impacto_social,  	impacto_cientifico,  	impacto_economico,  	impacto_politico,  	otro_impacto,  	docente_responsable,  	docente_tutor,  	docente_participante,  	id_carrera,  	estado,  	documento_proyecto_vinculacion";
$proto0["m_strFrom"] = "FROM tbl_proyecto_vinculacion";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_proyecto_vinculacion",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto6["m_sql"] = "id_proyecto_vinculacion";
$proto6["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "poa",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto8["m_sql"] = "poa";
$proto8["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_programa_vinculacion",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto10["m_sql"] = "id_programa_vinculacion";
$proto10["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_programa",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto12["m_sql"] = "nombre_programa";
$proto12["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_proyecto",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto14["m_sql"] = "codigo_proyecto";
$proto14["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_proyecto",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto16["m_sql"] = "nombre_proyecto";
$proto16["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "linea_investigacion",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto18["m_sql"] = "linea_investigacion";
$proto18["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_beneficiarios",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto20["m_sql"] = "numero_beneficiarios";
$proto20["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "beneficiarios",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto22["m_sql"] = "beneficiarios";
$proto22["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "coordinador_entidad",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto24["m_sql"] = "coordinador_entidad";
$proto24["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "monto_proyecto",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto26["m_sql"] = "monto_proyecto";
$proto26["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "objetivo_general",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto28["m_sql"] = "objetivo_general";
$proto28["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "objetivo_especifico",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto30["m_sql"] = "objetivo_especifico";
$proto30["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "metas",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto32["m_sql"] = "metas";
$proto32["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_inicio",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto34["m_sql"] = "fecha_inicio";
$proto34["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_fin",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto36["m_sql"] = "fecha_fin";
$proto36["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "impacto_social",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto38["m_sql"] = "impacto_social";
$proto38["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "impacto_cientifico",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto40["m_sql"] = "impacto_cientifico";
$proto40["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "impacto_economico",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto42["m_sql"] = "impacto_economico";
$proto42["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "impacto_politico",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto44["m_sql"] = "impacto_politico";
$proto44["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "otro_impacto",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto46["m_sql"] = "otro_impacto";
$proto46["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "docente_responsable",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto48["m_sql"] = "docente_responsable";
$proto48["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "docente_tutor",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto50["m_sql"] = "docente_tutor";
$proto50["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "docente_participante",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto52["m_sql"] = "docente_participante";
$proto52["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "id_carrera",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto54["m_sql"] = "id_carrera";
$proto54["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto56["m_sql"] = "estado";
$proto56["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "documento_proyecto_vinculacion",
	"m_strTable" => "tbl_proyecto_vinculacion",
	"m_srcTableName" => "tbl_proyecto_vinculacion"
));

$proto58["m_sql"] = "documento_proyecto_vinculacion";
$proto58["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
			$proto61=array();
$proto61["m_strName"] = "tbl_proyecto_vinculacion";
$proto61["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "id_proyecto_vinculacion";
$proto61["m_columns"][] = "poa";
$proto61["m_columns"][] = "id_programa_vinculacion";
$proto61["m_columns"][] = "nombre_programa";
$proto61["m_columns"][] = "codigo_proyecto";
$proto61["m_columns"][] = "nombre_proyecto";
$proto61["m_columns"][] = "linea_investigacion";
$proto61["m_columns"][] = "numero_beneficiarios";
$proto61["m_columns"][] = "beneficiarios";
$proto61["m_columns"][] = "coordinador_entidad";
$proto61["m_columns"][] = "monto_proyecto";
$proto61["m_columns"][] = "objetivo_general";
$proto61["m_columns"][] = "objetivo_especifico";
$proto61["m_columns"][] = "metas";
$proto61["m_columns"][] = "fecha_inicio";
$proto61["m_columns"][] = "fecha_fin";
$proto61["m_columns"][] = "impacto_social";
$proto61["m_columns"][] = "impacto_cientifico";
$proto61["m_columns"][] = "impacto_economico";
$proto61["m_columns"][] = "impacto_politico";
$proto61["m_columns"][] = "otro_impacto";
$proto61["m_columns"][] = "docente_responsable";
$proto61["m_columns"][] = "docente_tutor";
$proto61["m_columns"][] = "docente_participante";
$proto61["m_columns"][] = "id_carrera";
$proto61["m_columns"][] = "estado";
$proto61["m_columns"][] = "documento_proyecto_vinculacion";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "tbl_proyecto_vinculacion";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "tbl_proyecto_vinculacion";
$proto62=array();
$proto62["m_sql"] = "";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_proyecto_vinculacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_proyecto_vinculacion = createSqlQuery_tbl_proyecto_vinculacion();


	
		;

																											

$tdatatbl_proyecto_vinculacion[".sqlquery"] = $queryData_tbl_proyecto_vinculacion;

$tableEvents["tbl_proyecto_vinculacion"] = new eventsBase;
$tdatatbl_proyecto_vinculacion[".hasEvents"] = false;

?>
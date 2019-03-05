<?php




$tdatatbl_vinculacion_estudiantes = array();
$tdatatbl_vinculacion_estudiantes[".searchableFields"] = array();
	$tdatatbl_vinculacion_estudiantes[".truncateText"] = true;
	$tdatatbl_vinculacion_estudiantes[".NumberOfChars"] = 80;
	$tdatatbl_vinculacion_estudiantes[".ShortName"] = "tbl_vinculacion_estudiantes";
	$tdatatbl_vinculacion_estudiantes[".OwnerID"] = "";
	$tdatatbl_vinculacion_estudiantes[".OriginalTable"] = "tbl_vinculacion_estudiantes";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatbl_vinculacion_estudiantes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_vinculacion_estudiantes[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstbl_vinculacion_estudiantes = array();
$fieldToolTipstbl_vinculacion_estudiantes = array();
$pageTitlestbl_vinculacion_estudiantes = array();
$placeHolderstbl_vinculacion_estudiantes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstbl_vinculacion_estudiantes["Spanish"] = array();
	$fieldToolTipstbl_vinculacion_estudiantes["Spanish"] = array();
	$placeHolderstbl_vinculacion_estudiantes["Spanish"] = array();
	$pageTitlestbl_vinculacion_estudiantes["Spanish"] = array();
	$fieldLabelstbl_vinculacion_estudiantes["Spanish"]["id_vinculacion_estudiantes"] = "Id Vinculacion Estudiantes";
	$fieldToolTipstbl_vinculacion_estudiantes["Spanish"]["id_vinculacion_estudiantes"] = "";
	$placeHolderstbl_vinculacion_estudiantes["Spanish"]["id_vinculacion_estudiantes"] = "";
	$fieldLabelstbl_vinculacion_estudiantes["Spanish"]["cedula"] = "Cedula";
	$fieldToolTipstbl_vinculacion_estudiantes["Spanish"]["cedula"] = "";
	$placeHolderstbl_vinculacion_estudiantes["Spanish"]["cedula"] = "";
	$fieldLabelstbl_vinculacion_estudiantes["Spanish"]["nivel"] = "Nivel";
	$fieldToolTipstbl_vinculacion_estudiantes["Spanish"]["nivel"] = "";
	$placeHolderstbl_vinculacion_estudiantes["Spanish"]["nivel"] = "";
	$fieldLabelstbl_vinculacion_estudiantes["Spanish"]["paralelo"] = "Paralelo";
	$fieldToolTipstbl_vinculacion_estudiantes["Spanish"]["paralelo"] = "";
	$placeHolderstbl_vinculacion_estudiantes["Spanish"]["paralelo"] = "";
	$fieldLabelstbl_vinculacion_estudiantes["Spanish"]["horas_planificadas"] = "Horas Planificadas";
	$fieldToolTipstbl_vinculacion_estudiantes["Spanish"]["horas_planificadas"] = "";
	$placeHolderstbl_vinculacion_estudiantes["Spanish"]["horas_planificadas"] = "";
	$fieldLabelstbl_vinculacion_estudiantes["Spanish"]["id_proyecto_vinculacion"] = "Id Proyecto Vinculacion";
	$fieldToolTipstbl_vinculacion_estudiantes["Spanish"]["id_proyecto_vinculacion"] = "";
	$placeHolderstbl_vinculacion_estudiantes["Spanish"]["id_proyecto_vinculacion"] = "";
	$fieldLabelstbl_vinculacion_estudiantes["Spanish"]["id_periodo"] = "Id Periodo";
	$fieldToolTipstbl_vinculacion_estudiantes["Spanish"]["id_periodo"] = "";
	$placeHolderstbl_vinculacion_estudiantes["Spanish"]["id_periodo"] = "";
	$fieldLabelstbl_vinculacion_estudiantes["Spanish"]["id_carrera"] = "Id Carrera";
	$fieldToolTipstbl_vinculacion_estudiantes["Spanish"]["id_carrera"] = "";
	$placeHolderstbl_vinculacion_estudiantes["Spanish"]["id_carrera"] = "";
	$fieldLabelstbl_vinculacion_estudiantes["Spanish"]["estado"] = "Estado";
	$fieldToolTipstbl_vinculacion_estudiantes["Spanish"]["estado"] = "";
	$placeHolderstbl_vinculacion_estudiantes["Spanish"]["estado"] = "";
	$fieldLabelstbl_vinculacion_estudiantes["Spanish"]["codigo_solicitud"] = "Codigo Solicitud";
	$fieldToolTipstbl_vinculacion_estudiantes["Spanish"]["codigo_solicitud"] = "";
	$placeHolderstbl_vinculacion_estudiantes["Spanish"]["codigo_solicitud"] = "";
	$fieldLabelstbl_vinculacion_estudiantes["Spanish"]["doc_oficio_contestacion"] = "Doc Oficio Contestacion";
	$fieldToolTipstbl_vinculacion_estudiantes["Spanish"]["doc_oficio_contestacion"] = "";
	$placeHolderstbl_vinculacion_estudiantes["Spanish"]["doc_oficio_contestacion"] = "";
	if (count($fieldToolTipstbl_vinculacion_estudiantes["Spanish"]))
		$tdatatbl_vinculacion_estudiantes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_vinculacion_estudiantes["English"] = array();
	$fieldToolTipstbl_vinculacion_estudiantes["English"] = array();
	$placeHolderstbl_vinculacion_estudiantes["English"] = array();
	$pageTitlestbl_vinculacion_estudiantes["English"] = array();
	if (count($fieldToolTipstbl_vinculacion_estudiantes["English"]))
		$tdatatbl_vinculacion_estudiantes[".isUseToolTips"] = true;
}


	$tdatatbl_vinculacion_estudiantes[".NCSearch"] = true;



$tdatatbl_vinculacion_estudiantes[".shortTableName"] = "tbl_vinculacion_estudiantes";
$tdatatbl_vinculacion_estudiantes[".nSecOptions"] = 0;

$tdatatbl_vinculacion_estudiantes[".mainTableOwnerID"] = "";
$tdatatbl_vinculacion_estudiantes[".entityType"] = 0;

$tdatatbl_vinculacion_estudiantes[".strOriginalTableName"] = "tbl_vinculacion_estudiantes";

	



$tdatatbl_vinculacion_estudiantes[".showAddInPopup"] = false;

$tdatatbl_vinculacion_estudiantes[".showEditInPopup"] = false;

$tdatatbl_vinculacion_estudiantes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_vinculacion_estudiantes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_vinculacion_estudiantes[".listAjax"] = false;
//	temporary
$tdatatbl_vinculacion_estudiantes[".listAjax"] = false;

	$tdatatbl_vinculacion_estudiantes[".audit"] = false;

	$tdatatbl_vinculacion_estudiantes[".locking"] = false;


$pages = $tdatatbl_vinculacion_estudiantes[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_vinculacion_estudiantes[".edit"] = true;
	$tdatatbl_vinculacion_estudiantes[".afterEditAction"] = 1;
	$tdatatbl_vinculacion_estudiantes[".closePopupAfterEdit"] = 1;
	$tdatatbl_vinculacion_estudiantes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_vinculacion_estudiantes[".add"] = true;
$tdatatbl_vinculacion_estudiantes[".afterAddAction"] = 1;
$tdatatbl_vinculacion_estudiantes[".closePopupAfterAdd"] = 1;
$tdatatbl_vinculacion_estudiantes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_vinculacion_estudiantes[".list"] = true;
}



$tdatatbl_vinculacion_estudiantes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_vinculacion_estudiantes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_vinculacion_estudiantes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_vinculacion_estudiantes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_vinculacion_estudiantes[".printFriendly"] = true;
}



$tdatatbl_vinculacion_estudiantes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_vinculacion_estudiantes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_vinculacion_estudiantes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_vinculacion_estudiantes[".isUseAjaxSuggest"] = true;

$tdatatbl_vinculacion_estudiantes[".rowHighlite"] = true;



			
$tdatatbl_vinculacion_estudiantes[".flexibleSearch"] = true;


$tdatatbl_vinculacion_estudiantes[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_vinculacion_estudiantes[".buttonsAdded"] = false;

$tdatatbl_vinculacion_estudiantes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_vinculacion_estudiantes[".isUseTimeForSearch"] = false;


$tdatatbl_vinculacion_estudiantes[".badgeColor"] = "E07878";


$tdatatbl_vinculacion_estudiantes[".allSearchFields"] = array();
$tdatatbl_vinculacion_estudiantes[".filterFields"] = array();
$tdatatbl_vinculacion_estudiantes[".requiredSearchFields"] = array();

$tdatatbl_vinculacion_estudiantes[".googleLikeFields"] = array();
$tdatatbl_vinculacion_estudiantes[".googleLikeFields"][] = "id_vinculacion_estudiantes";
$tdatatbl_vinculacion_estudiantes[".googleLikeFields"][] = "cedula";
$tdatatbl_vinculacion_estudiantes[".googleLikeFields"][] = "nivel";
$tdatatbl_vinculacion_estudiantes[".googleLikeFields"][] = "paralelo";
$tdatatbl_vinculacion_estudiantes[".googleLikeFields"][] = "horas_planificadas";
$tdatatbl_vinculacion_estudiantes[".googleLikeFields"][] = "id_proyecto_vinculacion";
$tdatatbl_vinculacion_estudiantes[".googleLikeFields"][] = "id_periodo";
$tdatatbl_vinculacion_estudiantes[".googleLikeFields"][] = "id_carrera";
$tdatatbl_vinculacion_estudiantes[".googleLikeFields"][] = "estado";
$tdatatbl_vinculacion_estudiantes[".googleLikeFields"][] = "codigo_solicitud";
$tdatatbl_vinculacion_estudiantes[".googleLikeFields"][] = "doc_oficio_contestacion";



$tdatatbl_vinculacion_estudiantes[".tableType"] = "list";

$tdatatbl_vinculacion_estudiantes[".printerPageOrientation"] = 0;
$tdatatbl_vinculacion_estudiantes[".nPrinterPageScale"] = 100;

$tdatatbl_vinculacion_estudiantes[".nPrinterSplitRecords"] = 40;

$tdatatbl_vinculacion_estudiantes[".nPrinterPDFSplitRecords"] = 40;


$tdatatbl_vinculacion_estudiantes[".geocodingEnabled"] = false;










$tdatatbl_vinculacion_estudiantes[".pageSize"] = 20;

$tdatatbl_vinculacion_estudiantes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_vinculacion_estudiantes[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_vinculacion_estudiantes[".orderindexes"] = array();

$tdatatbl_vinculacion_estudiantes[".sqlHead"] = "SELECT id_vinculacion_estudiantes,  	cedula,  	nivel,  	paralelo,  	horas_planificadas,  	id_proyecto_vinculacion,  	id_periodo,  	id_carrera,  	estado,  	codigo_solicitud,  	doc_oficio_contestacion";
$tdatatbl_vinculacion_estudiantes[".sqlFrom"] = "FROM tbl_vinculacion_estudiantes";
$tdatatbl_vinculacion_estudiantes[".sqlWhereExpr"] = "";
$tdatatbl_vinculacion_estudiantes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_vinculacion_estudiantes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_vinculacion_estudiantes[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_vinculacion_estudiantes[".highlightSearchResults"] = true;

$tableKeystbl_vinculacion_estudiantes = array();
$tableKeystbl_vinculacion_estudiantes[] = "id_vinculacion_estudiantes";
$tdatatbl_vinculacion_estudiantes[".Keys"] = $tableKeystbl_vinculacion_estudiantes;


$tdatatbl_vinculacion_estudiantes[".hideMobileList"] = array();




//	id_vinculacion_estudiantes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_vinculacion_estudiantes";
	$fdata["GoodName"] = "id_vinculacion_estudiantes";
	$fdata["ownerTable"] = "tbl_vinculacion_estudiantes";
	$fdata["Label"] = GetFieldLabel("tbl_vinculacion_estudiantes","id_vinculacion_estudiantes");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_vinculacion_estudiantes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_vinculacion_estudiantes";

	
	
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


	$tdatatbl_vinculacion_estudiantes["id_vinculacion_estudiantes"] = $fdata;
		$tdatatbl_vinculacion_estudiantes[".searchableFields"][] = "id_vinculacion_estudiantes";
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "tbl_vinculacion_estudiantes";
	$fdata["Label"] = GetFieldLabel("tbl_vinculacion_estudiantes","cedula");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cedula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cedula";

	
	
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


	$tdatatbl_vinculacion_estudiantes["cedula"] = $fdata;
		$tdatatbl_vinculacion_estudiantes[".searchableFields"][] = "cedula";
//	nivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nivel";
	$fdata["GoodName"] = "nivel";
	$fdata["ownerTable"] = "tbl_vinculacion_estudiantes";
	$fdata["Label"] = GetFieldLabel("tbl_vinculacion_estudiantes","nivel");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nivel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nivel";

	
	
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
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "PRIMERO";
	$edata["LookupValues"][] = "SEGUNDO";
	$edata["LookupValues"][] = "TERCERO";
	$edata["LookupValues"][] = "CUARTO";
	$edata["LookupValues"][] = "QUINTO";
	$edata["LookupValues"][] = "SEXTO";
	$edata["LookupValues"][] = "SEPTIMO";
	$edata["LookupValues"][] = "OCTAVO";
	$edata["LookupValues"][] = "NOVENO";
	$edata["LookupValues"][] = "DECIMO";

	
		$edata["SelectSize"] = 1;

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


	$tdatatbl_vinculacion_estudiantes["nivel"] = $fdata;
		$tdatatbl_vinculacion_estudiantes[".searchableFields"][] = "nivel";
//	paralelo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "paralelo";
	$fdata["GoodName"] = "paralelo";
	$fdata["ownerTable"] = "tbl_vinculacion_estudiantes";
	$fdata["Label"] = GetFieldLabel("tbl_vinculacion_estudiantes","paralelo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "paralelo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paralelo";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatatbl_vinculacion_estudiantes["paralelo"] = $fdata;
		$tdatatbl_vinculacion_estudiantes[".searchableFields"][] = "paralelo";
//	horas_planificadas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "horas_planificadas";
	$fdata["GoodName"] = "horas_planificadas";
	$fdata["ownerTable"] = "tbl_vinculacion_estudiantes";
	$fdata["Label"] = GetFieldLabel("tbl_vinculacion_estudiantes","horas_planificadas");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "horas_planificadas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "horas_planificadas";

	
	
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


	$tdatatbl_vinculacion_estudiantes["horas_planificadas"] = $fdata;
		$tdatatbl_vinculacion_estudiantes[".searchableFields"][] = "horas_planificadas";
//	id_proyecto_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id_proyecto_vinculacion";
	$fdata["GoodName"] = "id_proyecto_vinculacion";
	$fdata["ownerTable"] = "tbl_vinculacion_estudiantes";
	$fdata["Label"] = GetFieldLabel("tbl_vinculacion_estudiantes","id_proyecto_vinculacion");
	$fdata["FieldType"] = 3;

	
	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_proyecto_vinculacion";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_proyecto_vinculacion";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "codigo_proyecto";

				$edata["LookupWhere"] = "tbl_proyecto_vinculacion.estado='Activo'";


	
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


	$tdatatbl_vinculacion_estudiantes["id_proyecto_vinculacion"] = $fdata;
		$tdatatbl_vinculacion_estudiantes[".searchableFields"][] = "id_proyecto_vinculacion";
//	id_periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_periodo";
	$fdata["GoodName"] = "id_periodo";
	$fdata["ownerTable"] = "tbl_vinculacion_estudiantes";
	$fdata["Label"] = GetFieldLabel("tbl_vinculacion_estudiantes","id_periodo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_periodo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_periodo";

	
	
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
	$edata["LookupTable"] = "tbl_periodo";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_periodo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "periodo";

				$edata["LookupWhere"] = "tbl_periodo.estado='Activo'";


	
	$edata["LookupOrderBy"] = "id_periodo";

		$edata["LookupDesc"] = true;

	
	
	

	
	
		$edata["SelectSize"] = 1;

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
		$fdata["filterTotalFields"] = "id_vinculacion_estudiantes";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_vinculacion_estudiantes["id_periodo"] = $fdata;
		$tdatatbl_vinculacion_estudiantes[".searchableFields"][] = "id_periodo";
//	id_carrera
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id_carrera";
	$fdata["GoodName"] = "id_carrera";
	$fdata["ownerTable"] = "tbl_vinculacion_estudiantes";
	$fdata["Label"] = GetFieldLabel("tbl_vinculacion_estudiantes","id_carrera");
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


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatatbl_vinculacion_estudiantes["id_carrera"] = $fdata;
		$tdatatbl_vinculacion_estudiantes[".searchableFields"][] = "id_carrera";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tbl_vinculacion_estudiantes";
	$fdata["Label"] = GetFieldLabel("tbl_vinculacion_estudiantes","estado");
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


	$tdatatbl_vinculacion_estudiantes["estado"] = $fdata;
		$tdatatbl_vinculacion_estudiantes[".searchableFields"][] = "estado";
//	codigo_solicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "codigo_solicitud";
	$fdata["GoodName"] = "codigo_solicitud";
	$fdata["ownerTable"] = "tbl_vinculacion_estudiantes";
	$fdata["Label"] = GetFieldLabel("tbl_vinculacion_estudiantes","codigo_solicitud");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "codigo_solicitud";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo_solicitud";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_vinculacion_estudiantes["codigo_solicitud"] = $fdata;
		$tdatatbl_vinculacion_estudiantes[".searchableFields"][] = "codigo_solicitud";
//	doc_oficio_contestacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "doc_oficio_contestacion";
	$fdata["GoodName"] = "doc_oficio_contestacion";
	$fdata["ownerTable"] = "tbl_vinculacion_estudiantes";
	$fdata["Label"] = GetFieldLabel("tbl_vinculacion_estudiantes","doc_oficio_contestacion");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "doc_oficio_contestacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_oficio_contestacion";

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


	$tdatatbl_vinculacion_estudiantes["doc_oficio_contestacion"] = $fdata;
		$tdatatbl_vinculacion_estudiantes[".searchableFields"][] = "doc_oficio_contestacion";


$tables_data["tbl_vinculacion_estudiantes"]=&$tdatatbl_vinculacion_estudiantes;
$field_labels["tbl_vinculacion_estudiantes"] = &$fieldLabelstbl_vinculacion_estudiantes;
$fieldToolTips["tbl_vinculacion_estudiantes"] = &$fieldToolTipstbl_vinculacion_estudiantes;
$placeHolders["tbl_vinculacion_estudiantes"] = &$placeHolderstbl_vinculacion_estudiantes;
$page_titles["tbl_vinculacion_estudiantes"] = &$pageTitlestbl_vinculacion_estudiantes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_vinculacion_estudiantes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tbl_vinculacion_estudiantes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_vinculacion_estudiantes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_vinculacion_estudiantes,  	cedula,  	nivel,  	paralelo,  	horas_planificadas,  	id_proyecto_vinculacion,  	id_periodo,  	id_carrera,  	estado,  	codigo_solicitud,  	doc_oficio_contestacion";
$proto0["m_strFrom"] = "FROM tbl_vinculacion_estudiantes";
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
	"m_strName" => "id_vinculacion_estudiantes",
	"m_strTable" => "tbl_vinculacion_estudiantes",
	"m_srcTableName" => "tbl_vinculacion_estudiantes"
));

$proto6["m_sql"] = "id_vinculacion_estudiantes";
$proto6["m_srcTableName"] = "tbl_vinculacion_estudiantes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cedula",
	"m_strTable" => "tbl_vinculacion_estudiantes",
	"m_srcTableName" => "tbl_vinculacion_estudiantes"
));

$proto8["m_sql"] = "cedula";
$proto8["m_srcTableName"] = "tbl_vinculacion_estudiantes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel",
	"m_strTable" => "tbl_vinculacion_estudiantes",
	"m_srcTableName" => "tbl_vinculacion_estudiantes"
));

$proto10["m_sql"] = "nivel";
$proto10["m_srcTableName"] = "tbl_vinculacion_estudiantes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "paralelo",
	"m_strTable" => "tbl_vinculacion_estudiantes",
	"m_srcTableName" => "tbl_vinculacion_estudiantes"
));

$proto12["m_sql"] = "paralelo";
$proto12["m_srcTableName"] = "tbl_vinculacion_estudiantes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "horas_planificadas",
	"m_strTable" => "tbl_vinculacion_estudiantes",
	"m_srcTableName" => "tbl_vinculacion_estudiantes"
));

$proto14["m_sql"] = "horas_planificadas";
$proto14["m_srcTableName"] = "tbl_vinculacion_estudiantes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id_proyecto_vinculacion",
	"m_strTable" => "tbl_vinculacion_estudiantes",
	"m_srcTableName" => "tbl_vinculacion_estudiantes"
));

$proto16["m_sql"] = "id_proyecto_vinculacion";
$proto16["m_srcTableName"] = "tbl_vinculacion_estudiantes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_periodo",
	"m_strTable" => "tbl_vinculacion_estudiantes",
	"m_srcTableName" => "tbl_vinculacion_estudiantes"
));

$proto18["m_sql"] = "id_periodo";
$proto18["m_srcTableName"] = "tbl_vinculacion_estudiantes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id_carrera",
	"m_strTable" => "tbl_vinculacion_estudiantes",
	"m_srcTableName" => "tbl_vinculacion_estudiantes"
));

$proto20["m_sql"] = "id_carrera";
$proto20["m_srcTableName"] = "tbl_vinculacion_estudiantes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tbl_vinculacion_estudiantes",
	"m_srcTableName" => "tbl_vinculacion_estudiantes"
));

$proto22["m_sql"] = "estado";
$proto22["m_srcTableName"] = "tbl_vinculacion_estudiantes";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_solicitud",
	"m_strTable" => "tbl_vinculacion_estudiantes",
	"m_srcTableName" => "tbl_vinculacion_estudiantes"
));

$proto24["m_sql"] = "codigo_solicitud";
$proto24["m_srcTableName"] = "tbl_vinculacion_estudiantes";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_oficio_contestacion",
	"m_strTable" => "tbl_vinculacion_estudiantes",
	"m_srcTableName" => "tbl_vinculacion_estudiantes"
));

$proto26["m_sql"] = "doc_oficio_contestacion";
$proto26["m_srcTableName"] = "tbl_vinculacion_estudiantes";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "tbl_vinculacion_estudiantes";
$proto29["m_srcTableName"] = "tbl_vinculacion_estudiantes";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id_vinculacion_estudiantes";
$proto29["m_columns"][] = "cedula";
$proto29["m_columns"][] = "nivel";
$proto29["m_columns"][] = "paralelo";
$proto29["m_columns"][] = "horas_planificadas";
$proto29["m_columns"][] = "id_proyecto_vinculacion";
$proto29["m_columns"][] = "id_periodo";
$proto29["m_columns"][] = "id_carrera";
$proto29["m_columns"][] = "estado";
$proto29["m_columns"][] = "codigo_solicitud";
$proto29["m_columns"][] = "doc_oficio_contestacion";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "tbl_vinculacion_estudiantes";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "tbl_vinculacion_estudiantes";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_vinculacion_estudiantes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_vinculacion_estudiantes = createSqlQuery_tbl_vinculacion_estudiantes();


	
		;

											

$tdatatbl_vinculacion_estudiantes[".sqlquery"] = $queryData_tbl_vinculacion_estudiantes;

$tableEvents["tbl_vinculacion_estudiantes"] = new eventsBase;
$tdatatbl_vinculacion_estudiantes[".hasEvents"] = false;

?>
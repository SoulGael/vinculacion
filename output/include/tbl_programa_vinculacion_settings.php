<?php




$tdatatbl_programa_vinculacion = array();
$tdatatbl_programa_vinculacion[".searchableFields"] = array();
	$tdatatbl_programa_vinculacion[".truncateText"] = true;
	$tdatatbl_programa_vinculacion[".NumberOfChars"] = 80;
	$tdatatbl_programa_vinculacion[".ShortName"] = "tbl_programa_vinculacion";
	$tdatatbl_programa_vinculacion[".OwnerID"] = "";
	$tdatatbl_programa_vinculacion[".OriginalTable"] = "tbl_programa_vinculacion";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatbl_programa_vinculacion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_programa_vinculacion[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstbl_programa_vinculacion = array();
$fieldToolTipstbl_programa_vinculacion = array();
$pageTitlestbl_programa_vinculacion = array();
$placeHolderstbl_programa_vinculacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstbl_programa_vinculacion["Spanish"] = array();
	$fieldToolTipstbl_programa_vinculacion["Spanish"] = array();
	$placeHolderstbl_programa_vinculacion["Spanish"] = array();
	$pageTitlestbl_programa_vinculacion["Spanish"] = array();
	$fieldLabelstbl_programa_vinculacion["Spanish"]["id_programa_vinculacion"] = "Id Programa Vinculacion";
	$fieldToolTipstbl_programa_vinculacion["Spanish"]["id_programa_vinculacion"] = "";
	$placeHolderstbl_programa_vinculacion["Spanish"]["id_programa_vinculacion"] = "";
	$fieldLabelstbl_programa_vinculacion["Spanish"]["programa_vinculacion"] = "Programa Vinculacion";
	$fieldToolTipstbl_programa_vinculacion["Spanish"]["programa_vinculacion"] = "";
	$placeHolderstbl_programa_vinculacion["Spanish"]["programa_vinculacion"] = "";
	$fieldLabelstbl_programa_vinculacion["Spanish"]["codigo_programa"] = "Codigo Programa";
	$fieldToolTipstbl_programa_vinculacion["Spanish"]["codigo_programa"] = "";
	$placeHolderstbl_programa_vinculacion["Spanish"]["codigo_programa"] = "";
	$fieldLabelstbl_programa_vinculacion["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipstbl_programa_vinculacion["Spanish"]["descripcion"] = "";
	$placeHolderstbl_programa_vinculacion["Spanish"]["descripcion"] = "";
	$fieldLabelstbl_programa_vinculacion["Spanish"]["dominios_academicos"] = "Dominios Academicos";
	$fieldToolTipstbl_programa_vinculacion["Spanish"]["dominios_academicos"] = "";
	$placeHolderstbl_programa_vinculacion["Spanish"]["dominios_academicos"] = "";
	$fieldLabelstbl_programa_vinculacion["Spanish"]["plan_nacional"] = "Plan Nacional";
	$fieldToolTipstbl_programa_vinculacion["Spanish"]["plan_nacional"] = "";
	$placeHolderstbl_programa_vinculacion["Spanish"]["plan_nacional"] = "";
	$fieldLabelstbl_programa_vinculacion["Spanish"]["politicas_vinculacion"] = "Politicas Vinculacion";
	$fieldToolTipstbl_programa_vinculacion["Spanish"]["politicas_vinculacion"] = "";
	$placeHolderstbl_programa_vinculacion["Spanish"]["politicas_vinculacion"] = "";
	$fieldLabelstbl_programa_vinculacion["Spanish"]["id_linea_investigacion"] = "Id Linea Investigacion";
	$fieldToolTipstbl_programa_vinculacion["Spanish"]["id_linea_investigacion"] = "";
	$placeHolderstbl_programa_vinculacion["Spanish"]["id_linea_investigacion"] = "";
	$fieldLabelstbl_programa_vinculacion["Spanish"]["id_carrera"] = "Id Carrera";
	$fieldToolTipstbl_programa_vinculacion["Spanish"]["id_carrera"] = "";
	$placeHolderstbl_programa_vinculacion["Spanish"]["id_carrera"] = "";
	if (count($fieldToolTipstbl_programa_vinculacion["Spanish"]))
		$tdatatbl_programa_vinculacion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_programa_vinculacion["English"] = array();
	$fieldToolTipstbl_programa_vinculacion["English"] = array();
	$placeHolderstbl_programa_vinculacion["English"] = array();
	$pageTitlestbl_programa_vinculacion["English"] = array();
	if (count($fieldToolTipstbl_programa_vinculacion["English"]))
		$tdatatbl_programa_vinculacion[".isUseToolTips"] = true;
}


	$tdatatbl_programa_vinculacion[".NCSearch"] = true;



$tdatatbl_programa_vinculacion[".shortTableName"] = "tbl_programa_vinculacion";
$tdatatbl_programa_vinculacion[".nSecOptions"] = 0;

$tdatatbl_programa_vinculacion[".mainTableOwnerID"] = "";
$tdatatbl_programa_vinculacion[".entityType"] = 0;

$tdatatbl_programa_vinculacion[".strOriginalTableName"] = "tbl_programa_vinculacion";

	



$tdatatbl_programa_vinculacion[".showAddInPopup"] = false;

$tdatatbl_programa_vinculacion[".showEditInPopup"] = false;

$tdatatbl_programa_vinculacion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_programa_vinculacion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_programa_vinculacion[".listAjax"] = false;
//	temporary
$tdatatbl_programa_vinculacion[".listAjax"] = false;

	$tdatatbl_programa_vinculacion[".audit"] = false;

	$tdatatbl_programa_vinculacion[".locking"] = false;


$pages = $tdatatbl_programa_vinculacion[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_programa_vinculacion[".edit"] = true;
	$tdatatbl_programa_vinculacion[".afterEditAction"] = 1;
	$tdatatbl_programa_vinculacion[".closePopupAfterEdit"] = 1;
	$tdatatbl_programa_vinculacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_programa_vinculacion[".add"] = true;
$tdatatbl_programa_vinculacion[".afterAddAction"] = 1;
$tdatatbl_programa_vinculacion[".closePopupAfterAdd"] = 1;
$tdatatbl_programa_vinculacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_programa_vinculacion[".list"] = true;
}



$tdatatbl_programa_vinculacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_programa_vinculacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_programa_vinculacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_programa_vinculacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_programa_vinculacion[".printFriendly"] = true;
}



$tdatatbl_programa_vinculacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_programa_vinculacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_programa_vinculacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_programa_vinculacion[".isUseAjaxSuggest"] = true;

$tdatatbl_programa_vinculacion[".rowHighlite"] = true;



									
$tdatatbl_programa_vinculacion[".flexibleSearch"] = true;


$tdatatbl_programa_vinculacion[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_programa_vinculacion[".buttonsAdded"] = false;

$tdatatbl_programa_vinculacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_programa_vinculacion[".isUseTimeForSearch"] = false;


$tdatatbl_programa_vinculacion[".badgeColor"] = "EDCA00";


$tdatatbl_programa_vinculacion[".allSearchFields"] = array();
$tdatatbl_programa_vinculacion[".filterFields"] = array();
$tdatatbl_programa_vinculacion[".requiredSearchFields"] = array();

$tdatatbl_programa_vinculacion[".googleLikeFields"] = array();
$tdatatbl_programa_vinculacion[".googleLikeFields"][] = "id_programa_vinculacion";
$tdatatbl_programa_vinculacion[".googleLikeFields"][] = "programa_vinculacion";
$tdatatbl_programa_vinculacion[".googleLikeFields"][] = "codigo_programa";
$tdatatbl_programa_vinculacion[".googleLikeFields"][] = "descripcion";
$tdatatbl_programa_vinculacion[".googleLikeFields"][] = "dominios_academicos";
$tdatatbl_programa_vinculacion[".googleLikeFields"][] = "plan_nacional";
$tdatatbl_programa_vinculacion[".googleLikeFields"][] = "politicas_vinculacion";
$tdatatbl_programa_vinculacion[".googleLikeFields"][] = "id_linea_investigacion";
$tdatatbl_programa_vinculacion[".googleLikeFields"][] = "id_carrera";



$tdatatbl_programa_vinculacion[".tableType"] = "list";

$tdatatbl_programa_vinculacion[".printerPageOrientation"] = 0;
$tdatatbl_programa_vinculacion[".nPrinterPageScale"] = 100;

$tdatatbl_programa_vinculacion[".nPrinterSplitRecords"] = 40;

$tdatatbl_programa_vinculacion[".nPrinterPDFSplitRecords"] = 40;


$tdatatbl_programa_vinculacion[".geocodingEnabled"] = false;










$tdatatbl_programa_vinculacion[".pageSize"] = 20;

$tdatatbl_programa_vinculacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_programa_vinculacion[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_programa_vinculacion[".orderindexes"] = array();

$tdatatbl_programa_vinculacion[".sqlHead"] = "SELECT id_programa_vinculacion,  	programa_vinculacion,  	codigo_programa,  	descripcion,  	dominios_academicos,  	plan_nacional,  	politicas_vinculacion,  	id_linea_investigacion,  	id_carrera";
$tdatatbl_programa_vinculacion[".sqlFrom"] = "FROM tbl_programa_vinculacion";
$tdatatbl_programa_vinculacion[".sqlWhereExpr"] = "";
$tdatatbl_programa_vinculacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_programa_vinculacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_programa_vinculacion[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_programa_vinculacion[".highlightSearchResults"] = true;

$tableKeystbl_programa_vinculacion = array();
$tableKeystbl_programa_vinculacion[] = "id_programa_vinculacion";
$tdatatbl_programa_vinculacion[".Keys"] = $tableKeystbl_programa_vinculacion;


$tdatatbl_programa_vinculacion[".hideMobileList"] = array();




//	id_programa_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_programa_vinculacion";
	$fdata["GoodName"] = "id_programa_vinculacion";
	$fdata["ownerTable"] = "tbl_programa_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_programa_vinculacion","id_programa_vinculacion");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatatbl_programa_vinculacion["id_programa_vinculacion"] = $fdata;
		$tdatatbl_programa_vinculacion[".searchableFields"][] = "id_programa_vinculacion";
//	programa_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "programa_vinculacion";
	$fdata["GoodName"] = "programa_vinculacion";
	$fdata["ownerTable"] = "tbl_programa_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_programa_vinculacion","programa_vinculacion");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "programa_vinculacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "programa_vinculacion";

	
	
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


	$tdatatbl_programa_vinculacion["programa_vinculacion"] = $fdata;
		$tdatatbl_programa_vinculacion[".searchableFields"][] = "programa_vinculacion";
//	codigo_programa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "codigo_programa";
	$fdata["GoodName"] = "codigo_programa";
	$fdata["ownerTable"] = "tbl_programa_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_programa_vinculacion","codigo_programa");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "codigo_programa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo_programa";

	
	
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


	$tdatatbl_programa_vinculacion["codigo_programa"] = $fdata;
		$tdatatbl_programa_vinculacion[".searchableFields"][] = "codigo_programa";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "tbl_programa_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_programa_vinculacion","descripcion");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "descripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion";

	
	
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


	$tdatatbl_programa_vinculacion["descripcion"] = $fdata;
		$tdatatbl_programa_vinculacion[".searchableFields"][] = "descripcion";
//	dominios_academicos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dominios_academicos";
	$fdata["GoodName"] = "dominios_academicos";
	$fdata["ownerTable"] = "tbl_programa_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_programa_vinculacion","dominios_academicos");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "dominios_academicos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dominios_academicos";

	
	
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


	$tdatatbl_programa_vinculacion["dominios_academicos"] = $fdata;
		$tdatatbl_programa_vinculacion[".searchableFields"][] = "dominios_academicos";
//	plan_nacional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "plan_nacional";
	$fdata["GoodName"] = "plan_nacional";
	$fdata["ownerTable"] = "tbl_programa_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_programa_vinculacion","plan_nacional");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "plan_nacional";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "plan_nacional";

	
	
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


	$tdatatbl_programa_vinculacion["plan_nacional"] = $fdata;
		$tdatatbl_programa_vinculacion[".searchableFields"][] = "plan_nacional";
//	politicas_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "politicas_vinculacion";
	$fdata["GoodName"] = "politicas_vinculacion";
	$fdata["ownerTable"] = "tbl_programa_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_programa_vinculacion","politicas_vinculacion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "politicas_vinculacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "politicas_vinculacion";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatbl_programa_vinculacion["politicas_vinculacion"] = $fdata;
		$tdatatbl_programa_vinculacion[".searchableFields"][] = "politicas_vinculacion";
//	id_linea_investigacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id_linea_investigacion";
	$fdata["GoodName"] = "id_linea_investigacion";
	$fdata["ownerTable"] = "tbl_programa_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_programa_vinculacion","id_linea_investigacion");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_linea_investigacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_linea_investigacion";

	
	
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
	$edata["LookupTable"] = "tbl_linea_investigacion";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_linea_investigacion";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "linea_investigacion";

				$edata["LookupWhere"] = "tbl_linea_investigacion.estado='Activo'";


	
	$edata["LookupOrderBy"] = "linea_investigacion";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_carrera", "lookup" => "id_carrera" );

	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatatbl_programa_vinculacion["id_linea_investigacion"] = $fdata;
		$tdatatbl_programa_vinculacion[".searchableFields"][] = "id_linea_investigacion";
//	id_carrera
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id_carrera";
	$fdata["GoodName"] = "id_carrera";
	$fdata["ownerTable"] = "tbl_programa_vinculacion";
	$fdata["Label"] = GetFieldLabel("tbl_programa_vinculacion","id_carrera");
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

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_linea_investigacion";

	
	
	
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


	$tdatatbl_programa_vinculacion["id_carrera"] = $fdata;
		$tdatatbl_programa_vinculacion[".searchableFields"][] = "id_carrera";


$tables_data["tbl_programa_vinculacion"]=&$tdatatbl_programa_vinculacion;
$field_labels["tbl_programa_vinculacion"] = &$fieldLabelstbl_programa_vinculacion;
$fieldToolTips["tbl_programa_vinculacion"] = &$fieldToolTipstbl_programa_vinculacion;
$placeHolders["tbl_programa_vinculacion"] = &$placeHolderstbl_programa_vinculacion;
$page_titles["tbl_programa_vinculacion"] = &$pageTitlestbl_programa_vinculacion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_programa_vinculacion"] = array();
//	tbl_proyecto_vinculacion
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_proyecto_vinculacion";
		$detailsParam["dOriginalTable"] = "tbl_proyecto_vinculacion";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_proyecto_vinculacion";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_proyecto_vinculacion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_programa_vinculacion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_programa_vinculacion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_programa_vinculacion"][$dIndex]["masterKeys"][]="id_programa_vinculacion";

				$detailsTablesData["tbl_programa_vinculacion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_programa_vinculacion"][$dIndex]["detailKeys"][]="id_programa_vinculacion";

// tables which are master tables for current table (detail)
$masterTablesData["tbl_programa_vinculacion"] = array();



	
				$strOriginalDetailsTable="tbl_carrera";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_carrera";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_carrera";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_programa_vinculacion"][0] = $masterParams;
				$masterTablesData["tbl_programa_vinculacion"][0]["masterKeys"] = array();
	$masterTablesData["tbl_programa_vinculacion"][0]["masterKeys"][]="id_carrera";
				$masterTablesData["tbl_programa_vinculacion"][0]["detailKeys"] = array();
	$masterTablesData["tbl_programa_vinculacion"][0]["detailKeys"][]="id_carrera";
		
	
				$strOriginalDetailsTable="tbl_linea_investigacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_linea_investigacion";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_linea_investigacion";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_programa_vinculacion"][1] = $masterParams;
				$masterTablesData["tbl_programa_vinculacion"][1]["masterKeys"] = array();
	$masterTablesData["tbl_programa_vinculacion"][1]["masterKeys"][]="id_linea_investigacion";
				$masterTablesData["tbl_programa_vinculacion"][1]["detailKeys"] = array();
	$masterTablesData["tbl_programa_vinculacion"][1]["detailKeys"][]="id_linea_investigacion";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_programa_vinculacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_programa_vinculacion,  	programa_vinculacion,  	codigo_programa,  	descripcion,  	dominios_academicos,  	plan_nacional,  	politicas_vinculacion,  	id_linea_investigacion,  	id_carrera";
$proto0["m_strFrom"] = "FROM tbl_programa_vinculacion";
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
	"m_strName" => "id_programa_vinculacion",
	"m_strTable" => "tbl_programa_vinculacion",
	"m_srcTableName" => "tbl_programa_vinculacion"
));

$proto6["m_sql"] = "id_programa_vinculacion";
$proto6["m_srcTableName"] = "tbl_programa_vinculacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "programa_vinculacion",
	"m_strTable" => "tbl_programa_vinculacion",
	"m_srcTableName" => "tbl_programa_vinculacion"
));

$proto8["m_sql"] = "programa_vinculacion";
$proto8["m_srcTableName"] = "tbl_programa_vinculacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_programa",
	"m_strTable" => "tbl_programa_vinculacion",
	"m_srcTableName" => "tbl_programa_vinculacion"
));

$proto10["m_sql"] = "codigo_programa";
$proto10["m_srcTableName"] = "tbl_programa_vinculacion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "tbl_programa_vinculacion",
	"m_srcTableName" => "tbl_programa_vinculacion"
));

$proto12["m_sql"] = "descripcion";
$proto12["m_srcTableName"] = "tbl_programa_vinculacion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dominios_academicos",
	"m_strTable" => "tbl_programa_vinculacion",
	"m_srcTableName" => "tbl_programa_vinculacion"
));

$proto14["m_sql"] = "dominios_academicos";
$proto14["m_srcTableName"] = "tbl_programa_vinculacion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "plan_nacional",
	"m_strTable" => "tbl_programa_vinculacion",
	"m_srcTableName" => "tbl_programa_vinculacion"
));

$proto16["m_sql"] = "plan_nacional";
$proto16["m_srcTableName"] = "tbl_programa_vinculacion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "politicas_vinculacion",
	"m_strTable" => "tbl_programa_vinculacion",
	"m_srcTableName" => "tbl_programa_vinculacion"
));

$proto18["m_sql"] = "politicas_vinculacion";
$proto18["m_srcTableName"] = "tbl_programa_vinculacion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id_linea_investigacion",
	"m_strTable" => "tbl_programa_vinculacion",
	"m_srcTableName" => "tbl_programa_vinculacion"
));

$proto20["m_sql"] = "id_linea_investigacion";
$proto20["m_srcTableName"] = "tbl_programa_vinculacion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "id_carrera",
	"m_strTable" => "tbl_programa_vinculacion",
	"m_srcTableName" => "tbl_programa_vinculacion"
));

$proto22["m_sql"] = "id_carrera";
$proto22["m_srcTableName"] = "tbl_programa_vinculacion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "tbl_programa_vinculacion";
$proto25["m_srcTableName"] = "tbl_programa_vinculacion";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id_programa_vinculacion";
$proto25["m_columns"][] = "programa_vinculacion";
$proto25["m_columns"][] = "codigo_programa";
$proto25["m_columns"][] = "descripcion";
$proto25["m_columns"][] = "dominios_academicos";
$proto25["m_columns"][] = "plan_nacional";
$proto25["m_columns"][] = "politicas_vinculacion";
$proto25["m_columns"][] = "id_linea_investigacion";
$proto25["m_columns"][] = "id_carrera";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "tbl_programa_vinculacion";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "tbl_programa_vinculacion";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_programa_vinculacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_programa_vinculacion = createSqlQuery_tbl_programa_vinculacion();


	
		;

									

$tdatatbl_programa_vinculacion[".sqlquery"] = $queryData_tbl_programa_vinculacion;

$tableEvents["tbl_programa_vinculacion"] = new eventsBase;
$tdatatbl_programa_vinculacion[".hasEvents"] = false;

?>
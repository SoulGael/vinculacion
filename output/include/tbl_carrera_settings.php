<?php




$tdatatbl_carrera = array();
$tdatatbl_carrera[".searchableFields"] = array();
	$tdatatbl_carrera[".truncateText"] = true;
	$tdatatbl_carrera[".NumberOfChars"] = 80;
	$tdatatbl_carrera[".ShortName"] = "tbl_carrera";
	$tdatatbl_carrera[".OwnerID"] = "";
	$tdatatbl_carrera[".OriginalTable"] = "tbl_carrera";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatbl_carrera[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_carrera[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstbl_carrera = array();
$fieldToolTipstbl_carrera = array();
$pageTitlestbl_carrera = array();
$placeHolderstbl_carrera = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstbl_carrera["Spanish"] = array();
	$fieldToolTipstbl_carrera["Spanish"] = array();
	$placeHolderstbl_carrera["Spanish"] = array();
	$pageTitlestbl_carrera["Spanish"] = array();
	$fieldLabelstbl_carrera["Spanish"]["id_carrera"] = "Id Carrera";
	$fieldToolTipstbl_carrera["Spanish"]["id_carrera"] = "";
	$placeHolderstbl_carrera["Spanish"]["id_carrera"] = "";
	$fieldLabelstbl_carrera["Spanish"]["carrera"] = "Carrera";
	$fieldToolTipstbl_carrera["Spanish"]["carrera"] = "";
	$placeHolderstbl_carrera["Spanish"]["carrera"] = "";
	$fieldLabelstbl_carrera["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipstbl_carrera["Spanish"]["codigo"] = "";
	$placeHolderstbl_carrera["Spanish"]["codigo"] = "";
	$fieldLabelstbl_carrera["Spanish"]["estado"] = "Estado";
	$fieldToolTipstbl_carrera["Spanish"]["estado"] = "";
	$placeHolderstbl_carrera["Spanish"]["estado"] = "";
	$fieldLabelstbl_carrera["Spanish"]["id_facultad"] = "Facultad";
	$fieldToolTipstbl_carrera["Spanish"]["id_facultad"] = "";
	$placeHolderstbl_carrera["Spanish"]["id_facultad"] = "";
	$fieldLabelstbl_carrera["Spanish"]["id_modalidad"] = "Modalidad";
	$fieldToolTipstbl_carrera["Spanish"]["id_modalidad"] = "";
	$placeHolderstbl_carrera["Spanish"]["id_modalidad"] = "";
	$fieldLabelstbl_carrera["Spanish"]["id_extension"] = "Extension";
	$fieldToolTipstbl_carrera["Spanish"]["id_extension"] = "";
	$placeHolderstbl_carrera["Spanish"]["id_extension"] = "";
	if (count($fieldToolTipstbl_carrera["Spanish"]))
		$tdatatbl_carrera[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_carrera["English"] = array();
	$fieldToolTipstbl_carrera["English"] = array();
	$placeHolderstbl_carrera["English"] = array();
	$pageTitlestbl_carrera["English"] = array();
	if (count($fieldToolTipstbl_carrera["English"]))
		$tdatatbl_carrera[".isUseToolTips"] = true;
}


	$tdatatbl_carrera[".NCSearch"] = true;



$tdatatbl_carrera[".shortTableName"] = "tbl_carrera";
$tdatatbl_carrera[".nSecOptions"] = 0;

$tdatatbl_carrera[".mainTableOwnerID"] = "";
$tdatatbl_carrera[".entityType"] = 0;

$tdatatbl_carrera[".strOriginalTableName"] = "tbl_carrera";

	



$tdatatbl_carrera[".showAddInPopup"] = false;

$tdatatbl_carrera[".showEditInPopup"] = false;

$tdatatbl_carrera[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_carrera[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_carrera[".listAjax"] = false;
//	temporary
$tdatatbl_carrera[".listAjax"] = false;

	$tdatatbl_carrera[".audit"] = false;

	$tdatatbl_carrera[".locking"] = false;


$pages = $tdatatbl_carrera[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_carrera[".edit"] = true;
	$tdatatbl_carrera[".afterEditAction"] = 1;
	$tdatatbl_carrera[".closePopupAfterEdit"] = 1;
	$tdatatbl_carrera[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_carrera[".add"] = true;
$tdatatbl_carrera[".afterAddAction"] = 1;
$tdatatbl_carrera[".closePopupAfterAdd"] = 1;
$tdatatbl_carrera[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_carrera[".list"] = true;
}



$tdatatbl_carrera[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_carrera[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_carrera[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_carrera[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_carrera[".printFriendly"] = true;
}



$tdatatbl_carrera[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_carrera[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_carrera[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_carrera[".isUseAjaxSuggest"] = true;

$tdatatbl_carrera[".rowHighlite"] = true;



									
$tdatatbl_carrera[".flexibleSearch"] = true;


$tdatatbl_carrera[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_carrera[".buttonsAdded"] = false;

$tdatatbl_carrera[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_carrera[".isUseTimeForSearch"] = false;


$tdatatbl_carrera[".badgeColor"] = "B22222";


$tdatatbl_carrera[".allSearchFields"] = array();
$tdatatbl_carrera[".filterFields"] = array();
$tdatatbl_carrera[".requiredSearchFields"] = array();

$tdatatbl_carrera[".googleLikeFields"] = array();
$tdatatbl_carrera[".googleLikeFields"][] = "id_carrera";
$tdatatbl_carrera[".googleLikeFields"][] = "carrera";
$tdatatbl_carrera[".googleLikeFields"][] = "codigo";
$tdatatbl_carrera[".googleLikeFields"][] = "estado";
$tdatatbl_carrera[".googleLikeFields"][] = "id_facultad";
$tdatatbl_carrera[".googleLikeFields"][] = "id_extension";
$tdatatbl_carrera[".googleLikeFields"][] = "id_modalidad";



$tdatatbl_carrera[".tableType"] = "list";

$tdatatbl_carrera[".printerPageOrientation"] = 0;
$tdatatbl_carrera[".nPrinterPageScale"] = 100;

$tdatatbl_carrera[".nPrinterSplitRecords"] = 40;

$tdatatbl_carrera[".nPrinterPDFSplitRecords"] = 40;


$tdatatbl_carrera[".geocodingEnabled"] = false;










$tdatatbl_carrera[".pageSize"] = 20;

$tdatatbl_carrera[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY tbl_facultad.id_extension, tbl_carrera.id_facultad, tbl_carrera.carrera";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_carrera[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_carrera[".orderindexes"] = array();
	$tdatatbl_carrera[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "tbl_facultad.id_extension");

	$tdatatbl_carrera[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "tbl_carrera.id_facultad");

	$tdatatbl_carrera[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "tbl_carrera.carrera");


$tdatatbl_carrera[".sqlHead"] = "SELECT tbl_carrera.id_carrera,  tbl_carrera.carrera,  tbl_carrera.codigo,  tbl_carrera.estado,  tbl_carrera.id_facultad,  tbl_facultad.id_extension,  tbl_carrera.id_modalidad";
$tdatatbl_carrera[".sqlFrom"] = "FROM tbl_carrera  INNER JOIN tbl_facultad ON tbl_carrera.id_facultad = tbl_facultad.id_facultad";
$tdatatbl_carrera[".sqlWhereExpr"] = "";
$tdatatbl_carrera[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_carrera[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_carrera[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_carrera[".highlightSearchResults"] = true;

$tableKeystbl_carrera = array();
$tableKeystbl_carrera[] = "id_carrera";
$tdatatbl_carrera[".Keys"] = $tableKeystbl_carrera;


$tdatatbl_carrera[".hideMobileList"] = array();




//	id_carrera
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_carrera";
	$fdata["GoodName"] = "id_carrera";
	$fdata["ownerTable"] = "tbl_carrera";
	$fdata["Label"] = GetFieldLabel("tbl_carrera","id_carrera");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_carrera";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_carrera.id_carrera";

	
	
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


	$tdatatbl_carrera["id_carrera"] = $fdata;
		$tdatatbl_carrera[".searchableFields"][] = "id_carrera";
//	carrera
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "carrera";
	$fdata["GoodName"] = "carrera";
	$fdata["ownerTable"] = "tbl_carrera";
	$fdata["Label"] = GetFieldLabel("tbl_carrera","carrera");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "carrera";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_carrera.carrera";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatatbl_carrera["carrera"] = $fdata;
		$tdatatbl_carrera[".searchableFields"][] = "carrera";
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "tbl_carrera";
	$fdata["Label"] = GetFieldLabel("tbl_carrera","codigo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "codigo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_carrera.codigo";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatatbl_carrera["codigo"] = $fdata;
		$tdatatbl_carrera[".searchableFields"][] = "codigo";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tbl_carrera";
	$fdata["Label"] = GetFieldLabel("tbl_carrera","estado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_carrera.estado";

	
	
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


	$tdatatbl_carrera["estado"] = $fdata;
		$tdatatbl_carrera[".searchableFields"][] = "estado";
//	id_facultad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_facultad";
	$fdata["GoodName"] = "id_facultad";
	$fdata["ownerTable"] = "tbl_carrera";
	$fdata["Label"] = GetFieldLabel("tbl_carrera","id_facultad");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_facultad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_carrera.id_facultad";

	
	
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
	$edata["LookupTable"] = "tbl_facultad";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_facultad";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "facultad";

				$edata["LookupWhere"] = "tbl_facultad.estado='Activo'";


	
	$edata["LookupOrderBy"] = "facultad";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_extension", "lookup" => "id_extension" );

		$edata["AllowToAdd"] = true;

	

	
	
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


	$tdatatbl_carrera["id_facultad"] = $fdata;
		$tdatatbl_carrera[".searchableFields"][] = "id_facultad";
//	id_extension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id_extension";
	$fdata["GoodName"] = "id_extension";
	$fdata["ownerTable"] = "tbl_facultad";
	$fdata["Label"] = GetFieldLabel("tbl_carrera","id_extension");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_extension";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_facultad.id_extension";

	
	
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
	$edata["LookupTable"] = "tbl_extension";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_extension";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "extension";

				$edata["LookupWhere"] = "tbl_extension.estado='Activo'";


	
	$edata["LookupOrderBy"] = "extension";

	
	
		$edata["AllowToAdd"] = true;

	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_facultad";

	
	
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


	$tdatatbl_carrera["id_extension"] = $fdata;
		$tdatatbl_carrera[".searchableFields"][] = "id_extension";
//	id_modalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_modalidad";
	$fdata["GoodName"] = "id_modalidad";
	$fdata["ownerTable"] = "tbl_carrera";
	$fdata["Label"] = GetFieldLabel("tbl_carrera","id_modalidad");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "id_modalidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_carrera.id_modalidad";

	
	
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
	$edata["LookupTable"] = "tbl_modalidad";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id_modalidad";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "modalidad";

				$edata["LookupWhere"] = "tbl_modalidad.estado='Activo'";


	
	$edata["LookupOrderBy"] = "modalidad";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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


	$tdatatbl_carrera["id_modalidad"] = $fdata;
		$tdatatbl_carrera[".searchableFields"][] = "id_modalidad";


$tables_data["tbl_carrera"]=&$tdatatbl_carrera;
$field_labels["tbl_carrera"] = &$fieldLabelstbl_carrera;
$fieldToolTips["tbl_carrera"] = &$fieldToolTipstbl_carrera;
$placeHolders["tbl_carrera"] = &$placeHolderstbl_carrera;
$page_titles["tbl_carrera"] = &$pageTitlestbl_carrera;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_carrera"] = array();
//	tbl_persona
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_persona";
		$detailsParam["dOriginalTable"] = "tbl_persona";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_persona";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_persona");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_carrera"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_carrera"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_carrera"][$dIndex]["masterKeys"][]="id_carrera";

				$detailsTablesData["tbl_carrera"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_carrera"][$dIndex]["detailKeys"][]="id_carrera";
//	tbl_linea_investigacion
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_linea_investigacion";
		$detailsParam["dOriginalTable"] = "tbl_linea_investigacion";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_linea_investigacion";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_linea_investigacion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_carrera"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_carrera"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_carrera"][$dIndex]["masterKeys"][]="id_carrera";

				$detailsTablesData["tbl_carrera"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_carrera"][$dIndex]["detailKeys"][]="id_carrera";
//	tbl_programa_vinculacion
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_programa_vinculacion";
		$detailsParam["dOriginalTable"] = "tbl_programa_vinculacion";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_programa_vinculacion";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_programa_vinculacion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_carrera"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_carrera"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_carrera"][$dIndex]["masterKeys"][]="id_carrera";

				$detailsTablesData["tbl_carrera"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_carrera"][$dIndex]["detailKeys"][]="id_carrera";
//	tbl_proyecto_vinculacion
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_proyecto_vinculacion";
		$detailsParam["dOriginalTable"] = "tbl_proyecto_vinculacion";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_proyecto_vinculacion";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_proyecto_vinculacion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_carrera"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_carrera"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_carrera"][$dIndex]["masterKeys"][]="id_carrera";

				$detailsTablesData["tbl_carrera"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_carrera"][$dIndex]["detailKeys"][]="id_carrera";

// tables which are master tables for current table (detail)
$masterTablesData["tbl_carrera"] = array();



	
				$strOriginalDetailsTable="tbl_facultad";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_facultad";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_facultad";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_carrera"][0] = $masterParams;
				$masterTablesData["tbl_carrera"][0]["masterKeys"] = array();
	$masterTablesData["tbl_carrera"][0]["masterKeys"][]="id_facultad";
				$masterTablesData["tbl_carrera"][0]["detailKeys"] = array();
	$masterTablesData["tbl_carrera"][0]["detailKeys"][]="id_facultad";
		
	
				$strOriginalDetailsTable="tbl_modalidad";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_modalidad";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_modalidad";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_carrera"][1] = $masterParams;
				$masterTablesData["tbl_carrera"][1]["masterKeys"] = array();
	$masterTablesData["tbl_carrera"][1]["masterKeys"][]="id_modalidad";
				$masterTablesData["tbl_carrera"][1]["detailKeys"] = array();
	$masterTablesData["tbl_carrera"][1]["detailKeys"][]="id_modalidad";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_carrera()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tbl_carrera.id_carrera,  tbl_carrera.carrera,  tbl_carrera.codigo,  tbl_carrera.estado,  tbl_carrera.id_facultad,  tbl_facultad.id_extension,  tbl_carrera.id_modalidad";
$proto0["m_strFrom"] = "FROM tbl_carrera  INNER JOIN tbl_facultad ON tbl_carrera.id_facultad = tbl_facultad.id_facultad";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY tbl_facultad.id_extension, tbl_carrera.id_facultad, tbl_carrera.carrera";
	
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
	"m_strName" => "id_carrera",
	"m_strTable" => "tbl_carrera",
	"m_srcTableName" => "tbl_carrera"
));

$proto6["m_sql"] = "tbl_carrera.id_carrera";
$proto6["m_srcTableName"] = "tbl_carrera";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "carrera",
	"m_strTable" => "tbl_carrera",
	"m_srcTableName" => "tbl_carrera"
));

$proto8["m_sql"] = "tbl_carrera.carrera";
$proto8["m_srcTableName"] = "tbl_carrera";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "tbl_carrera",
	"m_srcTableName" => "tbl_carrera"
));

$proto10["m_sql"] = "tbl_carrera.codigo";
$proto10["m_srcTableName"] = "tbl_carrera";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tbl_carrera",
	"m_srcTableName" => "tbl_carrera"
));

$proto12["m_sql"] = "tbl_carrera.estado";
$proto12["m_srcTableName"] = "tbl_carrera";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_facultad",
	"m_strTable" => "tbl_carrera",
	"m_srcTableName" => "tbl_carrera"
));

$proto14["m_sql"] = "tbl_carrera.id_facultad";
$proto14["m_srcTableName"] = "tbl_carrera";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id_extension",
	"m_strTable" => "tbl_facultad",
	"m_srcTableName" => "tbl_carrera"
));

$proto16["m_sql"] = "tbl_facultad.id_extension";
$proto16["m_srcTableName"] = "tbl_carrera";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_modalidad",
	"m_strTable" => "tbl_carrera",
	"m_srcTableName" => "tbl_carrera"
));

$proto18["m_sql"] = "tbl_carrera.id_modalidad";
$proto18["m_srcTableName"] = "tbl_carrera";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tbl_carrera";
$proto21["m_srcTableName"] = "tbl_carrera";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_carrera";
$proto21["m_columns"][] = "carrera";
$proto21["m_columns"][] = "codigo";
$proto21["m_columns"][] = "estado";
$proto21["m_columns"][] = "id_facultad";
$proto21["m_columns"][] = "id_modalidad";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "tbl_carrera";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tbl_carrera";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_INNERJOIN";
			$proto25=array();
$proto25["m_strName"] = "tbl_facultad";
$proto25["m_srcTableName"] = "tbl_carrera";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id_facultad";
$proto25["m_columns"][] = "facultad";
$proto25["m_columns"][] = "estado";
$proto25["m_columns"][] = "id_extension";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "INNER JOIN tbl_facultad ON tbl_carrera.id_facultad = tbl_facultad.id_facultad";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "tbl_carrera";
$proto26=array();
$proto26["m_sql"] = "tbl_carrera.id_facultad = tbl_facultad.id_facultad";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_facultad",
	"m_strTable" => "tbl_carrera",
	"m_srcTableName" => "tbl_carrera"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= tbl_facultad.id_facultad";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "id_extension",
	"m_strTable" => "tbl_facultad",
	"m_srcTableName" => "tbl_carrera"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 1;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "id_facultad",
	"m_strTable" => "tbl_carrera",
	"m_srcTableName" => "tbl_carrera"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 1;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "carrera",
	"m_strTable" => "tbl_carrera",
	"m_srcTableName" => "tbl_carrera"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 1;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_carrera";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_carrera = createSqlQuery_tbl_carrera();


	
		;

							

$tdatatbl_carrera[".sqlquery"] = $queryData_tbl_carrera;

include_once(getabspath("include/tbl_carrera_events.php"));
$tableEvents["tbl_carrera"] = new eventclass_tbl_carrera;
$tdatatbl_carrera[".hasEvents"] = true;

?>
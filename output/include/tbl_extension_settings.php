<?php




$tdatatbl_extension = array();
$tdatatbl_extension[".searchableFields"] = array();
	$tdatatbl_extension[".truncateText"] = true;
	$tdatatbl_extension[".NumberOfChars"] = 80;
	$tdatatbl_extension[".ShortName"] = "tbl_extension";
	$tdatatbl_extension[".OwnerID"] = "";
	$tdatatbl_extension[".OriginalTable"] = "tbl_extension";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatbl_extension[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_extension[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstbl_extension = array();
$fieldToolTipstbl_extension = array();
$pageTitlestbl_extension = array();
$placeHolderstbl_extension = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstbl_extension["Spanish"] = array();
	$fieldToolTipstbl_extension["Spanish"] = array();
	$placeHolderstbl_extension["Spanish"] = array();
	$pageTitlestbl_extension["Spanish"] = array();
	$fieldLabelstbl_extension["Spanish"]["id_extension"] = "Id Extension";
	$fieldToolTipstbl_extension["Spanish"]["id_extension"] = "";
	$placeHolderstbl_extension["Spanish"]["id_extension"] = "";
	$fieldLabelstbl_extension["Spanish"]["extension"] = "Extension";
	$fieldToolTipstbl_extension["Spanish"]["extension"] = "";
	$placeHolderstbl_extension["Spanish"]["extension"] = "";
	$fieldLabelstbl_extension["Spanish"]["estado"] = "Estado";
	$fieldToolTipstbl_extension["Spanish"]["estado"] = "";
	$placeHolderstbl_extension["Spanish"]["estado"] = "";
	$fieldLabelstbl_extension["Spanish"]["codigo_u"] = "Codigo U";
	$fieldToolTipstbl_extension["Spanish"]["codigo_u"] = "";
	$placeHolderstbl_extension["Spanish"]["codigo_u"] = "";
	$fieldLabelstbl_extension["Spanish"]["id_ciudad"] = "Ciudad";
	$fieldToolTipstbl_extension["Spanish"]["id_ciudad"] = "";
	$placeHolderstbl_extension["Spanish"]["id_ciudad"] = "";
	$fieldLabelstbl_extension["Spanish"]["ciudad"] = "Ciudades";
	$fieldToolTipstbl_extension["Spanish"]["ciudad"] = "";
	$placeHolderstbl_extension["Spanish"]["ciudad"] = "";
	$fieldLabelstbl_extension["Spanish"]["id_provincia"] = "Provincia";
	$fieldToolTipstbl_extension["Spanish"]["id_provincia"] = "";
	$placeHolderstbl_extension["Spanish"]["id_provincia"] = "";
	$fieldLabelstbl_extension["Spanish"]["provincia"] = "Provincias";
	$fieldToolTipstbl_extension["Spanish"]["provincia"] = "";
	$placeHolderstbl_extension["Spanish"]["provincia"] = "";
	if (count($fieldToolTipstbl_extension["Spanish"]))
		$tdatatbl_extension[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_extension["English"] = array();
	$fieldToolTipstbl_extension["English"] = array();
	$placeHolderstbl_extension["English"] = array();
	$pageTitlestbl_extension["English"] = array();
	$fieldLabelstbl_extension["English"]["id_provincia"] = "Id Provincia";
	$fieldToolTipstbl_extension["English"]["id_provincia"] = "";
	$placeHolderstbl_extension["English"]["id_provincia"] = "";
	$fieldLabelstbl_extension["English"]["provincia"] = "Provincia";
	$fieldToolTipstbl_extension["English"]["provincia"] = "";
	$placeHolderstbl_extension["English"]["provincia"] = "";
	if (count($fieldToolTipstbl_extension["English"]))
		$tdatatbl_extension[".isUseToolTips"] = true;
}


	$tdatatbl_extension[".NCSearch"] = true;



$tdatatbl_extension[".shortTableName"] = "tbl_extension";
$tdatatbl_extension[".nSecOptions"] = 0;

$tdatatbl_extension[".mainTableOwnerID"] = "";
$tdatatbl_extension[".entityType"] = 0;

$tdatatbl_extension[".strOriginalTableName"] = "tbl_extension";

	



$tdatatbl_extension[".showAddInPopup"] = false;

$tdatatbl_extension[".showEditInPopup"] = false;

$tdatatbl_extension[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_extension[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_extension[".listAjax"] = false;
//	temporary
$tdatatbl_extension[".listAjax"] = false;

	$tdatatbl_extension[".audit"] = false;

	$tdatatbl_extension[".locking"] = false;


$pages = $tdatatbl_extension[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_extension[".edit"] = true;
	$tdatatbl_extension[".afterEditAction"] = 1;
	$tdatatbl_extension[".closePopupAfterEdit"] = 1;
	$tdatatbl_extension[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_extension[".add"] = true;
$tdatatbl_extension[".afterAddAction"] = 1;
$tdatatbl_extension[".closePopupAfterAdd"] = 1;
$tdatatbl_extension[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_extension[".list"] = true;
}



$tdatatbl_extension[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_extension[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_extension[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_extension[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_extension[".printFriendly"] = true;
}



$tdatatbl_extension[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_extension[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_extension[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_extension[".isUseAjaxSuggest"] = true;

$tdatatbl_extension[".rowHighlite"] = true;



						
$tdatatbl_extension[".flexibleSearch"] = true;


$tdatatbl_extension[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_extension[".buttonsAdded"] = false;

$tdatatbl_extension[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_extension[".isUseTimeForSearch"] = false;


$tdatatbl_extension[".badgeColor"] = "9ACD32";


$tdatatbl_extension[".allSearchFields"] = array();
$tdatatbl_extension[".filterFields"] = array();
$tdatatbl_extension[".requiredSearchFields"] = array();

$tdatatbl_extension[".googleLikeFields"] = array();
$tdatatbl_extension[".googleLikeFields"][] = "id_extension";
$tdatatbl_extension[".googleLikeFields"][] = "extension";
$tdatatbl_extension[".googleLikeFields"][] = "estado";
$tdatatbl_extension[".googleLikeFields"][] = "codigo_u";
$tdatatbl_extension[".googleLikeFields"][] = "id_ciudad";
$tdatatbl_extension[".googleLikeFields"][] = "ciudad";
$tdatatbl_extension[".googleLikeFields"][] = "id_provincia";
$tdatatbl_extension[".googleLikeFields"][] = "provincia";



$tdatatbl_extension[".tableType"] = "list";

$tdatatbl_extension[".printerPageOrientation"] = 0;
$tdatatbl_extension[".nPrinterPageScale"] = 100;

$tdatatbl_extension[".nPrinterSplitRecords"] = 40;

$tdatatbl_extension[".nPrinterPDFSplitRecords"] = 40;


$tdatatbl_extension[".geocodingEnabled"] = false;










$tdatatbl_extension[".pageSize"] = 20;

$tdatatbl_extension[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY tbl_provincia.provincia, tbl_ciudad.ciudad, tbl_extension.extension";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_extension[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_extension[".orderindexes"] = array();
	$tdatatbl_extension[".orderindexes"][] = array(8, (1 ? "ASC" : "DESC"), "tbl_provincia.provincia");

	$tdatatbl_extension[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "tbl_ciudad.ciudad");

	$tdatatbl_extension[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "tbl_extension.extension");


$tdatatbl_extension[".sqlHead"] = "SELECT tbl_extension.id_extension,  tbl_extension.extension,  tbl_extension.estado,  tbl_extension.codigo_u,  tbl_extension.id_ciudad,  tbl_ciudad.ciudad,  tbl_ciudad.id_provincia,  tbl_provincia.provincia";
$tdatatbl_extension[".sqlFrom"] = "FROM tbl_extension  INNER JOIN tbl_ciudad ON tbl_extension.id_ciudad = tbl_ciudad.id_ciudad  INNER JOIN tbl_provincia ON tbl_ciudad.id_provincia = tbl_provincia.id_provincia";
$tdatatbl_extension[".sqlWhereExpr"] = "";
$tdatatbl_extension[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_extension[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_extension[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_extension[".highlightSearchResults"] = true;

$tableKeystbl_extension = array();
$tableKeystbl_extension[] = "id_extension";
$tdatatbl_extension[".Keys"] = $tableKeystbl_extension;


$tdatatbl_extension[".hideMobileList"] = array();




//	id_extension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_extension";
	$fdata["GoodName"] = "id_extension";
	$fdata["ownerTable"] = "tbl_extension";
	$fdata["Label"] = GetFieldLabel("tbl_extension","id_extension");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_extension";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_extension.id_extension";

	
	
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


	$tdatatbl_extension["id_extension"] = $fdata;
		$tdatatbl_extension[".searchableFields"][] = "id_extension";
//	extension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "extension";
	$fdata["GoodName"] = "extension";
	$fdata["ownerTable"] = "tbl_extension";
	$fdata["Label"] = GetFieldLabel("tbl_extension","extension");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "extension";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_extension.extension";

	
	
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
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "El nombre de extensión %value% ya existe", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatatbl_extension["extension"] = $fdata;
		$tdatatbl_extension[".searchableFields"][] = "extension";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tbl_extension";
	$fdata["Label"] = GetFieldLabel("tbl_extension","estado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_extension.estado";

	
	
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


	$tdatatbl_extension["estado"] = $fdata;
		$tdatatbl_extension[".searchableFields"][] = "estado";
//	codigo_u
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "codigo_u";
	$fdata["GoodName"] = "codigo_u";
	$fdata["ownerTable"] = "tbl_extension";
	$fdata["Label"] = GetFieldLabel("tbl_extension","codigo_u");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "codigo_u";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_extension.codigo_u";

	
	
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
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "El codigo %value% ya existe", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatatbl_extension["codigo_u"] = $fdata;
		$tdatatbl_extension[".searchableFields"][] = "codigo_u";
//	id_ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_ciudad";
	$fdata["GoodName"] = "id_ciudad";
	$fdata["ownerTable"] = "tbl_extension";
	$fdata["Label"] = GetFieldLabel("tbl_extension","id_ciudad");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_ciudad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_extension.id_ciudad";

	
	
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
	$edata["LookupTable"] = "tbl_ciudad";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_ciudad";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ciudad";

				$edata["LookupWhere"] = "tbl_ciudad.estado='Activo'";


	
	$edata["LookupOrderBy"] = "ciudad";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_provincia", "lookup" => "id_provincia" );

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


	$tdatatbl_extension["id_ciudad"] = $fdata;
		$tdatatbl_extension[".searchableFields"][] = "id_ciudad";
//	ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ciudad";
	$fdata["GoodName"] = "ciudad";
	$fdata["ownerTable"] = "tbl_ciudad";
	$fdata["Label"] = GetFieldLabel("tbl_extension","ciudad");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ciudad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_ciudad.ciudad";

	
	
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


	$tdatatbl_extension["ciudad"] = $fdata;
		$tdatatbl_extension[".searchableFields"][] = "ciudad";
//	id_provincia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_provincia";
	$fdata["GoodName"] = "id_provincia";
	$fdata["ownerTable"] = "tbl_ciudad";
	$fdata["Label"] = GetFieldLabel("tbl_extension","id_provincia");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_provincia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_ciudad.id_provincia";

	
	
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
	$edata["LookupTable"] = "tbl_provincia";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_provincia";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "provincia";

				$edata["LookupWhere"] = "tbl_provincia.estado='Activo'";


	
	$edata["LookupOrderBy"] = "provincia";

	
	
		$edata["AllowToAdd"] = true;

	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_ciudad";

	
	
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


	$tdatatbl_extension["id_provincia"] = $fdata;
		$tdatatbl_extension[".searchableFields"][] = "id_provincia";
//	provincia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "provincia";
	$fdata["GoodName"] = "provincia";
	$fdata["ownerTable"] = "tbl_provincia";
	$fdata["Label"] = GetFieldLabel("tbl_extension","provincia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "provincia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_provincia.provincia";

	
	
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


	$tdatatbl_extension["provincia"] = $fdata;
		$tdatatbl_extension[".searchableFields"][] = "provincia";


$tables_data["tbl_extension"]=&$tdatatbl_extension;
$field_labels["tbl_extension"] = &$fieldLabelstbl_extension;
$fieldToolTips["tbl_extension"] = &$fieldToolTipstbl_extension;
$placeHolders["tbl_extension"] = &$placeHolderstbl_extension;
$page_titles["tbl_extension"] = &$pageTitlestbl_extension;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_extension"] = array();
//	tbl_facultad
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_facultad";
		$detailsParam["dOriginalTable"] = "tbl_facultad";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_facultad";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_facultad");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_extension"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_extension"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_extension"][$dIndex]["masterKeys"][]="id_extension";

				$detailsTablesData["tbl_extension"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_extension"][$dIndex]["detailKeys"][]="id_extension";

// tables which are master tables for current table (detail)
$masterTablesData["tbl_extension"] = array();



	
				$strOriginalDetailsTable="tbl_ciudad";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_ciudad";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_ciudad";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_extension"][0] = $masterParams;
				$masterTablesData["tbl_extension"][0]["masterKeys"] = array();
	$masterTablesData["tbl_extension"][0]["masterKeys"][]="id_ciudad";
				$masterTablesData["tbl_extension"][0]["detailKeys"] = array();
	$masterTablesData["tbl_extension"][0]["detailKeys"][]="id_ciudad";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_extension()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tbl_extension.id_extension,  tbl_extension.extension,  tbl_extension.estado,  tbl_extension.codigo_u,  tbl_extension.id_ciudad,  tbl_ciudad.ciudad,  tbl_ciudad.id_provincia,  tbl_provincia.provincia";
$proto0["m_strFrom"] = "FROM tbl_extension  INNER JOIN tbl_ciudad ON tbl_extension.id_ciudad = tbl_ciudad.id_ciudad  INNER JOIN tbl_provincia ON tbl_ciudad.id_provincia = tbl_provincia.id_provincia";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY tbl_provincia.provincia, tbl_ciudad.ciudad, tbl_extension.extension";
	
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
	"m_strName" => "id_extension",
	"m_strTable" => "tbl_extension",
	"m_srcTableName" => "tbl_extension"
));

$proto6["m_sql"] = "tbl_extension.id_extension";
$proto6["m_srcTableName"] = "tbl_extension";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "extension",
	"m_strTable" => "tbl_extension",
	"m_srcTableName" => "tbl_extension"
));

$proto8["m_sql"] = "tbl_extension.extension";
$proto8["m_srcTableName"] = "tbl_extension";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tbl_extension",
	"m_srcTableName" => "tbl_extension"
));

$proto10["m_sql"] = "tbl_extension.estado";
$proto10["m_srcTableName"] = "tbl_extension";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_u",
	"m_strTable" => "tbl_extension",
	"m_srcTableName" => "tbl_extension"
));

$proto12["m_sql"] = "tbl_extension.codigo_u";
$proto12["m_srcTableName"] = "tbl_extension";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_ciudad",
	"m_strTable" => "tbl_extension",
	"m_srcTableName" => "tbl_extension"
));

$proto14["m_sql"] = "tbl_extension.id_ciudad";
$proto14["m_srcTableName"] = "tbl_extension";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ciudad",
	"m_strTable" => "tbl_ciudad",
	"m_srcTableName" => "tbl_extension"
));

$proto16["m_sql"] = "tbl_ciudad.ciudad";
$proto16["m_srcTableName"] = "tbl_extension";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_provincia",
	"m_strTable" => "tbl_ciudad",
	"m_srcTableName" => "tbl_extension"
));

$proto18["m_sql"] = "tbl_ciudad.id_provincia";
$proto18["m_srcTableName"] = "tbl_extension";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "provincia",
	"m_strTable" => "tbl_provincia",
	"m_srcTableName" => "tbl_extension"
));

$proto20["m_sql"] = "tbl_provincia.provincia";
$proto20["m_srcTableName"] = "tbl_extension";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "tbl_extension";
$proto23["m_srcTableName"] = "tbl_extension";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id_extension";
$proto23["m_columns"][] = "extension";
$proto23["m_columns"][] = "estado";
$proto23["m_columns"][] = "codigo_u";
$proto23["m_columns"][] = "id_ciudad";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "tbl_extension";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "tbl_extension";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
												$proto26=array();
$proto26["m_link"] = "SQLL_INNERJOIN";
			$proto27=array();
$proto27["m_strName"] = "tbl_ciudad";
$proto27["m_srcTableName"] = "tbl_extension";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id_ciudad";
$proto27["m_columns"][] = "ciudad";
$proto27["m_columns"][] = "estado";
$proto27["m_columns"][] = "id_provincia";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "INNER JOIN tbl_ciudad ON tbl_extension.id_ciudad = tbl_ciudad.id_ciudad";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "tbl_extension";
$proto28=array();
$proto28["m_sql"] = "tbl_extension.id_ciudad = tbl_ciudad.id_ciudad";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_ciudad",
	"m_strTable" => "tbl_extension",
	"m_srcTableName" => "tbl_extension"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= tbl_ciudad.id_ciudad";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_INNERJOIN";
			$proto31=array();
$proto31["m_strName"] = "tbl_provincia";
$proto31["m_srcTableName"] = "tbl_extension";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id_provincia";
$proto31["m_columns"][] = "provincia";
$proto31["m_columns"][] = "estado";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "INNER JOIN tbl_provincia ON tbl_ciudad.id_provincia = tbl_provincia.id_provincia";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "tbl_extension";
$proto32=array();
$proto32["m_sql"] = "tbl_ciudad.id_provincia = tbl_provincia.id_provincia";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_provincia",
	"m_strTable" => "tbl_ciudad",
	"m_srcTableName" => "tbl_extension"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= tbl_provincia.id_provincia";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "provincia",
	"m_strTable" => "tbl_provincia",
	"m_srcTableName" => "tbl_extension"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 1;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "ciudad",
	"m_strTable" => "tbl_ciudad",
	"m_srcTableName" => "tbl_extension"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 1;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "extension",
	"m_strTable" => "tbl_extension",
	"m_srcTableName" => "tbl_extension"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 1;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_extension";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_extension = createSqlQuery_tbl_extension();


	
		;

								

$tdatatbl_extension[".sqlquery"] = $queryData_tbl_extension;

include_once(getabspath("include/tbl_extension_events.php"));
$tableEvents["tbl_extension"] = new eventclass_tbl_extension;
$tdatatbl_extension[".hasEvents"] = true;

?>
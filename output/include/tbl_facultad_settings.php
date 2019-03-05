<?php




$tdatatbl_facultad = array();
$tdatatbl_facultad[".searchableFields"] = array();
	$tdatatbl_facultad[".truncateText"] = true;
	$tdatatbl_facultad[".NumberOfChars"] = 80;
	$tdatatbl_facultad[".ShortName"] = "tbl_facultad";
	$tdatatbl_facultad[".OwnerID"] = "";
	$tdatatbl_facultad[".OriginalTable"] = "tbl_facultad";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatbl_facultad[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_facultad[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstbl_facultad = array();
$fieldToolTipstbl_facultad = array();
$pageTitlestbl_facultad = array();
$placeHolderstbl_facultad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstbl_facultad["Spanish"] = array();
	$fieldToolTipstbl_facultad["Spanish"] = array();
	$placeHolderstbl_facultad["Spanish"] = array();
	$pageTitlestbl_facultad["Spanish"] = array();
	$fieldLabelstbl_facultad["Spanish"]["id_facultad"] = "Id Facultad";
	$fieldToolTipstbl_facultad["Spanish"]["id_facultad"] = "";
	$placeHolderstbl_facultad["Spanish"]["id_facultad"] = "";
	$fieldLabelstbl_facultad["Spanish"]["facultad"] = "Facultad";
	$fieldToolTipstbl_facultad["Spanish"]["facultad"] = "";
	$placeHolderstbl_facultad["Spanish"]["facultad"] = "";
	$fieldLabelstbl_facultad["Spanish"]["estado"] = "Estado";
	$fieldToolTipstbl_facultad["Spanish"]["estado"] = "";
	$placeHolderstbl_facultad["Spanish"]["estado"] = "";
	$fieldLabelstbl_facultad["Spanish"]["id_extension"] = "Extension";
	$fieldToolTipstbl_facultad["Spanish"]["id_extension"] = "";
	$placeHolderstbl_facultad["Spanish"]["id_extension"] = "";
	$fieldLabelstbl_facultad["Spanish"]["extension"] = "Extensiones";
	$fieldToolTipstbl_facultad["Spanish"]["extension"] = "";
	$placeHolderstbl_facultad["Spanish"]["extension"] = "";
	if (count($fieldToolTipstbl_facultad["Spanish"]))
		$tdatatbl_facultad[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_facultad["English"] = array();
	$fieldToolTipstbl_facultad["English"] = array();
	$placeHolderstbl_facultad["English"] = array();
	$pageTitlestbl_facultad["English"] = array();
	if (count($fieldToolTipstbl_facultad["English"]))
		$tdatatbl_facultad[".isUseToolTips"] = true;
}


	$tdatatbl_facultad[".NCSearch"] = true;



$tdatatbl_facultad[".shortTableName"] = "tbl_facultad";
$tdatatbl_facultad[".nSecOptions"] = 0;

$tdatatbl_facultad[".mainTableOwnerID"] = "";
$tdatatbl_facultad[".entityType"] = 0;

$tdatatbl_facultad[".strOriginalTableName"] = "tbl_facultad";

	



$tdatatbl_facultad[".showAddInPopup"] = false;

$tdatatbl_facultad[".showEditInPopup"] = false;

$tdatatbl_facultad[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_facultad[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_facultad[".listAjax"] = false;
//	temporary
$tdatatbl_facultad[".listAjax"] = false;

	$tdatatbl_facultad[".audit"] = false;

	$tdatatbl_facultad[".locking"] = false;


$pages = $tdatatbl_facultad[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_facultad[".edit"] = true;
	$tdatatbl_facultad[".afterEditAction"] = 1;
	$tdatatbl_facultad[".closePopupAfterEdit"] = 1;
	$tdatatbl_facultad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_facultad[".add"] = true;
$tdatatbl_facultad[".afterAddAction"] = 1;
$tdatatbl_facultad[".closePopupAfterAdd"] = 1;
$tdatatbl_facultad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_facultad[".list"] = true;
}



$tdatatbl_facultad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_facultad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_facultad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_facultad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_facultad[".printFriendly"] = true;
}



$tdatatbl_facultad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_facultad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_facultad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_facultad[".isUseAjaxSuggest"] = true;

$tdatatbl_facultad[".rowHighlite"] = true;



						
$tdatatbl_facultad[".flexibleSearch"] = true;


$tdatatbl_facultad[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_facultad[".buttonsAdded"] = false;

$tdatatbl_facultad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_facultad[".isUseTimeForSearch"] = false;


$tdatatbl_facultad[".badgeColor"] = "7B68EE";


$tdatatbl_facultad[".allSearchFields"] = array();
$tdatatbl_facultad[".filterFields"] = array();
$tdatatbl_facultad[".requiredSearchFields"] = array();

$tdatatbl_facultad[".googleLikeFields"] = array();
$tdatatbl_facultad[".googleLikeFields"][] = "id_facultad";
$tdatatbl_facultad[".googleLikeFields"][] = "facultad";
$tdatatbl_facultad[".googleLikeFields"][] = "estado";
$tdatatbl_facultad[".googleLikeFields"][] = "id_extension";
$tdatatbl_facultad[".googleLikeFields"][] = "extension";



$tdatatbl_facultad[".tableType"] = "list";

$tdatatbl_facultad[".printerPageOrientation"] = 0;
$tdatatbl_facultad[".nPrinterPageScale"] = 100;

$tdatatbl_facultad[".nPrinterSplitRecords"] = 40;

$tdatatbl_facultad[".nPrinterPDFSplitRecords"] = 40;


$tdatatbl_facultad[".geocodingEnabled"] = false;










$tdatatbl_facultad[".pageSize"] = 20;

$tdatatbl_facultad[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY tbl_extension.extension, tbl_facultad.facultad";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_facultad[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_facultad[".orderindexes"] = array();
	$tdatatbl_facultad[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "tbl_extension.extension");

	$tdatatbl_facultad[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "tbl_facultad.facultad");


$tdatatbl_facultad[".sqlHead"] = "SELECT tbl_facultad.id_facultad,  tbl_facultad.facultad,  tbl_facultad.estado,  tbl_facultad.id_extension,  tbl_extension.extension";
$tdatatbl_facultad[".sqlFrom"] = "FROM tbl_facultad  INNER JOIN tbl_extension ON tbl_facultad.id_extension = tbl_extension.id_extension";
$tdatatbl_facultad[".sqlWhereExpr"] = "";
$tdatatbl_facultad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_facultad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_facultad[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_facultad[".highlightSearchResults"] = true;

$tableKeystbl_facultad = array();
$tableKeystbl_facultad[] = "id_facultad";
$tdatatbl_facultad[".Keys"] = $tableKeystbl_facultad;


$tdatatbl_facultad[".hideMobileList"] = array();




//	id_facultad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_facultad";
	$fdata["GoodName"] = "id_facultad";
	$fdata["ownerTable"] = "tbl_facultad";
	$fdata["Label"] = GetFieldLabel("tbl_facultad","id_facultad");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_facultad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_facultad.id_facultad";

	
	
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


	$tdatatbl_facultad["id_facultad"] = $fdata;
		$tdatatbl_facultad[".searchableFields"][] = "id_facultad";
//	facultad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "facultad";
	$fdata["GoodName"] = "facultad";
	$fdata["ownerTable"] = "tbl_facultad";
	$fdata["Label"] = GetFieldLabel("tbl_facultad","facultad");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "facultad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_facultad.facultad";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatbl_facultad["facultad"] = $fdata;
		$tdatatbl_facultad[".searchableFields"][] = "facultad";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tbl_facultad";
	$fdata["Label"] = GetFieldLabel("tbl_facultad","estado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_facultad.estado";

	
	
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


	$tdatatbl_facultad["estado"] = $fdata;
		$tdatatbl_facultad[".searchableFields"][] = "estado";
//	id_extension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_extension";
	$fdata["GoodName"] = "id_extension";
	$fdata["ownerTable"] = "tbl_facultad";
	$fdata["Label"] = GetFieldLabel("tbl_facultad","id_extension");
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "extension";

				$edata["LookupWhere"] = "tbl_extension.estado='Activo'";


	
	$edata["LookupOrderBy"] = "extension";

	
	
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


	$tdatatbl_facultad["id_extension"] = $fdata;
		$tdatatbl_facultad[".searchableFields"][] = "id_extension";
//	extension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "extension";
	$fdata["GoodName"] = "extension";
	$fdata["ownerTable"] = "tbl_extension";
	$fdata["Label"] = GetFieldLabel("tbl_facultad","extension");
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


	$tdatatbl_facultad["extension"] = $fdata;
		$tdatatbl_facultad[".searchableFields"][] = "extension";


$tables_data["tbl_facultad"]=&$tdatatbl_facultad;
$field_labels["tbl_facultad"] = &$fieldLabelstbl_facultad;
$fieldToolTips["tbl_facultad"] = &$fieldToolTipstbl_facultad;
$placeHolders["tbl_facultad"] = &$placeHolderstbl_facultad;
$page_titles["tbl_facultad"] = &$pageTitlestbl_facultad;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_facultad"] = array();
//	tbl_carrera
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_carrera";
		$detailsParam["dOriginalTable"] = "tbl_carrera";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_carrera";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_carrera");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_facultad"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_facultad"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_facultad"][$dIndex]["masterKeys"][]="id_facultad";

				$detailsTablesData["tbl_facultad"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_facultad"][$dIndex]["detailKeys"][]="id_facultad";

// tables which are master tables for current table (detail)
$masterTablesData["tbl_facultad"] = array();



	
				$strOriginalDetailsTable="tbl_extension";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_extension";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_extension";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_facultad"][0] = $masterParams;
				$masterTablesData["tbl_facultad"][0]["masterKeys"] = array();
	$masterTablesData["tbl_facultad"][0]["masterKeys"][]="id_extension";
				$masterTablesData["tbl_facultad"][0]["detailKeys"] = array();
	$masterTablesData["tbl_facultad"][0]["detailKeys"][]="id_extension";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_facultad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tbl_facultad.id_facultad,  tbl_facultad.facultad,  tbl_facultad.estado,  tbl_facultad.id_extension,  tbl_extension.extension";
$proto0["m_strFrom"] = "FROM tbl_facultad  INNER JOIN tbl_extension ON tbl_facultad.id_extension = tbl_extension.id_extension";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY tbl_extension.extension, tbl_facultad.facultad";
	
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
	"m_strName" => "id_facultad",
	"m_strTable" => "tbl_facultad",
	"m_srcTableName" => "tbl_facultad"
));

$proto6["m_sql"] = "tbl_facultad.id_facultad";
$proto6["m_srcTableName"] = "tbl_facultad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "facultad",
	"m_strTable" => "tbl_facultad",
	"m_srcTableName" => "tbl_facultad"
));

$proto8["m_sql"] = "tbl_facultad.facultad";
$proto8["m_srcTableName"] = "tbl_facultad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tbl_facultad",
	"m_srcTableName" => "tbl_facultad"
));

$proto10["m_sql"] = "tbl_facultad.estado";
$proto10["m_srcTableName"] = "tbl_facultad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_extension",
	"m_strTable" => "tbl_facultad",
	"m_srcTableName" => "tbl_facultad"
));

$proto12["m_sql"] = "tbl_facultad.id_extension";
$proto12["m_srcTableName"] = "tbl_facultad";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "extension",
	"m_strTable" => "tbl_extension",
	"m_srcTableName" => "tbl_facultad"
));

$proto14["m_sql"] = "tbl_extension.extension";
$proto14["m_srcTableName"] = "tbl_facultad";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tbl_facultad";
$proto17["m_srcTableName"] = "tbl_facultad";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id_facultad";
$proto17["m_columns"][] = "facultad";
$proto17["m_columns"][] = "estado";
$proto17["m_columns"][] = "id_extension";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tbl_facultad";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tbl_facultad";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
												$proto20=array();
$proto20["m_link"] = "SQLL_INNERJOIN";
			$proto21=array();
$proto21["m_strName"] = "tbl_extension";
$proto21["m_srcTableName"] = "tbl_facultad";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_extension";
$proto21["m_columns"][] = "extension";
$proto21["m_columns"][] = "estado";
$proto21["m_columns"][] = "codigo_u";
$proto21["m_columns"][] = "id_ciudad";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "INNER JOIN tbl_extension ON tbl_facultad.id_extension = tbl_extension.id_extension";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tbl_facultad";
$proto22=array();
$proto22["m_sql"] = "tbl_facultad.id_extension = tbl_extension.id_extension";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_extension",
	"m_strTable" => "tbl_facultad",
	"m_srcTableName" => "tbl_facultad"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= tbl_extension.id_extension";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "extension",
	"m_strTable" => "tbl_extension",
	"m_srcTableName" => "tbl_facultad"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "facultad",
	"m_strTable" => "tbl_facultad",
	"m_srcTableName" => "tbl_facultad"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 1;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_facultad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_facultad = createSqlQuery_tbl_facultad();


	
		;

					

$tdatatbl_facultad[".sqlquery"] = $queryData_tbl_facultad;

include_once(getabspath("include/tbl_facultad_events.php"));
$tableEvents["tbl_facultad"] = new eventclass_tbl_facultad;
$tdatatbl_facultad[".hasEvents"] = true;

?>
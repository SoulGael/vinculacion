<?php




$tdatatbl_ciudad = array();
$tdatatbl_ciudad[".searchableFields"] = array();
	$tdatatbl_ciudad[".truncateText"] = true;
	$tdatatbl_ciudad[".NumberOfChars"] = 80;
	$tdatatbl_ciudad[".ShortName"] = "tbl_ciudad";
	$tdatatbl_ciudad[".OwnerID"] = "";
	$tdatatbl_ciudad[".OriginalTable"] = "tbl_ciudad";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatbl_ciudad[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_ciudad[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstbl_ciudad = array();
$fieldToolTipstbl_ciudad = array();
$pageTitlestbl_ciudad = array();
$placeHolderstbl_ciudad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstbl_ciudad["Spanish"] = array();
	$fieldToolTipstbl_ciudad["Spanish"] = array();
	$placeHolderstbl_ciudad["Spanish"] = array();
	$pageTitlestbl_ciudad["Spanish"] = array();
	$fieldLabelstbl_ciudad["Spanish"]["id_ciudad"] = "Id Ciudad";
	$fieldToolTipstbl_ciudad["Spanish"]["id_ciudad"] = "";
	$placeHolderstbl_ciudad["Spanish"]["id_ciudad"] = "";
	$fieldLabelstbl_ciudad["Spanish"]["ciudad"] = "Ciudad";
	$fieldToolTipstbl_ciudad["Spanish"]["ciudad"] = "";
	$placeHolderstbl_ciudad["Spanish"]["ciudad"] = "Nueva Ciudad";
	$fieldLabelstbl_ciudad["Spanish"]["estado"] = "Estado";
	$fieldToolTipstbl_ciudad["Spanish"]["estado"] = "";
	$placeHolderstbl_ciudad["Spanish"]["estado"] = "";
	$fieldLabelstbl_ciudad["Spanish"]["id_provincia"] = "Id Provincia";
	$fieldToolTipstbl_ciudad["Spanish"]["id_provincia"] = "";
	$placeHolderstbl_ciudad["Spanish"]["id_provincia"] = "";
	$fieldLabelstbl_ciudad["Spanish"]["provincia"] = "Provincia";
	$fieldToolTipstbl_ciudad["Spanish"]["provincia"] = "";
	$placeHolderstbl_ciudad["Spanish"]["provincia"] = "";
	$pageTitlestbl_ciudad["Spanish"]["edit"] = "Tbl Ciudad, Editar [{%id_ciudad}]";
	if (count($fieldToolTipstbl_ciudad["Spanish"]))
		$tdatatbl_ciudad[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_ciudad["English"] = array();
	$fieldToolTipstbl_ciudad["English"] = array();
	$placeHolderstbl_ciudad["English"] = array();
	$pageTitlestbl_ciudad["English"] = array();
	if (count($fieldToolTipstbl_ciudad["English"]))
		$tdatatbl_ciudad[".isUseToolTips"] = true;
}


	$tdatatbl_ciudad[".NCSearch"] = true;



$tdatatbl_ciudad[".shortTableName"] = "tbl_ciudad";
$tdatatbl_ciudad[".nSecOptions"] = 0;

$tdatatbl_ciudad[".mainTableOwnerID"] = "";
$tdatatbl_ciudad[".entityType"] = 0;

$tdatatbl_ciudad[".strOriginalTableName"] = "tbl_ciudad";

	



$tdatatbl_ciudad[".showAddInPopup"] = false;

$tdatatbl_ciudad[".showEditInPopup"] = false;

$tdatatbl_ciudad[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_ciudad[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_ciudad[".listAjax"] = false;
//	temporary
$tdatatbl_ciudad[".listAjax"] = false;

	$tdatatbl_ciudad[".audit"] = false;

	$tdatatbl_ciudad[".locking"] = false;


$pages = $tdatatbl_ciudad[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_ciudad[".edit"] = true;
	$tdatatbl_ciudad[".afterEditAction"] = 1;
	$tdatatbl_ciudad[".closePopupAfterEdit"] = 1;
	$tdatatbl_ciudad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_ciudad[".add"] = true;
$tdatatbl_ciudad[".afterAddAction"] = 1;
$tdatatbl_ciudad[".closePopupAfterAdd"] = 1;
$tdatatbl_ciudad[".afterAddActionDetTable"] = "tbl_extension";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_ciudad[".list"] = true;
}



$tdatatbl_ciudad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_ciudad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_ciudad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_ciudad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_ciudad[".printFriendly"] = true;
}



$tdatatbl_ciudad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_ciudad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_ciudad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_ciudad[".isUseAjaxSuggest"] = true;

$tdatatbl_ciudad[".rowHighlite"] = true;




$tdatatbl_ciudad[".flexibleSearch"] = true;


$tdatatbl_ciudad[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_ciudad[".buttonsAdded"] = false;

$tdatatbl_ciudad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_ciudad[".isUseTimeForSearch"] = false;


$tdatatbl_ciudad[".badgeColor"] = "4169E1";


$tdatatbl_ciudad[".allSearchFields"] = array();
$tdatatbl_ciudad[".filterFields"] = array();
$tdatatbl_ciudad[".requiredSearchFields"] = array();

$tdatatbl_ciudad[".googleLikeFields"] = array();
$tdatatbl_ciudad[".googleLikeFields"][] = "id_ciudad";
$tdatatbl_ciudad[".googleLikeFields"][] = "ciudad";
$tdatatbl_ciudad[".googleLikeFields"][] = "estado";
$tdatatbl_ciudad[".googleLikeFields"][] = "id_provincia";
$tdatatbl_ciudad[".googleLikeFields"][] = "provincia";



$tdatatbl_ciudad[".tableType"] = "list";

$tdatatbl_ciudad[".printerPageOrientation"] = 0;
$tdatatbl_ciudad[".nPrinterPageScale"] = 100;

$tdatatbl_ciudad[".nPrinterSplitRecords"] = 40;

$tdatatbl_ciudad[".nPrinterPDFSplitRecords"] = 40;


$tdatatbl_ciudad[".geocodingEnabled"] = false;




$tdatatbl_ciudad[".isDisplayLoading"] = true;






$tdatatbl_ciudad[".pageSize"] = 20;

$tdatatbl_ciudad[".warnLeavingPages"] = true;



$tstrOrderBy = "order by tbl_provincia.provincia, tbl_ciudad.ciudad";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_ciudad[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_ciudad[".orderindexes"] = array();
	$tdatatbl_ciudad[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "tbl_provincia.provincia");

	$tdatatbl_ciudad[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "tbl_ciudad.ciudad");


$tdatatbl_ciudad[".sqlHead"] = "SELECT tbl_ciudad.id_ciudad,  tbl_ciudad.ciudad,  tbl_ciudad.estado,  tbl_ciudad.id_provincia,  tbl_provincia.provincia";
$tdatatbl_ciudad[".sqlFrom"] = "FROM tbl_ciudad  INNER JOIN tbl_provincia ON tbl_ciudad.id_provincia = tbl_provincia.id_provincia";
$tdatatbl_ciudad[".sqlWhereExpr"] = "";
$tdatatbl_ciudad[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatatbl_ciudad[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_ciudad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_ciudad[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_ciudad[".highlightSearchResults"] = true;

$tableKeystbl_ciudad = array();
$tableKeystbl_ciudad[] = "id_ciudad";
$tdatatbl_ciudad[".Keys"] = $tableKeystbl_ciudad;


$tdatatbl_ciudad[".hideMobileList"] = array();




//	id_ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_ciudad";
	$fdata["GoodName"] = "id_ciudad";
	$fdata["ownerTable"] = "tbl_ciudad";
	$fdata["Label"] = GetFieldLabel("tbl_ciudad","id_ciudad");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_ciudad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_ciudad.id_ciudad";

	
	
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


	$tdatatbl_ciudad["id_ciudad"] = $fdata;
		$tdatatbl_ciudad[".searchableFields"][] = "id_ciudad";
//	ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ciudad";
	$fdata["GoodName"] = "ciudad";
	$fdata["ownerTable"] = "tbl_ciudad";
	$fdata["Label"] = GetFieldLabel("tbl_ciudad","ciudad");
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

	
	
	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "La ciudad %value% ya existe", "messageType" => "Text");

	
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
		$fdata["filterTotalFields"] = "id_ciudad";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_ciudad["ciudad"] = $fdata;
		$tdatatbl_ciudad[".searchableFields"][] = "ciudad";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tbl_ciudad";
	$fdata["Label"] = GetFieldLabel("tbl_ciudad","estado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_ciudad.estado";

	
	
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


	$tdatatbl_ciudad["estado"] = $fdata;
		$tdatatbl_ciudad[".searchableFields"][] = "estado";
//	id_provincia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_provincia";
	$fdata["GoodName"] = "id_provincia";
	$fdata["ownerTable"] = "tbl_ciudad";
	$fdata["Label"] = GetFieldLabel("tbl_ciudad","id_provincia");
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "provincia";

				$edata["LookupWhere"] = "estado='Activo'";


	
	$edata["LookupOrderBy"] = "provincia";

	
	
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


	$tdatatbl_ciudad["id_provincia"] = $fdata;
		$tdatatbl_ciudad[".searchableFields"][] = "id_provincia";
//	provincia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "provincia";
	$fdata["GoodName"] = "provincia";
	$fdata["ownerTable"] = "tbl_provincia";
	$fdata["Label"] = GetFieldLabel("tbl_ciudad","provincia");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_provincia";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_provincia";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "provincia";

				$edata["LookupWhere"] = "estado='Activo'";


	
	$edata["LookupOrderBy"] = "provincia";

	
	
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
		$fdata["filterTotalFields"] = "id_ciudad";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_ciudad["provincia"] = $fdata;
		$tdatatbl_ciudad[".searchableFields"][] = "provincia";


$tables_data["tbl_ciudad"]=&$tdatatbl_ciudad;
$field_labels["tbl_ciudad"] = &$fieldLabelstbl_ciudad;
$fieldToolTips["tbl_ciudad"] = &$fieldToolTipstbl_ciudad;
$placeHolders["tbl_ciudad"] = &$placeHolderstbl_ciudad;
$page_titles["tbl_ciudad"] = &$pageTitlestbl_ciudad;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_ciudad"] = array();
//	tbl_extension
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_extension";
		$detailsParam["dOriginalTable"] = "tbl_extension";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_extension";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_extension");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_ciudad"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_ciudad"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_ciudad"][$dIndex]["masterKeys"][]="id_ciudad";

				$detailsTablesData["tbl_ciudad"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_ciudad"][$dIndex]["detailKeys"][]="id_ciudad";

// tables which are master tables for current table (detail)
$masterTablesData["tbl_ciudad"] = array();



	
				$strOriginalDetailsTable="tbl_provincia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_provincia";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_provincia";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_ciudad"][0] = $masterParams;
				$masterTablesData["tbl_ciudad"][0]["masterKeys"] = array();
	$masterTablesData["tbl_ciudad"][0]["masterKeys"][]="id_provincia";
				$masterTablesData["tbl_ciudad"][0]["detailKeys"] = array();
	$masterTablesData["tbl_ciudad"][0]["detailKeys"][]="id_provincia";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_ciudad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tbl_ciudad.id_ciudad,  tbl_ciudad.ciudad,  tbl_ciudad.estado,  tbl_ciudad.id_provincia,  tbl_provincia.provincia";
$proto0["m_strFrom"] = "FROM tbl_ciudad  INNER JOIN tbl_provincia ON tbl_ciudad.id_provincia = tbl_provincia.id_provincia";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "order by tbl_provincia.provincia, tbl_ciudad.ciudad";
	
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
	"m_strName" => "id_ciudad",
	"m_strTable" => "tbl_ciudad",
	"m_srcTableName" => "tbl_ciudad"
));

$proto6["m_sql"] = "tbl_ciudad.id_ciudad";
$proto6["m_srcTableName"] = "tbl_ciudad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ciudad",
	"m_strTable" => "tbl_ciudad",
	"m_srcTableName" => "tbl_ciudad"
));

$proto8["m_sql"] = "tbl_ciudad.ciudad";
$proto8["m_srcTableName"] = "tbl_ciudad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tbl_ciudad",
	"m_srcTableName" => "tbl_ciudad"
));

$proto10["m_sql"] = "tbl_ciudad.estado";
$proto10["m_srcTableName"] = "tbl_ciudad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_provincia",
	"m_strTable" => "tbl_ciudad",
	"m_srcTableName" => "tbl_ciudad"
));

$proto12["m_sql"] = "tbl_ciudad.id_provincia";
$proto12["m_srcTableName"] = "tbl_ciudad";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "provincia",
	"m_strTable" => "tbl_provincia",
	"m_srcTableName" => "tbl_ciudad"
));

$proto14["m_sql"] = "tbl_provincia.provincia";
$proto14["m_srcTableName"] = "tbl_ciudad";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tbl_ciudad";
$proto17["m_srcTableName"] = "tbl_ciudad";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id_ciudad";
$proto17["m_columns"][] = "ciudad";
$proto17["m_columns"][] = "estado";
$proto17["m_columns"][] = "id_provincia";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tbl_ciudad";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tbl_ciudad";
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
$proto21["m_strName"] = "tbl_provincia";
$proto21["m_srcTableName"] = "tbl_ciudad";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_provincia";
$proto21["m_columns"][] = "provincia";
$proto21["m_columns"][] = "estado";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "INNER JOIN tbl_provincia ON tbl_ciudad.id_provincia = tbl_provincia.id_provincia";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tbl_ciudad";
$proto22=array();
$proto22["m_sql"] = "tbl_ciudad.id_provincia = tbl_provincia.id_provincia";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_provincia",
	"m_strTable" => "tbl_ciudad",
	"m_srcTableName" => "tbl_ciudad"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= tbl_provincia.id_provincia";
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
	"m_strName" => "provincia",
	"m_strTable" => "tbl_provincia",
	"m_srcTableName" => "tbl_ciudad"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "ciudad",
	"m_strTable" => "tbl_ciudad",
	"m_srcTableName" => "tbl_ciudad"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 1;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_ciudad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_ciudad = createSqlQuery_tbl_ciudad();


	
		;

					

$tdatatbl_ciudad[".sqlquery"] = $queryData_tbl_ciudad;

include_once(getabspath("include/tbl_ciudad_events.php"));
$tableEvents["tbl_ciudad"] = new eventclass_tbl_ciudad;
$tdatatbl_ciudad[".hasEvents"] = true;

?>
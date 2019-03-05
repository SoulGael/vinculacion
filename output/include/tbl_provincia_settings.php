<?php




$tdatatbl_provincia = array();
$tdatatbl_provincia[".searchableFields"] = array();
	$tdatatbl_provincia[".truncateText"] = true;
	$tdatatbl_provincia[".NumberOfChars"] = 80;
	$tdatatbl_provincia[".ShortName"] = "tbl_provincia";
	$tdatatbl_provincia[".OwnerID"] = "";
	$tdatatbl_provincia[".OriginalTable"] = "tbl_provincia";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatbl_provincia[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_provincia[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstbl_provincia = array();
$fieldToolTipstbl_provincia = array();
$pageTitlestbl_provincia = array();
$placeHolderstbl_provincia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstbl_provincia["Spanish"] = array();
	$fieldToolTipstbl_provincia["Spanish"] = array();
	$placeHolderstbl_provincia["Spanish"] = array();
	$pageTitlestbl_provincia["Spanish"] = array();
	$fieldLabelstbl_provincia["Spanish"]["id_provincia"] = "Id Provincia";
	$fieldToolTipstbl_provincia["Spanish"]["id_provincia"] = "";
	$placeHolderstbl_provincia["Spanish"]["id_provincia"] = "";
	$fieldLabelstbl_provincia["Spanish"]["provincia"] = "Provincia";
	$fieldToolTipstbl_provincia["Spanish"]["provincia"] = "";
	$placeHolderstbl_provincia["Spanish"]["provincia"] = "";
	$fieldLabelstbl_provincia["Spanish"]["estado"] = "Estado";
	$fieldToolTipstbl_provincia["Spanish"]["estado"] = "";
	$placeHolderstbl_provincia["Spanish"]["estado"] = "";
	if (count($fieldToolTipstbl_provincia["Spanish"]))
		$tdatatbl_provincia[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_provincia["English"] = array();
	$fieldToolTipstbl_provincia["English"] = array();
	$placeHolderstbl_provincia["English"] = array();
	$pageTitlestbl_provincia["English"] = array();
	if (count($fieldToolTipstbl_provincia["English"]))
		$tdatatbl_provincia[".isUseToolTips"] = true;
}


	$tdatatbl_provincia[".NCSearch"] = true;



$tdatatbl_provincia[".shortTableName"] = "tbl_provincia";
$tdatatbl_provincia[".nSecOptions"] = 0;

$tdatatbl_provincia[".mainTableOwnerID"] = "";
$tdatatbl_provincia[".entityType"] = 0;

$tdatatbl_provincia[".strOriginalTableName"] = "tbl_provincia";

	



$tdatatbl_provincia[".showAddInPopup"] = false;

$tdatatbl_provincia[".showEditInPopup"] = false;

$tdatatbl_provincia[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_provincia[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_provincia[".listAjax"] = false;
//	temporary
$tdatatbl_provincia[".listAjax"] = false;

	$tdatatbl_provincia[".audit"] = false;

	$tdatatbl_provincia[".locking"] = false;


$pages = $tdatatbl_provincia[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_provincia[".edit"] = true;
	$tdatatbl_provincia[".afterEditAction"] = 1;
	$tdatatbl_provincia[".closePopupAfterEdit"] = 1;
	$tdatatbl_provincia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_provincia[".add"] = true;
$tdatatbl_provincia[".afterAddAction"] = 1;
$tdatatbl_provincia[".closePopupAfterAdd"] = 1;
$tdatatbl_provincia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_provincia[".list"] = true;
}



$tdatatbl_provincia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_provincia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_provincia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_provincia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_provincia[".printFriendly"] = true;
}



$tdatatbl_provincia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_provincia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_provincia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_provincia[".isUseAjaxSuggest"] = true;

$tdatatbl_provincia[".rowHighlite"] = true;



			
$tdatatbl_provincia[".flexibleSearch"] = true;


$tdatatbl_provincia[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_provincia[".buttonsAdded"] = false;

$tdatatbl_provincia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_provincia[".isUseTimeForSearch"] = false;


$tdatatbl_provincia[".badgeColor"] = "9ACD32";


$tdatatbl_provincia[".allSearchFields"] = array();
$tdatatbl_provincia[".filterFields"] = array();
$tdatatbl_provincia[".requiredSearchFields"] = array();

$tdatatbl_provincia[".googleLikeFields"] = array();
$tdatatbl_provincia[".googleLikeFields"][] = "id_provincia";
$tdatatbl_provincia[".googleLikeFields"][] = "provincia";
$tdatatbl_provincia[".googleLikeFields"][] = "estado";



$tdatatbl_provincia[".tableType"] = "list";

$tdatatbl_provincia[".printerPageOrientation"] = 0;
$tdatatbl_provincia[".nPrinterPageScale"] = 100;

$tdatatbl_provincia[".nPrinterSplitRecords"] = 40;

$tdatatbl_provincia[".nPrinterPDFSplitRecords"] = 40;


$tdatatbl_provincia[".geocodingEnabled"] = false;










$tdatatbl_provincia[".pageSize"] = 20;

$tdatatbl_provincia[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_provincia[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_provincia[".orderindexes"] = array();

$tdatatbl_provincia[".sqlHead"] = "SELECT id_provincia,  	provincia,  	estado";
$tdatatbl_provincia[".sqlFrom"] = "FROM tbl_provincia";
$tdatatbl_provincia[".sqlWhereExpr"] = "";
$tdatatbl_provincia[".sqlTail"] = "";

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
$tdatatbl_provincia[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_provincia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_provincia[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_provincia[".highlightSearchResults"] = true;

$tableKeystbl_provincia = array();
$tableKeystbl_provincia[] = "id_provincia";
$tdatatbl_provincia[".Keys"] = $tableKeystbl_provincia;


$tdatatbl_provincia[".hideMobileList"] = array();




//	id_provincia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_provincia";
	$fdata["GoodName"] = "id_provincia";
	$fdata["ownerTable"] = "tbl_provincia";
	$fdata["Label"] = GetFieldLabel("tbl_provincia","id_provincia");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_provincia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_provincia";

	
	
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


	$tdatatbl_provincia["id_provincia"] = $fdata;
		$tdatatbl_provincia[".searchableFields"][] = "id_provincia";
//	provincia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "provincia";
	$fdata["GoodName"] = "provincia";
	$fdata["ownerTable"] = "tbl_provincia";
	$fdata["Label"] = GetFieldLabel("tbl_provincia","provincia");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "provincia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "provincia";

	
	
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
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "La Provincia %value% ya existe", "messageType" => "Text");

	
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


	$tdatatbl_provincia["provincia"] = $fdata;
		$tdatatbl_provincia[".searchableFields"][] = "provincia";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tbl_provincia";
	$fdata["Label"] = GetFieldLabel("tbl_provincia","estado");
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

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Activo";
	$edata["LookupValues"][] = "Inactivo";

	
	
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


	$tdatatbl_provincia["estado"] = $fdata;
		$tdatatbl_provincia[".searchableFields"][] = "estado";


$tables_data["tbl_provincia"]=&$tdatatbl_provincia;
$field_labels["tbl_provincia"] = &$fieldLabelstbl_provincia;
$fieldToolTips["tbl_provincia"] = &$fieldToolTipstbl_provincia;
$placeHolders["tbl_provincia"] = &$placeHolderstbl_provincia;
$page_titles["tbl_provincia"] = &$pageTitlestbl_provincia;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_provincia"] = array();
//	tbl_ciudad
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_ciudad";
		$detailsParam["dOriginalTable"] = "tbl_ciudad";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_ciudad";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_ciudad");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_provincia"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_provincia"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_provincia"][$dIndex]["masterKeys"][]="id_provincia";

				$detailsTablesData["tbl_provincia"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_provincia"][$dIndex]["detailKeys"][]="id_provincia";

// tables which are master tables for current table (detail)
$masterTablesData["tbl_provincia"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_provincia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_provincia,  	provincia,  	estado";
$proto0["m_strFrom"] = "FROM tbl_provincia";
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
	"m_strName" => "id_provincia",
	"m_strTable" => "tbl_provincia",
	"m_srcTableName" => "tbl_provincia"
));

$proto6["m_sql"] = "id_provincia";
$proto6["m_srcTableName"] = "tbl_provincia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "provincia",
	"m_strTable" => "tbl_provincia",
	"m_srcTableName" => "tbl_provincia"
));

$proto8["m_sql"] = "provincia";
$proto8["m_srcTableName"] = "tbl_provincia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tbl_provincia",
	"m_srcTableName" => "tbl_provincia"
));

$proto10["m_sql"] = "estado";
$proto10["m_srcTableName"] = "tbl_provincia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tbl_provincia";
$proto13["m_srcTableName"] = "tbl_provincia";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_provincia";
$proto13["m_columns"][] = "provincia";
$proto13["m_columns"][] = "estado";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tbl_provincia";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tbl_provincia";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_provincia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_provincia = createSqlQuery_tbl_provincia();


	
		;

			

$tdatatbl_provincia[".sqlquery"] = $queryData_tbl_provincia;

include_once(getabspath("include/tbl_provincia_events.php"));
$tableEvents["tbl_provincia"] = new eventclass_tbl_provincia;
$tdatatbl_provincia[".hasEvents"] = true;

?>
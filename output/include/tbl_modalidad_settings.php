<?php




$tdatatbl_modalidad = array();
$tdatatbl_modalidad[".searchableFields"] = array();
	$tdatatbl_modalidad[".truncateText"] = true;
	$tdatatbl_modalidad[".NumberOfChars"] = 80;
	$tdatatbl_modalidad[".ShortName"] = "tbl_modalidad";
	$tdatatbl_modalidad[".OwnerID"] = "";
	$tdatatbl_modalidad[".OriginalTable"] = "tbl_modalidad";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatbl_modalidad[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_modalidad[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstbl_modalidad = array();
$fieldToolTipstbl_modalidad = array();
$pageTitlestbl_modalidad = array();
$placeHolderstbl_modalidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstbl_modalidad["Spanish"] = array();
	$fieldToolTipstbl_modalidad["Spanish"] = array();
	$placeHolderstbl_modalidad["Spanish"] = array();
	$pageTitlestbl_modalidad["Spanish"] = array();
	$fieldLabelstbl_modalidad["Spanish"]["id_modalidad"] = "Id Modalidad";
	$fieldToolTipstbl_modalidad["Spanish"]["id_modalidad"] = "";
	$placeHolderstbl_modalidad["Spanish"]["id_modalidad"] = "";
	$fieldLabelstbl_modalidad["Spanish"]["modalidad"] = "Modalidad";
	$fieldToolTipstbl_modalidad["Spanish"]["modalidad"] = "";
	$placeHolderstbl_modalidad["Spanish"]["modalidad"] = "";
	$fieldLabelstbl_modalidad["Spanish"]["estado"] = "Estado";
	$fieldToolTipstbl_modalidad["Spanish"]["estado"] = "";
	$placeHolderstbl_modalidad["Spanish"]["estado"] = "";
	if (count($fieldToolTipstbl_modalidad["Spanish"]))
		$tdatatbl_modalidad[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_modalidad["English"] = array();
	$fieldToolTipstbl_modalidad["English"] = array();
	$placeHolderstbl_modalidad["English"] = array();
	$pageTitlestbl_modalidad["English"] = array();
	if (count($fieldToolTipstbl_modalidad["English"]))
		$tdatatbl_modalidad[".isUseToolTips"] = true;
}


	$tdatatbl_modalidad[".NCSearch"] = true;



$tdatatbl_modalidad[".shortTableName"] = "tbl_modalidad";
$tdatatbl_modalidad[".nSecOptions"] = 0;

$tdatatbl_modalidad[".mainTableOwnerID"] = "";
$tdatatbl_modalidad[".entityType"] = 0;

$tdatatbl_modalidad[".strOriginalTableName"] = "tbl_modalidad";

	



$tdatatbl_modalidad[".showAddInPopup"] = false;

$tdatatbl_modalidad[".showEditInPopup"] = false;

$tdatatbl_modalidad[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_modalidad[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_modalidad[".listAjax"] = false;
//	temporary
$tdatatbl_modalidad[".listAjax"] = false;

	$tdatatbl_modalidad[".audit"] = false;

	$tdatatbl_modalidad[".locking"] = false;


$pages = $tdatatbl_modalidad[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_modalidad[".edit"] = true;
	$tdatatbl_modalidad[".afterEditAction"] = 1;
	$tdatatbl_modalidad[".closePopupAfterEdit"] = 1;
	$tdatatbl_modalidad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_modalidad[".add"] = true;
$tdatatbl_modalidad[".afterAddAction"] = 1;
$tdatatbl_modalidad[".closePopupAfterAdd"] = 1;
$tdatatbl_modalidad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_modalidad[".list"] = true;
}



$tdatatbl_modalidad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_modalidad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_modalidad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_modalidad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_modalidad[".printFriendly"] = true;
}



$tdatatbl_modalidad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_modalidad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_modalidad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_modalidad[".isUseAjaxSuggest"] = true;

$tdatatbl_modalidad[".rowHighlite"] = true;




$tdatatbl_modalidad[".flexibleSearch"] = true;


$tdatatbl_modalidad[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_modalidad[".buttonsAdded"] = false;

$tdatatbl_modalidad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_modalidad[".isUseTimeForSearch"] = false;


$tdatatbl_modalidad[".badgeColor"] = "6B8E23";


$tdatatbl_modalidad[".allSearchFields"] = array();
$tdatatbl_modalidad[".filterFields"] = array();
$tdatatbl_modalidad[".requiredSearchFields"] = array();

$tdatatbl_modalidad[".googleLikeFields"] = array();
$tdatatbl_modalidad[".googleLikeFields"][] = "id_modalidad";
$tdatatbl_modalidad[".googleLikeFields"][] = "modalidad";
$tdatatbl_modalidad[".googleLikeFields"][] = "estado";



$tdatatbl_modalidad[".tableType"] = "list";

$tdatatbl_modalidad[".printerPageOrientation"] = 0;
$tdatatbl_modalidad[".nPrinterPageScale"] = 100;

$tdatatbl_modalidad[".nPrinterSplitRecords"] = 40;

$tdatatbl_modalidad[".nPrinterPDFSplitRecords"] = 40;


$tdatatbl_modalidad[".geocodingEnabled"] = false;










$tdatatbl_modalidad[".pageSize"] = 20;

$tdatatbl_modalidad[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY modalidad";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_modalidad[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_modalidad[".orderindexes"] = array();
	$tdatatbl_modalidad[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "modalidad");


$tdatatbl_modalidad[".sqlHead"] = "SELECT id_modalidad,  modalidad,  estado";
$tdatatbl_modalidad[".sqlFrom"] = "FROM tbl_modalidad";
$tdatatbl_modalidad[".sqlWhereExpr"] = "";
$tdatatbl_modalidad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_modalidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_modalidad[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_modalidad[".highlightSearchResults"] = true;

$tableKeystbl_modalidad = array();
$tableKeystbl_modalidad[] = "id_modalidad";
$tdatatbl_modalidad[".Keys"] = $tableKeystbl_modalidad;


$tdatatbl_modalidad[".hideMobileList"] = array();




//	id_modalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_modalidad";
	$fdata["GoodName"] = "id_modalidad";
	$fdata["ownerTable"] = "tbl_modalidad";
	$fdata["Label"] = GetFieldLabel("tbl_modalidad","id_modalidad");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_modalidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_modalidad";

	
	
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


	$tdatatbl_modalidad["id_modalidad"] = $fdata;
		$tdatatbl_modalidad[".searchableFields"][] = "id_modalidad";
//	modalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "modalidad";
	$fdata["GoodName"] = "modalidad";
	$fdata["ownerTable"] = "tbl_modalidad";
	$fdata["Label"] = GetFieldLabel("tbl_modalidad","modalidad");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "modalidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "modalidad";

	
	
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


	$tdatatbl_modalidad["modalidad"] = $fdata;
		$tdatatbl_modalidad[".searchableFields"][] = "modalidad";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tbl_modalidad";
	$fdata["Label"] = GetFieldLabel("tbl_modalidad","estado");
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


	$tdatatbl_modalidad["estado"] = $fdata;
		$tdatatbl_modalidad[".searchableFields"][] = "estado";


$tables_data["tbl_modalidad"]=&$tdatatbl_modalidad;
$field_labels["tbl_modalidad"] = &$fieldLabelstbl_modalidad;
$fieldToolTips["tbl_modalidad"] = &$fieldToolTipstbl_modalidad;
$placeHolders["tbl_modalidad"] = &$placeHolderstbl_modalidad;
$page_titles["tbl_modalidad"] = &$pageTitlestbl_modalidad;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_modalidad"] = array();
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


		
	$detailsTablesData["tbl_modalidad"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_modalidad"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_modalidad"][$dIndex]["masterKeys"][]="id_modalidad";

				$detailsTablesData["tbl_modalidad"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_modalidad"][$dIndex]["detailKeys"][]="id_modalidad";

// tables which are master tables for current table (detail)
$masterTablesData["tbl_modalidad"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_modalidad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_modalidad,  modalidad,  estado";
$proto0["m_strFrom"] = "FROM tbl_modalidad";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY modalidad";
	
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
	"m_strName" => "id_modalidad",
	"m_strTable" => "tbl_modalidad",
	"m_srcTableName" => "tbl_modalidad"
));

$proto6["m_sql"] = "id_modalidad";
$proto6["m_srcTableName"] = "tbl_modalidad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "modalidad",
	"m_strTable" => "tbl_modalidad",
	"m_srcTableName" => "tbl_modalidad"
));

$proto8["m_sql"] = "modalidad";
$proto8["m_srcTableName"] = "tbl_modalidad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tbl_modalidad",
	"m_srcTableName" => "tbl_modalidad"
));

$proto10["m_sql"] = "estado";
$proto10["m_srcTableName"] = "tbl_modalidad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tbl_modalidad";
$proto13["m_srcTableName"] = "tbl_modalidad";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_modalidad";
$proto13["m_columns"][] = "modalidad";
$proto13["m_columns"][] = "estado";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tbl_modalidad";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tbl_modalidad";
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
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "modalidad",
	"m_strTable" => "tbl_modalidad",
	"m_srcTableName" => "tbl_modalidad"
));

$proto16["m_column"]=$obj;
$proto16["m_bAsc"] = 1;
$proto16["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto16);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_modalidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_modalidad = createSqlQuery_tbl_modalidad();


	
		;

			

$tdatatbl_modalidad[".sqlquery"] = $queryData_tbl_modalidad;

$tableEvents["tbl_modalidad"] = new eventsBase;
$tdatatbl_modalidad[".hasEvents"] = false;

?>
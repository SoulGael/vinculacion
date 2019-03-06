<?php




$tdatatbl_rol = array();
$tdatatbl_rol[".searchableFields"] = array();
	$tdatatbl_rol[".truncateText"] = true;
	$tdatatbl_rol[".NumberOfChars"] = 80;
	$tdatatbl_rol[".ShortName"] = "tbl_rol";
	$tdatatbl_rol[".OwnerID"] = "";
	$tdatatbl_rol[".OriginalTable"] = "tbl_rol";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatbl_rol[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_rol[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstbl_rol = array();
$fieldToolTipstbl_rol = array();
$pageTitlestbl_rol = array();
$placeHolderstbl_rol = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstbl_rol["Spanish"] = array();
	$fieldToolTipstbl_rol["Spanish"] = array();
	$placeHolderstbl_rol["Spanish"] = array();
	$pageTitlestbl_rol["Spanish"] = array();
	$fieldLabelstbl_rol["Spanish"]["id_rol"] = "Id Rol";
	$fieldToolTipstbl_rol["Spanish"]["id_rol"] = "";
	$placeHolderstbl_rol["Spanish"]["id_rol"] = "";
	$fieldLabelstbl_rol["Spanish"]["rol"] = "Rol";
	$fieldToolTipstbl_rol["Spanish"]["rol"] = "";
	$placeHolderstbl_rol["Spanish"]["rol"] = "";
	$fieldLabelstbl_rol["Spanish"]["estado"] = "Estado";
	$fieldToolTipstbl_rol["Spanish"]["estado"] = "";
	$placeHolderstbl_rol["Spanish"]["estado"] = "";
	if (count($fieldToolTipstbl_rol["Spanish"]))
		$tdatatbl_rol[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_rol["English"] = array();
	$fieldToolTipstbl_rol["English"] = array();
	$placeHolderstbl_rol["English"] = array();
	$pageTitlestbl_rol["English"] = array();
	if (count($fieldToolTipstbl_rol["English"]))
		$tdatatbl_rol[".isUseToolTips"] = true;
}


	$tdatatbl_rol[".NCSearch"] = true;



$tdatatbl_rol[".shortTableName"] = "tbl_rol";
$tdatatbl_rol[".nSecOptions"] = 0;

$tdatatbl_rol[".mainTableOwnerID"] = "";
$tdatatbl_rol[".entityType"] = 0;

$tdatatbl_rol[".strOriginalTableName"] = "tbl_rol";

	



$tdatatbl_rol[".showAddInPopup"] = false;

$tdatatbl_rol[".showEditInPopup"] = false;

$tdatatbl_rol[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_rol[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_rol[".listAjax"] = false;
//	temporary
$tdatatbl_rol[".listAjax"] = false;

	$tdatatbl_rol[".audit"] = false;

	$tdatatbl_rol[".locking"] = false;


$pages = $tdatatbl_rol[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_rol[".edit"] = true;
	$tdatatbl_rol[".afterEditAction"] = 1;
	$tdatatbl_rol[".closePopupAfterEdit"] = 1;
	$tdatatbl_rol[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_rol[".add"] = true;
$tdatatbl_rol[".afterAddAction"] = 1;
$tdatatbl_rol[".closePopupAfterAdd"] = 1;
$tdatatbl_rol[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_rol[".list"] = true;
}



$tdatatbl_rol[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_rol[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_rol[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_rol[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_rol[".printFriendly"] = true;
}



$tdatatbl_rol[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_rol[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_rol[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_rol[".isUseAjaxSuggest"] = true;

$tdatatbl_rol[".rowHighlite"] = true;



			
$tdatatbl_rol[".flexibleSearch"] = true;


$tdatatbl_rol[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_rol[".buttonsAdded"] = false;

$tdatatbl_rol[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_rol[".isUseTimeForSearch"] = false;


$tdatatbl_rol[".badgeColor"] = "CFAE83";


$tdatatbl_rol[".allSearchFields"] = array();
$tdatatbl_rol[".filterFields"] = array();
$tdatatbl_rol[".requiredSearchFields"] = array();

$tdatatbl_rol[".googleLikeFields"] = array();
$tdatatbl_rol[".googleLikeFields"][] = "id_rol";
$tdatatbl_rol[".googleLikeFields"][] = "rol";
$tdatatbl_rol[".googleLikeFields"][] = "estado";



$tdatatbl_rol[".tableType"] = "list";

$tdatatbl_rol[".printerPageOrientation"] = 0;
$tdatatbl_rol[".nPrinterPageScale"] = 100;

$tdatatbl_rol[".nPrinterSplitRecords"] = 40;

$tdatatbl_rol[".nPrinterPDFSplitRecords"] = 40;


$tdatatbl_rol[".geocodingEnabled"] = false;










$tdatatbl_rol[".pageSize"] = 20;

$tdatatbl_rol[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY rol";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_rol[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_rol[".orderindexes"] = array();
	$tdatatbl_rol[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "rol");


$tdatatbl_rol[".sqlHead"] = "SELECT id_rol,  rol,  estado";
$tdatatbl_rol[".sqlFrom"] = "FROM tbl_rol";
$tdatatbl_rol[".sqlWhereExpr"] = "";
$tdatatbl_rol[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_rol[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_rol[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_rol[".highlightSearchResults"] = true;

$tableKeystbl_rol = array();
$tableKeystbl_rol[] = "id_rol";
$tdatatbl_rol[".Keys"] = $tableKeystbl_rol;


$tdatatbl_rol[".hideMobileList"] = array();




//	id_rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_rol";
	$fdata["GoodName"] = "id_rol";
	$fdata["ownerTable"] = "tbl_rol";
	$fdata["Label"] = GetFieldLabel("tbl_rol","id_rol");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_rol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_rol";

	
	
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


	$tdatatbl_rol["id_rol"] = $fdata;
		$tdatatbl_rol[".searchableFields"][] = "id_rol";
//	rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "rol";
	$fdata["GoodName"] = "rol";
	$fdata["ownerTable"] = "tbl_rol";
	$fdata["Label"] = GetFieldLabel("tbl_rol","rol");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "rol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rol";

	
	
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
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "El rol %value% ya existe", "messageType" => "Text");

	
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


	$tdatatbl_rol["rol"] = $fdata;
		$tdatatbl_rol[".searchableFields"][] = "rol";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tbl_rol";
	$fdata["Label"] = GetFieldLabel("tbl_rol","estado");
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


	$tdatatbl_rol["estado"] = $fdata;
		$tdatatbl_rol[".searchableFields"][] = "estado";


$tables_data["tbl_rol"]=&$tdatatbl_rol;
$field_labels["tbl_rol"] = &$fieldLabelstbl_rol;
$fieldToolTips["tbl_rol"] = &$fieldToolTipstbl_rol;
$placeHolders["tbl_rol"] = &$placeHolderstbl_rol;
$page_titles["tbl_rol"] = &$pageTitlestbl_rol;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_rol"] = array();
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


		
	$detailsTablesData["tbl_rol"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_rol"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_rol"][$dIndex]["masterKeys"][]="id_rol";

				$detailsTablesData["tbl_rol"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_rol"][$dIndex]["detailKeys"][]="id_rol";

// tables which are master tables for current table (detail)
$masterTablesData["tbl_rol"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_rol()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_rol,  rol,  estado";
$proto0["m_strFrom"] = "FROM tbl_rol";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY rol";
	
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
	"m_strName" => "id_rol",
	"m_strTable" => "tbl_rol",
	"m_srcTableName" => "tbl_rol"
));

$proto6["m_sql"] = "id_rol";
$proto6["m_srcTableName"] = "tbl_rol";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "rol",
	"m_strTable" => "tbl_rol",
	"m_srcTableName" => "tbl_rol"
));

$proto8["m_sql"] = "rol";
$proto8["m_srcTableName"] = "tbl_rol";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tbl_rol",
	"m_srcTableName" => "tbl_rol"
));

$proto10["m_sql"] = "estado";
$proto10["m_srcTableName"] = "tbl_rol";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tbl_rol";
$proto13["m_srcTableName"] = "tbl_rol";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_rol";
$proto13["m_columns"][] = "rol";
$proto13["m_columns"][] = "estado";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tbl_rol";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tbl_rol";
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
	"m_strName" => "rol",
	"m_strTable" => "tbl_rol",
	"m_srcTableName" => "tbl_rol"
));

$proto16["m_column"]=$obj;
$proto16["m_bAsc"] = 1;
$proto16["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto16);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_rol";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_rol = createSqlQuery_tbl_rol();


	
		;

			

$tdatatbl_rol[".sqlquery"] = $queryData_tbl_rol;

include_once(getabspath("include/tbl_rol_events.php"));
$tableEvents["tbl_rol"] = new eventclass_tbl_rol;
$tdatatbl_rol[".hasEvents"] = true;

?>
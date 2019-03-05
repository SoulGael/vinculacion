<?php




$tdatatbl_periodo = array();
$tdatatbl_periodo[".searchableFields"] = array();
	$tdatatbl_periodo[".truncateText"] = true;
	$tdatatbl_periodo[".NumberOfChars"] = 80;
	$tdatatbl_periodo[".ShortName"] = "tbl_periodo";
	$tdatatbl_periodo[".OwnerID"] = "";
	$tdatatbl_periodo[".OriginalTable"] = "tbl_periodo";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatbl_periodo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_periodo[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstbl_periodo = array();
$fieldToolTipstbl_periodo = array();
$pageTitlestbl_periodo = array();
$placeHolderstbl_periodo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstbl_periodo["Spanish"] = array();
	$fieldToolTipstbl_periodo["Spanish"] = array();
	$placeHolderstbl_periodo["Spanish"] = array();
	$pageTitlestbl_periodo["Spanish"] = array();
	$fieldLabelstbl_periodo["Spanish"]["id_periodo"] = "Id Periodo";
	$fieldToolTipstbl_periodo["Spanish"]["id_periodo"] = "";
	$placeHolderstbl_periodo["Spanish"]["id_periodo"] = "";
	$fieldLabelstbl_periodo["Spanish"]["periodo"] = "Periodo";
	$fieldToolTipstbl_periodo["Spanish"]["periodo"] = "";
	$placeHolderstbl_periodo["Spanish"]["periodo"] = "";
	$fieldLabelstbl_periodo["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipstbl_periodo["Spanish"]["codigo"] = "";
	$placeHolderstbl_periodo["Spanish"]["codigo"] = "";
	$fieldLabelstbl_periodo["Spanish"]["estado"] = "Estado";
	$fieldToolTipstbl_periodo["Spanish"]["estado"] = "";
	$placeHolderstbl_periodo["Spanish"]["estado"] = "";
	if (count($fieldToolTipstbl_periodo["Spanish"]))
		$tdatatbl_periodo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_periodo["English"] = array();
	$fieldToolTipstbl_periodo["English"] = array();
	$placeHolderstbl_periodo["English"] = array();
	$pageTitlestbl_periodo["English"] = array();
	if (count($fieldToolTipstbl_periodo["English"]))
		$tdatatbl_periodo[".isUseToolTips"] = true;
}


	$tdatatbl_periodo[".NCSearch"] = true;



$tdatatbl_periodo[".shortTableName"] = "tbl_periodo";
$tdatatbl_periodo[".nSecOptions"] = 0;

$tdatatbl_periodo[".mainTableOwnerID"] = "";
$tdatatbl_periodo[".entityType"] = 0;

$tdatatbl_periodo[".strOriginalTableName"] = "tbl_periodo";

	



$tdatatbl_periodo[".showAddInPopup"] = false;

$tdatatbl_periodo[".showEditInPopup"] = false;

$tdatatbl_periodo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_periodo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_periodo[".listAjax"] = false;
//	temporary
$tdatatbl_periodo[".listAjax"] = false;

	$tdatatbl_periodo[".audit"] = false;

	$tdatatbl_periodo[".locking"] = false;


$pages = $tdatatbl_periodo[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_periodo[".edit"] = true;
	$tdatatbl_periodo[".afterEditAction"] = 1;
	$tdatatbl_periodo[".closePopupAfterEdit"] = 1;
	$tdatatbl_periodo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_periodo[".add"] = true;
$tdatatbl_periodo[".afterAddAction"] = 1;
$tdatatbl_periodo[".closePopupAfterAdd"] = 1;
$tdatatbl_periodo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_periodo[".list"] = true;
}



$tdatatbl_periodo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_periodo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_periodo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_periodo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_periodo[".printFriendly"] = true;
}



$tdatatbl_periodo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_periodo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_periodo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_periodo[".isUseAjaxSuggest"] = true;

$tdatatbl_periodo[".rowHighlite"] = true;



			
$tdatatbl_periodo[".flexibleSearch"] = true;


$tdatatbl_periodo[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_periodo[".buttonsAdded"] = false;

$tdatatbl_periodo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_periodo[".isUseTimeForSearch"] = false;


$tdatatbl_periodo[".badgeColor"] = "CD5C5C";


$tdatatbl_periodo[".allSearchFields"] = array();
$tdatatbl_periodo[".filterFields"] = array();
$tdatatbl_periodo[".requiredSearchFields"] = array();

$tdatatbl_periodo[".googleLikeFields"] = array();
$tdatatbl_periodo[".googleLikeFields"][] = "id_periodo";
$tdatatbl_periodo[".googleLikeFields"][] = "periodo";
$tdatatbl_periodo[".googleLikeFields"][] = "codigo";
$tdatatbl_periodo[".googleLikeFields"][] = "estado";



$tdatatbl_periodo[".tableType"] = "list";

$tdatatbl_periodo[".printerPageOrientation"] = 0;
$tdatatbl_periodo[".nPrinterPageScale"] = 100;

$tdatatbl_periodo[".nPrinterSplitRecords"] = 40;

$tdatatbl_periodo[".nPrinterPDFSplitRecords"] = 40;


$tdatatbl_periodo[".geocodingEnabled"] = false;










$tdatatbl_periodo[".pageSize"] = 20;

$tdatatbl_periodo[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY periodo";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_periodo[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_periodo[".orderindexes"] = array();
	$tdatatbl_periodo[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "periodo");


$tdatatbl_periodo[".sqlHead"] = "SELECT id_periodo,  periodo,  codigo,  estado";
$tdatatbl_periodo[".sqlFrom"] = "FROM tbl_periodo";
$tdatatbl_periodo[".sqlWhereExpr"] = "";
$tdatatbl_periodo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_periodo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_periodo[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_periodo[".highlightSearchResults"] = true;

$tableKeystbl_periodo = array();
$tableKeystbl_periodo[] = "id_periodo";
$tdatatbl_periodo[".Keys"] = $tableKeystbl_periodo;


$tdatatbl_periodo[".hideMobileList"] = array();




//	id_periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_periodo";
	$fdata["GoodName"] = "id_periodo";
	$fdata["ownerTable"] = "tbl_periodo";
	$fdata["Label"] = GetFieldLabel("tbl_periodo","id_periodo");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatatbl_periodo["id_periodo"] = $fdata;
		$tdatatbl_periodo[".searchableFields"][] = "id_periodo";
//	periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "periodo";
	$fdata["GoodName"] = "periodo";
	$fdata["ownerTable"] = "tbl_periodo";
	$fdata["Label"] = GetFieldLabel("tbl_periodo","periodo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "periodo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo";

	
	
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
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "El periodo %value% ya existe", "messageType" => "Text");

	
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


	$tdatatbl_periodo["periodo"] = $fdata;
		$tdatatbl_periodo[".searchableFields"][] = "periodo";
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "tbl_periodo";
	$fdata["Label"] = GetFieldLabel("tbl_periodo","codigo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "codigo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo";

	
	
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


	$tdatatbl_periodo["codigo"] = $fdata;
		$tdatatbl_periodo[".searchableFields"][] = "codigo";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tbl_periodo";
	$fdata["Label"] = GetFieldLabel("tbl_periodo","estado");
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


	$tdatatbl_periodo["estado"] = $fdata;
		$tdatatbl_periodo[".searchableFields"][] = "estado";


$tables_data["tbl_periodo"]=&$tdatatbl_periodo;
$field_labels["tbl_periodo"] = &$fieldLabelstbl_periodo;
$fieldToolTips["tbl_periodo"] = &$fieldToolTipstbl_periodo;
$placeHolders["tbl_periodo"] = &$placeHolderstbl_periodo;
$page_titles["tbl_periodo"] = &$pageTitlestbl_periodo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_periodo"] = array();
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


		
	$detailsTablesData["tbl_periodo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_periodo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_periodo"][$dIndex]["masterKeys"][]="id_periodo";

				$detailsTablesData["tbl_periodo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_periodo"][$dIndex]["detailKeys"][]="id_periodo";
//	tbl_distributivo_proyectos
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_distributivo_proyectos";
		$detailsParam["dOriginalTable"] = "tbl_distributivo_proyectos";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_distributivo_proyectos";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_distributivo_proyectos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_periodo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_periodo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_periodo"][$dIndex]["masterKeys"][]="id_periodo";

				$detailsTablesData["tbl_periodo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_periodo"][$dIndex]["detailKeys"][]="id_periodo";

// tables which are master tables for current table (detail)
$masterTablesData["tbl_periodo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_periodo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_periodo,  periodo,  codigo,  estado";
$proto0["m_strFrom"] = "FROM tbl_periodo";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY periodo";
	
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
	"m_strName" => "id_periodo",
	"m_strTable" => "tbl_periodo",
	"m_srcTableName" => "tbl_periodo"
));

$proto6["m_sql"] = "id_periodo";
$proto6["m_srcTableName"] = "tbl_periodo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo",
	"m_strTable" => "tbl_periodo",
	"m_srcTableName" => "tbl_periodo"
));

$proto8["m_sql"] = "periodo";
$proto8["m_srcTableName"] = "tbl_periodo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "tbl_periodo",
	"m_srcTableName" => "tbl_periodo"
));

$proto10["m_sql"] = "codigo";
$proto10["m_srcTableName"] = "tbl_periodo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tbl_periodo",
	"m_srcTableName" => "tbl_periodo"
));

$proto12["m_sql"] = "estado";
$proto12["m_srcTableName"] = "tbl_periodo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tbl_periodo";
$proto15["m_srcTableName"] = "tbl_periodo";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_periodo";
$proto15["m_columns"][] = "periodo";
$proto15["m_columns"][] = "codigo";
$proto15["m_columns"][] = "estado";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tbl_periodo";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tbl_periodo";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "periodo",
	"m_strTable" => "tbl_periodo",
	"m_srcTableName" => "tbl_periodo"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tbl_periodo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_periodo = createSqlQuery_tbl_periodo();


	
		;

				

$tdatatbl_periodo[".sqlquery"] = $queryData_tbl_periodo;

$tableEvents["tbl_periodo"] = new eventsBase;
$tdatatbl_periodo[".hasEvents"] = false;

?>
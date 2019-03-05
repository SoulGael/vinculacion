<?php




$tdatatbl_linea_investigacion = array();
$tdatatbl_linea_investigacion[".searchableFields"] = array();
	$tdatatbl_linea_investigacion[".truncateText"] = true;
	$tdatatbl_linea_investigacion[".NumberOfChars"] = 80;
	$tdatatbl_linea_investigacion[".ShortName"] = "tbl_linea_investigacion";
	$tdatatbl_linea_investigacion[".OwnerID"] = "";
	$tdatatbl_linea_investigacion[".OriginalTable"] = "tbl_linea_investigacion";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatbl_linea_investigacion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_linea_investigacion[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstbl_linea_investigacion = array();
$fieldToolTipstbl_linea_investigacion = array();
$pageTitlestbl_linea_investigacion = array();
$placeHolderstbl_linea_investigacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstbl_linea_investigacion["Spanish"] = array();
	$fieldToolTipstbl_linea_investigacion["Spanish"] = array();
	$placeHolderstbl_linea_investigacion["Spanish"] = array();
	$pageTitlestbl_linea_investigacion["Spanish"] = array();
	$fieldLabelstbl_linea_investigacion["Spanish"]["id_linea_investigacion"] = "Id Linea Investigacion";
	$fieldToolTipstbl_linea_investigacion["Spanish"]["id_linea_investigacion"] = "";
	$placeHolderstbl_linea_investigacion["Spanish"]["id_linea_investigacion"] = "";
	$fieldLabelstbl_linea_investigacion["Spanish"]["linea_investigacion"] = "Linea Investigacion";
	$fieldToolTipstbl_linea_investigacion["Spanish"]["linea_investigacion"] = "";
	$placeHolderstbl_linea_investigacion["Spanish"]["linea_investigacion"] = "";
	$fieldLabelstbl_linea_investigacion["Spanish"]["estado"] = "Estado";
	$fieldToolTipstbl_linea_investigacion["Spanish"]["estado"] = "";
	$placeHolderstbl_linea_investigacion["Spanish"]["estado"] = "";
	$fieldLabelstbl_linea_investigacion["Spanish"]["id_carrera"] = "Id Carrera";
	$fieldToolTipstbl_linea_investigacion["Spanish"]["id_carrera"] = "";
	$placeHolderstbl_linea_investigacion["Spanish"]["id_carrera"] = "";
	if (count($fieldToolTipstbl_linea_investigacion["Spanish"]))
		$tdatatbl_linea_investigacion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_linea_investigacion["English"] = array();
	$fieldToolTipstbl_linea_investigacion["English"] = array();
	$placeHolderstbl_linea_investigacion["English"] = array();
	$pageTitlestbl_linea_investigacion["English"] = array();
	if (count($fieldToolTipstbl_linea_investigacion["English"]))
		$tdatatbl_linea_investigacion[".isUseToolTips"] = true;
}


	$tdatatbl_linea_investigacion[".NCSearch"] = true;



$tdatatbl_linea_investigacion[".shortTableName"] = "tbl_linea_investigacion";
$tdatatbl_linea_investigacion[".nSecOptions"] = 0;

$tdatatbl_linea_investigacion[".mainTableOwnerID"] = "";
$tdatatbl_linea_investigacion[".entityType"] = 0;

$tdatatbl_linea_investigacion[".strOriginalTableName"] = "tbl_linea_investigacion";

	



$tdatatbl_linea_investigacion[".showAddInPopup"] = false;

$tdatatbl_linea_investigacion[".showEditInPopup"] = false;

$tdatatbl_linea_investigacion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_linea_investigacion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_linea_investigacion[".listAjax"] = false;
//	temporary
$tdatatbl_linea_investigacion[".listAjax"] = false;

	$tdatatbl_linea_investigacion[".audit"] = false;

	$tdatatbl_linea_investigacion[".locking"] = false;


$pages = $tdatatbl_linea_investigacion[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_linea_investigacion[".edit"] = true;
	$tdatatbl_linea_investigacion[".afterEditAction"] = 1;
	$tdatatbl_linea_investigacion[".closePopupAfterEdit"] = 1;
	$tdatatbl_linea_investigacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_linea_investigacion[".add"] = true;
$tdatatbl_linea_investigacion[".afterAddAction"] = 1;
$tdatatbl_linea_investigacion[".closePopupAfterAdd"] = 1;
$tdatatbl_linea_investigacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_linea_investigacion[".list"] = true;
}



$tdatatbl_linea_investigacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_linea_investigacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_linea_investigacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_linea_investigacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_linea_investigacion[".printFriendly"] = true;
}



$tdatatbl_linea_investigacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_linea_investigacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_linea_investigacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_linea_investigacion[".isUseAjaxSuggest"] = true;

$tdatatbl_linea_investigacion[".rowHighlite"] = true;



						
$tdatatbl_linea_investigacion[".flexibleSearch"] = true;


$tdatatbl_linea_investigacion[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_linea_investigacion[".buttonsAdded"] = false;

$tdatatbl_linea_investigacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_linea_investigacion[".isUseTimeForSearch"] = false;


$tdatatbl_linea_investigacion[".badgeColor"] = "D2AF80";


$tdatatbl_linea_investigacion[".allSearchFields"] = array();
$tdatatbl_linea_investigacion[".filterFields"] = array();
$tdatatbl_linea_investigacion[".requiredSearchFields"] = array();

$tdatatbl_linea_investigacion[".googleLikeFields"] = array();
$tdatatbl_linea_investigacion[".googleLikeFields"][] = "id_linea_investigacion";
$tdatatbl_linea_investigacion[".googleLikeFields"][] = "linea_investigacion";
$tdatatbl_linea_investigacion[".googleLikeFields"][] = "estado";
$tdatatbl_linea_investigacion[".googleLikeFields"][] = "id_carrera";



$tdatatbl_linea_investigacion[".tableType"] = "list";

$tdatatbl_linea_investigacion[".printerPageOrientation"] = 0;
$tdatatbl_linea_investigacion[".nPrinterPageScale"] = 100;

$tdatatbl_linea_investigacion[".nPrinterSplitRecords"] = 40;

$tdatatbl_linea_investigacion[".nPrinterPDFSplitRecords"] = 40;


$tdatatbl_linea_investigacion[".geocodingEnabled"] = false;










$tdatatbl_linea_investigacion[".pageSize"] = 20;

$tdatatbl_linea_investigacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_linea_investigacion[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_linea_investigacion[".orderindexes"] = array();

$tdatatbl_linea_investigacion[".sqlHead"] = "SELECT id_linea_investigacion,  	linea_investigacion,  	estado,  	id_carrera";
$tdatatbl_linea_investigacion[".sqlFrom"] = "FROM tbl_linea_investigacion";
$tdatatbl_linea_investigacion[".sqlWhereExpr"] = "";
$tdatatbl_linea_investigacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_linea_investigacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_linea_investigacion[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_linea_investigacion[".highlightSearchResults"] = true;

$tableKeystbl_linea_investigacion = array();
$tableKeystbl_linea_investigacion[] = "id_linea_investigacion";
$tdatatbl_linea_investigacion[".Keys"] = $tableKeystbl_linea_investigacion;


$tdatatbl_linea_investigacion[".hideMobileList"] = array();




//	id_linea_investigacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_linea_investigacion";
	$fdata["GoodName"] = "id_linea_investigacion";
	$fdata["ownerTable"] = "tbl_linea_investigacion";
	$fdata["Label"] = GetFieldLabel("tbl_linea_investigacion","id_linea_investigacion");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatatbl_linea_investigacion["id_linea_investigacion"] = $fdata;
		$tdatatbl_linea_investigacion[".searchableFields"][] = "id_linea_investigacion";
//	linea_investigacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "linea_investigacion";
	$fdata["GoodName"] = "linea_investigacion";
	$fdata["ownerTable"] = "tbl_linea_investigacion";
	$fdata["Label"] = GetFieldLabel("tbl_linea_investigacion","linea_investigacion");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "linea_investigacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "linea_investigacion";

	
	
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

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatatbl_linea_investigacion["linea_investigacion"] = $fdata;
		$tdatatbl_linea_investigacion[".searchableFields"][] = "linea_investigacion";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tbl_linea_investigacion";
	$fdata["Label"] = GetFieldLabel("tbl_linea_investigacion","estado");
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


	$tdatatbl_linea_investigacion["estado"] = $fdata;
		$tdatatbl_linea_investigacion[".searchableFields"][] = "estado";
//	id_carrera
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_carrera";
	$fdata["GoodName"] = "id_carrera";
	$fdata["ownerTable"] = "tbl_linea_investigacion";
	$fdata["Label"] = GetFieldLabel("tbl_linea_investigacion","id_carrera");
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


	$tdatatbl_linea_investigacion["id_carrera"] = $fdata;
		$tdatatbl_linea_investigacion[".searchableFields"][] = "id_carrera";


$tables_data["tbl_linea_investigacion"]=&$tdatatbl_linea_investigacion;
$field_labels["tbl_linea_investigacion"] = &$fieldLabelstbl_linea_investigacion;
$fieldToolTips["tbl_linea_investigacion"] = &$fieldToolTipstbl_linea_investigacion;
$placeHolders["tbl_linea_investigacion"] = &$placeHolderstbl_linea_investigacion;
$page_titles["tbl_linea_investigacion"] = &$pageTitlestbl_linea_investigacion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_linea_investigacion"] = array();
//	tbl_programa_vinculacion
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_programa_vinculacion";
		$detailsParam["dOriginalTable"] = "tbl_programa_vinculacion";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_programa_vinculacion";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_programa_vinculacion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_linea_investigacion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_linea_investigacion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_linea_investigacion"][$dIndex]["masterKeys"][]="id_linea_investigacion";

				$detailsTablesData["tbl_linea_investigacion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_linea_investigacion"][$dIndex]["detailKeys"][]="id_linea_investigacion";

// tables which are master tables for current table (detail)
$masterTablesData["tbl_linea_investigacion"] = array();



	
				$strOriginalDetailsTable="tbl_carrera";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_carrera";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_carrera";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_linea_investigacion"][0] = $masterParams;
				$masterTablesData["tbl_linea_investigacion"][0]["masterKeys"] = array();
	$masterTablesData["tbl_linea_investigacion"][0]["masterKeys"][]="id_carrera";
				$masterTablesData["tbl_linea_investigacion"][0]["detailKeys"] = array();
	$masterTablesData["tbl_linea_investigacion"][0]["detailKeys"][]="id_carrera";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_linea_investigacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_linea_investigacion,  	linea_investigacion,  	estado,  	id_carrera";
$proto0["m_strFrom"] = "FROM tbl_linea_investigacion";
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
	"m_strName" => "id_linea_investigacion",
	"m_strTable" => "tbl_linea_investigacion",
	"m_srcTableName" => "tbl_linea_investigacion"
));

$proto6["m_sql"] = "id_linea_investigacion";
$proto6["m_srcTableName"] = "tbl_linea_investigacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "linea_investigacion",
	"m_strTable" => "tbl_linea_investigacion",
	"m_srcTableName" => "tbl_linea_investigacion"
));

$proto8["m_sql"] = "linea_investigacion";
$proto8["m_srcTableName"] = "tbl_linea_investigacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tbl_linea_investigacion",
	"m_srcTableName" => "tbl_linea_investigacion"
));

$proto10["m_sql"] = "estado";
$proto10["m_srcTableName"] = "tbl_linea_investigacion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_carrera",
	"m_strTable" => "tbl_linea_investigacion",
	"m_srcTableName" => "tbl_linea_investigacion"
));

$proto12["m_sql"] = "id_carrera";
$proto12["m_srcTableName"] = "tbl_linea_investigacion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tbl_linea_investigacion";
$proto15["m_srcTableName"] = "tbl_linea_investigacion";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_linea_investigacion";
$proto15["m_columns"][] = "linea_investigacion";
$proto15["m_columns"][] = "estado";
$proto15["m_columns"][] = "id_carrera";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tbl_linea_investigacion";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tbl_linea_investigacion";
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
$proto0["m_srcTableName"]="tbl_linea_investigacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_linea_investigacion = createSqlQuery_tbl_linea_investigacion();


	
		;

				

$tdatatbl_linea_investigacion[".sqlquery"] = $queryData_tbl_linea_investigacion;

$tableEvents["tbl_linea_investigacion"] = new eventsBase;
$tdatatbl_linea_investigacion[".hasEvents"] = false;

?>
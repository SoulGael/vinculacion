<?php




$tdatatbl_convenio = array();
$tdatatbl_convenio[".searchableFields"] = array();
	$tdatatbl_convenio[".truncateText"] = true;
	$tdatatbl_convenio[".NumberOfChars"] = 80;
	$tdatatbl_convenio[".ShortName"] = "tbl_convenio";
	$tdatatbl_convenio[".OwnerID"] = "";
	$tdatatbl_convenio[".OriginalTable"] = "tbl_convenio";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatbl_convenio[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_convenio[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstbl_convenio = array();
$fieldToolTipstbl_convenio = array();
$pageTitlestbl_convenio = array();
$placeHolderstbl_convenio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstbl_convenio["Spanish"] = array();
	$fieldToolTipstbl_convenio["Spanish"] = array();
	$placeHolderstbl_convenio["Spanish"] = array();
	$pageTitlestbl_convenio["Spanish"] = array();
	$fieldLabelstbl_convenio["Spanish"]["id_convenio"] = "Id Convenio";
	$fieldToolTipstbl_convenio["Spanish"]["id_convenio"] = "";
	$placeHolderstbl_convenio["Spanish"]["id_convenio"] = "";
	$fieldLabelstbl_convenio["Spanish"]["convenio"] = "Nombre del Convenio";
	$fieldToolTipstbl_convenio["Spanish"]["convenio"] = "";
	$placeHolderstbl_convenio["Spanish"]["convenio"] = "";
	$fieldLabelstbl_convenio["Spanish"]["objeto"] = "Objeto";
	$fieldToolTipstbl_convenio["Spanish"]["objeto"] = "";
	$placeHolderstbl_convenio["Spanish"]["objeto"] = "";
	$fieldLabelstbl_convenio["Spanish"]["duracion"] = "Duracion";
	$fieldToolTipstbl_convenio["Spanish"]["duracion"] = "";
	$placeHolderstbl_convenio["Spanish"]["duracion"] = "";
	$fieldLabelstbl_convenio["Spanish"]["fecha_inicio"] = "Fecha Inicio";
	$fieldToolTipstbl_convenio["Spanish"]["fecha_inicio"] = "";
	$placeHolderstbl_convenio["Spanish"]["fecha_inicio"] = "";
	$fieldLabelstbl_convenio["Spanish"]["fecha_fin"] = "Fecha Fin";
	$fieldToolTipstbl_convenio["Spanish"]["fecha_fin"] = "";
	$placeHolderstbl_convenio["Spanish"]["fecha_fin"] = "";
	$fieldLabelstbl_convenio["Spanish"]["tipo_convenio"] = "Tipo Convenio";
	$fieldToolTipstbl_convenio["Spanish"]["tipo_convenio"] = "";
	$placeHolderstbl_convenio["Spanish"]["tipo_convenio"] = "";
	$fieldLabelstbl_convenio["Spanish"]["documentos"] = "Documentos Adjuntos";
	$fieldToolTipstbl_convenio["Spanish"]["documentos"] = "";
	$placeHolderstbl_convenio["Spanish"]["documentos"] = "";
	$fieldLabelstbl_convenio["Spanish"]["areas"] = "Areas Participantes";
	$fieldToolTipstbl_convenio["Spanish"]["areas"] = "";
	$placeHolderstbl_convenio["Spanish"]["areas"] = "";
	$fieldLabelstbl_convenio["Spanish"]["id_institucion"] = "Institucion";
	$fieldToolTipstbl_convenio["Spanish"]["id_institucion"] = "";
	$placeHolderstbl_convenio["Spanish"]["id_institucion"] = "";
	$fieldLabelstbl_convenio["Spanish"]["estado"] = "Estado";
	$fieldToolTipstbl_convenio["Spanish"]["estado"] = "";
	$placeHolderstbl_convenio["Spanish"]["estado"] = "";
	$fieldLabelstbl_convenio["Spanish"]["id_extension"] = "Id Extension";
	$fieldToolTipstbl_convenio["Spanish"]["id_extension"] = "";
	$placeHolderstbl_convenio["Spanish"]["id_extension"] = "";
	if (count($fieldToolTipstbl_convenio["Spanish"]))
		$tdatatbl_convenio[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_convenio["English"] = array();
	$fieldToolTipstbl_convenio["English"] = array();
	$placeHolderstbl_convenio["English"] = array();
	$pageTitlestbl_convenio["English"] = array();
	if (count($fieldToolTipstbl_convenio["English"]))
		$tdatatbl_convenio[".isUseToolTips"] = true;
}


	$tdatatbl_convenio[".NCSearch"] = true;



$tdatatbl_convenio[".shortTableName"] = "tbl_convenio";
$tdatatbl_convenio[".nSecOptions"] = 0;

$tdatatbl_convenio[".mainTableOwnerID"] = "";
$tdatatbl_convenio[".entityType"] = 0;

$tdatatbl_convenio[".strOriginalTableName"] = "tbl_convenio";

	



$tdatatbl_convenio[".showAddInPopup"] = false;

$tdatatbl_convenio[".showEditInPopup"] = false;

$tdatatbl_convenio[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_convenio[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_convenio[".listAjax"] = false;
//	temporary
$tdatatbl_convenio[".listAjax"] = false;

	$tdatatbl_convenio[".audit"] = false;

	$tdatatbl_convenio[".locking"] = false;


$pages = $tdatatbl_convenio[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_convenio[".edit"] = true;
	$tdatatbl_convenio[".afterEditAction"] = 1;
	$tdatatbl_convenio[".closePopupAfterEdit"] = 1;
	$tdatatbl_convenio[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_convenio[".add"] = true;
$tdatatbl_convenio[".afterAddAction"] = 1;
$tdatatbl_convenio[".closePopupAfterAdd"] = 1;
$tdatatbl_convenio[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_convenio[".list"] = true;
}



$tdatatbl_convenio[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_convenio[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_convenio[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_convenio[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_convenio[".printFriendly"] = true;
}



$tdatatbl_convenio[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_convenio[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_convenio[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_convenio[".isUseAjaxSuggest"] = true;

$tdatatbl_convenio[".rowHighlite"] = true;



						
$tdatatbl_convenio[".flexibleSearch"] = true;


$tdatatbl_convenio[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_convenio[".buttonsAdded"] = false;

$tdatatbl_convenio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_convenio[".isUseTimeForSearch"] = false;


$tdatatbl_convenio[".badgeColor"] = "6DA5C8";


$tdatatbl_convenio[".allSearchFields"] = array();
$tdatatbl_convenio[".filterFields"] = array();
$tdatatbl_convenio[".requiredSearchFields"] = array();

$tdatatbl_convenio[".googleLikeFields"] = array();
$tdatatbl_convenio[".googleLikeFields"][] = "id_convenio";
$tdatatbl_convenio[".googleLikeFields"][] = "convenio";
$tdatatbl_convenio[".googleLikeFields"][] = "objeto";
$tdatatbl_convenio[".googleLikeFields"][] = "duracion";
$tdatatbl_convenio[".googleLikeFields"][] = "fecha_inicio";
$tdatatbl_convenio[".googleLikeFields"][] = "fecha_fin";
$tdatatbl_convenio[".googleLikeFields"][] = "tipo_convenio";
$tdatatbl_convenio[".googleLikeFields"][] = "documentos";
$tdatatbl_convenio[".googleLikeFields"][] = "areas";
$tdatatbl_convenio[".googleLikeFields"][] = "id_institucion";
$tdatatbl_convenio[".googleLikeFields"][] = "estado";
$tdatatbl_convenio[".googleLikeFields"][] = "id_extension";



$tdatatbl_convenio[".tableType"] = "list";

$tdatatbl_convenio[".printerPageOrientation"] = 0;
$tdatatbl_convenio[".nPrinterPageScale"] = 100;

$tdatatbl_convenio[".nPrinterSplitRecords"] = 40;

$tdatatbl_convenio[".nPrinterPDFSplitRecords"] = 40;


$tdatatbl_convenio[".geocodingEnabled"] = false;










$tdatatbl_convenio[".pageSize"] = 20;

$tdatatbl_convenio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_convenio[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_convenio[".orderindexes"] = array();

$tdatatbl_convenio[".sqlHead"] = "SELECT id_convenio,  	convenio,  	objeto,  	duracion,  	fecha_inicio,  	fecha_fin,  	tipo_convenio,  	documentos,  	areas,  	id_institucion,  	estado,  	id_extension";
$tdatatbl_convenio[".sqlFrom"] = "FROM tbl_convenio";
$tdatatbl_convenio[".sqlWhereExpr"] = "";
$tdatatbl_convenio[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_convenio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_convenio[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_convenio[".highlightSearchResults"] = true;

$tableKeystbl_convenio = array();
$tableKeystbl_convenio[] = "id_convenio";
$tdatatbl_convenio[".Keys"] = $tableKeystbl_convenio;


$tdatatbl_convenio[".hideMobileList"] = array();




//	id_convenio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_convenio";
	$fdata["GoodName"] = "id_convenio";
	$fdata["ownerTable"] = "tbl_convenio";
	$fdata["Label"] = GetFieldLabel("tbl_convenio","id_convenio");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_convenio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_convenio";

	
	
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


	$tdatatbl_convenio["id_convenio"] = $fdata;
		$tdatatbl_convenio[".searchableFields"][] = "id_convenio";
//	convenio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "convenio";
	$fdata["GoodName"] = "convenio";
	$fdata["ownerTable"] = "tbl_convenio";
	$fdata["Label"] = GetFieldLabel("tbl_convenio","convenio");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "convenio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "convenio";

	
	
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


	$tdatatbl_convenio["convenio"] = $fdata;
		$tdatatbl_convenio[".searchableFields"][] = "convenio";
//	objeto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "objeto";
	$fdata["GoodName"] = "objeto";
	$fdata["ownerTable"] = "tbl_convenio";
	$fdata["Label"] = GetFieldLabel("tbl_convenio","objeto");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "objeto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "objeto";

	
	
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


	$tdatatbl_convenio["objeto"] = $fdata;
		$tdatatbl_convenio[".searchableFields"][] = "objeto";
//	duracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "duracion";
	$fdata["GoodName"] = "duracion";
	$fdata["ownerTable"] = "tbl_convenio";
	$fdata["Label"] = GetFieldLabel("tbl_convenio","duracion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "duracion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "duracion";

	
	
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


	$tdatatbl_convenio["duracion"] = $fdata;
		$tdatatbl_convenio[".searchableFields"][] = "duracion";
//	fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_inicio";
	$fdata["GoodName"] = "fecha_inicio";
	$fdata["ownerTable"] = "tbl_convenio";
	$fdata["Label"] = GetFieldLabel("tbl_convenio","fecha_inicio");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha_inicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_inicio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 5;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_convenio["fecha_inicio"] = $fdata;
		$tdatatbl_convenio[".searchableFields"][] = "fecha_inicio";
//	fecha_fin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fecha_fin";
	$fdata["GoodName"] = "fecha_fin";
	$fdata["ownerTable"] = "tbl_convenio";
	$fdata["Label"] = GetFieldLabel("tbl_convenio","fecha_fin");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fecha_fin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_fin";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 5;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatatbl_convenio["fecha_fin"] = $fdata;
		$tdatatbl_convenio[".searchableFields"][] = "fecha_fin";
//	tipo_convenio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tipo_convenio";
	$fdata["GoodName"] = "tipo_convenio";
	$fdata["ownerTable"] = "tbl_convenio";
	$fdata["Label"] = GetFieldLabel("tbl_convenio","tipo_convenio");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tipo_convenio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_convenio";

	
	
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
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Practicas";
	$edata["LookupValues"][] = "Marco";

	
		$edata["SelectSize"] = 1;

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


	$tdatatbl_convenio["tipo_convenio"] = $fdata;
		$tdatatbl_convenio[".searchableFields"][] = "tipo_convenio";
//	documentos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "documentos";
	$fdata["GoodName"] = "documentos";
	$fdata["ownerTable"] = "tbl_convenio";
	$fdata["Label"] = GetFieldLabel("tbl_convenio","documentos");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "documentos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documentos";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "convenios";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	
	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdatatbl_convenio["documentos"] = $fdata;
		$tdatatbl_convenio[".searchableFields"][] = "documentos";
//	areas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "areas";
	$fdata["GoodName"] = "areas";
	$fdata["ownerTable"] = "tbl_convenio";
	$fdata["Label"] = GetFieldLabel("tbl_convenio","areas");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "areas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "areas";

	
	
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

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id_carrera";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "carrera";

				$edata["LookupWhere"] = "tbl_carrera.estado='Activo'";


	
	$edata["LookupOrderBy"] = "carrera";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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


	$tdatatbl_convenio["areas"] = $fdata;
		$tdatatbl_convenio[".searchableFields"][] = "areas";
//	id_institucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "id_institucion";
	$fdata["GoodName"] = "id_institucion";
	$fdata["ownerTable"] = "tbl_convenio";
	$fdata["Label"] = GetFieldLabel("tbl_convenio","id_institucion");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_institucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_institucion";

	
	
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
	$edata["LookupTable"] = "tbl_institucion";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_institucion";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "institucion";

				$edata["LookupWhere"] = "tbl_institucion.estado='Activo'";


	
	$edata["LookupOrderBy"] = "institucion";

	
	
	
	

	
	
	
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


	$tdatatbl_convenio["id_institucion"] = $fdata;
		$tdatatbl_convenio[".searchableFields"][] = "id_institucion";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tbl_convenio";
	$fdata["Label"] = GetFieldLabel("tbl_convenio","estado");
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
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Activo";
	$edata["LookupValues"][] = "Inactivo";
	$edata["LookupValues"][] = "Terminado";

		$edata["Multiselect"] = true;

	
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


	$tdatatbl_convenio["estado"] = $fdata;
		$tdatatbl_convenio[".searchableFields"][] = "estado";
//	id_extension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "id_extension";
	$fdata["GoodName"] = "id_extension";
	$fdata["ownerTable"] = "tbl_convenio";
	$fdata["Label"] = GetFieldLabel("tbl_convenio","id_extension");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_extension";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_extension";

	
	
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
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_extension";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "extension";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatatbl_convenio["id_extension"] = $fdata;
		$tdatatbl_convenio[".searchableFields"][] = "id_extension";


$tables_data["tbl_convenio"]=&$tdatatbl_convenio;
$field_labels["tbl_convenio"] = &$fieldLabelstbl_convenio;
$fieldToolTips["tbl_convenio"] = &$fieldToolTipstbl_convenio;
$placeHolders["tbl_convenio"] = &$placeHolderstbl_convenio;
$page_titles["tbl_convenio"] = &$pageTitlestbl_convenio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_convenio"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tbl_convenio"] = array();



	
				$strOriginalDetailsTable="tbl_institucion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_institucion";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_institucion";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_convenio"][0] = $masterParams;
				$masterTablesData["tbl_convenio"][0]["masterKeys"] = array();
	$masterTablesData["tbl_convenio"][0]["masterKeys"][]="id_institucion";
				$masterTablesData["tbl_convenio"][0]["detailKeys"] = array();
	$masterTablesData["tbl_convenio"][0]["detailKeys"][]="id_institucion";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_convenio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_convenio,  	convenio,  	objeto,  	duracion,  	fecha_inicio,  	fecha_fin,  	tipo_convenio,  	documentos,  	areas,  	id_institucion,  	estado,  	id_extension";
$proto0["m_strFrom"] = "FROM tbl_convenio";
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
	"m_strName" => "id_convenio",
	"m_strTable" => "tbl_convenio",
	"m_srcTableName" => "tbl_convenio"
));

$proto6["m_sql"] = "id_convenio";
$proto6["m_srcTableName"] = "tbl_convenio";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "convenio",
	"m_strTable" => "tbl_convenio",
	"m_srcTableName" => "tbl_convenio"
));

$proto8["m_sql"] = "convenio";
$proto8["m_srcTableName"] = "tbl_convenio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "objeto",
	"m_strTable" => "tbl_convenio",
	"m_srcTableName" => "tbl_convenio"
));

$proto10["m_sql"] = "objeto";
$proto10["m_srcTableName"] = "tbl_convenio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "duracion",
	"m_strTable" => "tbl_convenio",
	"m_srcTableName" => "tbl_convenio"
));

$proto12["m_sql"] = "duracion";
$proto12["m_srcTableName"] = "tbl_convenio";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_inicio",
	"m_strTable" => "tbl_convenio",
	"m_srcTableName" => "tbl_convenio"
));

$proto14["m_sql"] = "fecha_inicio";
$proto14["m_srcTableName"] = "tbl_convenio";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_fin",
	"m_strTable" => "tbl_convenio",
	"m_srcTableName" => "tbl_convenio"
));

$proto16["m_sql"] = "fecha_fin";
$proto16["m_srcTableName"] = "tbl_convenio";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_convenio",
	"m_strTable" => "tbl_convenio",
	"m_srcTableName" => "tbl_convenio"
));

$proto18["m_sql"] = "tipo_convenio";
$proto18["m_srcTableName"] = "tbl_convenio";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "documentos",
	"m_strTable" => "tbl_convenio",
	"m_srcTableName" => "tbl_convenio"
));

$proto20["m_sql"] = "documentos";
$proto20["m_srcTableName"] = "tbl_convenio";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "areas",
	"m_strTable" => "tbl_convenio",
	"m_srcTableName" => "tbl_convenio"
));

$proto22["m_sql"] = "areas";
$proto22["m_srcTableName"] = "tbl_convenio";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "id_institucion",
	"m_strTable" => "tbl_convenio",
	"m_srcTableName" => "tbl_convenio"
));

$proto24["m_sql"] = "id_institucion";
$proto24["m_srcTableName"] = "tbl_convenio";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tbl_convenio",
	"m_srcTableName" => "tbl_convenio"
));

$proto26["m_sql"] = "estado";
$proto26["m_srcTableName"] = "tbl_convenio";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "id_extension",
	"m_strTable" => "tbl_convenio",
	"m_srcTableName" => "tbl_convenio"
));

$proto28["m_sql"] = "id_extension";
$proto28["m_srcTableName"] = "tbl_convenio";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "tbl_convenio";
$proto31["m_srcTableName"] = "tbl_convenio";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id_convenio";
$proto31["m_columns"][] = "convenio";
$proto31["m_columns"][] = "objeto";
$proto31["m_columns"][] = "duracion";
$proto31["m_columns"][] = "fecha_inicio";
$proto31["m_columns"][] = "fecha_fin";
$proto31["m_columns"][] = "tipo_convenio";
$proto31["m_columns"][] = "documentos";
$proto31["m_columns"][] = "areas";
$proto31["m_columns"][] = "id_institucion";
$proto31["m_columns"][] = "estado";
$proto31["m_columns"][] = "id_extension";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "tbl_convenio";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "tbl_convenio";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_convenio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_convenio = createSqlQuery_tbl_convenio();


	
		;

												

$tdatatbl_convenio[".sqlquery"] = $queryData_tbl_convenio;

include_once(getabspath("include/tbl_convenio_events.php"));
$tableEvents["tbl_convenio"] = new eventclass_tbl_convenio;
$tdatatbl_convenio[".hasEvents"] = true;

?>
<?php




$tdatatbl_institucion = array();
$tdatatbl_institucion[".searchableFields"] = array();
	$tdatatbl_institucion[".truncateText"] = true;
	$tdatatbl_institucion[".NumberOfChars"] = 80;
	$tdatatbl_institucion[".ShortName"] = "tbl_institucion";
	$tdatatbl_institucion[".OwnerID"] = "";
	$tdatatbl_institucion[".OriginalTable"] = "tbl_institucion";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatatbl_institucion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatbl_institucion[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelstbl_institucion = array();
$fieldToolTipstbl_institucion = array();
$pageTitlestbl_institucion = array();
$placeHolderstbl_institucion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstbl_institucion["Spanish"] = array();
	$fieldToolTipstbl_institucion["Spanish"] = array();
	$placeHolderstbl_institucion["Spanish"] = array();
	$pageTitlestbl_institucion["Spanish"] = array();
	$fieldLabelstbl_institucion["Spanish"]["id_institucion"] = "Id Institucion";
	$fieldToolTipstbl_institucion["Spanish"]["id_institucion"] = "";
	$placeHolderstbl_institucion["Spanish"]["id_institucion"] = "";
	$fieldLabelstbl_institucion["Spanish"]["institucion"] = "Institucion";
	$fieldToolTipstbl_institucion["Spanish"]["institucion"] = "";
	$placeHolderstbl_institucion["Spanish"]["institucion"] = "";
	$fieldLabelstbl_institucion["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipstbl_institucion["Spanish"]["telefono"] = "";
	$placeHolderstbl_institucion["Spanish"]["telefono"] = "";
	$fieldLabelstbl_institucion["Spanish"]["email"] = "Email";
	$fieldToolTipstbl_institucion["Spanish"]["email"] = "";
	$placeHolderstbl_institucion["Spanish"]["email"] = "";
	$fieldLabelstbl_institucion["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipstbl_institucion["Spanish"]["direccion"] = "";
	$placeHolderstbl_institucion["Spanish"]["direccion"] = "";
	$fieldLabelstbl_institucion["Spanish"]["responsable"] = "Nombres Responsable";
	$fieldToolTipstbl_institucion["Spanish"]["responsable"] = "";
	$placeHolderstbl_institucion["Spanish"]["responsable"] = "";
	$fieldLabelstbl_institucion["Spanish"]["telefono_responsable"] = "Telefono Responsable";
	$fieldToolTipstbl_institucion["Spanish"]["telefono_responsable"] = "";
	$placeHolderstbl_institucion["Spanish"]["telefono_responsable"] = "";
	$fieldLabelstbl_institucion["Spanish"]["email_responsable"] = "Email Responsable";
	$fieldToolTipstbl_institucion["Spanish"]["email_responsable"] = "";
	$placeHolderstbl_institucion["Spanish"]["email_responsable"] = "";
	$fieldLabelstbl_institucion["Spanish"]["tipo_institucion"] = "Tipo Institucion";
	$fieldToolTipstbl_institucion["Spanish"]["tipo_institucion"] = "";
	$placeHolderstbl_institucion["Spanish"]["tipo_institucion"] = "";
	$fieldLabelstbl_institucion["Spanish"]["id_ciudad"] = "Ciudad";
	$fieldToolTipstbl_institucion["Spanish"]["id_ciudad"] = "";
	$placeHolderstbl_institucion["Spanish"]["id_ciudad"] = "";
	$fieldLabelstbl_institucion["Spanish"]["estado"] = "Estado";
	$fieldToolTipstbl_institucion["Spanish"]["estado"] = "";
	$placeHolderstbl_institucion["Spanish"]["estado"] = "";
	if (count($fieldToolTipstbl_institucion["Spanish"]))
		$tdatatbl_institucion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_institucion["English"] = array();
	$fieldToolTipstbl_institucion["English"] = array();
	$placeHolderstbl_institucion["English"] = array();
	$pageTitlestbl_institucion["English"] = array();
	if (count($fieldToolTipstbl_institucion["English"]))
		$tdatatbl_institucion[".isUseToolTips"] = true;
}


	$tdatatbl_institucion[".NCSearch"] = true;



$tdatatbl_institucion[".shortTableName"] = "tbl_institucion";
$tdatatbl_institucion[".nSecOptions"] = 0;

$tdatatbl_institucion[".mainTableOwnerID"] = "";
$tdatatbl_institucion[".entityType"] = 0;

$tdatatbl_institucion[".strOriginalTableName"] = "tbl_institucion";

	



$tdatatbl_institucion[".showAddInPopup"] = false;

$tdatatbl_institucion[".showEditInPopup"] = false;

$tdatatbl_institucion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_institucion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_institucion[".listAjax"] = false;
//	temporary
$tdatatbl_institucion[".listAjax"] = false;

	$tdatatbl_institucion[".audit"] = false;

	$tdatatbl_institucion[".locking"] = false;


$pages = $tdatatbl_institucion[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_institucion[".edit"] = true;
	$tdatatbl_institucion[".afterEditAction"] = 1;
	$tdatatbl_institucion[".closePopupAfterEdit"] = 1;
	$tdatatbl_institucion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_institucion[".add"] = true;
$tdatatbl_institucion[".afterAddAction"] = 1;
$tdatatbl_institucion[".closePopupAfterAdd"] = 1;
$tdatatbl_institucion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_institucion[".list"] = true;
}



$tdatatbl_institucion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_institucion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_institucion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_institucion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_institucion[".printFriendly"] = true;
}



$tdatatbl_institucion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_institucion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_institucion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_institucion[".isUseAjaxSuggest"] = true;

$tdatatbl_institucion[".rowHighlite"] = true;



						
$tdatatbl_institucion[".flexibleSearch"] = true;


$tdatatbl_institucion[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_institucion[".buttonsAdded"] = false;

$tdatatbl_institucion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_institucion[".isUseTimeForSearch"] = false;


$tdatatbl_institucion[".badgeColor"] = "E67349";


$tdatatbl_institucion[".allSearchFields"] = array();
$tdatatbl_institucion[".filterFields"] = array();
$tdatatbl_institucion[".requiredSearchFields"] = array();

$tdatatbl_institucion[".googleLikeFields"] = array();
$tdatatbl_institucion[".googleLikeFields"][] = "id_institucion";
$tdatatbl_institucion[".googleLikeFields"][] = "institucion";
$tdatatbl_institucion[".googleLikeFields"][] = "telefono";
$tdatatbl_institucion[".googleLikeFields"][] = "email";
$tdatatbl_institucion[".googleLikeFields"][] = "direccion";
$tdatatbl_institucion[".googleLikeFields"][] = "responsable";
$tdatatbl_institucion[".googleLikeFields"][] = "telefono_responsable";
$tdatatbl_institucion[".googleLikeFields"][] = "email_responsable";
$tdatatbl_institucion[".googleLikeFields"][] = "tipo_institucion";
$tdatatbl_institucion[".googleLikeFields"][] = "id_ciudad";
$tdatatbl_institucion[".googleLikeFields"][] = "estado";



$tdatatbl_institucion[".tableType"] = "list";

$tdatatbl_institucion[".printerPageOrientation"] = 0;
$tdatatbl_institucion[".nPrinterPageScale"] = 100;

$tdatatbl_institucion[".nPrinterSplitRecords"] = 40;

$tdatatbl_institucion[".nPrinterPDFSplitRecords"] = 40;


$tdatatbl_institucion[".geocodingEnabled"] = false;










$tdatatbl_institucion[".pageSize"] = 20;

$tdatatbl_institucion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_institucion[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_institucion[".orderindexes"] = array();

$tdatatbl_institucion[".sqlHead"] = "SELECT id_institucion,  	institucion,  	telefono,  	email,  	direccion,  	responsable,  	telefono_responsable,  	email_responsable,  	tipo_institucion,  	id_ciudad,  	estado";
$tdatatbl_institucion[".sqlFrom"] = "FROM tbl_institucion";
$tdatatbl_institucion[".sqlWhereExpr"] = "";
$tdatatbl_institucion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_institucion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_institucion[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_institucion[".highlightSearchResults"] = true;

$tableKeystbl_institucion = array();
$tableKeystbl_institucion[] = "id_institucion";
$tdatatbl_institucion[".Keys"] = $tableKeystbl_institucion;


$tdatatbl_institucion[".hideMobileList"] = array();




//	id_institucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_institucion";
	$fdata["GoodName"] = "id_institucion";
	$fdata["ownerTable"] = "tbl_institucion";
	$fdata["Label"] = GetFieldLabel("tbl_institucion","id_institucion");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatatbl_institucion["id_institucion"] = $fdata;
		$tdatatbl_institucion[".searchableFields"][] = "id_institucion";
//	institucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "institucion";
	$fdata["GoodName"] = "institucion";
	$fdata["ownerTable"] = "tbl_institucion";
	$fdata["Label"] = GetFieldLabel("tbl_institucion","institucion");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "institucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "institucion";

	
	
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


	$tdatatbl_institucion["institucion"] = $fdata;
		$tdatatbl_institucion[".searchableFields"][] = "institucion";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "tbl_institucion";
	$fdata["Label"] = GetFieldLabel("tbl_institucion","telefono");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "telefono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono";

	
	
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

	
		$edata["strEditMask"] = "999-999-9999";

	



	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("US Phone Number");
							
	
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


	$tdatatbl_institucion["telefono"] = $fdata;
		$tdatatbl_institucion[".searchableFields"][] = "telefono";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "tbl_institucion";
	$fdata["Label"] = GetFieldLabel("tbl_institucion","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
	
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


	$tdatatbl_institucion["email"] = $fdata;
		$tdatatbl_institucion[".searchableFields"][] = "email";
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "tbl_institucion";
	$fdata["Label"] = GetFieldLabel("tbl_institucion","direccion");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "direccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion";

	
	
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

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatatbl_institucion["direccion"] = $fdata;
		$tdatatbl_institucion[".searchableFields"][] = "direccion";
//	responsable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "responsable";
	$fdata["GoodName"] = "responsable";
	$fdata["ownerTable"] = "tbl_institucion";
	$fdata["Label"] = GetFieldLabel("tbl_institucion","responsable");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "responsable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "responsable";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatbl_institucion["responsable"] = $fdata;
		$tdatatbl_institucion[".searchableFields"][] = "responsable";
//	telefono_responsable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "telefono_responsable";
	$fdata["GoodName"] = "telefono_responsable";
	$fdata["ownerTable"] = "tbl_institucion";
	$fdata["Label"] = GetFieldLabel("tbl_institucion","telefono_responsable");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "telefono_responsable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono_responsable";

	
	
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

	
		$edata["strEditMask"] = "999-999-9999";

	



	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("US Phone Number");
							
	
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


	$tdatatbl_institucion["telefono_responsable"] = $fdata;
		$tdatatbl_institucion[".searchableFields"][] = "telefono_responsable";
//	email_responsable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "email_responsable";
	$fdata["GoodName"] = "email_responsable";
	$fdata["ownerTable"] = "tbl_institucion";
	$fdata["Label"] = GetFieldLabel("tbl_institucion","email_responsable");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email_responsable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email_responsable";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
							
	
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


	$tdatatbl_institucion["email_responsable"] = $fdata;
		$tdatatbl_institucion[".searchableFields"][] = "email_responsable";
//	tipo_institucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tipo_institucion";
	$fdata["GoodName"] = "tipo_institucion";
	$fdata["ownerTable"] = "tbl_institucion";
	$fdata["Label"] = GetFieldLabel("tbl_institucion","tipo_institucion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tipo_institucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_institucion";

	
	
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
	$edata["LookupValues"][] = "Publica";
	$edata["LookupValues"][] = "Privada";

	
	
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


	$tdatatbl_institucion["tipo_institucion"] = $fdata;
		$tdatatbl_institucion[".searchableFields"][] = "tipo_institucion";
//	id_ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "id_ciudad";
	$fdata["GoodName"] = "id_ciudad";
	$fdata["ownerTable"] = "tbl_institucion";
	$fdata["Label"] = GetFieldLabel("tbl_institucion","id_ciudad");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_ciudad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_ciudad";

	
	
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
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_ciudad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ciudad";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatatbl_institucion["id_ciudad"] = $fdata;
		$tdatatbl_institucion[".searchableFields"][] = "id_ciudad";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tbl_institucion";
	$fdata["Label"] = GetFieldLabel("tbl_institucion","estado");
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


	$tdatatbl_institucion["estado"] = $fdata;
		$tdatatbl_institucion[".searchableFields"][] = "estado";


$tables_data["tbl_institucion"]=&$tdatatbl_institucion;
$field_labels["tbl_institucion"] = &$fieldLabelstbl_institucion;
$fieldToolTips["tbl_institucion"] = &$fieldToolTipstbl_institucion;
$placeHolders["tbl_institucion"] = &$placeHolderstbl_institucion;
$page_titles["tbl_institucion"] = &$pageTitlestbl_institucion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_institucion"] = array();
//	tbl_convenio
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tbl_convenio";
		$detailsParam["dOriginalTable"] = "tbl_convenio";


	
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tbl_convenio";
	$detailsParam["dCaptionTable"] = GetTableCaption("tbl_convenio");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tbl_institucion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tbl_institucion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tbl_institucion"][$dIndex]["masterKeys"][]="id_institucion";

				$detailsTablesData["tbl_institucion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tbl_institucion"][$dIndex]["detailKeys"][]="id_institucion";

// tables which are master tables for current table (detail)
$masterTablesData["tbl_institucion"] = array();



	
				$strOriginalDetailsTable="tbl_ciudad";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tbl_ciudad";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tbl_ciudad";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tbl_institucion"][0] = $masterParams;
				$masterTablesData["tbl_institucion"][0]["masterKeys"] = array();
	$masterTablesData["tbl_institucion"][0]["masterKeys"][]="id_ciudad";
				$masterTablesData["tbl_institucion"][0]["detailKeys"] = array();
	$masterTablesData["tbl_institucion"][0]["detailKeys"][]="id_ciudad";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_institucion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_institucion,  	institucion,  	telefono,  	email,  	direccion,  	responsable,  	telefono_responsable,  	email_responsable,  	tipo_institucion,  	id_ciudad,  	estado";
$proto0["m_strFrom"] = "FROM tbl_institucion";
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
	"m_strName" => "id_institucion",
	"m_strTable" => "tbl_institucion",
	"m_srcTableName" => "tbl_institucion"
));

$proto6["m_sql"] = "id_institucion";
$proto6["m_srcTableName"] = "tbl_institucion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "institucion",
	"m_strTable" => "tbl_institucion",
	"m_srcTableName" => "tbl_institucion"
));

$proto8["m_sql"] = "institucion";
$proto8["m_srcTableName"] = "tbl_institucion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "tbl_institucion",
	"m_srcTableName" => "tbl_institucion"
));

$proto10["m_sql"] = "telefono";
$proto10["m_srcTableName"] = "tbl_institucion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "tbl_institucion",
	"m_srcTableName" => "tbl_institucion"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "tbl_institucion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "tbl_institucion",
	"m_srcTableName" => "tbl_institucion"
));

$proto14["m_sql"] = "direccion";
$proto14["m_srcTableName"] = "tbl_institucion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "responsable",
	"m_strTable" => "tbl_institucion",
	"m_srcTableName" => "tbl_institucion"
));

$proto16["m_sql"] = "responsable";
$proto16["m_srcTableName"] = "tbl_institucion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono_responsable",
	"m_strTable" => "tbl_institucion",
	"m_srcTableName" => "tbl_institucion"
));

$proto18["m_sql"] = "telefono_responsable";
$proto18["m_srcTableName"] = "tbl_institucion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "email_responsable",
	"m_strTable" => "tbl_institucion",
	"m_srcTableName" => "tbl_institucion"
));

$proto20["m_sql"] = "email_responsable";
$proto20["m_srcTableName"] = "tbl_institucion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_institucion",
	"m_strTable" => "tbl_institucion",
	"m_srcTableName" => "tbl_institucion"
));

$proto22["m_sql"] = "tipo_institucion";
$proto22["m_srcTableName"] = "tbl_institucion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "id_ciudad",
	"m_strTable" => "tbl_institucion",
	"m_srcTableName" => "tbl_institucion"
));

$proto24["m_sql"] = "id_ciudad";
$proto24["m_srcTableName"] = "tbl_institucion";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tbl_institucion",
	"m_srcTableName" => "tbl_institucion"
));

$proto26["m_sql"] = "estado";
$proto26["m_srcTableName"] = "tbl_institucion";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "tbl_institucion";
$proto29["m_srcTableName"] = "tbl_institucion";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id_institucion";
$proto29["m_columns"][] = "institucion";
$proto29["m_columns"][] = "telefono";
$proto29["m_columns"][] = "email";
$proto29["m_columns"][] = "direccion";
$proto29["m_columns"][] = "responsable";
$proto29["m_columns"][] = "telefono_responsable";
$proto29["m_columns"][] = "email_responsable";
$proto29["m_columns"][] = "tipo_institucion";
$proto29["m_columns"][] = "id_ciudad";
$proto29["m_columns"][] = "estado";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "tbl_institucion";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "tbl_institucion";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_institucion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_institucion = createSqlQuery_tbl_institucion();


	
		;

											

$tdatatbl_institucion[".sqlquery"] = $queryData_tbl_institucion;

include_once(getabspath("include/tbl_institucion_events.php"));
$tableEvents["tbl_institucion"] = new eventclass_tbl_institucion;
$tdatatbl_institucion[".hasEvents"] = true;

?>
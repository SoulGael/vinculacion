<?php
			$optionsArray = array( 'master' => array( 'tbl_institucion' => array( 'preview' => false ) ),
'fields' => array( 'gridFields' => array( 'id_convenio',
'convenio',
'objeto',
'duracion',
'fecha_inicio',
'fecha_fin',
'tipo_convenio',
'documentos',
'areas',
'id_institucion',
'estado',
'id_extension' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id_convenio' => array( 'integrated_edit_field' ),
'convenio' => array( 'integrated_edit_field1' ),
'objeto' => array( 'integrated_edit_field2' ),
'duracion' => array( 'integrated_edit_field3' ),
'fecha_inicio' => array( 'integrated_edit_field4' ),
'fecha_fin' => array( 'integrated_edit_field5' ),
'tipo_convenio' => array( 'integrated_edit_field6' ),
'documentos' => array( 'integrated_edit_field7' ),
'areas' => array( 'integrated_edit_field8' ),
'id_institucion' => array( 'integrated_edit_field9' ),
'estado' => array( 'integrated_edit_field10' ),
'id_extension' => array( 'integrated_edit_field11' ) ) ),
'pdf' => array( 'pdfView' => true ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field10' => 'grid',
'integrated_edit_field11' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field11' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11' ),
'view_pdf' => array( 'view_pdf' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ) ) ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit',
'view_pdf' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field' => array( 'field' => 'id_convenio',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'convenio',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'objeto',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'duracion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'fecha_inicio',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'fecha_fin',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'tipo_convenio',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 'documentos',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'areas',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'id_institucion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'estado',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'view_pdf' => array( 'type' => 'view_pdf' ),
'integrated_edit_field11' => array( 'field' => 'id_extension',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 2 );
		?>
<?php
			$optionsArray = array( 'totals' => array( 'id_vinculacion_estudiantes' => array( 'totalsType' => '' ),
'cedula' => array( 'totalsType' => '' ),
'nivel' => array( 'totalsType' => '' ),
'paralelo' => array( 'totalsType' => '' ),
'horas_planificadas' => array( 'totalsType' => '' ),
'id_proyecto_vinculacion' => array( 'totalsType' => '' ),
'id_periodo' => array( 'totalsType' => '' ),
'id_carrera' => array( 'totalsType' => '' ),
'estado' => array( 'totalsType' => '' ),
'codigo_solicitud' => array( 'totalsType' => '' ),
'doc_oficio_contestacion' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'cedula',
'nivel',
'paralelo',
'horas_planificadas',
'id_proyecto_vinculacion',
'id_periodo',
'id_carrera',
'estado',
'codigo_solicitud',
'doc_oficio_contestacion' ),
'exportFields' => array( 'cedula',
'nivel',
'paralelo',
'horas_planificadas',
'id_proyecto_vinculacion',
'id_periodo',
'id_carrera',
'estado',
'codigo_solicitud',
'doc_oficio_contestacion' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'cedula' => array( 'export_field1' ),
'nivel' => array( 'export_field2' ),
'paralelo' => array( 'export_field3' ),
'horas_planificadas' => array( 'export_field4' ),
'id_proyecto_vinculacion' => array( 'export_field5' ),
'id_periodo' => array( 'export_field6' ),
'id_carrera' => array( 'export_field7' ),
'estado' => array( 'export_field8' ),
'codigo_solicitud' => array( 'export_field' ),
'doc_oficio_contestacion' => array( 'export_field9' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'export_header' ),
'grid' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field',
'export_field9' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'export_header' => 'top',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field' => 'grid',
'export_field9' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field',
'export_field9' ) ),
'cellMaps' => array(  ) ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ) ) ),
'misc' => array( 'type' => 'export',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field',
'export_field9' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field1' => array( 'field' => 'cedula',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'nivel',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'paralelo',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'horas_planificadas',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'id_proyecto_vinculacion',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'id_periodo',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'id_carrera',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'estado',
'type' => 'export_field' ),
'export_field' => array( 'field' => 'codigo_solicitud',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'doc_oficio_contestacion',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 2,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>
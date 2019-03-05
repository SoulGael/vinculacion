Runner.buttonEvents["New_Button"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button';
	
	if ( !pageObj.buttonEventBefore['New_Button'] ) {
		pageObj.buttonEventBefore['New_Button'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row ) {		
// Put your code here.
params["hrs_proyecto_vinculacion"] = $("#value_hrs_proyecto_vinculacion_1").val();
params["hrs_docente_tutor"] = $("#value_hrs_docente_tutor_1").val();
params["hrs_docente_participante"] = $("#value_hrs_docente_participante_1").val();
params["hrs_seguimiento_graduados"] = $("#value_hrs_seguimiento_graduados_1").val();
params["hrs_supervision_pasantias_comunitario"] = $("#value_hrs_supervision_pasantias_comunitario_1").val();
params["id_periodo"] = $("#value_id_periodo_1").val();
//ctrl.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button'] ) {
		pageObj.buttonEventAfter['New_Button'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row ) {
// Put your code here.
var message = result["mensaje"] + " !!!";
alert(message);
//ctrl.setMessage(message);

		}
	}
	
	$('a[id="New_Button"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button" + "_" + Runner.genId();
		
		// create object
		var button_New_Button = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button"
		});
		
		// init
		button_New_Button.init( {args: [ pageObj, proxy, pageid ]} );
	});
};


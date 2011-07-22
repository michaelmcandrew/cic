
$(document).ready(function(){

	if( $("#edit-district").val() != '93') {
		$("#edit-circuit-1-wrapper").hide();
	};
	if( $("#edit-district").val() != '94') {
		$("#edit-circuit-2-wrapper").hide();
	};
	if( $("#edit-district").val() != '95') {
		$("#edit-circuit-3-wrapper").hide();
	};
	if( $("#edit-district").val() != '96') {
		$("#edit-circuit-4-wrapper").hide();
	};
	if( $("#edit-district").val() != '97') {
		$("#edit-circuit-5-wrapper").hide();
	};
	if( $("#edit-district").val() != '98') {
		$("#edit-circuit-6-wrapper").hide();
	};
	if( $("#edit-district").val() != '99') {
		$("#edit-circuit-7-wrapper").hide();
	};
	
	
	
	$("#edit-district").change(function(){
		$("#edit-circuit-11-wrapper").hide();
		$("#edit-circuit-21-wrapper").hide();
		$("#edit-circuit-9-wrapper").hide();
		$("#edit-circuit-4-wrapper").hide();
		$("#edit-circuit-15-wrapper").hide();
		$("#edit-circuit-6-wrapper").hide();
		$("#edit-circuit-7-wrapper").hide();
		if( $("#edit-district").val() == '93') {
			$("#edit-circuit-6-wrapper").show('slow');
		};
		if( $("#edit-district").val() == '94') {
			$("#edit-circuit-2-wrapper").show('slow');
		};
		if( $("#edit-district").val() == '95') {
			$("#edit-circuit-3-wrapper").show('slow');
		};
		if( $("#edit-district").val() == '96') {
			$("#edit-circuit-4-wrapper").show('slow');
		};
		if( $("#edit-district").val() == '97') {
			$("#edit-circuit-5-wrapper").show('slow');
		};
		if( $("#edit-district").val() == '98') {
			$("#edit-circuit-6-wrapper").show('slow');
		};
		if( $("#edit-district").val() == '99') {
			$("#edit-circuit-7-wrapper").show('slow');
		};
	});

});
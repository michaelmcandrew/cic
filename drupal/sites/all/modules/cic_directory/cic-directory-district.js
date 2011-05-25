


//When you load the page, hide the form elements

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
		$("#edit-circuit-1-wrapper").hide();
		$("#edit-circuit-2-wrapper").hide();
		$("#edit-circuit-3-wrapper").hide();
		$("#edit-circuit-4-wrapper").hide();
		$("#edit-circuit-5-wrapper").hide();
		$("#edit-circuit-6-wrapper").hide();
		$("#edit-circuit-7-wrapper").hide();
		if( $("#edit-district").val() == '93') {
			$("#edit-circuit-1-wrapper").show('slow');
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

//When you select petrol, show petrol and hide diesel
//Todo, add if statements to check if the element is already if the state that you want to change it to
/*
$(document).ready(function(){
	$("#edit-circuit-petrol-size-wrapper").slideDown();	
	$("#edit-circuit-diesel-size-wrapper").slideUp();	
});

//When you select petrol, show diesel and hide petrol
//Todo, add if statements to check if the element is already if the state that you want to change it to

$(document).ready(function(){
	$("#edit-circuit-petrol-size-wrapper").slideUp();	
	$("#edit-circuit-diesel-size-wrapper").slideDown();	
});

*/
function validation(){
	// Name validation //
	var letters=/^[A-Za-z. ]+$/;
	if($("#fname").val()!="" && $("#fname").val().match(letters)){
		
	}else{
		alert('Enter proper name');
		document.getElementById("fname").focus();
		return false;
	}
	// Caste validation //
	if($("#caste").val()=="-" || $("#gender").val()=="-" ){
		alert('Choose Your Caste/Gender');
		window.scrollTo(10,20);
		
		return false;
	}else{
		
	}
	// 10th Percentage validation //
	
	if($("#per_x").val().length==0 ||$("#year_x").val().length==0 || $("#board_x").val().length==0){
		alert('Please Give Your 10th Details Properly');
		window.scrollTo(10,25);
		
		return false;
	}
	
	if($("#per_xii").val().length==0 ||$("#year_xii").val().length==0 || $("#board_xii").val().length==0){
		alert('Please Give Your 12th Details Properly');
		window.scrollTo(10,25);
		
		return false;
	}
	
	if($("#qualifying").val()=="-"){
		alert('Choose Qualifying Examination');
		window.scrollTo(10,25);
		
		return false;
	}
	
	
	var letters=/^[0-9]+$/;
	var check=mobile.value.length;
	if(mobile.value.match(letters) && check==10){
		
	}
	else{
		alert("Mobile must have numeric characters only");
		mobile.focus();
		return false;
	}
	
	if($("#photo").val()==""){alert("Please Give Your Scanned Photocopy"); return false;}
		if($("#sign").val()==""){alert("Please Give Your Scanned Photocopy"); return false;}
		
		
		
	
	 return confirm("Attention:\nPlease make sure that all the information that you have entered are correct. You shall be held responsible for inaccuracy and your application will be rejected if any information is subsequently found to be false." );
}


function mobilecheck()
{
	
	var letters=/^[0-9]+$/;
	
	if(mobile.value.match(letters) ){
		return true;
	}
	else{
		alert("Phone must have numeric characters only");
		$("#mobile").val('');
		mobile.focus();
		return false;
	}
}


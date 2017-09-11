	function validation(){
	var fname=document.app_form.fname;
	var caste=document.app_form.caste;
	var gender=document.app_form.gender;
	var percentage_x=document.app_form.per_x;
	var percentage_xii=document.app_form.per_xii;
	var year_x=document.app_form.year_x;
	var year_xii=document.app_form.year_xii;
	var board_x=document.app_form.board_x;
	var board_xii=document.app_form.board_xii;
	var qualifying=document.app_form.qualifying;
	var percentage_gradu=document.app_form.per_gradu;
	var year_gradu=document.app_form.year_gradu;
	var university=document.app_form.university;
	var college=document.app_form.college;
	var roll=document.app_form.roll;
	var gate_rank=document.app_form.gate_rank;
	var father=document.app_form.father;
	var mother=document.app_form.mother;
	var income=document.app_form.income;
	var guardian=document.app_form.guardian;
	var occupation=document.app_form.occupation;
	var guardian_phone=document.app_form.guardian_phone;
	var dob=document.app_form.dob;
	var religion=document.app_form.religion;
	var resi_address=document.app_form.resi_address;
	var per_address=document.app_form.per_address;
	var nationality=document.app_form.nationality;
	var district=document.app_form.district;
	var state=document.app_form.state;
	var pin=document.app_form.pin;
	var email=document.app_form.email;
	var phone=document.app_form.phone;
	var mobile=document.app_form.mobile;
	var disability=document.app_form.disability;
	var blood=document.app_form.blood;

	if(name_valid(fname)){
		if(select_valid(caste)){
			if(select_valid(gender)){
				if(percentage_valid(percentage_x)){
					if(percentage_valid(percentage_xii)){
						if(year_valid(year_x)){
							if(year_valid(year_xii)){
								if(board_valid(board_x)){
									if(board_valid(board_xii)){
										if(select_valid(qualifying)){
											if(percentage_valid(percentage_gradu)){
												if(year_valid(year_gradu)){
													if(university_valid(university)){
														if(college_valid(college)){
															if(roll_valid(roll)){
																if(gate_rank_valid(gate_rank)){
																	if(name_valid(father)){
																		if(name_valid(mother)){
																			if(income_valid(income)){
																				if(name_valid(guardian)){
																					if(occupation_valid(occupation)){
																						if(phone_valid(guardian_phone)){
																							if(dob_valid(dob)){
																								if(select_valid(religion)){
																									if(address_valid(resi_address)){
																										if(address_valid(per_address)){
																											if(check_valid(nationality)){
																												if(select_valid(district)){
																													if(select_valid(state)){
																														if(pin_valid(pin)){
																															if(email_valid(email)){
																																if(phone_valid(phone)){
																																	if(phone_valid(mobile)){
																																		if(check_valid(disability)){
																																			if(blood_valid(blood)){

																																			}
																																		}
																																	}
																																}
																															}
																														}
																													}
																												}
																											}
																										}
																									}
																								}
																							}
																						}
																					}
																				}
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
	return false;
}

function name_valid(fname){
	var letters=/^[A-Za-z ]+$/;
	if(fname.value.match(letters)){
		return true;
	}
	else{
		alert("Name must have alphabet characters only");
		fname.focus();
		return false;
	}
}

function select_valid(select){
 	if(select.value=="-"){
		alert('Select choice from the list');
		select.focus();
		return false;
	}
	else{
		return true;
	}
}

function percentage_valid(percentage){
	var numbers=/^[0-9.]+$/;
	if(percentage.value.match(numbers)){
		return true;
	}
	else{
		alert('Percentage must have numeric characters only');
		percentage.focus();
		return false;
	}
}

function year_valid(year){
	var numbers=/^[0-9]+$/;
	if(year.value.match(numbers)){
		return true;
	}
	else{
		alert('Year of Passing must have numeric characters only');
		year.focus();
		return false;
	}
}

function board_valid(board){
	var letters=/^[A-Za-z. ]+$/;
	if(board.value.match(letters)){
		return true;
	}
	else{
		alert("Board name must have alphabet characters only");
		board.focus();
		return false;
	}
}

function university_valid(university){
	var letters=/^[A-Za-z. ]+$/;
	if(university.value.match(letters)){
		return true;
	}
	else{
		alert("University name must have alphabet characters only");
		university.focus();
		return false;
	}
}

function college_valid(college){
	var letters=/^[A-Za-z. ]+$/;
	if(college.value.match(letters)){
		return true;
	}
	else{
		alert("College name must have alphabet characters only");
		college.focus();
		return false;
	}
}

function roll_valid(roll){
	var letters=/^[A-Za-z0-9/-]+$/;
	if(roll.value.match(letters)){
		return true;
	}
	else{
		alert("Roll must have numeric or alpha-numeric characters only");
		roll.focus();
		return false;
	}
}

function gate_rank_valid(gate_rank){
	var letters=/^[0-9]+$/;
	if(gate_rank.value.match(letters)){
		return true;
	}
	else{
		alert("Rank must have numeric characters only");
		gate_rank.focus();
		return false;
	}
}

function income_valid(income){
	var letters=/^[0-9,.]+$/;
	if(income.value.match(letters)){
		return true;
	}
	else{
		alert("Income must have numeric characters only");
		income.focus();
		return false;
	}
}

function occupation_valid(occupation){
	var letters=/^[A-Za-z. ]+$/;
	if(occupation.value.match(letters)){
		return true;
	}
	else{
		alert("Occupation name must have alphabet characters only");
		occupation.focus();
		return false;
	}
}

function phone_valid(phone){
	var letters=/^[0-9]+$/;
	var check=phone.value.length;
	if(phone.value.match(letters) && check==10){
		return true;
	}
	else{
		alert("Phone must have numeric characters only");
		phone.focus();
		return false;
	}
}

function dob_valid(dob){
	var letters=/^[0-9/]+$/;
	if(dob.value.match(letters)){
		return true;
	}
	else{
		alert("DOB must have numeric characters only");
		dob.focus();
		return false;
	}
}

function address_valid(address){
	var letters=/^[A-Za-z0-9.-/:+&,;= ]+$/;
	if(address.value.match(letters)){
		return true;
	}
	else{
		alert("Address name must have alpha-numeric characters only");
		address.focus();
		return false;
	}
}

function check_valid(check){
	x=0;
	if(check.checked){
		x++;
	}
	if(x==0){
		alert("Check item");
		check.focus();
		return false;
	}
}

function pin_valid(pin){
	var letters=/^[0-9]+$/;
	var check=pin.value.length;
	if(pin.value.match(letters) && check==6){
		return true;
	}
	else{
		alert("Pin must have numeric characters only");
		pin.focus();
		return false;
	}
}

function email_valid(email){
	var letters=/^[A-Za-z0-9@_-.]+$/;
	if(email.value.match(letters)){
		return true;
	}
	else{
		alert("Email must have alpha-numeric characters only");
		email.focus();
		return false;
	}
}

function blood_valid(blood){
	var letters=/^[A-Za-z+-]+$/;
	if(blood.value.match(letters)){
		return true;
	}
	else{
		alert("Blood group must have alpha-numeric characters only");
		blood.focus();
		return false;
	}
}

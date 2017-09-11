<?php
	include 'master.php';
?>

<!doctype html>
<html lang="en">
<head>
</head>
	<body id="main_form">
		<div class='container'>
		<div class="row">
		<form method="POST" action="preview.php" enctype="multipart/form-data" name="app_form" id="app_form"><br/><br/><br/><br/>
		<div id="app_tab">
			<h2 class="ui-widget ui-widget-header ui-corner-all" id="heading_title"><b>Basic Details</b></h2><br/>
			<div class="table-responsive">
			<table border="0" class="table table-bordered">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Full Name <span style="color:#FF0000">*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control form-control-lg" name="fname" id="fname" placeholder="Enter Full Name"/>
							</div>
					</div>
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Caste <span style="color:#FF0000">*</span></label>
							<div class="col-sm-3">
								<select class="form-control" id="caste" name="caste">
									<option value="-" selected="selected">Select Caste</option>
									<option value="General">General</option>
									<option value="SC">SC</option>
									<option value="ST">ST</option>
									<option value="OBC-A">OBC-A</option>
									<option value="OBC-B">OBC-B</option>
								</select>
							</div>
						<label for="lgFormGroupInput" class="col-sm-1 col-form-label col-form-label-lg"></label>
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Gender <span style="color:#FF0000">*</span></label>
							<div class="col-sm-3">
								<select class="form-control" name="gender" id="gender">
									<option value="-" selected="selected">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Transgender">Transgender</option>
								</select>
							</div>
					</div>
			</table>
			</div>
			<h2 class="ui-widget ui-widget-header ui-corner-all" id="heading_title"><b>Academic Details</b></h2><br/>
			<div class="table-responsive">
			<table border="0" class="table table-bordered">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">% in 10th <span style="color:#FF0000">*</span></label>
							<div class="col-sm-2">
								<input type="text" class="form-control form-control-lg" name="per_x" id="per_x" placeholder="%" maxlength="3"/>
							</div>
						<label for="lgFormGroupInput" class="col-sm-1 col-form-label col-form-label-lg">Year <span style="color:#FF0000">*</span></label>
							<div class="col-sm-2">
								<input type="text" class="form-control form-control-lg" name="year_x" id="year_x" placeholder="Year of Passing" maxlength="4" />
							</div>
						<label for="lgFormGroupInput" class="col-sm-1 col-form-label col-form-label-lg">Board <span style="color:#FF0000">*</span></label>
							<div class="col-sm-3">
								<input type="text" class="form-control form-control-lg" name="board_x" id="board_x" placeholder="Enter Board Name" autocomplete="on"/>
							</div>
					</div>
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">% in 12th <span style="color:#FF0000">*</span></label>
							<div class="col-sm-2">
								<input type="text" class="form-control form-control-lg" name="per_xii" id="per_xii" placeholder="%" maxlength="3"/>
							</div>
						<label for="lgFormGroupInput" class="col-sm-1 col-form-label col-form-label-lg">Year <span style="color:#FF0000">*</span></label>
							<div class="col-sm-2">
								<input type="text" class="form-control form-control-lg" name="year_xii" id="year_xii" placeholder="Year of Passing" maxlength="4"/>
							</div>
						<label for="lgFormGroupInput" class="col-sm-1 col-form-label col-form-label-lg">Board <span style="color:#FF0000">*</span></label>
							<div class="col-sm-3">
								<input type="text" class="form-control form-control-lg" name="board_xii" id="board_xii" placeholder="Enter Board Name" />
							</div>
					</div>
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Qualifying Examination <span style="color:#FF0000">*</span></label>
							<div class="col-sm-3">
								<select class="form-control" id="qualifying" name="qualifying" required>
									<option value="-" selected="selected">Select Qualifying Examination</option>
									<option value="Graduation">Graduation</option>
							        <option value="BCA">BCA</option>
							        <option value="BTECH">B.Tech</option>
							    </select>
							</div>
						<label for="lgFormGroupInput" class="col-sm-1 col-form-label col-form-label-lg">% <span style="color:#FF0000">*</span></label>
							<div class="col-sm-2">
								<input type="text" class="form-control form-control-lg" name="per_gradu" id="per_gradu" placeholder="%" maxlength="3" required/>
							</div>
						<label for="lgFormGroupInput" class="col-sm-1 col-form-label col-form-label-lg">Year <span style="color:#FF0000">*</span></label>
							<div class="col-sm-2">
								<input type="text" class="form-control form-control-lg" name="year_gradu" id="year_gradu" placeholder="Year of Passing"  maxlength="4" required/>
							</div>
					</div>
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-5 col-form-label col-form-label-lg">Name of University (Passed Graduation/BCA/B.Tech) <span style="color:#FF0000">*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control form-control-lg" name="university" id="university" placeholder="Enter Previous University" required/>
							</div>
					</div>
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name of College <span style="color:#FF0000">*</span></label>
								<div class="col-sm-4">
									<input type="text" class="form-control form-control-lg" name="college" id="college" placeholder="Enter College" required/>
								</div>
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Roll No. <span style="color:#FF0000">*</span></label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-lg" name="roll" id="roll" placeholder="Enter Roll No." required/>
								</div>
					</div>
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-3 col-form-label col-form-label-lg">GATE Rank (if No, Enter 0) <span style="color:#FF0000">*</span></label>
								<div class="col-sm-2">
									<input type="text" class="form-control form-control-lg" name="gate_rank" id="gate_rank" placeholder="GATE Rank" required/>
								</div>
					</div>
			</table>
			</div>
			<h2 class="ui-widget ui-widget-header ui-corner-all" id="heading_title"><b>Personal Details</b></h2><br/>
			<div class="table-responsive">
			<table border="0" class="table table-bordered">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Father's Name <span style="color:#FF0000">*</span></label>
								<div class="col-sm-4">
									<input type="text" class="form-control form-control-lg" name="father" id="father" placeholder="Enter Father Name" required />
								</div>
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Mother's Name <span style="color:#FF0000">*</span></label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-lg" name="mother" id="mother" placeholder="Enter Mother Name" required/>
								</div>
					</div>
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Annual Income <span style="color:#FF0000">*</span></label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-lg" name="income" id="income" placeholder="Enter Annual Income" required/>
								</div>
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Guardian's Name <span style="color:#FF0000">*</span></label>
								<div class="col-sm-4">
									<input type="text" class="form-control form-control-lg" name="guardian" id="guardian" placeholder="Enter Guardian Name" required/>
								</div>
					</div>
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Guardian's Occupation</label>
								<div class="col-sm-4">
									<input type="text" class="form-control form-control-lg" name="occupation" id="occupation" placeholder="Enter Guardian Occupation" />
								</div>
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Guardian's Phone No. <span style="color:#FF0000">*</span></label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-lg" name="guardian_phone" id="guardian_phone" placeholder="Enter Guardian Conatact No." required />
								</div>
					</div>
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Date of Birth <span style="color:#FF0000">*</span></label>
							<div class="col-sm-3">
								<input type="date" class="form-control form-control-lg" name="dob" id="dob" placeholder="Enter DOB" required/>
							</div>
						<label for="lgFormGroupInput" class="col-sm-1 col-form-label col-form-label-lg"></label>
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Religion</label>
							<div class="col-sm-3">
								<select class="form-control" id="religion" name="religion">
									<option value="-" selected="selected">Select Religion</option>
									<option value="Hinduism">Hinduism</option>
									<option value="Christian">Christian</option>
									<option value="Islam">Islam</option>
									<option value="Jainism">Jainism</option>
									<option value="Buddhism">Buddhism</option>
									<option value="Chinese">Chinese</option>
									<option value="Judaism">Judaism</option>
									<option value="Sikhism">Sikhism</option>
									<option value="Others">Others</option>
								</select>
							</div>
					</div>
					<!--<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Qualifying Examination</label>
							<div class="col-sm-3">
								<select class="form-control" id="qualifying" name="qualifying">
									<option value="-" selected="selected">Select Qualifying Examination</option>
									<option value="Graduation">Graduation</option>
							        <option value="BCA">BCA</option>
							        <option value="BTECH">B.Tech</option>
							    </select>
							</div>
						<label for="lgFormGroupInput" class="col-sm-1 col-form-label col-form-label-lg"></label>
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Year of Passing</label>
							<div class="col-sm-3">
								<select class="form-control" id="passing" name="passing">
									<option value="-" selected="selected">Select Year of Passing</option>
									<option value="2015">2015</option>
						            <option value="2016">2016</option>
									<option value="2017">2017</option>
							    </select>
							</div>
					</div>
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-5 col-form-label col-form-label-lg">Name of University(Passed Graduation/BCA/B.Tech)</label>
							<div class="col-sm-6">
								<input type="text" class="form-control form-control-lg" name="university" id="university" placeholder="Enter Previous University" />
							</div>
					</div>
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name of College</label>
								<div class="col-sm-4">
									<input type="text" class="form-control form-control-lg" name="college" id="college" placeholder="Enter College" />
								</div>
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Roll No.</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-lg" name="roll" id="roll" placeholder="Enter Roll No." />
								</div>
					</div>-->
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-3 col-form-label col-form-label-lg">Residential Address</label>
								<div class="col-sm-8">
									<textarea class="form-control form-control-lg" name="resi_address" id="resi_address" placeholder="Enter Residential Address" required></textarea>
								</div>
					</div>
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-3 col-form-label col-form-label-lg">Permanent Address <span style="color:#FF0000">*</span></label>
								<div class="col-sm-8">
									<textarea class="form-control form-control-lg" name="per_address" id="per_address" placeholder="Enter Permanent Address" ></textarea>
								</div>
					</div>
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Nationality</label>
								<div class="col-sm-4">
									<input name="nationality" id="nationality" value="Indian" checked="checked" type="radio">Indian&nbsp;&nbsp;&nbsp;&nbsp;
									<input name="nationality" id="nationality" value="Others" type="radio">Others
			              		</div>
			            <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">District</label>
								<div class="col-sm-3">
									<select class="form-control" id="district" name="district" >
									<option value="-" selected="selected">Select District</option>
									<option value="Alipurduar">Alipurduar</option>
									<option value="Bankura">Bankura</option>
									<option value="Birbhum">Birbhum</option>
									<option value="Cooch Behar">Cooch Behar</option>
									<option value="Dakshin Dinajpur">Dakshin Dinajpur</option>
									<option value="Darjeeling">Darjeeling</option>
									<option value="Hooghly">Hooghly</option>
									<option value="Howrah">Howrah</option>
									<option value="Jalpaiguri">Jalpaiguri</option>
									<option value="Jhargram">Jhargram</option>
									<option value="Kalimpong">Kalimpong</option>
									<option value="Kolkata">Kolkata</option>
									<option value="Malda">Malda</option>
									<option value="Murshidabad">Murshidabad</option>
									<option value="Nadia">Nadia</option>
									<option value="North 24 Parganas">North 24 Parganas</option>
									<option value="Paschim Bardhaman">Paschim Bardhaman</option>
									<option value="Paschim Medinipur">Paschim Medinipur</option>
									<option value="Purba Bardhaman">Purba Bardhaman</option>
									<option value="Purba Medinipur">Purba Medinipur</option>
									<option value="Purulia">Purulia</option>
									<option value="South 24 Parganas">South 24 Parganas</option>
									<option value="Uttar Dinajpur">Uttar Dinajpur</option>
							    </select>
	              				</div>
	              	</div>
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">State</label>
							<div class="col-sm-4">
								<select class="form-control" id="state" name="state" >
									<option value="-" selected="selected">Select State</option>
									<option value="Andaman And Nicobar">Andaman And Nicobar</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chattisgarh">Chattisgarh</option>
									<option value="Dadra Nagar Haveli">Dadra Nagar Haveli</option>
									<option value="Daman And Diu">Daman And Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu And Kashmir">Jammu And Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Odisha">Odisha</option>
									<option value="Puducherry">Puducherry</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamilnadu">Tamilnadu</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="Uttarakhand">Uttarakhand</option>
									<option value="West Bengal" selected="selected">West Bengal</option>
									<option value="Others">Others</option>
							    </select>
							</div>
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Pin Code</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-lg" name="pin" id="pin" placeholder="Enter Pin Code" >
								</div>
					</div>
					<div class="form-group row">
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email Address</label>
								<div class="col-sm-4">
									<input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Enter Email Address" >
								</div>
						<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Phone No. (if No, Enter 0)</label>
								<div class="col-sm-3">
									<input type="tel" class="form-control form-control-lg" name="phone" id="phone" placeholder="Enter Phone No." >
								</div>
					</div>
	              	<div class="form-group row">
	              		<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Mobile No.</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-lg" name="mobile" id="mobile" placeholder="Enter Mobile No."  maxlength="10" onKeyUp="mobilecheck()" />
								</div>
	              		<label for="lgFormGroupInput" class="col-sm-4 col-form-label col-form-label-lg">Person with Disability (40% & Above)</label>
								<div class="col-sm-3">
									<input name="disability" id="disability" value="Yes" type="radio">Yes&nbsp;&nbsp;&nbsp;&nbsp;
									<input name="disability" id="disability" value="No" checked="checked" type="radio">No
			              		</div>
	              	</div>
	              	<div class="form-group row">
	              		<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Blood Group</label>
								<div class="col-sm-3">
									<input type="text" class="form-control form-control-lg" name="blood" id="blood" placeholder="Enter Blood Group" />
								</div>
	              	</div>
	              	<div class="form-group row">
	              		<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Photo</label>
								<div class="col-sm-3">
									<input type="file" name="photo" id="photo" />
			              		</div>
			            <label for="lgFormGroupInput" class="col-sm-1 col-form-label col-form-label-lg"></label>
			            <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Signature</label>
								<div class="col-sm-3">
									<input type="file" name="sign" id="sign" />
			              		</div>
	              	</div>
	              	<br/><br/>
	              	<div class="form-group row">
						<div class="col-sm-11" style="text-align: center">
							<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Preview" onClick="return validation();" />&nbsp;&nbsp;
							<input type="reset" name="cancel" id="cancel" value="Reset" class="btn btn-danger"/>
						</div>
					</div>
			</table>
			</div>
			</div>
		</form>
		</div>
		</div>
		
	</body>
</html>

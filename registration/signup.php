<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
		<title>Job Seeker Sign Up</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css" />
	</head>
    <body class= "mainclass">
        <div>
			<div id="container_demo" >
					<div id="wrapper">
                        <div id="login">
								<h1>Sign Up</h1>                                    
										
								  <form  method="post" action="signup_processing.php"  enctype="multipart/form-data">
										<fieldset>
											<legend>Personal Information</legend>
												<label>Full Name:</label>
												<input name="full_name"  type="text" placeholder="Enter Your Full Name....." class="span3">
												
												
												<label>Email:</label>
												<input name="email" type="text" placeholder="Enter Your Email......." class="span3">
												<label>Password:</label>
												<input name="password" type="password" placeholder="" class="span3">
												<!--<label>Confirm Password:</label>
												<input name="password" type="password" placeholder="" class="span3">-->
												<label>Date Of birth:</label>
												<input name="date_of_birth" type="text" placeholder="Enter Your Date of Birth" class="span3">
												<label>Phone:</label>
												<input name="phone" type="text" placeholder="Enter Your Phone" class="span3">
												<label>Gender:</label>
												<select name="gender" class="span3" required="">
													<option value=" ">Select sex..........</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
													<option value="Other">Other</option>
												</select>
												<label>Upload Profile Picture</label>
												<input type="file" name="profile_picture">
												
										
										</fieldset>
										<fieldset>
											<legend>Education History</legend>
											<label>Last Degree:</label>
												<select name="last_degree" class="span3">
													<option value=" ">Select your Last Degree.........</option>
													<option value="Doctoral">Doctoral</option>
													<option value="Masters">Masters</option>
													<option value="Bachelors/Honours">Bachelors/Honours</option>
													<option value="Diploma">Diploma</option>
													<option value="Secondary/A Level">Secondary/A Level</option>
													<option value="Primary/O Level">Primary/O Level</option>
													
												</select>
												<label>Institution:</label>
												<input name="institution" class="span3" type="text" placeholder="">
												
												<legend>Employment History</legend>
												
												<label>My Major Field Is:</label>
												<select name="major_field" class="span3" >
													<option value=" ">Select your major field.........</option>
													<option value="Accounting">Accounting</option>
													<option value="Admin">Admin</option>
													<option value="Advertising/event Management">Advertising/event Management</option>
													<option value="Banking/Insurance">Banking/Insurance</option>
													<option value="Call Centre">Call Centre</option>
													<option value="Communications & Public Relation">Communications & Public Relation</option>
													<option value="Coordinator/Secretary">Coordinator/Secretary</option>
													<option value="Design/Creative">Design/Creative</option>
													<option value="Engineer/Architect">Engineer/Architect</option>
													<option value="Education/Training">Education/Training</option>
													<option value="Garments/Textile">Garments/Textile</option>
													<option value="General Management">General Management</option>
													<option value="HR/Org. Development">HR/Org. Development</option>
													<option value="IT/Telecommunication">IT/Telecommunication</option>
													<option value="Legal/Secretarial">Legal/Secretarial</option>
													<option value="Marketing/Sales">Marketing/Sales</option>
													<option value="Medical/Pharmaceutical">Medical/Pharmaceutical</option>
													<option value="NGO/Development">NGO/Development</option>
													<option value="Others">Others</option>
													
													
												</select>
												<label>I Am Specialized In:</label>
												<select name="specialization" class="span3">
													<option value=" ">Select Specialization..........</option>
													<option value="Telecom">Telecom</option>
													<option value="Banking">Banking</option>
													<option value="Teaching">Teaching</option>
													<option value="HR">HR</option>
													<option value="IT">IT</option>
													<option value="Networking">Networking</option>
													<option value="Research">Research</option>
													<option value="Others">Others</option>
												</select>
												
											<label>My Second Major Field(If Any)</label>
											<select name="second_major_fields" class="span3">
													<option value=" ">Select your second major field.........</option>
													<option value="Accounting">Accounting</option>
													<option value="Admin">Admin</option>
													<option value="Advertising/event Management">Advertising/event Management</option>
													<option value="Banking/Insurance">Banking/Insurance</option>
													<option value="Call Centre">Call Centre</option>
													<option value="Communications & Public Relation">Communications & Public Relation</option>
													<option value="Coordinator/Secretary">Coordinator/Secretary</option>
													<option value="Design/Creative">Design/Creative</option>
													<option value="Engineer/Architect">Engineer/Architect</option>
													<option value="Education/Training">Education/Training</option>
													<option value="Garments/Textile">Garments/Textile</option>
													<option value="General Management">General Management</option>
													<option value="HR/Org. Development">HR/Org. Development</option>
													<option value="IT/Telecommunication">IT/Telecommunication</option>
													<option value="Legal/Secretarial">Legal/Secretarial</option>
													<option value="Marketing/Sales">Marketing/Sales</option>
													<option value="Medical/Pharmaceutical">Medical/Pharmaceutical</option>
													<option value="NGO/Development">NGO/Development</option>
													<option value="Others">Others</option>
											</select>
												
												<label>Second Specialization(If Any):</label>
												<select name="second_specialization" class="span3">
													<option value=" ">Select Second Specialization..........</option>
													<option value="Telecom">Telecom</option>
													<option value="Banking">Banking</option>
													<option value="Teaching">Teaching</option>
													<option value="HR">HR</option>
													<option value="IT">IT</option>
													<option value="Networking">Networking</option>
													<option value="Research">Research</option>
													<option value="Others">Others</option>
												</select>
											<label>Total Length Of Service:</label>
												<select name="total_length_of_service" class="span3">
													<option value=" ">Select Total Length Of Service ..........</option>
													<option value="0-1 Years">0-1 Years</option>
													<option value="1-2 Years">1-2 Years</option>
													<option value="2-3 Years">2-3 Years</option>
													<option value="3-4 Years">3-4 Years</option>
													<option value="4-5 Years">4-5 Years</option>
													<option value="5-6 Years">5-6 Years</option>
													<option value="6-7 Years">6-7 Years</option>
													<option value="7-8 Years">7-8 Years</option>
													<option value="8-9 Years">8-9 Years</option>
													<option value="9-10 Years">9-10 Years</option>
													<option value="10-11 Years">10-11 Years</option>
													<option value="11-12 Years">11-12 Years</option>
													<option value="12-13 Years">12-13 Years</option>
													<option value="13-14 Years">13-14 Years</option>
													<option value="14-15 Years">14-15 Years</option>
													<option value="15-16 Years">15-16 Years</option>
													<option value="16-17 Years">16-17 Years</option>
													<option value="17-18 Years">17-18 Years</option>
													<option value="18-19 Years">18-19 Years</option>
												</select>
											<label>Current Orginazation:</label>
												<input name="current_orginazation" type="text" placeholder="Enter your Current Orginazation" class="span3">
											<label>Type Of Organization:</label>
												<select name="type_of_organization" class="span3">
													<option value=" ">Select Type Of Organization..........</option>
													<option value="Any">Any</option>
													<option value="Advertising Agency">Advertising Agency</option>
													<option value="Agro Based Firm">Agro Based Firm</option>
													<option value="Architecture/Interior Design Firm">Architecture/Interior Design Firm</option>
													<option value="Audit Firm/Tax Consultant">Audit Firm/Tax Consultant</option>
													<option value="AutoMobile Company">AutoMobile Company</option>
													<option value="Banks">Banks</option>
													<option value="BPO">BPO</option>
													<option value="Buying House">Buying House</option>
													<option value="Call Centre">Call Centre</option>
													<option value="Cement Industry">Cement Industry</option>
													<option value="Chemical Industry">Chemical Industry</option>
													<option value="Computer Hardware/Network Companies">Computer Hardware/Network Companies</option>
													<option value="Consulting Firm">Consulting Firm</option>
													<option value="Cosmetic/Personal Care">Cosmetic/Personal Care</option>
													<option value="Design/Printing/Publishing">Design/Printing/Publishing</option>
													<option value="Development Agency">Development Agency</option>
												</select>	
											<label>Current Designation:</label>
												<input name="current_designation" type="text" placeholder="Current Designation" class="span3">
											<label>Duration:</label>
												<select name="duration" class="span3">
													<option value=" ">Select Total Length Of Service ..........</option>
													<option value="0-1 Years">0-1 Years</option>
													<option value="1-2 Years">1-2 Years</option>
													<option value="2-3 Years">2-3 Years</option>
													<option value="3-4 Years">3-4 Years</option>
													<option value="4-5 Years">4-5 Years</option>
													<option value="5-6 Years">5-6 Years</option>
													<option value="6-7 Years">6-7 Years</option>
													<option value="7-8 Years">7-8 Years</option>
													<option value="8-9 Years">8-9 Years</option>
													<option value="9-10 Years">9-10 Years</option>
													<option value="10-11 Years">10-11 Years</option>
													<option value="11-12 Years">11-12 Years</option>
													<option value="12-13 Years">12-13 Years</option>
													<option value="13-14 Years">13-14 Years</option>
													<option value="14-15 Years">14-15 Years</option>
													<option value="15-16 Years">15-16 Years</option>
													<option value="16-17 Years">16-17 Years</option>
													<option value="17-18 Years">17-18 Years</option>
													<option value="18-19 Years">18-19 Years</option>
												</select>
											
											<label>Current Salary(BDT):</label>
												<select name="current_salary" class="span3">
													<option value=" ">Select Your  Current Salary..........</option>
													<option value="below 10000">below 10000</option>
													<option value="10000-20000">10000-20000</option>
													<option value="20000-30000">20000-30000</option>
													<option value="30000-40000">30000-40000</option>
													<option value="40000-50000">40000-50000</option>
													<option value="50000-60000">50000-60000</option>
													<option value="60000-70000">60000-70000</option>
													<option value="70000-80000">70000-80000</option>
													<option value="80000-90000">80000-90000</option>
													<option value="90000-100000">90000-100000</option>
													<option value="100000-200000">100000-200000</option>
													<option value="200000-300000">200000-300000</option>
													<option value="300000-400000">300000-400000</option>
													<option value="above 500000">above 500000</option>
												</select>
											<label>Expected Salary(BDT):</label>
												<select name="expected_salary" class="span3">
													<option value=" ">Select Your  Expected Salary..........</option>
													<option value="below 10000">below 10000</option>
													<option value="10000-20000">10000-20000</option>
													<option value="20000-30000">20000-30000</option>
													<option value="30000-40000">30000-40000</option>
													<option value="40000-50000">40000-50000</option>
													<option value="50000-60000">50000-60000</option>
													<option value="60000-70000">60000-70000</option>
													<option value="70000-80000">70000-80000</option>
													<option value="80000-90000">80000-90000</option>
													<option value="90000-100000">90000-100000</option>
													<option value="100000-200000">100000-200000</option>
													<option value="200000-300000">200000-300000</option>
													<option value="300000-400000">300000-400000</option>
													<option value="above 500000">above 500000</option>
												</select>	
										</fieldset>
										<fieldset>
												<legend>Upload Your CV(Doc/PDF Format)</legend>
												<label>Upload CV</label>
												<input type="file" name="cv">
												
										</fieldset>
									


							<p class="signin button"> 
									<input type="submit" value="Sign up" name="signup"/> 
							</p>
                            <p class="change_link">  
									Already a member ?
									<a href="login.php" class="to_register"> Go and log in </a>
							</p>
							</form>
						</div>
					</div>
            </div>

            
						
         </div>
                
            
        
    </body>
	
</html>


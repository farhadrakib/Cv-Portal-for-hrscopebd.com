<?php 

require_once('connection/conf.php');


	$user_id = $_SESSION['user_id'];
	
	 $sql = "SELECT * FROM job_seekers WHERE id = '$user_id'";
	
	$result = mysql_query($sql);
	if ($result==false)
		{
			die(mysql_error());
		}
	$user_info= mysql_fetch_assoc($result);
	
?>


<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
		<title>Profile</title>
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.css" />
		<link href="bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet"
	</head>
    <body class= "mainclass">
        <div>
			<div id="container_demo" >
					<div id="wrapper">
                        <div id="login" style="margin-left:-82px;width:130%">
							
							        <div class="navbar">
										<div class="navbar-inner">
										
											<ul class="nav">
												<li class="active"><a href="profile.php">Home</a></li>
												<li><a href="doc_upload.php">Doc Upload</a></li>
												<li><a href="logout.php">LogOut</a></li>
											</ul>
										</div>
									</div>
								
								<div>
									<ul class="thumbnails" style="float:right;">
	
											<li class="span2" >
											<a  class="thumbnail" data-toggle="modal" >
											<img src="<?php echo $user_info['profile_picture'];?>" alt="No Image Uploaded">
												
											</a>
											
											</li>
									</ul>
												
								</div>
							  
								<div style="width:200px;margin-top:150px;font-weight:bold;font-size:16px;">Basic Information:</div>	
							   		
							   <table class="table table-bordered">
										 	<div style="width:200px;font-weight:bold;font-size:12px;float:right;margin-right:-342px;margin-top: -9px;"><a href="#update_modal" data-toggle="modal">Edit</a></div>
										<tbody>
											
											<tr>
												<td width="200px;"><div>Full name</div></td>
												
												<td>
														<div><?php echo $user_info['full_name'];?></div>
														
														
													
													
												</td>
												
												
												
											</tr>
											<tr>
												<td>Email:</td>
												<td><?php echo $user_info['date_of_birth'];?></td>
												
												
											</tr>
											<tr>
												<td>Date Of Birth:</td>
												<td><?php echo $user_info['email'];?></td>
												
											</tr>
											<tr>
												<td>Phone:</td>
												<td><?php echo $user_info['phone'];?></td>
												
											</tr>
											<tr>
												<td>Gender:</td>
												<td><?php echo $user_info['gender'];?></td>
												
											</tr>
											<tr>
												<td>Last Degree:</td>
												<td><?php echo $user_info['last_degree'];?></td>
												
											</tr>
											<tr>
												<td>Institution:</td>
												<td><?php echo $user_info['institution'];?></td>
											
											</tr>
											<tr>
												<td>Major Filed:</td>
												<td><?php echo $user_info['major_field'];?></td>
												
											</tr>
											<tr>
												<td>Specialization:</td>
												<td><?php echo $user_info['specialization'];?></td>
												
											</tr>
											<tr>
												<td>Second Major Field(If Any):</td>
												<td><?php echo $user_info['second_major_field'];?></td>
												
											</tr>
											<tr>
												<td>Second Specialization(If Any):</td>
												<td><?php echo $user_info['second_specialization'];?></td>
												
											</tr>
											<tr>
												<td>Total Length Of Service:</td>
												<td><?php echo $user_info['total_length_of_service'];?></td>
												
											</tr>
											<tr>
												<td>Current Organization:</td>
												<td><?php echo $user_info['current_orginization'];?></td>
												
											</tr>
											<tr>
												<td>Type Of Organization:</td>
												<td><?php echo $user_info['type_of_orginaization'];?></td>
												
											</tr>
											<tr>
												<td>Current Designation:</td>
												<td><?php echo $user_info['current_designation'];?></td>
												
											</tr>
											<tr>
												<td>Duration:</td>
												<td><?php echo $user_info['duration'];?></td>
												
											</tr>
											<tr>
												<td>Current Salary(BDT):</td>
												<td><?php echo $user_info['current_salary'];?></td>
												
											</tr>
											<tr>
												<td>Expected Salary(BDT):</td>
												<td><?php echo $user_info['expected_salary'];?></td>
												
											</tr>
											
											
										</tbody>
								</table>
						
							
						</div>
					</div>
            </div>

            
						
         </div>
                
        <div id="update_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">Basic Information</h3>
			</div>
			<div class="modal-body">
				 <table class="table table-bordered">
										 	<div style="width:200px;font-weight:bold;font-size:12px;float:right;margin-right:-342px;margin-top: -9px;"><a href="#update_modal" data-toggle="modal">Edit</a></div>
										<tbody>
											
											<tr>
												<td width="200px;"><div>Full name</div></td>
												
												<td>
														<div><a class="full_name" id="full_name" data-name="full_name" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['full_name'];?></a></div>
														
														
													
													
												</td>
												
												
												
											</tr>
											<tr>
												<td>Email:</td>
												<td><a class="date_of_birth" id="date_of_birth" data-name="date_of_birth" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['date_of_birth'];?></a></td>
												
												
											</tr>
											<tr>
												<td>Date Of Birth:</td>
												<td><a class="email" id="email" data-name="email" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['email'];?></a></td>
												
											</tr>
											<tr>
												<td>Phone:</td>
												<td><a class="phone" id="phone" data-name="phone" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['phone'];?></a></td>
												
											</tr>
											<tr>
												<td>Gender:</td>
												<td><a class="gender" id="gender" data-name="gender" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['gender'];?></a></td>
												
											</tr>
											<tr>
												<td>Last Degree:</td>
												<td><a class="last_degree" id="last_degree" data-name="last_degree" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['last_degree'];?></a></td>
												
											</tr>
											<tr>
												<td>Institution:</td>
												<td><a class="institution" id="institution" data-name="institution" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['institution'];?></a></td>
											
											</tr>
											<tr>
												<td>Major Filed:</td>
												<td><a class="major_field" id="major_field" data-name="major_field" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['major_field'];?></a></td>
												
											</tr>
											<tr>
												<td>Specialization:</td>
												<td><a class="specialization" id="specialization" data-name="specialization" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['specialization'];?></a></td>
												
											</tr>
											<tr>
												<td>Second Major Field(If Any):</td>
												<td><a class="second_major_field" id="second_major_field" data-name="second_major_field" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['second_major_field'];?></a></td>
												
											</tr>
											<tr>
												<td>Second Specialization(If Any):</td>
												<td><a class="second_specialization" id="second_specialization" data-name="second_specialization" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['second_specialization'];?></a></td>
												
											</tr>
											<tr>
												<td>Total Length Of Service:</td>
												<td><a class="total_length_of_service" id="total_length_of_service" data-name="total_length_of_service" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['total_length_of_service'];?></a></td>
												
											</tr>
											<tr>
												<td>Current Organization:</td>
												<td><a class="current_orginization" id="current_orginization" data-name="current_orginization" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['current_orginization'];?></a></td>
												
											</tr>
											<tr>
												<td>Type Of Organization:</td>
												<td><a class="type_of_orginaization" id="type_of_orginaization" data-name="type_of_orginaization" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['type_of_orginaization'];?></a></td>
												
											</tr>
											<tr>
												<td>Current Designation:</td>
												<td><a class="current_designation" id="current_designation" data-name="current_designation" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['current_designation'];?></a></td>
												
											</tr>
											<tr>
												<td>Duration:</td>
												<td><a class="duration" id="duration" data-name="duration" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['duration'];?></a></td>
												
											</tr>
											<tr>
												<td>Current Salary(BDT):</td>
												<td><a class="current_salary" id="current_salary" data-name="current_salary" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['current_salary'];?></a></td>
												
											</tr>
											<tr>
												<td>Expected Salary(BDT):</td>
												<td><a class="expected_salary" id="expected_salary" data-name="expected_salary" data-url="profile_update.php" data-pk="<?php echo $user_info['id']?>"><?php echo $user_info['expected_salary'];?></a></td>
												
											</tr>
											
											
										</tbody>
								</table>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-primary" id="modalbtn1">Save changes</button>
			</div>
		</div>    
     	
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script> 
		<script src="bootstrap-editable/js/bootstrap-editable.js"></script>	
		<script src="bootstrap/js/profile_update.js"></script>
    
	</body>
	
</html>
<script>
 jQuery(document).ready(function (){
	  jQuery('#update_modal').modal('hide');
	  jQuery('#modalbtn1').click(function(){
			  jQuery('#update_modal').modal('hide').click(function(){
			  alert('Information Updated Successfully');
			  location.reload();
			  });
		});
		});
</script>
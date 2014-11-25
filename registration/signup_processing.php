<?php require_once('connection/conf.php');?>

<?php
$full_name= $_POST['full_name'];
$email= $_POST['email'];
$password= $_POST['password'];
$date_of_birth= $_POST['date_of_birth'];
$phone= $_POST['phone'];
$gender= $_POST['gender'];
$profile_picture= $_FILES['profile_picture'];
$last_degree= $_POST['last_degree'];
$institution= $_POST['institution'];
$major_field= $_POST['major_field'];
$specialization= $_POST['specialization'];
$second_major_fields= $_POST['second_major_fields'];
$second_specialization= $_POST['second_specialization'];
$total_length_of_service= $_POST['total_length_of_service'];
$current_orginazation= $_POST['current_orginazation'];
$type_of_organization = $_POST['type_of_organization'];
$current_designation= $_POST['current_designation'];
$duration= $_POST['duration'];
$current_salary= $_POST['current_salary'];
$expected_salary= $_POST['expected_salary'];
$cv= $_FILES['cv'];

//random password generation
		/*$chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789``-=~!@#$%^&*()_+,./<>?;:[]{}\|';
		$pass = array(); 
		$alphaLength = strlen($chars) - 1; 
		for ($i = 0; $i<= 6; $i++) {
		$n = rand(0, $alphaLength);
		$pass[] = $chars[$n];
				}
		$random_password = implode($pass); //turn the array into a string
		$password= $random_password;*/
		
//mail handler variable
		$mg_api = 'key-01quy-1vc2rjdgspcn5dky0u2s5rp-g7';
		$mg_version = 'api.mailgun.net/v2/';
		$mg_domain = "glogin.dalivesportszone.com";
		$mg_from_email = "info@samples.com";
		$mg_reply_to_email = "info@samples.org";
		$mg_message_url = "https://".$mg_version.$mg_domain."/messages";		


?>
 <html>
<!--[if lt IE 7]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
	<head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
		<title>SignUp Confirmation</title>
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
							<?php 
								$SQL = "INSERT INTO job_seekers (full_name,date_of_birth,email,phone,password,gender,last_degree,institution,major_field,specialization,second_major_field,second_specialization,total_length_of_service,current_orginization,type_of_orginaization,current_designation,duration,current_salary,expected_salary,profile_picture,cv)
										VALUES('$full_name','$date_of_birth','$email','$phone','$password','$gender','$last_degree','$institution','$major_field','$specialization','$second_major_fields','$second_specialization','$total_length_of_service','$current_orginazation','$type_of_organization','$current_designation','$duration','$current_salary','$expected_salary','','')";
							
								$Query = mysql_query($SQL);
								$insert_id = mysql_insert_id();
								
								//image configuration
							$valid_formats = array("pdf","doc","JPEG","jpg");
							$max_file_size = 1024*1024*1024;
							$dir = "";
							// profile image save 
							if($_SERVER['REQUEST_METHOD'] == "POST"){
								$ext = pathinfo($_FILES['profile_picture']['name'], PATHINFO_EXTENSION);
								if ( in_array($ext, $valid_formats)) {
									if( $_FILES['profile_picture']['size'] < $max_file_size ){
										$tmp = $_FILES['profile_picture']['tmp_name'];
										$dir = "upload/profile_image"; 
										$profile_image = "profile_image_".$insert_id.".".$ext ;
										$image_path =$dir."/".$profile_image;
											if(move_uploaded_file($tmp, $image_path)){
												$SQL2  = "UPDATE job_seekers 
														  SET  profile_picture='$image_path'
														  WHERE id = '$insert_id'";
												$query = mysql_query($SQL2);
												$msg = "Uploading successful!";
											}
										else{
											$msg = "Problem while moving file";
										}
									}
									else{
										$msg = "File is too large";
									}
								}else{
									$msg = "Wrong file format";
								}
								
							}
							// CV save
							if($_SERVER['REQUEST_METHOD'] == "POST"){
								$ext = pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION);
								if ( in_array($ext, $valid_formats)) {
									if( $_FILES['cv']['size'] < $max_file_size ){
										$tmp = $_FILES['cv']['tmp_name'];
										$dir = "upload/cv"; 
										$cv = "cv_".$insert_id.".".$ext ;
										$image_path =$dir."/".$cv;
											if(move_uploaded_file($tmp, $image_path)){
												$SQL2  = "UPDATE job_seekers
														  SET  cv='$image_path'
														  WHERE id = '$insert_id'";
												$query = mysql_query($SQL2);
												$msg = "Uploading successful!";
											}
										else{
											$msg = "Problem while moving file";
										}
									}
									else{
										$msg = "File is too large";
									}
								}else{
									$msg = "Wrong file format";
									}
							}	
								//mail handling
								
							//$link = "";
							//Mail Handling
						/*	$ch = curl_init();
							curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

							curl_setopt ($ch, CURLOPT_MAXREDIRS, 3);
							curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, false);
							curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
							curl_setopt ($ch, CURLOPT_VERBOSE, 0);
							curl_setopt ($ch, CURLOPT_HEADER, 1);
							curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 10);
							curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
							curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);

							curl_setopt($ch, CURLOPT_USERPWD, 'api:' . $mg_api);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

							curl_setopt($ch, CURLOPT_POST, true); 
							
							curl_setopt($ch, CURLOPT_HEADER, false); 
							curl_setopt($ch, CURLOPT_URL, $mg_message_url);
							curl_setopt($ch, CURLOPT_POSTFIELDS,                
									array(  'from'      => ' <' .'istique.sarwar@gmail.com' . '>',
											'to'        => ' '. $email .'   ',
											'h:Reply-To'=>  ' <' . $mg_reply_to_email . '>',
											'subject'   => 'Registration Successful',
											'html'      => 'You are successfully registered . Click this link to complete your registration and verify your email. <br>'
															
											
										));
							$result = curl_exec($ch);
							curl_close($ch);
							$res = json_decode($result,TRUE);*/
							
							 header("Location:http://jobseeker.hrscopebd.com/cv_portal/registration/login.php");		
							?>
						
						<div><b>Your Submission of Registration Data Has been saved to our system</b></div>
						<div></div></br>
						<div><b><a href="login.php">For LogIn Click Here</a></b></div>		
					</div>
				</div>
            </div>
		</div>
                
	</body>
	
</html>
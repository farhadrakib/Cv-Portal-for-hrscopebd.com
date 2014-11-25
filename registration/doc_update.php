 <?php require_once('connection/conf.php');?>


<?php 
						
							$msg = "";
							$valid_formats = array("doc","pdf","JPG","JPEG","jpg");
							$max_file_size = 1024*1024*1024;
							$dir = "";
							$insert_id = $_SESSION['user_id'];
							
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
							echo $msg;
<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
		<title>Doc Upload</title>
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
		
    </head>
    <body class="mainclass">
        <div>
			<div id="container_demo" >
				<div id="wrapper">
                        <div id="login" style="margin-left:-82px;width:130%">
							
							<div class="navbar">
								<div class="navbar-inner">
								
									<ul class="nav">
										<li ><a href="profile.php">Home</a></li>
										<li class="active"><a href="doc_upload.php">Doc Upload</a></li>
										<li><a href="logout.php">LogOut</a></li>
									</ul>
								</div>
							</div>
							<table class="table table-hover">

								       <thead>

											<tr>

												<th>Doc Upload </br>
												<?php include('doc_update.php');?></th>
												
											</tr>

										</thead>

										<tbody>

											<form action ="" method="post" enctype="multipart/form-data">
											<tr>
												<td><label>Profile Picture:</label>
												<input type="file" name="profile_picture"></td>
											</tr>
										
											<tr>
												<td><label>CV Upload:</label>
												<input type="file" name="cv"></td>
											</tr>
											
											<tr>
												
												<td><input name="submit" type="submit" value ="Submit" class=" btn btn-primary"></td>
											</tr>
											</form>
										</tbody>
								</table>
							
							
						 
						 </div>
				</div>
            </div>  
		</div>
    </body>
</html>

<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
		<title>Job Seeker Sign In</title
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
		
    </head>
    <body class="mainclass">
        <div>
			<div id="container_demo" >
				<div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login_processing.php"  method="post"> 
                                <h1>Log In</h1> 
                                <label>User Name or Email:</label>
									<input name="email"  type="text" placeholder="Enter Your Email..." class="span3">
								<label>Password:</label>
									<input name="password" type="password" placeholder="Enter Your Password..." class="span3">
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="signup.php" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                      
						
                </div>
            </div>  
		</div>
    </body>
</html>


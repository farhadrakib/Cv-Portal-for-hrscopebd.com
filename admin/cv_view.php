<?php session_start(); ?>
<?php require_once('../registration/connection/conf.php');?>
<?php 
	$user_id = $_SESSION['user_id'];
	$sql = "SELECT * FROM admin_users WHERE id = '$user_id'";
	$result = mysql_query($sql);
	if ($result==false)
		{
			die(mysql_error());
		}
	$admin_user= mysql_fetch_assoc($result);
	
	

?>
<?php

$id = $_GET['id'];
$SQL = "SELECT * FROM job_seekers WHERE id='$id'";
$query = mysql_query($SQL);
$user_info= mysql_fetch_assoc($query);

	$profile_picture= $user_info['profile_picture'];
	$defaultImage = '../upload/profile_image/avatar.png';
	$profile_image = (file_exists($profile_picture)) ? $profile_picture : $defaultImage;
?>	 

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CV Portal | View CV</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
               Admin CV PORTAL
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
						
                        <!-- Notifications: style can be found in dropdown.less -->
                      
                        <!-- Tasks: style can be found in dropdown.less -->
                       
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $admin_user['admin_name'];?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $admin_user['admin_name'];?>
                                       
                                    </p>
									<p>
										Admin CV Portal
									</p>
                                </li>
                                <!-- Menu Body -->
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $admin_user['admin_name'];?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="admin_dashboard.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="admin_dashboard.php">
                                <i class="fa fa-th"></i> <span>All CV</span> 
                            </a>
                        </li>
						<li>
                            <a href="search_cv.php">
                                <i class="fa fa-th"></i> <span>Search CV By Category</span> 
                            </a>
                        </li>
                       
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
           <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#"></a></li>
                        <li class="active"></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
						<div>
									<ul class="thumbnails" style="float:right;">
	
										
											<a  class="thumbnail">
											<img src="<?php echo $user_info['profile_picture'] ;?>" alt="No Image Uploaded">
												
											</a>
											
											
									</ul>
												
								</div>
							  
	
							   		
							   <table class="table table-bordered">
										
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

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

			


        <!-- jQuery 2.0.2 -->
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>
		<script src="js/jquery.confirm.js" type="text/javascript"></script>
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
               
				$("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
				
            });
        </script>
		<script>
		$("#simpleConfirm").confirm();
	
		</script>

    </body>
</html>




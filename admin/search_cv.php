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
 if (isset($_POST['search'])){
 $search = $_POST['search'];
 $query = mysql_query("SELECT * FROM  job_seekers WHERE major_field='$search'");
   }
 else {
$query = mysql_query("SELECT * FROM  job_seekers");
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CV Portal | Dashboard</title>
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
                            <a href="index.html">
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
                        <li><a href="#">Tables</a></li>
                        <li class="active">Data tables</li>
                    </ol>
                </section>
				 <div class="col-xs-12">
                      <div class="col-xs-4">
                             
                             <div class="form-group" width="30%">
							  <form action="" method="post">
                                            <label>Search Category</label>
                                            <select name="search" class="form-control">
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
                                            </select><br>
											<input type="submit" class="btn btn-primary" value="search">
                               </form>                                
								</div>
								</div>
								</div>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                             <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Search CV</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>E-mail</th>
                                                <th>Last Degree</th>
                                                <th>Major Field</th>
                                                <th>CV</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
										
                                        <tbody>
                                           <?php while ($row = mysql_fetch_assoc($query)){?>
                                            <tr>
                                                <td><?php echo $row['full_name'];?></td>
                                                <td><?php echo $row['email'];?></td>
                                                <td><?php echo $row['last_degree'];?></td>
                                                <td><?php echo $row['major_field'];?></td>
                                                <td><a href="view_pdf.php?id=<?php echo $row['id'];?>">View</a></td>
                                                <td><a href="" class="btn btn-primary">View</a> &nbsp; <a id="simpleConfirm" href="delete_user.php?user_id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
                                            </tr>
											<?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <th>Name</th>
                                                <th>E-mail</th>
                                                <th>Last Degree</th>
                                                <th>Major Field</th>
                                                <th>CV</th>
												<th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


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
</html>
<?php
	session_start();
  /* Database Configuration */	
	global $conf;
	$conf['db_user']='hrscope_job';        		//change this according to your default database user name
	$conf['db_password']='&fOZ7GDqmBTn';				//change this according to your default database password
	$conf['db_hostname']='localhost';

	$conf['db_name']='hrscope_jobseeker';
	$conf['pageTitle'] = "";

	



  /*****************************/
  /* Check Database Connection */
	$link = mysql_connect($conf['db_hostname'], $conf['db_user'], $conf['db_password']);
	if (!$link) {
    $temp = '<div style="width:600px;margin-left:auto;margin-right:auto;">
             <h2>Your Database Configuration is Not Correct.</h2>
             Please give the correct credentials at the top of <strong>conf.php</strong><br/><br/>
             <strong>Error details:</strong><br/>
            ';
    $temp .= mysql_error().'</div>';
  	die($temp);
	}

  //Create Database if not exists
  $db_name = $conf['db_name'];
  mysql_query("CREATE DATABASE IF NOT EXISTS $db_name;") or die(mysql_error());

	// Select Database if exists
	$db_selected = mysql_select_db($conf['db_name'], $link);
	if (!$db_selected) {
  	die (mysql_error());
	}

  //Create users table if not exists
  $create_users = "CREATE TABLE IF NOT EXISTS job_seekers(
  					id int(11) NOT NULL AUTO_INCREMENT,
  					full_name varchar(20) NOT NULL,
					date_of_birth varchar(20) NOT NULL,
					email varchar(50) NOT NULL,
					phone varchar(20) NOT NULL,
					password varchar(255) NOT NULL,
					gender varchar(255) NOT NULL,
					last_degree varchar(255) NOT NULL,
					institution varchar(255) NOT NULL,
					major_field varchar(255) NOT NULL,
					specialization varchar(255) NOT NULL,
					second_major_field varchar(255) NOT NULL,
					second_specialization varchar(255) NOT NULL,
					total_length_of_service varchar(255) NOT NULL,
					current_orginization varchar(255) NOT NULL,
					type_of_orginaization varchar(255) NOT NULL,
					current_designation varchar(255) NOT NULL,
					duration varchar(255) NOT NULL,
					current_salary varchar(255) NOT NULL,
					expected_salary varchar(255) NOT NULL,
					profile_picture varchar(255) NOT NULL,
					cv varchar(255) NOT NULL,
					PRIMARY KEY (id)
					) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
  mysql_query($create_users) or die(mysql_error());
  
  
  $create_admin = "CREATE TABLE IF NOT EXISTS admin_users(
  					id int(11) NOT NULL AUTO_INCREMENT,
  					admin_name varchar(20) NOT NULL,
					email varchar(50) NOT NULL,
					password varchar(50) NOT NULL,
					PRIMARY KEY (id)
					)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
	 mysql_query($create_admin) or die(mysql_error());
						
  
?>

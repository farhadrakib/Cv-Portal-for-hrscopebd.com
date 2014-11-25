<?php
	require_once('connection/conf.php');

	$profile_id = $_POST['pk'];
	$acceptable_column_name = array('full_name','date_of_birth','email','phone','password','gender','last_degree','institution','major_field','specialization','second_major_field','second_specialization','total_length_of_service','current_orginization','type_of_orginaization','current_designation','duration','current_salary','expected_salary');
	$column_name = $_POST['name'];
	
	if(in_array($column_name,$acceptable_column_name)){
		$column_value = $_POST['value'];
		$sql = "UPDATE job_seekers SET $column_name = '$column_value' WHERE id = '$profile_id'";
		$result = mysql_query($sql);
		if($result==false){
			die(mysql_error());
		}
	}



?>
<?php session_start(); 
require_once('connection/conf.php');?>
<?php 
if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM job_seekers  WHERE email='$email' AND password='$password'";
		$result=mysql_query($sql);
		if ($result==false)
		{
			die(mysql_error());
		}
		$num=mysql_num_rows($result);
		if($num==1){
			$row = mysql_fetch_assoc($result);
			if($row){
				
				$_SESSION['user_id']= $row['id'];
				header("Location:profile.php");
			}
		}else{
			header("Location:login.php");
		}
	}else{
		 echo "Please Provide a Valid Email And Password";
	}
?>


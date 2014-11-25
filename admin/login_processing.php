<?php ob_start(); ?>
<?php require_once('../registration/connection/conf.php');?>

<?php 
header("Location: login.php");
if(isset($_POST['login'])){
		 $email = $_POST['email'];
		$password = $_POST['password'];
		 $sql = "SELECT * FROM admin_users  WHERE email='$email' AND password='$password'";
		$result=mysql_query($sql);
		if ($result==false)
		{
			die(mysql_error());
		}
		 $num=mysql_num_rows($result);
		
			$row = mysql_fetch_assoc($result);
			
			if($row){
				
				echo $_SESSION['user_id']= $row['id'];
				 ob_end_clean();
					 header('Location: admin_dashboard.php');
			}
			else{
			ob_end_clean();
			header("Location: login.php");
		}
	}
?>
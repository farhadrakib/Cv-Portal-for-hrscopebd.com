<?php session_start(); ?>
<?php require_once('../registration/connection/conf.php');?>
<?php

$id = $_GET['user_id'];
$SQL = "DELETE FROM job_seekers WHERE id=".$id;
$query = mysql_query($SQL); 

header("Location: admin_dashboard.php");



?>
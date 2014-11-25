<?php
session_start();
session_unset();
session_destroy();

header("Location:http://jobseeker.hrscopebd.com/cv_portal/admin/login.php");
?>
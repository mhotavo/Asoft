<?php  
if (isset($_SESSION['app_id'])) {

		include('html/app/profile.php');
	
} else {
	header('location: ?view=index');
}


 ?>
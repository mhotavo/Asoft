<?php 

if (isset($_SESSION['app_id'])) {
	include('html/app/index.php');
} else{
	header('location: ?view=index');
}



?>
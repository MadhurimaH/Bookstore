<?php
require('includes/config.php');
session_start();

			//$delcon=$_SESSION['nm'];
			$query="delete from contact where con_id =".$_GET['sid'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:contact.php");

?>
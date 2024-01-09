<?php
	$conn = new mysqli("localhost", "root", "", "daily");
	$con = mysqli_connect("localhost","root","","daily") or die("Couldn't connect");
 
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>
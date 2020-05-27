<?php

$conn = new mysqli("localhost", "root", "", "text1");
$result = mysqli_query($conn, "SELECT * FROM text1");
$myArray;
	while($row = mysqli_fetch_assoc($result))
	{
    	$myArray = $row;
	}

?>
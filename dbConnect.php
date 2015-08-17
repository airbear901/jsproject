<?php

// User
$servername = "localhost";
$username = "root";
$password = "root";
$port = 8889;
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname,$port);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/*
	//Create database
	$sql = "CREATE DATABASE myDB";
	if (mysqli_query($conn, $sql)) {
	    echo "Database created successfully";
	} else {
	    echo "Error creating database: " . mysqli_error($conn);
	}

	//sql to create table
	$sql = "CREATE TABLE MyGuests (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
	)";

	// Confirm it was created
	if (mysqli_query($conn, $sql)) {
	    echo "Table MyGuests created successfully";
	} else {
	    echo "Error creating table: " . mysqli_error($conn);
	}
*/



// Query
// $sql = "SELECT id, firstname, lastname, email FROM MyGuests";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }




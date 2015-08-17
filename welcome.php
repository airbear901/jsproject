<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php 

include 'action.php';

$name = $_POST["name"];
$email = $_POST["email"]; 
$temp = $_POST["temp"];

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$name', '$temp', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

 ?>

</body>
</html>
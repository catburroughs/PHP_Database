
<?php

$servername = "localhost";
$username = "toucan";
$password = "toucan";
$dbname = "toucandatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO toucan_members (firstname, lastname, email, school)
VALUES ('Jane', 'Doe', 'jane@example.com','University of Ottowa')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  ?>




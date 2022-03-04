
<?php

$servername = "localhost";
$username = "toucan";
$password = "toucan";
$dbname = "toucandatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
    . $conn->connect_error);
}

$res = mysqli_query($con, "INSERT INTO toucan_members (FirstName, LastName, Email, School) VALUES('John', 'Doe', 'john@example.com','University of Aberdeen')");
//$sqlquery = "INSERT INTO toucan_members VALUES ('John', 'Doe', 'john@example.com','University of Aberdeen')";

if ($res->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" 
    . $conn->error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // collect value of input field
    $data = $_REQUEST['val1'];
  
    if (empty($data)) {
        echo "data is empty";
    } else {
        echo $data;
    }
}

  
// Closing the connection.
$conn->close();
  
?>

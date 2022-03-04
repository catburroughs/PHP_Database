<?php
//credit to https://www.guru99.com/case-study-opinion-poll-app.html



class SchoolMember {
    private $conn;
    private $servername = "localhost";
    private $username = "toucan";
    private $password = "toucan";
    private $dbname = "toucandatabase";

//methods
    public function __construct() {

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error); }
}

    public function select($sql_stmt) {

        $result = mysqli_query($this->con,$sql_stmt);

        if (!$result) die("Database access failed: " . mysqli_error());

        $rows = mysqli_num_rows($result);

        $data = array();

        if ($rows) {

            while ($row = mysqli_fetch_array($result)) {

                $data = $row;

            }

        }

        return $data;

    }

    public function insert($firstname, $lastname, $email, $school) {
        $sql = "INSERT INTO toucan_members (firstname, lastname, email, school)
        VALUES ('$firstname', '$lastname', '$email', '$school')";
        
        
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
          }
          $this->conn->close();

    }


}

?>


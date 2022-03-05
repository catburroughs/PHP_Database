<?php

class School {
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
    public function get_personid($firstname, $lastname, $email) {
        $sql= "SELECT personid FROM toucan_members WHERE firstname = $firstname AND lastname = $lastname and email = $email";
        //mysqli_select_db($this->dbname);
        return mysqli_query($this->conn, $sql);


    }

    public function get_schoolname($school_id){
        $sql = "SELECT school_id.School_name FROM school_id WHERE school_id.School_id = $school_id";
        //mysqli_select_db($this->dbname);
        //$retval = mysqli_query($this->conn, $sql);
        return mysqli_query($this->conn, $sql);
    }

    public function get_members($school_id) {
        $sql = "SELECT FirstName, LastName FROM school_members
        WHERE $school_id = School_id";
        return mysqli_query($this->conn, $sql);
        
   
          //$this->conn->close();

    }

    public function insert($school_id, $personid) {
        $table = $this->get_schoolname($school_id);
        $sql = "INSERT INTO $table (Personid)
        VALUES ('$personid')";
        
        
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
          }
          $this->conn->close();

    }


}

?>


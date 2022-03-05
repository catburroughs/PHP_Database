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
        $sql = "SELECT School_Name from school_id where school_id = $school_id";
        //mysqli_select_db($this->dbname);
        //$retval = mysqli_query($this->conn, $sql);
        return mysqli_query($this->conn, $sql);
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


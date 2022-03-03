<?php
//credit to https://www.guru99.com/case-study-opinion-poll-app.html


class Member {
//properties
    //public $firstname;
    //public $lastname;
    //private $email;
    //public $school;
    private $toucandatabase;
    private $host = 'localhost';
    private $db = 'toucandatabase';
    private $uid = 'toucan';
    private $pwd = 'toucan';

//methods
    public function __construct(){

        $this->toucandatabase = mysqli_connect($this->host, $this->uid, $this->pwd); //connect to MySQL server

        if (!$this->toucandatabase) die("Unable to connect to MySQL: " . mysqli_error());

        if (!mysqli_select_db($this->toucandatabase,$this->db)) die("Unable to select database: " . mysqli_error());

    }

    private function execute_query($sql_stmt) {

        $result = mysqli_query($toucandatabase,$sql_stmt); //execute SQL statement

        return !$result ? FALSE : TRUE;

    }

    public function select($sql_stmt) {

        $result = mysqli_query($toucandatabase,$sql_stmt);

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

    public function insert($sql_stmt) {

        return $this->execute_query($sql_stmt);

    }

    public function __destruct(){

        mysqli_close($this->toucandatabase);

    }

}

?>


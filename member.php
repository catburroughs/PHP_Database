<?php
//credit to https://www.guru99.com/case-study-opinion-poll-app.html

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

class Member {
//properties
    private $db_handle;
    private $host = 'localhost';
    private $db = 'toucandatabase';
    private $uid = 'toucan';
    private $pwd = 'toucan';

//methods
    public function __construct(){
        debug_to_console("HEEEEREEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE");

        $this->db_handle = mysqli_connect($this->host, $this->uid, $this->pwd); //connect to MySQL server
        //debug_to_console($this->db_handle);
        if (!$this->db_handle) die("Unable to connect to MySQL: " . mysqli_error());

        if (!mysqli_select_db($this->db_handle,$this->db)) die("Unable to select database: " . mysqli_error());

    }

    private function execute_query($sql_stmt) {

        $result = mysqli_query($db_handle,$sql_stmt); //execute SQL statement

        return !$result ? FALSE : TRUE;

    }

    public function select($sql_stmt) {

        $result = mysqli_query($db_handle,$sql_stmt);

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

        mysqli_close($this->db_handle);

    }

}

?>


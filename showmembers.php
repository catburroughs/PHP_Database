<?php
require_once 'currentmembers.html.php';
require_once 'school.php';
$targetschool = new School();

if (isset($_POST['school'])) {
    $school_id = $_POST['school'];

$schoolname = $targetschool->get_schoolname($school_id);
$memberlist = $targetschool->get_members($school_id);
}

if ($row = mysqli_fetch_array($schoolname)) {
    echo $row['School_name']."<br>";
}
while ($row = mysqli_fetch_array($memberlist)) {
    echo $row['FirstName'];
    echo $row['LastName']."<br>";
}

?>
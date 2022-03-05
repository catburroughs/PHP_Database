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
    echo "<h3><p align=center> $row[School_name]</p></h3>";
    
}

while ($row = mysqli_fetch_array($memberlist)) {
    echo "<p align=center>$row[FirstName]  $row[LastName]</p>";
}

?>
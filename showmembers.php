<?php
require_once 'currentmembers.html.php';
require_once 'school.php';
$targetschool = new School();

if (isset($_POST['school'])) {
    $school = $_POST['school'];


}
?>
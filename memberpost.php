<?php
require_once 'addmember.html.php';
require_once 'member.php';
$model = new SchoolMember();

if (isset($_POST['firstname'], $_POST['lastname'],$_POST['email'], $_POST['school'])) {
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$email = $_POST['email'];
    $school = $_POST['school'];
    $school = implode(",", $school);



    $model->insert($firstname, $lastname, $email,  $school);

}



?>
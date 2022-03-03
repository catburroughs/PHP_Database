<?php

require 'member.php';
$model = new Member();

if($_POST['submit'])
{
    $firstname = 'firstname';
    $lastname = 'lastname';
    $email = 'email';
    $school = 'school';

    $sql_stmt = "INSERT INTO toucan_members (`FirstName`,`LastName`, `Email`, `School`) VALUES ($firstname,$lastname,$email, $school)";

    $model->insert($sql_stmt);

    //require 'results.html.php';

    exit;

}

require 'addmember.html.php';

?>
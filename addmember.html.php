<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" contents="Toucan Database in PHP">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<?php echo file_get_contents("html/header.html"); 
require 'member.php';

?> 
<body>
<h2>Add Member Form</h2>

<h2>Enter First Name and Last Name</h2>
<form method="POST" form action="memberform.php" form style="text-align: center" >
First Name: <input type="text" name="firstname">

Last Name: <input type="text" name="lastname"><br>
<p><b>Enter Member Email</b></p>

E-mail: <input type="email" name="email"><br>
<p><b>Choose School (Control Click to Choose Multiple)</b></p>
School : <select name="school[]" multiple = "yes" multiple size = 6><br>
                <option value = '1'>Univerity of Aberdeen</option>
                <option value = '2'>University of Cheltenham</option>
                <option value = '3'>University of Dulwich</option>
                <option value = '4'>University of Glasgow</option>
                <option value = '5'>University of London</option>
                <option value = '6'>Miskatonic University</option>
            </select>
    <br>
<input type="submit" name = "submit" value = Submit>
</form>

</body>
</html>
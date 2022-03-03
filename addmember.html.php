<!DOCTYPE html>
<html lang="en">
<?php echo file_get_contents("html/header.html"); 
require_once 'member.php';

?> 
<body>
<h2>Add Member Form</h2>

<p><b>Enter First Name and Last Name</b></p>
<form action="memberform.php" method="post">
First Name: <input type="text" name="firstname">

Last Name: <input type="text" name="lastname"><br>
<p><b>Enter Member Email</b></p>

E-mail: <input type="text" name="email"><br>
<p><b>Choose School (Control Click to Choose Multiple)</b></p>
School : <select name="school" multiple size = 6><br>
    <option value = "aberdeen">Univerity of Aberdeen</option>
                <option value = "cheltenham">University of Cheltenham</option>
                <option value = "dulwich">University of Dulwich</option>
                <option value = "glasgow">University of Glasgow</option>
                <option value = "london">University of London</option>
                <option value = "missouri">University of Missouri</option>
            </select>
    <br>
<input type="submit" name = "submit" value = Submit>
</form>

</body>
</html>
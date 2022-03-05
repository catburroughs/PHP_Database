<!DOCTYPE html>
<html lang="en">
<?php echo file_get_contents("html/header.html"); ?> 
<body>

<form action="showmembers.php" method="post">
<p><b>Choose School</b></p>
School : <select name="school"><br>
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
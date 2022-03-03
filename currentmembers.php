<!DOCTYPE html>
<html lang="en">
<?php echo file_get_contents("html/header.html"); ?> 
<body>

<form action="currentmembers.php" method="post">
School : <select name="school" multiple size = 6><br>
    <option value = "aberdeen">Univerity of Aberdeen</option>
                <option value = "cheltenham">University of Cheltenham</option>
                <option value = "dulwich">University of Dulwich/option>
                <option value = "glasgow">University of Glasgow</option>
                <option value = "london">University of London</option>
                <option value = "missouri">University of Missouri</option>
            </select>
    <br>
<input type="submit" name = "submit" value = Submit>
</form>

</body>
</html>
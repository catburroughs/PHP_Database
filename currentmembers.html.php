<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" contents="Toucan Database in PHP">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<?php echo file_get_contents("html/header.html"); ?> 
<body>

<form action="showmembers.html.php" method="post" form style="text-align: center" >
<p><h2>Choose School</h2></p>
 School : <select name="school"><br>
                <option value = '1'>Univerity of Aberdeen</option>
                <option value = '2'>University of Cheltenham</option>
                <option value = '3'>University of Dulwich</option>
                <option value = '4'>University of Glasgow</option>
                <option value = '5'>University of London</option>
                <option value = '6'>Miskatonic University</option>
            </select>
    <br>
    <br>
<input type="submit" name = "submit" value = Submit>
</form>

</body>
</html>
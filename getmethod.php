<?php
if (isset($_GET["submit"])){

    $firstName = $_GET["firstName"];
    $secondName = $_GET["secondName"];

    echo "First name indicated is $firstName <br>";
    echo "Second name indicated is $secondName<br>";

}
else{
    echo "<h3>Please fill this form</h3>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET METHOD</title>
</head>
<body>
<form action="getmethod.php" method="get">

    <div>
        <label>First Name</label>
        <input type="text" name="firstName" required>
    </div>

    <div>
        <label>Second Name</label>
        <input type="text" name="secondName" required>
    </div>

    <input type="submit" name="submit" value="SUBMIT">


</form>

</body>
</html>

<?php
if (isset($_POST["submit"])){
    $firstName = $_POST["firstName"];
    $secondName = $_POST["secondName"];
    $emailAddress = $_POST["emailAddress"];
    $phoneNumber = $_POST["phoneNumber"];


    echo "First name indicated is $firstName <br>";
    echo "Second name indicated is $secondName<br>";
    echo "Email address indicated is $emailAddress<br>";
    echo "Phone number indicated is $phoneNumber<br>";

}else{
    echo "<h3>Fill this form</h3>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST METHOD</title>
</head>
<body>
<form action="postmethod.php" method="post">

    <div>
        <label>First Name</label>
        <input type="text" name="firstName" required>
    </div>

    <div>
        <label>Second Name</label>
        <input type="text" name="secondName" required>
    </div>
    <div>
        <label>email</label>
        <input type="email" name="emailAddress" required>
    </div>
    <div>
        <label>phone number</label>
        <input type="tel" name="phoneNumber" required>
    </div>

    <input type="submit" name="submit" value="SUBMIT">


</form>

</body>
</html>
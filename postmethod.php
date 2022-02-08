<?php
include "connect.php";
if (isset($_POST["submit"])){
    $firstName = $_POST["firstName"];
    $secondName = $_POST["secondName"];
    $emailAddress = $_POST["emailAddress"];
    $phoneNumber = $_POST["phoneNumber"];

    #query
    $sql = "INSERT INTO `details`( `firstName`, `secondName`, `emailAddress`, `phoneNumber`) 
            VALUES ('$firstName','$secondName','$emailAddress','$phoneNumber')";


    #execute the query
    $result = mysqli_query($link, $sql);

    if ($result){
        echo "Record added successfully";
        header("location:select.php");
    }else{
        echo "Error executing this query $sql" .mysqli_error($link);
    }



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
<?php
include "connect.php";
if (isset($_POST["update"])){


    $id = $_POST["id"];
    $up_firstName = $_POST["firstName"];
    $up_secondName = $_POST["secondName"];
    $up_emailAddress = $_POST["emailAddress"];
    $up_phoneNumber = $_POST["phoneNumber"];

    $up_sql = "UPDATE `details` SET `firstName`='$up_firstName',`secondName`='$up_secondName',`emailAddress`='$up_emailAddress',`phoneNumber`='$up_phoneNumber' WHERE id =$id";


    $up_result = mysqli_query($link, $up_sql);

    if ($up_result){
        echo "Record successfully updated";
        header("location:select.php");
    }else{
        echo "error executing query $up_sql".mysqli_error($link);
    }


}else{

if (isset($_GET["id"]) and !empty($_GET["id"])){

    $id = $_GET["id"];

    $sql = "SELECT * FROM `details` WHERE id =$id";

    $result = mysqli_query($link, $sql);

    if ($result){

        $data = mysqli_num_rows($result);

        if ($data==1){

            $row = mysqli_fetch_array($result);

            $firstName = $row['firstName'];
            $secondName = $row['secondName'];
            $emailAddress = $row['emailAddress'];
            $phoneNumber = $row['phoneNumber'];

        }else{
            echo "No record was found";
        }


    }else{
        echo "Error executing query $sql".mysqli_error($link);
    }


}else{
    echo "id value not picked";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST METHOD</title>
</head>
<body>
<h2>Update Record Here</h2>
<form action="update.php" method="post">

    <div>
        <label>First Name</label>
        <input type="text" name="firstName" value="<?php echo $firstName; ?>"  required>
    </div>

    <div>
        <label>Second Name</label>
        <input type="text" name="secondName" value="<?php echo $secondName; ?>" required>
    </div>
    <div>
        <label>email</label>
        <input type="email" name="emailAddress" value="<?php echo $emailAddress; ?>" required>
    </div>
    <div>
        <label>phone number</label>
        <input type="tel" name="phoneNumber" value= "<?php echo $phoneNumber; ?>" required>
    </div>
    <div>
        <label>Id</label>
        <input type="tel" name="id" value="<?php echo $_GET["id"]; ?>" required>
    </div>

    <input type="submit" name="update" value="UPDATE">


</form>

</body>
</html>

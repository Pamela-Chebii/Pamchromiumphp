<?php
include "connect.php";
if (isset($_POST["submit"]) and !empty($_POST["id"])){
    $id = $_POST["id"];
    $sql = "DELETE FROM `details` WHERE id=$id";
    $result = mysqli_query($link, $sql);

    if ($result){
        echo "Record deleted successfully";
        header("location:select.php");
    }else{
        echo "Error executing query $sql" .mysqli_error($link);
    }



}else{
    echo "Try deleting a record";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DELETE</title>
</head>
<body>


    <form action="delete.php" method="post">
        <div>
        <label for="">Are you sure you want to delete this record?</label> <br>
        <input type="text" name="id" value="<?php echo $_GET["id"]; ?>">
        </div>
        <div>
            <input type="submit" name="submit" value="YES">
            <a href="select.php">NO</a>
        </div>
    </form>


</body>
</html>

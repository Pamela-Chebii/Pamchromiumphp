<?php
include "connect.php";
#query
$sql = "SELECT * FROM `details`";
#execute query
$result = mysqli_query($link, $sql);

#check
if ($result){
    $data = mysqli_num_rows($result);


    if ($data>0){
        echo "<h3>Data here</h3>";
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>First Name</th>>";
        echo "<th>Second Name</th>>";
        echo "<th>Email Address</th>>";
        echo "<th>Phone Number</th>>";
        echo "<th>Action</th>>";
        echo "<th> </th>>";
        echo "</tr>";

        while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
        echo "<td>".$id = $row['id']."</td>";
        echo " <td> " .$firstName = $row['firstName']."</td>";
        echo " <td> " .$secondName = $row['secondName']."</td>";
        echo " <td> " .$emailAddress = $row['emailAddress']."</td>";
        echo " <td> " .$phoneNumber = $row['phoneNumber']. "</td>";
        echo "<td><a href='delete.php?id=".$id."'><button>Delete</button></a></td>>";
        echo "<td><a href='update.php?id=".$id."'><button>Update</button></a></td>";
        //echo "<hr>";
            echo "</tr>";
        }
            echo "</table>";

    }else{
        echo "no records were found in your database!";
    }

}else{
    echo "Error executing query $sql" .mysqli_error($link);
}

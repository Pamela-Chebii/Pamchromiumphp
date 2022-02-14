<?php
include "connect.php";

$sql = "SELECT * FROM `hospital`";

$result = mysqli_query($link, $sql);

if ($result){
    $data = mysqli_num_rows($result);
    if ($data>0){
        echo "<h3>Data here</h3>";

        while ($row = mysqli_fetch_array($result)){

        echo $id = $row['id'];
        echo "  ".$patientName = $row['patientName'];
        echo "  ".$phoneNumber = $row['phoneNumber'];
        echo "  ".$apn = $row['apn'];
        echo "  ".$tel = $row['tel'];
        echo "  ".$emailAddress = $row['emailAddress'];
        echo "  ".$postalAddress = $row['postalAddress'];
        echo "  ".$postalCode = $row['postalCode'];
        echo "  ".$county = $row['county'];
        echo "  ".$estate = $row['estate'];
        echo "  ".$dob = $row['dob'];
        echo "  ".$age = $row['age'];
        echo "  ".$sex = $row['sex'];
        echo "  ".$nhif = $row['nhif'];
        echo "  ".$status = $row['status'];
        echo "  ".$patientEmployer = $row['patientEmployer'];
        echo "  ".$emp = $row['emp'];
        echo "  ".$emergencyContact = $row['emergencyContact'];
        echo "  ".$relationship = $row['relationship'];
        echo "  ".$emrAddress = $row['emrAddress'];
        echo "  ".$emrPhone = $row['emrPhone'];
        echo "  ".$primaryInsurance = $row['primaryInsurance'];
        echo "  ".$subscriber = $row['subscriber'];
        echo "  ".$secondaryInsurance = $row['secondaryInsurance'];
        echo "  ".$sins = $row['sins'];
        echo "  ".$policyHolder = $row['policyHolder'];
        echo "  ".$holderRelationship = $row['holderRelationship'];
        echo "  ".$address = $row['address'];
        echo "  ".$birthDate = $row['birthDate'];
        echo "  ".$employer = $row['employer'];
        echo "  ".$workPhone = $row['workPhone'];
        echo "  ".$fullName = $row['fullName'];
        echo "  ".$patientRelationship = $row['patientRelationship'];
        echo "  ".$signature = $row['signature'];
        echo "  ".$signDate = $row['signDate'];
        echo "<hr>";

        }

    }else{
        echo "No records in your database!";
    }

}else{
    echo "Error executing your query $sql".mysqli_error($link);
}


